# YandexMarketApi\GoodsStatsApi

All URIs are relative to https://api.partner.market.yandex.ru, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**getGoodsStats()**](GoodsStatsApi.md#getGoodsStats) | **POST** /campaigns/{campaignId}/stats/skus | Отчет по товарам |


## `getGoodsStats()`

```php
getGoodsStats($campaign_id, $get_goods_stats_request): \YandexMarketApi\Model\GetGoodsStatsResponse
```

Отчет по товарам

Возвращает подробный отчет по товарам, которые вы разместили на Маркете. С помощью отчета вы можете узнать, например, об остатках на складе, об условиях хранения ваших товаров и т. д.  Количество товаров, по которым можно получить отчет с помощью запроса, ограничено. В одном запросе может быть не более 500 товаров.  |**⚙️ Лимит:** [по правилам](*rule)| |-|  [//]: <> (rule: 50 000 товаров в сутки, если на витрине меньше 10 000 товаров. В 5 раз больше количества ваших товаров, но не более 2 000 000 в сутки, если товаров от 10 000 до 400 000. До 2 000 000 товаров в сутки, если товаров больше 400 000.)

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: OAuth
$config = YandexMarketApi\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new YandexMarketApi\Api\GoodsStatsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$campaign_id = 56; // int | Идентификатор кампании и идентификатор магазина. Каждая кампания в API соответствует магазину в кабинете.  **Где его взять**  Войдите в личный кабинет, в меню слева выберите **Настройки** → **Настройки API** и скопируйте число из поля **Номер кампании**.
$get_goods_stats_request = new \YandexMarketApi\Model\GetGoodsStatsRequest(); // \YandexMarketApi\Model\GetGoodsStatsRequest

try {
    $result = $apiInstance->getGoodsStats($campaign_id, $get_goods_stats_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling GoodsStatsApi->getGoodsStats: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **campaign_id** | **int**| Идентификатор кампании и идентификатор магазина. Каждая кампания в API соответствует магазину в кабинете.  **Где его взять**  Войдите в личный кабинет, в меню слева выберите **Настройки** → **Настройки API** и скопируйте число из поля **Номер кампании**. | |
| **get_goods_stats_request** | [**\YandexMarketApi\Model\GetGoodsStatsRequest**](../Model/GetGoodsStatsRequest.md)|  | |

### Return type

[**\YandexMarketApi\Model\GetGoodsStatsResponse**](../Model/GetGoodsStatsResponse.md)

### Authorization

[OAuth](../../README.md#OAuth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
