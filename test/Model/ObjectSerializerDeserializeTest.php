<?php

namespace YandexMarketApi\Test\Model;

use PHPUnit\Framework\TestCase;
use YandexMarketApi\Model\GetOfferDTO;
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
}
