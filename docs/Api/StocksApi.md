# YandexMarketApi\StocksApi

All URIs are relative to https://api.partner.market.yandex.ru, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**getActualStocks()**](StocksApi.md#getActualStocks) | **GET** /campaigns/{campaignId}/warehouses/{warehouseId}/stocks/actual | Запрос информации об остатках |
| [**getStocks()**](StocksApi.md#getStocks) | **POST** /campaigns/{campaignId}/offers/stocks | Информация об остатках и оборачиваемости |
| [**updateStocks()**](StocksApi.md#updateStocks) | **PUT** /campaigns/{campaignId}/offers/stocks | Передача информации об остатках |


## `getActualStocks()`

```php
getActualStocks($campaign_id, $warehouse_id, $sku): \YandexMarketApi\Model\GetActualStocksResponse
```

Запрос информации об остатках

{% note warning %}  29 мая 2023 года — последний день, когда на Маркете можно оформить и обработать заказ с внешней площадки.  С 30 мая работать с такими заказами станет нельзя.  {% endnote %}  Запрашивает актуальную информацию по остаткам товаров на складе Маркета.  |**⚙️ Лимит:** ```(количество товаров на витрине) / 200```, но не менее 1000 товаров в минуту| |-|

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: OAuth
$config = YandexMarketApi\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new YandexMarketApi\Api\StocksApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$campaign_id = 56; // int | Идентификатор кампании в API и магазина в кабинете. Каждая кампания в API соответствует магазину в кабинете.  Чтобы узнать идентификаторы своих магазинов, воспользуйтесь запросом [GET campaigns](../../reference/campaigns/getCampaigns.md).  ℹ️ [Что такое кабинет и магазин на Маркете](https://yandex.ru/support/marketplace/account/introduction.html)
$warehouse_id = 56; // int | Идентификатор склада.
$sku = array('sku_example'); // string[] | Фильтр по SKU

try {
    $result = $apiInstance->getActualStocks($campaign_id, $warehouse_id, $sku);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling StocksApi->getActualStocks: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **campaign_id** | **int**| Идентификатор кампании в API и магазина в кабинете. Каждая кампания в API соответствует магазину в кабинете.  Чтобы узнать идентификаторы своих магазинов, воспользуйтесь запросом [GET campaigns](../../reference/campaigns/getCampaigns.md).  ℹ️ [Что такое кабинет и магазин на Маркете](https://yandex.ru/support/marketplace/account/introduction.html) | |
| **warehouse_id** | **int**| Идентификатор склада. | |
| **sku** | [**string[]**](../Model/string.md)| Фильтр по SKU | [optional] |

### Return type

[**\YandexMarketApi\Model\GetActualStocksResponse**](../Model/GetActualStocksResponse.md)

### Authorization

[OAuth](../../README.md#OAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getStocks()`

```php
getStocks($campaign_id, $page_token, $limit, $get_warehouse_stocks_request): \YandexMarketApi\Model\GetWarehouseStocksResponse
```

Информация об остатках и оборачиваемости

Передает данные об остатках товаров на витрине (для моделей FBY, FBS и Экспресс) и об [оборачиваемости](*turnover) товаров (для модели FBY).  {% note info \"По умолчанию данные по оборачивамости не возращаются\" %}  Чтобы они были в ответе, передавайте `true` в поле `withTurnover`.  {% endnote %}  |**⚙️ Лимит:** ```(количество товаров на витрине) / 200```, но не менее 1000 товаров в минуту| |-|  [//]: <> (turnover: Среднее количество дней, за которое товар продается. Подробно об оборачиваемости рассказано в Справке https://yandex.ru/support/marketplace/analytics/turnover.html.)

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: OAuth
$config = YandexMarketApi\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new YandexMarketApi\Api\StocksApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$campaign_id = 56; // int | Идентификатор кампании в API и магазина в кабинете. Каждая кампания в API соответствует магазину в кабинете.  Чтобы узнать идентификаторы своих магазинов, воспользуйтесь запросом [GET campaigns](../../reference/campaigns/getCampaigns.md).  ℹ️ [Что такое кабинет и магазин на Маркете](https://yandex.ru/support/marketplace/account/introduction.html)
$page_token = eyBuZXh0SWQ6IDIzNDIgfQ==; // string | Идентификатор страницы c результатами.  Если параметр не указан, возвращается самая старая страница.  Рекомендуется передавать значение выходного параметра `nextPageToken`, полученное при последнем запросе.  Если задан `page_token`, параметры `offset`, `page_number` и `page_size` игнорируются.
$limit = 20; // int | Количество товаров на одной странице.
$get_warehouse_stocks_request = new \YandexMarketApi\Model\GetWarehouseStocksRequest(); // \YandexMarketApi\Model\GetWarehouseStocksRequest

try {
    $result = $apiInstance->getStocks($campaign_id, $page_token, $limit, $get_warehouse_stocks_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling StocksApi->getStocks: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **campaign_id** | **int**| Идентификатор кампании в API и магазина в кабинете. Каждая кампания в API соответствует магазину в кабинете.  Чтобы узнать идентификаторы своих магазинов, воспользуйтесь запросом [GET campaigns](../../reference/campaigns/getCampaigns.md).  ℹ️ [Что такое кабинет и магазин на Маркете](https://yandex.ru/support/marketplace/account/introduction.html) | |
| **page_token** | **string**| Идентификатор страницы c результатами.  Если параметр не указан, возвращается самая старая страница.  Рекомендуется передавать значение выходного параметра &#x60;nextPageToken&#x60;, полученное при последнем запросе.  Если задан &#x60;page_token&#x60;, параметры &#x60;offset&#x60;, &#x60;page_number&#x60; и &#x60;page_size&#x60; игнорируются. | [optional] |
| **limit** | **int**| Количество товаров на одной странице. | [optional] |
| **get_warehouse_stocks_request** | [**\YandexMarketApi\Model\GetWarehouseStocksRequest**](../Model/GetWarehouseStocksRequest.md)|  | [optional] |

### Return type

[**\YandexMarketApi\Model\GetWarehouseStocksResponse**](../Model/GetWarehouseStocksResponse.md)

### Authorization

[OAuth](../../README.md#OAuth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `updateStocks()`

```php
updateStocks($campaign_id, $update_stocks_request): \YandexMarketApi\Model\EmptyApiResponse
```

Передача информации об остатках

Передает данные об остатках товаров на витрине.  Обязательно указывайте SKU **в точности** так, как он указан в каталоге. Например, _557722_ и _0557722_ — это два разных SKU.  |**⚙️ Лимит:** рассчитывается по [формуле](*rule)| |-|  [//]: <> (rule: количество товаров в каталоге / 200, но не более 500 товаров в минуту)

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: OAuth
$config = YandexMarketApi\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new YandexMarketApi\Api\StocksApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$campaign_id = 56; // int | Идентификатор кампании в API и магазина в кабинете. Каждая кампания в API соответствует магазину в кабинете.  Чтобы узнать идентификаторы своих магазинов, воспользуйтесь запросом [GET campaigns](../../reference/campaigns/getCampaigns.md).  ℹ️ [Что такое кабинет и магазин на Маркете](https://yandex.ru/support/marketplace/account/introduction.html)
$update_stocks_request = new \YandexMarketApi\Model\UpdateStocksRequest(); // \YandexMarketApi\Model\UpdateStocksRequest

try {
    $result = $apiInstance->updateStocks($campaign_id, $update_stocks_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling StocksApi->updateStocks: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **campaign_id** | **int**| Идентификатор кампании в API и магазина в кабинете. Каждая кампания в API соответствует магазину в кабинете.  Чтобы узнать идентификаторы своих магазинов, воспользуйтесь запросом [GET campaigns](../../reference/campaigns/getCampaigns.md).  ℹ️ [Что такое кабинет и магазин на Маркете](https://yandex.ru/support/marketplace/account/introduction.html) | |
| **update_stocks_request** | [**\YandexMarketApi\Model\UpdateStocksRequest**](../Model/UpdateStocksRequest.md)|  | |

### Return type

[**\YandexMarketApi\Model\EmptyApiResponse**](../Model/EmptyApiResponse.md)

### Authorization

[OAuth](../../README.md#OAuth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
