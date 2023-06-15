# YandexMarketApi\NoindexApi

All URIs are relative to https://api.partner.market.yandex.ru, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**provideOrderItemCis()**](NoindexApi.md#provideOrderItemCis) | **PUT** /campaigns/{campaignId}/orders/{orderId}/cis | Передача кодов «Честного знака» |


## `provideOrderItemCis()`

```php
provideOrderItemCis($campaign_id, $order_id, $provide_order_item_cis_request): \YandexMarketApi\Model\ProvideOrderItemCisResponse
```

Передача кодов «Честного знака»

{% note alert \"Deprecated\" %}  Этот метод устарел. Пожалуйста, пользуйтесь вместо него [PUT campaigns/{campaignId}/orders/{orderId}/identifiers](../../reference/orders/provideOrderItemIdentifiers.md).  {% endnote %}  Передает Маркету коды маркировки для товаров в указанном заказе.  Для каждой позиции в заказе, требующей маркировки, нужно передать список кодов — по одному для каждой единицы товара. Например, если в заказе две пары тапочек и одна пара туфель, получится список из двух кодов для первой позиции и список из одного кода для второй.  |**⚙️ Лимит:** 1 000 000 запросов в час| |-|

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: OAuth
$config = YandexMarketApi\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new YandexMarketApi\Api\NoindexApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$campaign_id = 56; // int | Идентификатор кампании.  **Где его взять**  Войдите в личный кабинет, в меню слева выберите **Настройки** → **Настройки API** и скопируйте число из поля **Номер кампании**.
$order_id = 56; // int | Идентификатор заказа.
$provide_order_item_cis_request = new \YandexMarketApi\Model\ProvideOrderItemCisRequest(); // \YandexMarketApi\Model\ProvideOrderItemCisRequest

try {
    $result = $apiInstance->provideOrderItemCis($campaign_id, $order_id, $provide_order_item_cis_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling NoindexApi->provideOrderItemCis: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **campaign_id** | **int**| Идентификатор кампании.  **Где его взять**  Войдите в личный кабинет, в меню слева выберите **Настройки** → **Настройки API** и скопируйте число из поля **Номер кампании**. | |
| **order_id** | **int**| Идентификатор заказа. | |
| **provide_order_item_cis_request** | [**\YandexMarketApi\Model\ProvideOrderItemCisRequest**](../Model/ProvideOrderItemCisRequest.md)|  | |

### Return type

[**\YandexMarketApi\Model\ProvideOrderItemCisResponse**](../Model/ProvideOrderItemCisResponse.md)

### Authorization

[OAuth](../../README.md#OAuth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
