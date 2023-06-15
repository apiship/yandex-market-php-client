<?php
/**
 * ShipmentStatusType
 *
 * PHP version 7.4
 *
 * @category Class
 * @package  YandexMarketApi
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */

/**
 * Партнерский API Маркета
 *
 * API Яндекс Маркета помогает продавцам автоматизировать и упростить работу с маркетплейсом.  В числе возможностей интеграции:  * управление каталогом товаров и витриной,  * обработка заказов,  * изменение настроек магазина,  * получение отчетов.
 *
 * The version of the OpenAPI document: LATEST
 * Generated by: https://openapi-generator.tech
 * OpenAPI Generator version: 6.6.0
 */

/**
 * NOTE: This class is auto generated by OpenAPI Generator (https://openapi-generator.tech).
 * https://openapi-generator.tech
 * Do not edit the class manually.
 */

namespace YandexMarketApi\Model;
use \YandexMarketApi\ObjectSerializer;

/**
 * ShipmentStatusType Class Doc Comment
 *
 * @category Class
 * @description Статус отгрузки:  * &#x60;OUTBOUND_CREATED&#x60; — формируется. * &#x60;OUTBOUND_READY_FOR_CONFIRMATION&#x60; — можно обрабатывать. * &#x60;OUTBOUND_CONFIRMED&#x60; — подтверждена и готова к отправке. * &#x60;OUTBOUND_SIGNED&#x60; — по ней подписан электронный акт приема-передачи. * &#x60;ACCEPTED&#x60; — принята в сортировочном центре или пункте приема. * &#x60;ACCEPTED_WITH_DISCREPANCIES&#x60; — принята с расхождениями. * &#x60;FINISHED&#x60; — завершена. * &#x60;ERROR&#x60; — отменена из-за ошибки.
 * @package  YandexMarketApi
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */
class ShipmentStatusType
{
    /**
     * Possible values of this enum
     */
    public const OUTBOUND_PLANNED = 'OUTBOUND_PLANNED';

    public const OUTBOUND_CREATED = 'OUTBOUND_CREATED';

    public const OUTBOUND_READY_FOR_CONFIRMATION = 'OUTBOUND_READY_FOR_CONFIRMATION';

    public const OUTBOUND_CONFIRMED = 'OUTBOUND_CONFIRMED';

    public const OUTBOUND_SIGNED = 'OUTBOUND_SIGNED';

    public const FINISHED = 'FINISHED';

    public const ACCEPTED = 'ACCEPTED';

    public const ACCEPTED_WITH_DISCREPANCIES = 'ACCEPTED_WITH_DISCREPANCIES';

    public const ERROR = 'ERROR';

    public const MOVEMENT_COURIER_FOUND = 'MOVEMENT_COURIER_FOUND';

    public const MOVEMENT_HANDED_OVER = 'MOVEMENT_HANDED_OVER';

    public const MOVEMENT_DELIVERING = 'MOVEMENT_DELIVERING';

    public const MOVEMENT_DELIVERED = 'MOVEMENT_DELIVERED';

    public const INBOUND_ARRIVED = 'INBOUND_ARRIVED';

    public const INBOUND_ACCEPTANCE = 'INBOUND_ACCEPTANCE';

    public const INBOUND_ACCEPTED = 'INBOUND_ACCEPTED';

    public const INBOUND_SHIPPED = 'INBOUND_SHIPPED';

    public const FINISHED_WITHOUT_MATCH = 'FINISHED_WITHOUT_MATCH';

    public const WAITING_DEPARTURE = 'WAITING_DEPARTURE';

    /**
     * Gets allowable values of the enum
     * @return string[]
     */
    public static function getAllowableEnumValues()
    {
        return [
            self::OUTBOUND_PLANNED,
            self::OUTBOUND_CREATED,
            self::OUTBOUND_READY_FOR_CONFIRMATION,
            self::OUTBOUND_CONFIRMED,
            self::OUTBOUND_SIGNED,
            self::FINISHED,
            self::ACCEPTED,
            self::ACCEPTED_WITH_DISCREPANCIES,
            self::ERROR,
            self::MOVEMENT_COURIER_FOUND,
            self::MOVEMENT_HANDED_OVER,
            self::MOVEMENT_DELIVERING,
            self::MOVEMENT_DELIVERED,
            self::INBOUND_ARRIVED,
            self::INBOUND_ACCEPTANCE,
            self::INBOUND_ACCEPTED,
            self::INBOUND_SHIPPED,
            self::FINISHED_WITHOUT_MATCH,
            self::WAITING_DEPARTURE
        ];
    }
}

