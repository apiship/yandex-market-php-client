<?php
/**
 * SkuBidRecommendationItemDTO
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

use \ArrayAccess;
use \YandexMarketApi\ObjectSerializer;

/**
 * SkuBidRecommendationItemDTO Class Doc Comment
 *
 * @category Class
 * @description Список товаров с рекомендованными ставками.
 * @package  YandexMarketApi
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<string, mixed>
 */
class SkuBidRecommendationItemDTO implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'SkuBidRecommendationItemDTO';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'sku' => 'string',
        'bid' => 'int',
        'bid_recommendations' => '\YandexMarketApi\Model\BidRecommendationItemDTO[]',
        'price_recommendations' => '\YandexMarketApi\Model\PriceRecommendationItemDTO[]'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'sku' => null,
        'bid' => 'int32',
        'bid_recommendations' => null,
        'price_recommendations' => null
    ];

    /**
      * Array of nullable properties. Used for (de)serialization
      *
      * @var boolean[]
      */
    protected static array $openAPINullables = [
        'sku' => false,
		'bid' => false,
		'bid_recommendations' => false,
		'price_recommendations' => false
    ];

    /**
      * If a nullable field gets set to null, insert it here
      *
      * @var boolean[]
      */
    protected array $openAPINullablesSetToNull = [];

    /**
     * Array of property to type mappings. Used for (de)serialization
     *
     * @return array
     */
    public static function openAPITypes()
    {
        return self::$openAPITypes;
    }

    /**
     * Array of property to format mappings. Used for (de)serialization
     *
     * @return array
     */
    public static function openAPIFormats()
    {
        return self::$openAPIFormats;
    }

    /**
     * Array of nullable properties
     *
     * @return array
     */
    protected static function openAPINullables(): array
    {
        return self::$openAPINullables;
    }

    /**
     * Array of nullable field names deliberately set to null
     *
     * @return boolean[]
     */
    private function getOpenAPINullablesSetToNull(): array
    {
        return $this->openAPINullablesSetToNull;
    }

    /**
     * Setter - Array of nullable field names deliberately set to null
     *
     * @param boolean[] $openAPINullablesSetToNull
     */
    private function setOpenAPINullablesSetToNull(array $openAPINullablesSetToNull): void
    {
        $this->openAPINullablesSetToNull = $openAPINullablesSetToNull;
    }

    /**
     * Checks if a property is nullable
     *
     * @param string $property
     * @return bool
     */
    public static function isNullable(string $property): bool
    {
        return self::openAPINullables()[$property] ?? false;
    }

    /**
     * Checks if a nullable property is set to null.
     *
     * @param string $property
     * @return bool
     */
    public function isNullableSetToNull(string $property): bool
    {
        return in_array($property, $this->getOpenAPINullablesSetToNull(), true);
    }

    /**
     * Array of attributes where the key is the local name,
     * and the value is the original name
     *
     * @var string[]
     */
    protected static $attributeMap = [
        'sku' => 'sku',
        'bid' => 'bid',
        'bid_recommendations' => 'bidRecommendations',
        'price_recommendations' => 'priceRecommendations'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'sku' => 'setSku',
        'bid' => 'setBid',
        'bid_recommendations' => 'setBidRecommendations',
        'price_recommendations' => 'setPriceRecommendations'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'sku' => 'getSku',
        'bid' => 'getBid',
        'bid_recommendations' => 'getBidRecommendations',
        'price_recommendations' => 'getPriceRecommendations'
    ];

    /**
     * Array of attributes where the key is the local name,
     * and the value is the original name
     *
     * @return array
     */
    public static function attributeMap()
    {
        return self::$attributeMap;
    }

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @return array
     */
    public static function setters()
    {
        return self::$setters;
    }

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @return array
     */
    public static function getters()
    {
        return self::$getters;
    }

    /**
     * The original name of the model.
     *
     * @return string
     */
    public function getModelName()
    {
        return self::$openAPIModelName;
    }


    /**
     * Associative array for storing property values
     *
     * @var mixed[]
     */
    protected $container = [];

    /**
     * Constructor
     *
     * @param mixed[] $data Associated array of property values
     *                      initializing the model
     */
    public function __construct(array $data = null)
    {
        $this->setIfExists('sku', $data ?? [], null);
        $this->setIfExists('bid', $data ?? [], null);
        $this->setIfExists('bid_recommendations', $data ?? [], null);
        $this->setIfExists('price_recommendations', $data ?? [], null);
    }

    /**
    * Sets $this->container[$variableName] to the given data or to the given default Value; if $variableName
    * is nullable and its value is set to null in the $fields array, then mark it as "set to null" in the
    * $this->openAPINullablesSetToNull array
    *
    * @param string $variableName
    * @param array  $fields
    * @param mixed  $defaultValue
    */
    private function setIfExists(string $variableName, array $fields, $defaultValue): void
    {
        if (self::isNullable($variableName) && array_key_exists($variableName, $fields) && is_null($fields[$variableName])) {
            $this->openAPINullablesSetToNull[] = $variableName;
        }

        $this->container[$variableName] = $fields[$variableName] ?? $defaultValue;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        if ($this->container['sku'] === null) {
            $invalidProperties[] = "'sku' can't be null";
        }
        if ((mb_strlen($this->container['sku']) > 80)) {
            $invalidProperties[] = "invalid value for 'sku', the character length must be smaller than or equal to 80.";
        }

        if ((mb_strlen($this->container['sku']) < 1)) {
            $invalidProperties[] = "invalid value for 'sku', the character length must be bigger than or equal to 1.";
        }

        if (!preg_match("/^[\\da-zA-ZА-Яа-я\\.,\/\\\\\\(\\)\\[\\]\\-=_]*$/", $this->container['sku'])) {
            $invalidProperties[] = "invalid value for 'sku', must be conform to the pattern /^[\\da-zA-ZА-Яа-я\\.,\/\\\\\\(\\)\\[\\]\\-=_]*$/.";
        }

        if ($this->container['bid'] === null) {
            $invalidProperties[] = "'bid' can't be null";
        }
        if (($this->container['bid'] > 9999)) {
            $invalidProperties[] = "invalid value for 'bid', must be smaller than or equal to 9999.";
        }

        if (($this->container['bid'] < 0)) {
            $invalidProperties[] = "invalid value for 'bid', must be bigger than or equal to 0.";
        }

        return $invalidProperties;
    }

    /**
     * Validate all the properties in the model
     * return true if all passed
     *
     * @return bool True if all properties are valid
     */
    public function valid()
    {
        return count($this->listInvalidProperties()) === 0;
    }


    /**
     * Gets sku
     *
     * @return string
     */
    public function getSku()
    {
        return $this->container['sku'];
    }

    /**
     * Sets sku
     *
     * @param string $sku **Ваш SKU**  Идентификатор товара в магазине. Разрешены английские и русские буквы (кроме ё), цифры и символы `. , / \\ ( ) [ ] - = _`  Максимальная длина — 80 знаков.  [Что такое SKU и как его назначать](https://yandex.ru/support/marketplace/assortment/add/index.html#fields).
     *
     * @return self
     */
    public function setSku($sku)
    {
        if (is_null($sku)) {
            throw new \InvalidArgumentException('non-nullable sku cannot be null');
        }
        if ((mb_strlen($sku) > 80)) {
            throw new \InvalidArgumentException('invalid length for $sku when calling SkuBidRecommendationItemDTO., must be smaller than or equal to 80.');
        }
        if ((mb_strlen($sku) < 1)) {
            throw new \InvalidArgumentException('invalid length for $sku when calling SkuBidRecommendationItemDTO., must be bigger than or equal to 1.');
        }
        if ((!preg_match("/^[\\da-zA-ZА-Яа-я\\.,\/\\\\\\(\\)\\[\\]\\-=_]*$/", $sku))) {
            throw new \InvalidArgumentException("invalid value for \$sku when calling SkuBidRecommendationItemDTO., must conform to the pattern /^[\\da-zA-ZА-Яа-я\\.,\/\\\\\\(\\)\\[\\]\\-=_]*$/.");
        }

        $this->container['sku'] = $sku;

        return $this;
    }

    /**
     * Gets bid
     *
     * @return int
     */
    public function getBid()
    {
        return $this->container['bid'];
    }

    /**
     * Sets bid
     *
     * @param int $bid Значение ставки.
     *
     * @return self
     */
    public function setBid($bid)
    {
        if (is_null($bid)) {
            throw new \InvalidArgumentException('non-nullable bid cannot be null');
        }

        if (($bid > 9999)) {
            throw new \InvalidArgumentException('invalid value for $bid when calling SkuBidRecommendationItemDTO., must be smaller than or equal to 9999.');
        }
        if (($bid < 0)) {
            throw new \InvalidArgumentException('invalid value for $bid when calling SkuBidRecommendationItemDTO., must be bigger than or equal to 0.');
        }

        $this->container['bid'] = $bid;

        return $this;
    }

    /**
     * Gets bid_recommendations
     *
     * @return \YandexMarketApi\Model\BidRecommendationItemDTO[]|null
     */
    public function getBidRecommendations()
    {
        return $this->container['bid_recommendations'];
    }

    /**
     * Sets bid_recommendations
     *
     * @param \YandexMarketApi\Model\BidRecommendationItemDTO[]|null $bid_recommendations Список рекомендованных ставок с соответствующими долями показов. Чем больше ставка, тем большую долю показов она помогает получить.
     *
     * @return self
     */
    public function setBidRecommendations($bid_recommendations)
    {
        if (is_null($bid_recommendations)) {
            throw new \InvalidArgumentException('non-nullable bid_recommendations cannot be null');
        }
        $this->container['bid_recommendations'] = $bid_recommendations;

        return $this;
    }

    /**
     * Gets price_recommendations
     *
     * @return \YandexMarketApi\Model\PriceRecommendationItemDTO[]|null
     */
    public function getPriceRecommendations()
    {
        return $this->container['price_recommendations'];
    }

    /**
     * Sets price_recommendations
     *
     * @param \YandexMarketApi\Model\PriceRecommendationItemDTO[]|null $price_recommendations Рекомендованные цены.
     *
     * @return self
     */
    public function setPriceRecommendations($price_recommendations)
    {
        if (is_null($price_recommendations)) {
            throw new \InvalidArgumentException('non-nullable price_recommendations cannot be null');
        }
        $this->container['price_recommendations'] = $price_recommendations;

        return $this;
    }
    /**
     * Returns true if offset exists. False otherwise.
     *
     * @param integer $offset Offset
     *
     * @return boolean
     */
    public function offsetExists($offset): bool
    {
        return isset($this->container[$offset]);
    }

    /**
     * Gets offset.
     *
     * @param integer $offset Offset
     *
     * @return mixed|null
     */
    #[\ReturnTypeWillChange]
    public function offsetGet($offset)
    {
        return $this->container[$offset] ?? null;
    }

    /**
     * Sets value based on offset.
     *
     * @param int|null $offset Offset
     * @param mixed    $value  Value to be set
     *
     * @return void
     */
    public function offsetSet($offset, $value): void
    {
        if (is_null($offset)) {
            $this->container[] = $value;
        } else {
            $this->container[$offset] = $value;
        }
    }

    /**
     * Unsets offset.
     *
     * @param integer $offset Offset
     *
     * @return void
     */
    public function offsetUnset($offset): void
    {
        unset($this->container[$offset]);
    }

    /**
     * Serializes the object to a value that can be serialized natively by json_encode().
     * @link https://www.php.net/manual/en/jsonserializable.jsonserialize.php
     *
     * @return mixed Returns data which can be serialized by json_encode(), which is a value
     * of any type other than a resource.
     */
    #[\ReturnTypeWillChange]
    public function jsonSerialize()
    {
       return ObjectSerializer::sanitizeForSerialization($this);
    }

    /**
     * Gets the string presentation of the object
     *
     * @return string
     */
    public function __toString()
    {
        return json_encode(
            ObjectSerializer::sanitizeForSerialization($this),
            JSON_PRETTY_PRINT
        );
    }

    /**
     * Gets a header-safe presentation of the object
     *
     * @return string
     */
    public function toHeaderValue()
    {
        return json_encode(ObjectSerializer::sanitizeForSerialization($this));
    }
}


