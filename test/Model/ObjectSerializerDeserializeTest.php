<?php

namespace YandexMarketApi\Test\Model;

use PHPUnit\Framework\TestCase;
use YandexMarketApi\Model\GetOfferDTO;
use YandexMarketApi\Model\OrderDeliveryDTO;
use YandexMarketApi\ObjectSerializer;

/**
 * Разбор ответа не должен падать на значениях, нарушающих контракт запроса.
 * Яндекс возвращает boxCount = 0, хотя в запросе допускается только >= 1.
 */
class ObjectSerializerDeserializeTest extends TestCase
{
    public function testDeserializeIgnoresValueOutOfRequestContract()
    {
        $json = json_decode('{
            "offerId": "sku-1",
            "boxCount": 0,
            "weightDimensions": {"length": 30.5, "width": 20.1, "height": 10.9, "weight": 1.2}
        }');

        /** @var GetOfferDTO $offer */
        $offer = ObjectSerializer::deserialize($json, '\YandexMarketApi\Model\GetOfferDTO', []);

        $this->assertSame('sku-1', $offer->getOfferId());
        $this->assertNull($offer->getBoxCount());
        $this->assertNotNull($offer->getWeightDimensions());
        $this->assertSame(30.5, $offer->getWeightDimensions()->getLength());
        $this->assertSame(1.2, $offer->getWeightDimensions()->getWeight());
    }

    public function testDeserializeKeepsValidValue()
    {
        $json = json_decode('{"offerId": "sku-2", "boxCount": 2}');

        /** @var GetOfferDTO $offer */
        $offer = ObjectSerializer::deserialize($json, '\YandexMarketApi\Model\GetOfferDTO', []);

        $this->assertSame(2, $offer->getBoxCount());
    }

    public function testSetterStillValidatesOutgoingRequests()
    {
        $this->expectException(\InvalidArgumentException::class);

        (new GetOfferDTO())->setBoxCount(0);
    }

    /**
     * Новое значение enum со стороны Яндекса тоже проглатывается (иначе упал бы разбор
     * всего заказа), но обязано быть видно в логе: молча уйти не в ту ветку по типу
     * доставки — худший из возможных исходов.
     */
    public function testUnknownEnumValueIsSwallowedButLogged()
    {
        $json = json_decode('{"type": "DRONE", "serviceName": "СДЭК"}');

        $log = $this->captureErrorLog(function () use ($json, &$delivery) {
            $delivery = ObjectSerializer::deserialize($json, '\YandexMarketApi\Model\OrderDeliveryDTO', []);
        });

        /** @var OrderDeliveryDTO $delivery */
        $this->assertNull($delivery->getType(), 'значение вне enum не подставляется');
        $this->assertSame('СДЭК', $delivery->getServiceName(), 'остальные поля разобраны');
        $this->assertStringContainsString('OrderDeliveryDTO', $log);
        $this->assertStringContainsString('type', $log);
        $this->assertStringContainsString('DRONE', $log);
    }

    public function testValidEnumValueIsNotLogged()
    {
        $json = json_decode('{"type": "PICKUP"}');

        $log = $this->captureErrorLog(function () use ($json, &$delivery) {
            $delivery = ObjectSerializer::deserialize($json, '\YandexMarketApi\Model\OrderDeliveryDTO', []);
        });

        /** @var OrderDeliveryDTO $delivery */
        $this->assertSame('PICKUP', $delivery->getType());
        $this->assertSame('', trim($log));
    }

    /**
     * Выполняет $callback, перенаправив error_log() во временный файл.
     *
     * @param callable $callback
     *
     * @return string содержимое лога
     */
    private function captureErrorLog(callable $callback)
    {
        $logFile = tempnam(sys_get_temp_dir(), 'ym-serializer-log-');
        $previous = ini_get('error_log');
        ini_set('error_log', $logFile);

        try {
            $callback();
        } finally {
            ini_set('error_log', $previous === false ? '' : $previous);
        }

        $log = (string)file_get_contents($logFile);
        unlink($logFile);

        return $log;
    }
}
