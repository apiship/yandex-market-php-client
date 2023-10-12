# YandexMarketApi\OrdersStatsApi

All URIs are relative to https://api.partner.market.yandex.ru, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**getOrdersStats()**](OrdersStatsApi.md#getOrdersStats) | **POST** /campaigns/{campaignId}/stats/orders | Отчет по заказам |


## `getOrdersStats()`

```php
getOrdersStats($campaign_id, $page_token, $limit, $get_orders_stats_request): \YandexMarketApi\Model\GetOrdersStatsResponse
```

Отчет по заказам

Возвращает подробный отчет по заказам на Маркете, в которых есть ваши товары. С помощью отчета вы можете собрать статистику по вашим заказам и узнать, например, какие из товаров чаще всего возвращаются покупателями, какие, наоборот, пользуются большим спросом, какая комиссия начисляется за заказы и т. п.  В одном запросе можно получить отчет не более чем по 200 заказам.  |**⚙️ Лимит:** 1 000 000 запросов в час| |-|

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: OAuth
$config = YandexMarketApi\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new YandexMarketApi\Api\OrdersStatsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$campaign_id = 56; // int | Идентификатор кампании в API и магазина в кабинете. Каждая кампания в API соответствует магазину в кабинете.  Чтобы узнать идентификаторы своих магазинов, воспользуйтесь запросом [GET campaigns](../../reference/campaigns/getCampaigns.md).  ℹ️ [Что такое кабинет и магазин на Маркете](https://yandex.ru/support/marketplace/account/introduction.html)
$page_token = eyBuZXh0SWQ6IDIzNDIgfQ==; // string | Идентификатор страницы c результатами.  Если параметр не указан, возвращается самая старая страница.  Рекомендуется передавать значение выходного параметра `nextPageToken`, полученное при последнем запросе.  Если задан `page_token`, параметры `offset`, `page_number` и `page_size` игнорируются.
$limit = 20; // int | Количество товаров на одной странице.
$get_orders_stats_request = new \YandexMarketApi\Model\GetOrdersStatsRequest(); // \YandexMarketApi\Model\GetOrdersStatsRequest

try {
    $result = $apiInstance->getOrdersStats($campaign_id, $page_token, $limit, $get_orders_stats_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OrdersStatsApi->getOrdersStats: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **campaign_id** | **int**| Идентификатор кампании в API и магазина в кабинете. Каждая кампания в API соответствует магазину в кабинете.  Чтобы узнать идентификаторы своих магазинов, воспользуйтесь запросом [GET campaigns](../../reference/campaigns/getCampaigns.md).  ℹ️ [Что такое кабинет и магазин на Маркете](https://yandex.ru/support/marketplace/account/introduction.html) | |
| **page_token** | **string**| Идентификатор страницы c результатами.  Если параметр не указан, возвращается самая старая страница.  Рекомендуется передавать значение выходного параметра &#x60;nextPageToken&#x60;, полученное при последнем запросе.  Если задан &#x60;page_token&#x60;, параметры &#x60;offset&#x60;, &#x60;page_number&#x60; и &#x60;page_size&#x60; игнорируются. | [optional] |
| **limit** | **int**| Количество товаров на одной странице. | [optional] |
| **get_orders_stats_request** | [**\YandexMarketApi\Model\GetOrdersStatsRequest**](../Model/GetOrdersStatsRequest.md)|  | [optional] |

### Return type

[**\YandexMarketApi\Model\GetOrdersStatsResponse**](../Model/GetOrdersStatsResponse.md)

### Authorization

[OAuth](../../README.md#OAuth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
