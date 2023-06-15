<?php
/**
 * OrderDeliveryPartnerType
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
 * OrderDeliveryPartnerType Class Doc Comment
 *
 * @category Class
 * @description Тип сотрудничества со службой доставки в рамках конкретного заказа:  Принимает значение &#x60;YANDEX_MARKET&#x60; — магазин работает со службой доставки через Маркет.
 * @package  YandexMarketApi
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */
class OrderDeliveryPartnerType
{
    /**
     * Possible values of this enum
     */
    public const SHOP = 'SHOP';

    public const YANDEX_MARKET = 'YANDEX_MARKET';

    public const UNKNOWN = 'UNKNOWN';

    /**
     * Gets allowable values of the enum
     * @return string[]
     */
    public static function getAllowableEnumValues()
    {
        return [
            self::SHOP,
            self::YANDEX_MARKET,
            self::UNKNOWN
        ];
    }
}

