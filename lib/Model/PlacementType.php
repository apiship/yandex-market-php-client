<?php
/**
 * PlacementType
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
 * PlacementType Class Doc Comment
 *
 * @category Class
 * @description Модель, по которой работает магазин:  * &#x60;FBS&#x60; — FBS или Экспресс; * &#x60;FBY&#x60; — FBY; * &#x60;DBS&#x60; — DBS.
 * @package  YandexMarketApi
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */
class PlacementType
{
    /**
     * Possible values of this enum
     */
    public const FBS = 'FBS';

    public const FBY = 'FBY';

    public const DBS = 'DBS';

    /**
     * Gets allowable values of the enum
     * @return string[]
     */
    public static function getAllowableEnumValues()
    {
        return [
            self::FBS,
            self::FBY,
            self::DBS
        ];
    }
}


