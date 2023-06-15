<?php
/**
 * OrderStatsStatusType
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
 * OrderStatsStatusType Class Doc Comment
 *
 * @category Class
 * @description Текущий статус заказа:  * &#x60;CANCELLED_BEFORE_PROCESSING&#x60; — заказ отменен до начала его обработки.  * &#x60;CANCELLED_IN_DELIVERY&#x60; — заказ отменен во время его доставки.  * &#x60;CANCELLED_IN_PROCESSING&#x60; — заказ отменен во время его обработки.  * &#x60;DELIVERY&#x60; — заказ передан службе доставки.  * &#x60;DELIVERED&#x60; — заказ доставлен.  * &#x60;PARTIALLY_RETURNED&#x60; — заказ частично возвращен покупателем.  * &#x60;PICKUP&#x60; — заказ доставлен в пункт выдачи.      * Значение по умолчанию: &#x60;PICKUP_SERVICE_RECEIVED&#x60;.      * &#x60;PICKUP_USER_RECEIVED&#x60; – покупатель получил заказ.  * &#x60;PROCESSING&#x60; — заказ в обработке.  * &#x60;REJECTED&#x60; — заказ создан, но не оплачен.  * &#x60;RETURNED&#x60; — заказ полностью возвращен покупателем.  * &#x60;UNKNOWN&#x60; — неизвестный статус заказа.
 * @package  YandexMarketApi
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */
class OrderStatsStatusType
{
    /**
     * Possible values of this enum
     */
    public const CANCELLED_BEFORE_PROCESSING = 'CANCELLED_BEFORE_PROCESSING';

    public const CANCELLED_IN_DELIVERY = 'CANCELLED_IN_DELIVERY';

    public const CANCELLED_IN_PROCESSING = 'CANCELLED_IN_PROCESSING';

    public const DELIVERY = 'DELIVERY';

    public const DELIVERED = 'DELIVERED';

    public const PARTIALLY_RETURNED = 'PARTIALLY_RETURNED';

    public const PENDING = 'PENDING';

    public const PICKUP = 'PICKUP';

    public const PROCESSING = 'PROCESSING';

    public const RESERVED = 'RESERVED';

    public const RETURNED = 'RETURNED';

    public const REJECTED = 'REJECTED';

    public const UNKNOWN = 'UNKNOWN';

    public const UNPAID = 'UNPAID';

    /**
     * Gets allowable values of the enum
     * @return string[]
     */
    public static function getAllowableEnumValues()
    {
        return [
            self::CANCELLED_BEFORE_PROCESSING,
            self::CANCELLED_IN_DELIVERY,
            self::CANCELLED_IN_PROCESSING,
            self::DELIVERY,
            self::DELIVERED,
            self::PARTIALLY_RETURNED,
            self::PENDING,
            self::PICKUP,
            self::PROCESSING,
            self::RESERVED,
            self::RETURNED,
            self::REJECTED,
            self::UNKNOWN,
            self::UNPAID
        ];
    }
}

