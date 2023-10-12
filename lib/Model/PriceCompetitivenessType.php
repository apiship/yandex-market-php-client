<?php
/**
 * PriceCompetitivenessType
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
 * PriceCompetitivenessType Class Doc Comment
 *
 * @category Class
 * @description Привлекательность цены:  * &#x60;OPTIMAL&#x60; — привлекательная; * &#x60;AVERAGE&#x60; — умеренная; * &#x60;LOW&#x60; — непривлекательная.
 * @package  YandexMarketApi
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */
class PriceCompetitivenessType
{
    /**
     * Possible values of this enum
     */
    public const OPTIMAL = 'OPTIMAL';

    public const AVERAGE = 'AVERAGE';

    public const LOW = 'LOW';

    /**
     * Gets allowable values of the enum
     * @return string[]
     */
    public static function getAllowableEnumValues()
    {
        return [
            self::OPTIMAL,
            self::AVERAGE,
            self::LOW
        ];
    }
}


