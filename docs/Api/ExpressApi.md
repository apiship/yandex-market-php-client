# YandexMarketApi\ExpressApi

All URIs are relative to https://api.partner.market.yandex.ru, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**generateOrderLabel()**](ExpressApi.md#generateOrderLabel) | **GET** /campaigns/{campaignId}/orders/{orderId}/delivery/shipments/{shipmentId}/boxes/{boxId}/label | Ярлык‑наклейка на отдельное грузовое место в заказе |
| [**generateOrderLabels()**](ExpressApi.md#generateOrderLabels) | **GET** /campaigns/{campaignId}/orders/{orderId}/delivery/labels | Ярлыки‑наклейки на все грузовые места в заказе |
| [**getCampaign()**](ExpressApi.md#getCampaign) | **GET** /campaigns/{campaignId} | Информация о магазине |
| [**getCampaignLogins()**](ExpressApi.md#getCampaignLogins) | **GET** /campaigns/{campaignId}/logins | Логины, связанные с магазином |
| [**getCampaigns()**](ExpressApi.md#getCampaigns) | **GET** /campaigns | Магазины пользователя |
| [**getCampaignsByLogin()**](ExpressApi.md#getCampaignsByLogin) | **GET** /campaigns/by_login/{login} | Магазины, доступные логину |
| [**getDeliveryServices()**](ExpressApi.md#getDeliveryServices) | **GET** /delivery/services | Справочник служб доставки |
| [**getGoodsStats()**](ExpressApi.md#getGoodsStats) | **POST** /campaigns/{campaignId}/stats/skus | Отчет по товарам |
| [**getOfferMappingEntries()**](ExpressApi.md#getOfferMappingEntries) | **GET** /campaigns/{campaignId}/offer-mapping-entries | Список товаров в каталоге |
| [**getOrder()**](ExpressApi.md#getOrder) | **GET** /campaigns/{campaignId}/orders/{orderId} | Информация о заказе |
| [**getOrderLabelsData()**](ExpressApi.md#getOrderLabelsData) | **GET** /campaigns/{campaignId}/orders/{orderId}/delivery/labels/data | Информация на ярлыках‑наклейках |
| [**getOrders()**](ExpressApi.md#getOrders) | **GET** /campaigns/{campaignId}/orders | Информация о заказах |
| [**getOrdersStats()**](ExpressApi.md#getOrdersStats) | **POST** /campaigns/{campaignId}/stats/orders | Отчет по заказам |
| [**getPrices()**](ExpressApi.md#getPrices) | **GET** /campaigns/{campaignId}/offer-prices | Список цен |
| [**getReturn()**](ExpressApi.md#getReturn) | **GET** /campaigns/{campaignId}/orders/{orderId}/returns/{returnId} | Информация о возврате или невыкупе |
| [**getReturnApplication()**](ExpressApi.md#getReturnApplication) | **GET** /campaigns/{campaignId}/orders/{orderId}/returns/{returnId}/application | Получение заявления на возврат |
| [**getReturnPhoto()**](ExpressApi.md#getReturnPhoto) | **GET** /campaigns/{campaignId}/orders/{orderId}/returns/{returnId}/decision/{itemId}/image/{imageHash} | Получение фотографии возврата |
| [**getReturns()**](ExpressApi.md#getReturns) | **GET** /campaigns/{campaignId}/returns | Список возвратов и невыкупов |
| [**getSuggestedOfferMappingEntries()**](ExpressApi.md#getSuggestedOfferMappingEntries) | **POST** /campaigns/{campaignId}/offer-mapping-entries/suggestions | Рекомендованные карточки для ваших товаров |
| [**getSuggestedPrices()**](ExpressApi.md#getSuggestedPrices) | **POST** /campaigns/{campaignId}/offer-prices/suggestions | Цены для продвижения товаров |
| [**provideOrderItemCis()**](ExpressApi.md#provideOrderItemCis) | **PUT** /campaigns/{campaignId}/orders/{orderId}/cis | Передача кодов «Честного знака» |
| [**provideOrderItemIdentifiers()**](ExpressApi.md#provideOrderItemIdentifiers) | **PUT** /campaigns/{campaignId}/orders/{orderId}/identifiers | Передача уникальных кодов маркировки единиц товара |
| [**putBidsForBusiness()**](ExpressApi.md#putBidsForBusiness) | **PUT** /businesses/{businessId}/bids | Включение буста продаж и установка ставок |
| [**setOrderShipmentBoxes()**](ExpressApi.md#setOrderShipmentBoxes) | **PUT** /campaigns/{campaignId}/orders/{orderId}/delivery/shipments/{shipmentId}/boxes | Передача количества грузовых мест в заказе |
| [**updateOfferMappingEntries()**](ExpressApi.md#updateOfferMappingEntries) | **POST** /campaigns/{campaignId}/offer-mapping-entries/updates | Добавление и редактирование товаров в каталоге |
| [**updateOrderItems()**](ExpressApi.md#updateOrderItems) | **PUT** /campaigns/{campaignId}/orders/{orderId}/items | Удаление товара из заказа или уменьшение числа единиц |
| [**updateOrderStatus()**](ExpressApi.md#updateOrderStatus) | **PUT** /campaigns/{campaignId}/orders/{orderId}/status | Изменение статуса заказа |
| [**updateOrderStatuses()**](ExpressApi.md#updateOrderStatuses) | **POST** /campaigns/{campaignId}/orders/status-update | Изменение статусов заказа |
| [**updatePrices()**](ExpressApi.md#updatePrices) | **POST** /campaigns/{campaignId}/offer-prices/updates | Установка цен на товары |
| [**updateStocks()**](ExpressApi.md#updateStocks) | **PUT** /campaigns/{campaignId}/offers/stocks | Передача информации об остатках |
| [**verifyOrderEac()**](ExpressApi.md#verifyOrderEac) | **PUT** /campaigns/{campaignId}/orders/{orderId}/verifyEac | Передача кода проверки |


## `generateOrderLabel()`

```php
generateOrderLabel($campaign_id, $order_id, $shipment_id, $box_id, $format): \SplFileObject
```

Ярлык‑наклейка на отдельное грузовое место в заказе

Формирует ярлык‑наклейку на отдельное грузовое место в заказе и возвращает ярлык в PDF‑файле.  |**⚙️ Лимит:** 1 000 000 запросов в час| |-|

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: OAuth
$config = YandexMarketApi\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new YandexMarketApi\Api\ExpressApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$campaign_id = 56; // int | Идентификатор кампании.  **Где его взять**  Войдите в личный кабинет, в меню слева выберите **Настройки** → **Настройки API** и скопируйте число из поля **Номер кампании**.
$order_id = 56; // int | Идентификатор заказа.
$shipment_id = 56; // int | Идентификатор грузоместа
$box_id = 56; // int | Идентификатор коробки
$format = new \YandexMarketApi\Model\PageFormatType(); // PageFormatType | Настройка размещения ярлыков на странице. Если параметра нет, возвращается PDF с ярлыками формата A6.

try {
    $result = $apiInstance->generateOrderLabel($campaign_id, $order_id, $shipment_id, $box_id, $format);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ExpressApi->generateOrderLabel: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **campaign_id** | **int**| Идентификатор кампании.  **Где его взять**  Войдите в личный кабинет, в меню слева выберите **Настройки** → **Настройки API** и скопируйте число из поля **Номер кампании**. | |
| **order_id** | **int**| Идентификатор заказа. | |
| **shipment_id** | **int**| Идентификатор грузоместа | |
| **box_id** | **int**| Идентификатор коробки | |
| **format** | [**PageFormatType**](../Model/.md)| Настройка размещения ярлыков на странице. Если параметра нет, возвращается PDF с ярлыками формата A6. | [optional] |

### Return type

**\SplFileObject**

### Authorization

[OAuth](../../README.md#OAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/pdf`, `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `generateOrderLabels()`

```php
generateOrderLabels($campaign_id, $order_id, $format): \SplFileObject
```

Ярлыки‑наклейки на все грузовые места в заказе

Возвращает PDF-файл с ярлыками, которые нужно наклеить на посылки перед отгрузкой. Подробно о том, зачем они нужны и как выглядят, рассказано [в Справке](https://yandex.ru/support/marketplace/orders/fbs/packaging/marking.html).  На вход нужно передать идентификатор заказа и один необязательный параметр, который управляет версткой PDF-файла.  |**⚙️ Лимит:** 1 000 000 запросов в час| |-|

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: OAuth
$config = YandexMarketApi\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new YandexMarketApi\Api\ExpressApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$campaign_id = 56; // int | Идентификатор кампании.  **Где его взять**  Войдите в личный кабинет, в меню слева выберите **Настройки** → **Настройки API** и скопируйте число из поля **Номер кампании**.
$order_id = 56; // int | Идентификатор заказа.
$format = new \YandexMarketApi\Model\PageFormatType(); // PageFormatType | Настройка размещения ярлыков на странице. Если параметра нет, возвращается PDF с ярлыками формата A6.

try {
    $result = $apiInstance->generateOrderLabels($campaign_id, $order_id, $format);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ExpressApi->generateOrderLabels: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **campaign_id** | **int**| Идентификатор кампании.  **Где его взять**  Войдите в личный кабинет, в меню слева выберите **Настройки** → **Настройки API** и скопируйте число из поля **Номер кампании**. | |
| **order_id** | **int**| Идентификатор заказа. | |
| **format** | [**PageFormatType**](../Model/.md)| Настройка размещения ярлыков на странице. Если параметра нет, возвращается PDF с ярлыками формата A6. | [optional] |

### Return type

**\SplFileObject**

### Authorization

[OAuth](../../README.md#OAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/pdf`, `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getCampaign()`

```php
getCampaign($campaign_id): \YandexMarketApi\Model\GetCampaignResponse
```

Информация о магазине

Возвращает информацию о магазине. |**⚙️ Лимит:** 5 000 запросов в час| |-|

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: OAuth
$config = YandexMarketApi\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new YandexMarketApi\Api\ExpressApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$campaign_id = 56; // int | Идентификатор кампании.  **Где его взять**  Войдите в личный кабинет, в меню слева выберите **Настройки** → **Настройки API** и скопируйте число из поля **Номер кампании**.

try {
    $result = $apiInstance->getCampaign($campaign_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ExpressApi->getCampaign: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **campaign_id** | **int**| Идентификатор кампании.  **Где его взять**  Войдите в личный кабинет, в меню слева выберите **Настройки** → **Настройки API** и скопируйте число из поля **Номер кампании**. | |

### Return type

[**\YandexMarketApi\Model\GetCampaignResponse**](../Model/GetCampaignResponse.md)

### Authorization

[OAuth](../../README.md#OAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getCampaignLogins()`

```php
getCampaignLogins($campaign_id): \YandexMarketApi\Model\GetCampaignLoginsResponse
```

Логины, связанные с магазином

Возвращает список логинов, у которых есть доступ к магазину. |**⚙️ Лимит:** 5 000 запросов в час| |-|

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: OAuth
$config = YandexMarketApi\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new YandexMarketApi\Api\ExpressApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$campaign_id = 56; // int | Идентификатор кампании.  **Где его взять**  Войдите в личный кабинет, в меню слева выберите **Настройки** → **Настройки API** и скопируйте число из поля **Номер кампании**.

try {
    $result = $apiInstance->getCampaignLogins($campaign_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ExpressApi->getCampaignLogins: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **campaign_id** | **int**| Идентификатор кампании.  **Где его взять**  Войдите в личный кабинет, в меню слева выберите **Настройки** → **Настройки API** и скопируйте число из поля **Номер кампании**. | |

### Return type

[**\YandexMarketApi\Model\GetCampaignLoginsResponse**](../Model/GetCampaignLoginsResponse.md)

### Authorization

[OAuth](../../README.md#OAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getCampaigns()`

```php
getCampaigns($page, $page_size): \YandexMarketApi\Model\GetCampaignsResponse
```

Магазины пользователя

Возвращает список магазинов, к которым имеет доступ пользователь — владелец авторизационного токена, использованного в запросе. Для агентских пользователей список состоит из подагентских магазинов. |**⚙️ Лимит:** 5 000 запросов в час| |-|

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: OAuth
$config = YandexMarketApi\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new YandexMarketApi\Api\ExpressApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$page = 1; // int | Номер страницы результатов.  Значение по умолчанию: 1.  Используется вместе с параметром page_size.  `page_number` игнорируется, если задан `page_token`, `limit` или `offset`.
$page_size = 56; // int | Количество скрытых товаров на странице.  Используется вместе с параметром page_number.  `page_size` игнорируется, если задан `page_token`, `limit` или `offset`.

try {
    $result = $apiInstance->getCampaigns($page, $page_size);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ExpressApi->getCampaigns: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **page** | **int**| Номер страницы результатов.  Значение по умолчанию: 1.  Используется вместе с параметром page_size.  &#x60;page_number&#x60; игнорируется, если задан &#x60;page_token&#x60;, &#x60;limit&#x60; или &#x60;offset&#x60;. | [optional] [default to 1] |
| **page_size** | **int**| Количество скрытых товаров на странице.  Используется вместе с параметром page_number.  &#x60;page_size&#x60; игнорируется, если задан &#x60;page_token&#x60;, &#x60;limit&#x60; или &#x60;offset&#x60;. | [optional] |

### Return type

[**\YandexMarketApi\Model\GetCampaignsResponse**](../Model/GetCampaignsResponse.md)

### Authorization

[OAuth](../../README.md#OAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getCampaignsByLogin()`

```php
getCampaignsByLogin($login, $page, $page_size): \YandexMarketApi\Model\GetCampaignsResponse
```

Магазины, доступные логину

Возвращает список магазинов, к которым у пользователя с указанным логином есть доступ. |**⚙️ Лимит:** 5 000 запросов в час| |-|

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: OAuth
$config = YandexMarketApi\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new YandexMarketApi\Api\ExpressApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$login = 'login_example'; // string | Логин пользователя.
$page = 1; // int | Номер страницы результатов.  Значение по умолчанию: 1.  Используется вместе с параметром page_size.  `page_number` игнорируется, если задан `page_token`, `limit` или `offset`.
$page_size = 56; // int | Количество скрытых товаров на странице.  Используется вместе с параметром page_number.  `page_size` игнорируется, если задан `page_token`, `limit` или `offset`.

try {
    $result = $apiInstance->getCampaignsByLogin($login, $page, $page_size);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ExpressApi->getCampaignsByLogin: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **login** | **string**| Логин пользователя. | |
| **page** | **int**| Номер страницы результатов.  Значение по умолчанию: 1.  Используется вместе с параметром page_size.  &#x60;page_number&#x60; игнорируется, если задан &#x60;page_token&#x60;, &#x60;limit&#x60; или &#x60;offset&#x60;. | [optional] [default to 1] |
| **page_size** | **int**| Количество скрытых товаров на странице.  Используется вместе с параметром page_number.  &#x60;page_size&#x60; игнорируется, если задан &#x60;page_token&#x60;, &#x60;limit&#x60; или &#x60;offset&#x60;. | [optional] |

### Return type

[**\YandexMarketApi\Model\GetCampaignsResponse**](../Model/GetCampaignsResponse.md)

### Authorization

[OAuth](../../README.md#OAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getDeliveryServices()`

```php
getDeliveryServices(): \YandexMarketApi\Model\GetDeliveryServicesResponse
```

Справочник служб доставки

'Возвращает справочник служб доставки: идентификаторы и наименования.' |**⚙️ Лимит:** 5 000 запросов в час| |-|

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: OAuth
$config = YandexMarketApi\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new YandexMarketApi\Api\ExpressApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);

try {
    $result = $apiInstance->getDeliveryServices();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ExpressApi->getDeliveryServices: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

This endpoint does not need any parameter.

### Return type

[**\YandexMarketApi\Model\GetDeliveryServicesResponse**](../Model/GetDeliveryServicesResponse.md)

### Authorization

[OAuth](../../README.md#OAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getGoodsStats()`

```php
getGoodsStats($campaign_id, $get_goods_stats_request): \YandexMarketApi\Model\GetGoodsStatsResponse
```

Отчет по товарам

Возвращает подробный отчет по товарам, которые вы разместили на Маркете. С помощью отчета вы можете узнать, например, о скрытии ваших предложений на Маркете, об остатках на складе, об условиях хранения ваших товаров и т. д.  Количество товаров, по которым можно получить отчет с помощью запроса, ограничено. Действуют три правила:  1. Ограничения действуют и обновляются каждые 24 часа.  2. В одном запросе — не более 500 товаров.  3. Общее количество товаров в запросах за последние 24 часа зависит от того, сколько у вас товаров на витрине:       * Меньше 10 000 — максимум 50 000 товаров в запросах.      * От 10 000 до 400 000 — в 5 раз больше количества ваших товаров, но максимум 2 000 000 товаров в запросах.      * Больше 400 000 — максимум 2 000 000 товаров.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: OAuth
$config = YandexMarketApi\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new YandexMarketApi\Api\ExpressApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$campaign_id = 56; // int | Идентификатор кампании.  **Где его взять**  Войдите в личный кабинет, в меню слева выберите **Настройки** → **Настройки API** и скопируйте число из поля **Номер кампании**.
$get_goods_stats_request = new \YandexMarketApi\Model\GetGoodsStatsRequest(); // \YandexMarketApi\Model\GetGoodsStatsRequest

try {
    $result = $apiInstance->getGoodsStats($campaign_id, $get_goods_stats_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ExpressApi->getGoodsStats: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **campaign_id** | **int**| Идентификатор кампании.  **Где его взять**  Войдите в личный кабинет, в меню слева выберите **Настройки** → **Настройки API** и скопируйте число из поля **Номер кампании**. | |
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

## `getOfferMappingEntries()`

```php
getOfferMappingEntries($campaign_id, $offer_id, $shop_sku, $mapping_kind, $status, $availability, $category_id, $vendor, $page_token, $limit): \YandexMarketApi\Model\GetOfferMappingEntriesResponse
```

Список товаров в каталоге

Для каждого товара, который вы размещаете на Маркете, возвращается информация о карточках Маркета, к которым привязан этот товар:  * Идентификатор текущей карточки (marketSku), карточки, которая проходит модерацию и последней отклоненной карточки. * Описание товара, которое указано на карточке Маркета. Например, размер упаковки и вес товара.  Результаты возвращаются постранично. Выходные данные содержат идентификатор следующей страницы.  Количество товаров, о которых можно получить информацию в течение суток, определяется по формуле:  ```(количество товаров в каталоге магазина) * 25```  {% note info %}  Количество товаров в каталоге магазина считается по данным за последние семь дней (не включая сегодня).  {% endnote %}

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: OAuth
$config = YandexMarketApi\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new YandexMarketApi\Api\ExpressApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$campaign_id = 56; // int | Идентификатор кампании.  **Где его взять**  Войдите в личный кабинет, в меню слева выберите **Настройки** → **Настройки API** и скопируйте число из поля **Номер кампании**.
$offer_id = array('offer_id_example'); // string[] | Идентификатор товара в каталоге.
$shop_sku = array('shop_sku_example'); // string[] | Ваш SKU товара.  Параметр может быть указан несколько раз, например:  ``` ...shop_sku=123&shop_sku=129&shop_sku=141... ```  В запросе можно указать либо параметр `shopSku`, либо любые параметры для фильтрации товаров. Совместное использование параметра `shopSku` и параметров для фильтрации приведет к ошибке.
$mapping_kind = new \YandexMarketApi\Model\OfferMappingKindType(); // OfferMappingKindType | Тип маппинга.
$status = array(new \YandexMarketApi\Model\\YandexMarketApi\Model\OfferProcessingStatusType()); // \YandexMarketApi\Model\OfferProcessingStatusType[] | Фильтрация по статусу публикации товара:  * READY — товар прошел модерацию. * IN_WORK — товар проходит модерацию. * NEED_CONTENT — для товара без SKU на Маркете marketSku нужно найти карточку самостоятельно или создать ее. * NEED_INFO — товар не прошел модерацию из-за ошибок или недостающих сведений в описании товара. * REJECTED — товар не прошел модерацию, так как Маркет не планирует размещать подобные товары. * SUSPENDED — товар не прошел модерацию, так как Маркет пока не размещает подобные товары. * OTHER — товар не прошел модерацию по другой причине.  Можно указать несколько статусов в одном параметре, через запятую, или в нескольких одинаковых параметрах. Например:  ``` ...status=READY,IN_WORK... ...status=READY&status=IN_WORK... ```  В запросе можно указать либо параметр shopSku, либо любые параметры для фильтрации товаров. Совместное использование параметра shopSku и параметров для фильтрации приведет к ошибке.
$availability = array(new \YandexMarketApi\Model\\YandexMarketApi\Model\OfferAvailabilityStatusType()); // \YandexMarketApi\Model\OfferAvailabilityStatusType[] | Фильтрация по планам поставок товара:  * ACTIVE — поставки будут. * INACTIVE — поставок не будет: товар есть на складе, но вы больше не планируете его поставлять. * DELISTED — архив: товар закончился на складе, и его поставок больше не будет.  Можно указать несколько значений в одном параметре, через запятую, или в нескольких одинаковых параметрах. Например:  ``` ...availability=INACTIVE,DELISTED... ...availability=INACTIVE&availability=DELISTED... ```  В запросе можно указать либо параметр `shopSku`, либо любые параметры для фильтрации товаров. Совместное использование параметра `shopSku` и параметров для фильтрации приведет к ошибке.
$category_id = array(56); // int[] | Фильтрация по идентификатору категории на Маркете.  Чтобы узнать идентификатор категории, откройте ее страницу и посмотрите на ее URL. Идентификатор — это число после «...?hid=». Например:  ##https://market.yandex.ru/catalog--bezmeny/65590/list?hid=13431995##  Можно указать несколько идентификаторов в одном параметре, через запятую, или в нескольких одинаковых параметрах. Например:  ``` ...category_id=14727164,14382343... ...category_id=14727164&category_id=14382343... ```  В запросе можно указать либо параметр `shopSku`, либо любые параметры для фильтрации товаров. Совместное использование параметра `shopSku` и параметров для фильтрации приведет к ошибке.
$vendor = array('vendor_example'); // string[] | Фильтрация по бренду товара.  Можно указать несколько брендов в одном параметре, через запятую, или в нескольких одинаковых параметрах. Например:  ``` ...vendor=Aqua%20Minerale,Borjomi... ...vendor=Aqua%20Minerale&vendor=Borjomi... ```  Чтобы товар попал в результаты фильтрации, его бренд должен точно совпадать с одним из указанных в запросе. Например, если указан бренд Schwarzkopf, то в результатах не будет товаров Schwarzkopf Professional.  Если в названии бренда есть символы, которые не входят в таблицу ASCII (в том числе кириллические символы), используйте для них URL-кодирование. Например, пробел — %20, апостроф «'» — %27 и т. д. Подробнее см. в разделе [Кодирование URL русскоязычной Википедии](https://ru.wikipedia.org/wiki/URL#Кодирование_URL).  В запросе можно указать либо параметр shopSku, либо любые параметры для фильтрации товаров. Совместное использование параметра shopSku и параметров для фильтрации приведет к ошибке.
$page_token = eyBuZXh0SWQ6IDIzNDIgfQ==; // string | Идентификатор страницы c результатами.  Если параметр не указан, возвращается самая старая страница.  Рекомендуется передавать значение выходного параметра `nextPageToken`, полученное при последнем запросе.  Если задан `page_token`, параметры `offset`, `page_number` и `page_size` игнорируются.
$limit = 20; // int | Количество товаров в выходных данных.

try {
    $result = $apiInstance->getOfferMappingEntries($campaign_id, $offer_id, $shop_sku, $mapping_kind, $status, $availability, $category_id, $vendor, $page_token, $limit);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ExpressApi->getOfferMappingEntries: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **campaign_id** | **int**| Идентификатор кампании.  **Где его взять**  Войдите в личный кабинет, в меню слева выберите **Настройки** → **Настройки API** и скопируйте число из поля **Номер кампании**. | |
| **offer_id** | [**string[]**](../Model/string.md)| Идентификатор товара в каталоге. | [optional] |
| **shop_sku** | [**string[]**](../Model/string.md)| Ваш SKU товара.  Параметр может быть указан несколько раз, например:  &#x60;&#x60;&#x60; ...shop_sku&#x3D;123&amp;shop_sku&#x3D;129&amp;shop_sku&#x3D;141... &#x60;&#x60;&#x60;  В запросе можно указать либо параметр &#x60;shopSku&#x60;, либо любые параметры для фильтрации товаров. Совместное использование параметра &#x60;shopSku&#x60; и параметров для фильтрации приведет к ошибке. | [optional] |
| **mapping_kind** | [**OfferMappingKindType**](../Model/.md)| Тип маппинга. | [optional] |
| **status** | [**\YandexMarketApi\Model\OfferProcessingStatusType[]**](../Model/\YandexMarketApi\Model\OfferProcessingStatusType.md)| Фильтрация по статусу публикации товара:  * READY — товар прошел модерацию. * IN_WORK — товар проходит модерацию. * NEED_CONTENT — для товара без SKU на Маркете marketSku нужно найти карточку самостоятельно или создать ее. * NEED_INFO — товар не прошел модерацию из-за ошибок или недостающих сведений в описании товара. * REJECTED — товар не прошел модерацию, так как Маркет не планирует размещать подобные товары. * SUSPENDED — товар не прошел модерацию, так как Маркет пока не размещает подобные товары. * OTHER — товар не прошел модерацию по другой причине.  Можно указать несколько статусов в одном параметре, через запятую, или в нескольких одинаковых параметрах. Например:  &#x60;&#x60;&#x60; ...status&#x3D;READY,IN_WORK... ...status&#x3D;READY&amp;status&#x3D;IN_WORK... &#x60;&#x60;&#x60;  В запросе можно указать либо параметр shopSku, либо любые параметры для фильтрации товаров. Совместное использование параметра shopSku и параметров для фильтрации приведет к ошибке. | [optional] |
| **availability** | [**\YandexMarketApi\Model\OfferAvailabilityStatusType[]**](../Model/\YandexMarketApi\Model\OfferAvailabilityStatusType.md)| Фильтрация по планам поставок товара:  * ACTIVE — поставки будут. * INACTIVE — поставок не будет: товар есть на складе, но вы больше не планируете его поставлять. * DELISTED — архив: товар закончился на складе, и его поставок больше не будет.  Можно указать несколько значений в одном параметре, через запятую, или в нескольких одинаковых параметрах. Например:  &#x60;&#x60;&#x60; ...availability&#x3D;INACTIVE,DELISTED... ...availability&#x3D;INACTIVE&amp;availability&#x3D;DELISTED... &#x60;&#x60;&#x60;  В запросе можно указать либо параметр &#x60;shopSku&#x60;, либо любые параметры для фильтрации товаров. Совместное использование параметра &#x60;shopSku&#x60; и параметров для фильтрации приведет к ошибке. | [optional] |
| **category_id** | [**int[]**](../Model/int.md)| Фильтрация по идентификатору категории на Маркете.  Чтобы узнать идентификатор категории, откройте ее страницу и посмотрите на ее URL. Идентификатор — это число после «...?hid&#x3D;». Например:  ##https://market.yandex.ru/catalog--bezmeny/65590/list?hid&#x3D;13431995##  Можно указать несколько идентификаторов в одном параметре, через запятую, или в нескольких одинаковых параметрах. Например:  &#x60;&#x60;&#x60; ...category_id&#x3D;14727164,14382343... ...category_id&#x3D;14727164&amp;category_id&#x3D;14382343... &#x60;&#x60;&#x60;  В запросе можно указать либо параметр &#x60;shopSku&#x60;, либо любые параметры для фильтрации товаров. Совместное использование параметра &#x60;shopSku&#x60; и параметров для фильтрации приведет к ошибке. | [optional] |
| **vendor** | [**string[]**](../Model/string.md)| Фильтрация по бренду товара.  Можно указать несколько брендов в одном параметре, через запятую, или в нескольких одинаковых параметрах. Например:  &#x60;&#x60;&#x60; ...vendor&#x3D;Aqua%20Minerale,Borjomi... ...vendor&#x3D;Aqua%20Minerale&amp;vendor&#x3D;Borjomi... &#x60;&#x60;&#x60;  Чтобы товар попал в результаты фильтрации, его бренд должен точно совпадать с одним из указанных в запросе. Например, если указан бренд Schwarzkopf, то в результатах не будет товаров Schwarzkopf Professional.  Если в названии бренда есть символы, которые не входят в таблицу ASCII (в том числе кириллические символы), используйте для них URL-кодирование. Например, пробел — %20, апостроф «&#39;» — %27 и т. д. Подробнее см. в разделе [Кодирование URL русскоязычной Википедии](https://ru.wikipedia.org/wiki/URL#Кодирование_URL).  В запросе можно указать либо параметр shopSku, либо любые параметры для фильтрации товаров. Совместное использование параметра shopSku и параметров для фильтрации приведет к ошибке. | [optional] |
| **page_token** | **string**| Идентификатор страницы c результатами.  Если параметр не указан, возвращается самая старая страница.  Рекомендуется передавать значение выходного параметра &#x60;nextPageToken&#x60;, полученное при последнем запросе.  Если задан &#x60;page_token&#x60;, параметры &#x60;offset&#x60;, &#x60;page_number&#x60; и &#x60;page_size&#x60; игнорируются. | [optional] |
| **limit** | **int**| Количество товаров в выходных данных. | [optional] |

### Return type

[**\YandexMarketApi\Model\GetOfferMappingEntriesResponse**](../Model/GetOfferMappingEntriesResponse.md)

### Authorization

[OAuth](../../README.md#OAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getOrder()`

```php
getOrder($campaign_id, $order_id): \YandexMarketApi\Model\GetOrderResponse
```

Информация о заказе

Возвращает информацию о заказе.  |**⚙️ Лимит:** 1 000 000 запросов в час| |-|

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: OAuth
$config = YandexMarketApi\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new YandexMarketApi\Api\ExpressApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$campaign_id = 56; // int | Идентификатор кампании.  **Где его взять**  Войдите в личный кабинет, в меню слева выберите **Настройки** → **Настройки API** и скопируйте число из поля **Номер кампании**.
$order_id = 56; // int | Идентификатор заказа.

try {
    $result = $apiInstance->getOrder($campaign_id, $order_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ExpressApi->getOrder: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **campaign_id** | **int**| Идентификатор кампании.  **Где его взять**  Войдите в личный кабинет, в меню слева выберите **Настройки** → **Настройки API** и скопируйте число из поля **Номер кампании**. | |
| **order_id** | **int**| Идентификатор заказа. | |

### Return type

[**\YandexMarketApi\Model\GetOrderResponse**](../Model/GetOrderResponse.md)

### Authorization

[OAuth](../../README.md#OAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getOrderLabelsData()`

```php
getOrderLabelsData($campaign_id, $order_id): \YandexMarketApi\Model\GetOrderLabelsDataResponse
```

Информация на ярлыках‑наклейках

Возвращает информацию на ярлыках, которые клеятся на грузовые места в заказе.  |**⚙️ Лимит:** 1 000 000 запросов в час| |-|

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: OAuth
$config = YandexMarketApi\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new YandexMarketApi\Api\ExpressApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$campaign_id = 56; // int | Идентификатор кампании.  **Где его взять**  Войдите в личный кабинет, в меню слева выберите **Настройки** → **Настройки API** и скопируйте число из поля **Номер кампании**.
$order_id = 56; // int | Идентификатор заказа.

try {
    $result = $apiInstance->getOrderLabelsData($campaign_id, $order_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ExpressApi->getOrderLabelsData: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **campaign_id** | **int**| Идентификатор кампании.  **Где его взять**  Войдите в личный кабинет, в меню слева выберите **Настройки** → **Настройки API** и скопируйте число из поля **Номер кампании**. | |
| **order_id** | **int**| Идентификатор заказа. | |

### Return type

[**\YandexMarketApi\Model\GetOrderLabelsDataResponse**](../Model/GetOrderLabelsDataResponse.md)

### Authorization

[OAuth](../../README.md#OAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getOrders()`

```php
getOrders($campaign_id, $status, $substatus, $from_date, $to_date, $supplier_shipment_date_from, $supplier_shipment_date_to, $dispatch_type, $fake, $has_cis, $only_waiting_for_cancellation_approve, $only_estimated_delivery, $page, $page_size): \YandexMarketApi\Model\GetOrdersResponse
```

Информация о заказах

Возвращает информацию о заказах.  Доступна фильтрация по нескольким характеристикам заказов:  * дате оформления;  * статусу;  * этапу обработки или причине отмены;  * типу (настоящий или тестовый);  * дате отгрузки в службу доставки.  Информация о заказах, доставленных или отмененных больше 30 дней назад, не возвращается. Ее можно получить с помощью запроса информации об отдельном заказе `GET /campaigns/{campaignId}/orders/{orderId}` (если у вас есть идентификатор заказа) или запроса отчета по заказам `POST /campaigns/{campaignId}/stats/orders`.  Максимальный диапазон дат за один запрос к ресурсу — 30 дней. Максимальное количество заказов в выходных данных запроса — 50.  Результаты возвращаются постранично.  |**⚙️ Лимит:** 1 000 000 запросов в час| |-|

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: OAuth
$config = YandexMarketApi\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new YandexMarketApi\Api\ExpressApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$campaign_id = 56; // int | Идентификатор кампании.  **Где его взять**  Войдите в личный кабинет, в меню слева выберите **Настройки** → **Настройки API** и скопируйте число из поля **Номер кампании**.
$status = new \YandexMarketApi\Model\OrderStatusType(); // OrderStatusType | Статус заказа:  * `CANCELLED` — заказ отменен.  * `DELIVERED` — заказ получен покупателем.  * `DELIVERY` — заказ передан в службу доставки.  * `PICKUP` — заказ доставлен в пункт самовывоза.  * `PROCESSING` — заказ находится в обработке.  * `UNPAID` — заказ оформлен, но еще не оплачен (если выбрана оплата при оформлении).  Также могут возвращаться другие значения. Обрабатывать их не требуется.
$substatus = new \YandexMarketApi\Model\OrderSubstatusType(); // OrderSubstatusType | Этап обработки заказа (если он имеет статус `PROCESSING`) или причина отмены заказа (если он имеет статус `CANCELLED`).  Возможные значения для заказа в статусе `PROCESSING`:  * `STARTED` — заказ подтвержден, его можно начать обрабатывать. * `READY_TO_SHIP` — заказ собран и готов к отправке. * `SHIPPED` — заказ передан службе доставки.  Возможные значения для заказа в статусе `CANCELLED`:  * `DELIVERY_SERVICE_UNDELIVERED` — служба доставки не смогла доставить заказ.  * `PROCESSING_EXPIRED` — магазин не обработал заказ в течение семи дней.  * `REPLACING_ORDER` — покупатель решил заменить товар другим по собственной инициативе.  * `RESERVATION_EXPIRED` — покупатель не завершил оформление зарезервированного заказа в течение 10 минут.  * `RESERVATION_FAILED` — Маркет не может продолжить дальнейшую обработку заказа.  * `SHOP_FAILED` — магазин не может выполнить заказ.  * `USER_CHANGED_MIND` — покупатель отменил заказ по личным причинам.  * `USER_NOT_PAID` — покупатель не оплатил заказ (для типа оплаты `PREPAID`) в течение 30 минут.  * `USER_REFUSED_DELIVERY` — покупателя не устроили условия доставки.  * `USER_REFUSED_PRODUCT` — покупателю не подошел товар.  * `USER_REFUSED_QUALITY` — покупателя не устроило качество товара.  * `USER_UNREACHABLE` — не удалось связаться с покупателем. * `USER_WANTS_TO_CHANGE_DELIVERY_DATE` — покупатель хочет получить заказ в другой день. * `CANCELLED_COURIER_NOT_FOUND` — не удалось найти курьера.  Также могут возвращаться другие значения. Обрабатывать их не требуется.
$from_date = new \DateTime("2013-10-20T19:20:30+01:00"); // \DateTime | Начальная дата для фильтрации заказов по дате оформления.  Формат даты: `ДД-ММ-ГГГГ`.  Между начальной и конечной датой (параметр `toDate`) должно быть не больше 30 дней.  Значение по умолчанию: 30 дней назад от текущей даты.
$to_date = new \DateTime("2013-10-20T19:20:30+01:00"); // \DateTime | Конечная дата для фильтрации заказов по дате оформления.  Формат даты: `ДД-ММ-ГГГГ`.  Между начальной (параметр `fromDate`) и конечной датой должно быть не больше 30 дней.  Значение по умолчанию: текущая дата.
$supplier_shipment_date_from = new \DateTime("2013-10-20T19:20:30+01:00"); // \DateTime | Начальная дата для фильтрации заказов по дате отгрузки в службу доставки (параметр `shipmentDate`).  Формат даты: `ДД-ММ-ГГГГ`.  Между начальной и конечной датой (параметр `supplierShipmentDateTo`) должно быть не больше 30 дней.  Начальная дата включается в интервал для фильтрации.
$supplier_shipment_date_to = new \DateTime("2013-10-20T19:20:30+01:00"); // \DateTime | Конечная дата для фильтрации заказов по дате отгрузки в службу доставки (параметр `shipmentDate`).  Формат даты: `ДД-ММ-ГГГГ`.  Между начальной (параметр `supplierShipmentDateFrom`) и конечной датой должно быть не больше 30 дней.  Конечная дата не включается в интервал для фильтрации.
$dispatch_type = new \YandexMarketApi\Model\OrderDeliveryDispatchType(); // OrderDeliveryDispatchType | Способ отгрузки
$fake = True; // bool | Фильтрация заказов по типам:  * `false` — заказ пользователя.  * `true` — тестовый заказ Маркета.
$has_cis = True; // bool | Нужно ли вернуть только те заказы, в составе которых есть хотя бы один товар с кодом идентификации из системы «Честный ЗНАК»:  * `true` — да;  * `false` — нет.  Такие коды присваиваются товарам, которые подлежат маркировке и относятся к определенным категориям.
$only_waiting_for_cancellation_approve = True; // bool | Фильтрация заказов по наличию запросов покупателей на отмену:  * `true` — возвращаются только заказы, которые находятся в статусе `DELIVERY` или `PICKUP` и которые пользователи решили отменить. Чтобы подтвердить или отклонить отмену, отправьте запрос [PUT campaigns/{campaignId}/orders/{orderId}/cancellation/accept](../../reference/orders/acceptOrderCancellation).
$only_estimated_delivery = True; // bool | Фильтрация заказов с долгой доставкой (31-60 дней) по подтвержденной дате доставки:  * `true` — возвращаются только заказы с неподтвержденной датой доставки. * `false` — фильтрация не применяется.
$page = 1; // int | Номер страницы результатов.  Значение по умолчанию: 1.  Используется вместе с параметром page_size.  `page_number` игнорируется, если задан `page_token`, `limit` или `offset`.
$page_size = 56; // int | Количество скрытых товаров на странице.  Используется вместе с параметром page_number.  `page_size` игнорируется, если задан `page_token`, `limit` или `offset`.

try {
    $result = $apiInstance->getOrders($campaign_id, $status, $substatus, $from_date, $to_date, $supplier_shipment_date_from, $supplier_shipment_date_to, $dispatch_type, $fake, $has_cis, $only_waiting_for_cancellation_approve, $only_estimated_delivery, $page, $page_size);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ExpressApi->getOrders: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **campaign_id** | **int**| Идентификатор кампании.  **Где его взять**  Войдите в личный кабинет, в меню слева выберите **Настройки** → **Настройки API** и скопируйте число из поля **Номер кампании**. | |
| **status** | [**OrderStatusType**](../Model/.md)| Статус заказа:  * &#x60;CANCELLED&#x60; — заказ отменен.  * &#x60;DELIVERED&#x60; — заказ получен покупателем.  * &#x60;DELIVERY&#x60; — заказ передан в службу доставки.  * &#x60;PICKUP&#x60; — заказ доставлен в пункт самовывоза.  * &#x60;PROCESSING&#x60; — заказ находится в обработке.  * &#x60;UNPAID&#x60; — заказ оформлен, но еще не оплачен (если выбрана оплата при оформлении).  Также могут возвращаться другие значения. Обрабатывать их не требуется. | [optional] |
| **substatus** | [**OrderSubstatusType**](../Model/.md)| Этап обработки заказа (если он имеет статус &#x60;PROCESSING&#x60;) или причина отмены заказа (если он имеет статус &#x60;CANCELLED&#x60;).  Возможные значения для заказа в статусе &#x60;PROCESSING&#x60;:  * &#x60;STARTED&#x60; — заказ подтвержден, его можно начать обрабатывать. * &#x60;READY_TO_SHIP&#x60; — заказ собран и готов к отправке. * &#x60;SHIPPED&#x60; — заказ передан службе доставки.  Возможные значения для заказа в статусе &#x60;CANCELLED&#x60;:  * &#x60;DELIVERY_SERVICE_UNDELIVERED&#x60; — служба доставки не смогла доставить заказ.  * &#x60;PROCESSING_EXPIRED&#x60; — магазин не обработал заказ в течение семи дней.  * &#x60;REPLACING_ORDER&#x60; — покупатель решил заменить товар другим по собственной инициативе.  * &#x60;RESERVATION_EXPIRED&#x60; — покупатель не завершил оформление зарезервированного заказа в течение 10 минут.  * &#x60;RESERVATION_FAILED&#x60; — Маркет не может продолжить дальнейшую обработку заказа.  * &#x60;SHOP_FAILED&#x60; — магазин не может выполнить заказ.  * &#x60;USER_CHANGED_MIND&#x60; — покупатель отменил заказ по личным причинам.  * &#x60;USER_NOT_PAID&#x60; — покупатель не оплатил заказ (для типа оплаты &#x60;PREPAID&#x60;) в течение 30 минут.  * &#x60;USER_REFUSED_DELIVERY&#x60; — покупателя не устроили условия доставки.  * &#x60;USER_REFUSED_PRODUCT&#x60; — покупателю не подошел товар.  * &#x60;USER_REFUSED_QUALITY&#x60; — покупателя не устроило качество товара.  * &#x60;USER_UNREACHABLE&#x60; — не удалось связаться с покупателем. * &#x60;USER_WANTS_TO_CHANGE_DELIVERY_DATE&#x60; — покупатель хочет получить заказ в другой день. * &#x60;CANCELLED_COURIER_NOT_FOUND&#x60; — не удалось найти курьера.  Также могут возвращаться другие значения. Обрабатывать их не требуется. | [optional] |
| **from_date** | **\DateTime**| Начальная дата для фильтрации заказов по дате оформления.  Формат даты: &#x60;ДД-ММ-ГГГГ&#x60;.  Между начальной и конечной датой (параметр &#x60;toDate&#x60;) должно быть не больше 30 дней.  Значение по умолчанию: 30 дней назад от текущей даты. | [optional] |
| **to_date** | **\DateTime**| Конечная дата для фильтрации заказов по дате оформления.  Формат даты: &#x60;ДД-ММ-ГГГГ&#x60;.  Между начальной (параметр &#x60;fromDate&#x60;) и конечной датой должно быть не больше 30 дней.  Значение по умолчанию: текущая дата. | [optional] |
| **supplier_shipment_date_from** | **\DateTime**| Начальная дата для фильтрации заказов по дате отгрузки в службу доставки (параметр &#x60;shipmentDate&#x60;).  Формат даты: &#x60;ДД-ММ-ГГГГ&#x60;.  Между начальной и конечной датой (параметр &#x60;supplierShipmentDateTo&#x60;) должно быть не больше 30 дней.  Начальная дата включается в интервал для фильтрации. | [optional] |
| **supplier_shipment_date_to** | **\DateTime**| Конечная дата для фильтрации заказов по дате отгрузки в службу доставки (параметр &#x60;shipmentDate&#x60;).  Формат даты: &#x60;ДД-ММ-ГГГГ&#x60;.  Между начальной (параметр &#x60;supplierShipmentDateFrom&#x60;) и конечной датой должно быть не больше 30 дней.  Конечная дата не включается в интервал для фильтрации. | [optional] |
| **dispatch_type** | [**OrderDeliveryDispatchType**](../Model/.md)| Способ отгрузки | [optional] |
| **fake** | **bool**| Фильтрация заказов по типам:  * &#x60;false&#x60; — заказ пользователя.  * &#x60;true&#x60; — тестовый заказ Маркета. | [optional] |
| **has_cis** | **bool**| Нужно ли вернуть только те заказы, в составе которых есть хотя бы один товар с кодом идентификации из системы «Честный ЗНАК»:  * &#x60;true&#x60; — да;  * &#x60;false&#x60; — нет.  Такие коды присваиваются товарам, которые подлежат маркировке и относятся к определенным категориям. | [optional] |
| **only_waiting_for_cancellation_approve** | **bool**| Фильтрация заказов по наличию запросов покупателей на отмену:  * &#x60;true&#x60; — возвращаются только заказы, которые находятся в статусе &#x60;DELIVERY&#x60; или &#x60;PICKUP&#x60; и которые пользователи решили отменить. Чтобы подтвердить или отклонить отмену, отправьте запрос [PUT campaigns/{campaignId}/orders/{orderId}/cancellation/accept](../../reference/orders/acceptOrderCancellation). | [optional] |
| **only_estimated_delivery** | **bool**| Фильтрация заказов с долгой доставкой (31-60 дней) по подтвержденной дате доставки:  * &#x60;true&#x60; — возвращаются только заказы с неподтвержденной датой доставки. * &#x60;false&#x60; — фильтрация не применяется. | [optional] |
| **page** | **int**| Номер страницы результатов.  Значение по умолчанию: 1.  Используется вместе с параметром page_size.  &#x60;page_number&#x60; игнорируется, если задан &#x60;page_token&#x60;, &#x60;limit&#x60; или &#x60;offset&#x60;. | [optional] [default to 1] |
| **page_size** | **int**| Количество скрытых товаров на странице.  Используется вместе с параметром page_number.  &#x60;page_size&#x60; игнорируется, если задан &#x60;page_token&#x60;, &#x60;limit&#x60; или &#x60;offset&#x60;. | [optional] |

### Return type

[**\YandexMarketApi\Model\GetOrdersResponse**](../Model/GetOrdersResponse.md)

### Authorization

[OAuth](../../README.md#OAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getOrdersStats()`

```php
getOrdersStats($campaign_id, $page_token, $limit, $get_orders_stats_request): \YandexMarketApi\Model\GetOrdersStatsResponse
```

Отчет по заказам

Возвращает подробный отчет по заказам на Маркете, в которых есть ваши товары. С помощью отчета вы можете собрать статистику по вашим заказам и узнать, например, какие из товаров чаще всего возвращаются покупателями, какие, наоборот, пользуются большим спросом, какая комиссия начисляется за заказы и т. п.  В одном запросе можно получить отчет не более чем по 200 заказам.  |**⚙️ Лимит:** 10 000 запросов в час| |-|

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: OAuth
$config = YandexMarketApi\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new YandexMarketApi\Api\ExpressApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$campaign_id = 56; // int | Идентификатор кампании.  **Где его взять**  Войдите в личный кабинет, в меню слева выберите **Настройки** → **Настройки API** и скопируйте число из поля **Номер кампании**.
$page_token = eyBuZXh0SWQ6IDIzNDIgfQ==; // string | Идентификатор страницы c результатами.  Если параметр не указан, возвращается самая старая страница.  Рекомендуется передавать значение выходного параметра `nextPageToken`, полученное при последнем запросе.  Если задан `page_token`, параметры `offset`, `page_number` и `page_size` игнорируются.
$limit = 20; // int | Количество товаров в выходных данных.
$get_orders_stats_request = new \YandexMarketApi\Model\GetOrdersStatsRequest(); // \YandexMarketApi\Model\GetOrdersStatsRequest

try {
    $result = $apiInstance->getOrdersStats($campaign_id, $page_token, $limit, $get_orders_stats_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ExpressApi->getOrdersStats: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **campaign_id** | **int**| Идентификатор кампании.  **Где его взять**  Войдите в личный кабинет, в меню слева выберите **Настройки** → **Настройки API** и скопируйте число из поля **Номер кампании**. | |
| **page_token** | **string**| Идентификатор страницы c результатами.  Если параметр не указан, возвращается самая старая страница.  Рекомендуется передавать значение выходного параметра &#x60;nextPageToken&#x60;, полученное при последнем запросе.  Если задан &#x60;page_token&#x60;, параметры &#x60;offset&#x60;, &#x60;page_number&#x60; и &#x60;page_size&#x60; игнорируются. | [optional] |
| **limit** | **int**| Количество товаров в выходных данных. | [optional] |
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

## `getPrices()`

```php
getPrices($campaign_id, $page_token, $limit): \YandexMarketApi\Model\GetPricesResponse
```

Список цен

Возвращает список цен, установленных вами на товары любым способом: например, через партнерский API или в файле с каталогом.  Количество товаров, о которых можно получить информацию в течение суток, определяется по формуле:  ```(количество товаров партнера на витрине) * 25```  {% note info %}  Общее количество товаров считается по данным за последние семь дней (не включая сегодня) и не может быть выше 2 миллионов.  {% endnote %}  Способы установки цен описаны [в Справке для продавцов](https://yandex.ru/support/marketplace/assortment/operations/prices.html).

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: OAuth
$config = YandexMarketApi\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new YandexMarketApi\Api\ExpressApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$campaign_id = 56; // int | Идентификатор кампании.  **Где его взять**  Войдите в личный кабинет, в меню слева выберите **Настройки** → **Настройки API** и скопируйте число из поля **Номер кампании**.
$page_token = eyBuZXh0SWQ6IDIzNDIgfQ==; // string | Идентификатор страницы c результатами.  Если параметр не указан, возвращается самая старая страница.  Рекомендуется передавать значение выходного параметра `nextPageToken`, полученное при последнем запросе.  Если задан `page_token`, параметры `offset`, `page_number` и `page_size` игнорируются.
$limit = 20; // int | Количество товаров в выходных данных.

try {
    $result = $apiInstance->getPrices($campaign_id, $page_token, $limit);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ExpressApi->getPrices: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **campaign_id** | **int**| Идентификатор кампании.  **Где его взять**  Войдите в личный кабинет, в меню слева выберите **Настройки** → **Настройки API** и скопируйте число из поля **Номер кампании**. | |
| **page_token** | **string**| Идентификатор страницы c результатами.  Если параметр не указан, возвращается самая старая страница.  Рекомендуется передавать значение выходного параметра &#x60;nextPageToken&#x60;, полученное при последнем запросе.  Если задан &#x60;page_token&#x60;, параметры &#x60;offset&#x60;, &#x60;page_number&#x60; и &#x60;page_size&#x60; игнорируются. | [optional] |
| **limit** | **int**| Количество товаров в выходных данных. | [optional] |

### Return type

[**\YandexMarketApi\Model\GetPricesResponse**](../Model/GetPricesResponse.md)

### Authorization

[OAuth](../../README.md#OAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getReturn()`

```php
getReturn($campaign_id, $order_id, $return_id): \YandexMarketApi\Model\GetReturnResponse
```

Информация о возврате или невыкупе

Получает информацию по одному возврату или невыкупу.  |**⚙️ Лимит:** 10 000 запросов в час| |-|

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: OAuth
$config = YandexMarketApi\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new YandexMarketApi\Api\ExpressApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$campaign_id = 56; // int | Идентификатор кампании.  **Где его взять**  Войдите в личный кабинет, в меню слева выберите **Настройки** → **Настройки API** и скопируйте число из поля **Номер кампании**.
$order_id = 56; // int | Идентификатор заказа.
$return_id = 56; // int | Идентификатор возврата

try {
    $result = $apiInstance->getReturn($campaign_id, $order_id, $return_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ExpressApi->getReturn: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **campaign_id** | **int**| Идентификатор кампании.  **Где его взять**  Войдите в личный кабинет, в меню слева выберите **Настройки** → **Настройки API** и скопируйте число из поля **Номер кампании**. | |
| **order_id** | **int**| Идентификатор заказа. | |
| **return_id** | **int**| Идентификатор возврата | |

### Return type

[**\YandexMarketApi\Model\GetReturnResponse**](../Model/GetReturnResponse.md)

### Authorization

[OAuth](../../README.md#OAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getReturnApplication()`

```php
getReturnApplication($campaign_id, $order_id, $return_id): \SplFileObject
```

Получение заявления на возврат

Загружает заявление покупателя на возврат товара.  |**⚙️ Лимит:** 10 000 запросов в час| |-|

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: OAuth
$config = YandexMarketApi\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new YandexMarketApi\Api\ExpressApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$campaign_id = 56; // int | Идентификатор кампании.  **Где его взять**  Войдите в личный кабинет, в меню слева выберите **Настройки** → **Настройки API** и скопируйте число из поля **Номер кампании**.
$order_id = 56; // int | Идентификатор заказа.
$return_id = 56; // int | Идентификатор возврата

try {
    $result = $apiInstance->getReturnApplication($campaign_id, $order_id, $return_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ExpressApi->getReturnApplication: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **campaign_id** | **int**| Идентификатор кампании.  **Где его взять**  Войдите в личный кабинет, в меню слева выберите **Настройки** → **Настройки API** и скопируйте число из поля **Номер кампании**. | |
| **order_id** | **int**| Идентификатор заказа. | |
| **return_id** | **int**| Идентификатор возврата | |

### Return type

**\SplFileObject**

### Authorization

[OAuth](../../README.md#OAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/octet-stream`, `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getReturnPhoto()`

```php
getReturnPhoto($campaign_id, $order_id, $return_id, $item_id, $image_hash): \SplFileObject
```

Получение фотографии возврата

Получает фотографии, которые покупатель приложил к заявлению на возврат товара.  |**⚙️ Лимит:** 10 000 запросов в час| |-|

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: OAuth
$config = YandexMarketApi\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new YandexMarketApi\Api\ExpressApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$campaign_id = 56; // int | Идентификатор кампании.  **Где его взять**  Войдите в личный кабинет, в меню слева выберите **Настройки** → **Настройки API** и скопируйте число из поля **Номер кампании**.
$order_id = 56; // int | Идентификатор заказа.
$return_id = 56; // int | Идентификатор возврата
$item_id = 56; // int | Идентификатор позиции в возврате
$image_hash = 'image_hash_example'; // string | Хеш ссылки изображения для загрузки

try {
    $result = $apiInstance->getReturnPhoto($campaign_id, $order_id, $return_id, $item_id, $image_hash);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ExpressApi->getReturnPhoto: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **campaign_id** | **int**| Идентификатор кампании.  **Где его взять**  Войдите в личный кабинет, в меню слева выберите **Настройки** → **Настройки API** и скопируйте число из поля **Номер кампании**. | |
| **order_id** | **int**| Идентификатор заказа. | |
| **return_id** | **int**| Идентификатор возврата | |
| **item_id** | **int**| Идентификатор позиции в возврате | |
| **image_hash** | **string**| Хеш ссылки изображения для загрузки | |

### Return type

**\SplFileObject**

### Authorization

[OAuth](../../README.md#OAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/octet-stream`, `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getReturns()`

```php
getReturns($campaign_id, $page_token, $limit, $order_ids, $statuses, $type, $from_date, $to_date, $from_date2, $to_date2): \YandexMarketApi\Model\GetReturnsResponse
```

Список возвратов и невыкупов

Получает список возвратов и невыкупов.  Чтобы получить информацию по одному возврату или невыкупу, выполните запрос `GET /campaigns/{campaignId}/orders/{orderId}/returns/{returnId}`.  |**⚙️ Лимит:** 10 000 запросов в час| |-|

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: OAuth
$config = YandexMarketApi\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new YandexMarketApi\Api\ExpressApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$campaign_id = 56; // int | Идентификатор кампании.  **Где его взять**  Войдите в личный кабинет, в меню слева выберите **Настройки** → **Настройки API** и скопируйте число из поля **Номер кампании**.
$page_token = eyBuZXh0SWQ6IDIzNDIgfQ==; // string | Идентификатор страницы c результатами.  Если параметр не указан, возвращается самая старая страница.  Рекомендуется передавать значение выходного параметра `nextPageToken`, полученное при последнем запросе.  Если задан `page_token`, параметры `offset`, `page_number` и `page_size` игнорируются.
$limit = 20; // int | Количество товаров в выходных данных.
$order_ids = 123543,432321; // int[] | Идентификаторы заказов — для фильтрации результатов.  Несколько идентификаторов перечисляются через запятую без пробела.
$statuses = STARTED_BY_USER,WAITING_FOR_DECISION; // \YandexMarketApi\Model\RefundStatusType[] | Статусы возвратов или невыкупов — для фильтрации результатов.  Возможные значения:  * CREATED — возврат создан.  * RECEIVED — принят у покупателя.  * IN_TRANSIT — возврат в пути.  * READY_FOR_PICKUP — возврат готов к выдаче магазину.  * PICKED — возврат выдан магазину.  * LOST — возврат утерян при транспортировке.  * CANCELLED — возврат отменен.  * EXPIRED — возврат просрочен, покупатель не передал товар.  * FULFILMENT_RECEIVED — возврат принят на складе Маркета.  * PREPARED_FOR_UTILIZATION — возврат передан в утилизацию.  * UTILIZED — возврат утилизирован.  Несколько статусов перечисляются через запятую.
$type = new \YandexMarketApi\Model\ReturnType(); // ReturnType | Тип заказа для фильтрации:  * RETURN — возврат.  * UNREDEEMED — невыкуп.  Если не указывать, в ответе будут и возвраты, и невыкупы.
$from_date = 2022-10-31; // \DateTime | Начальные дата и время для фильтрации возвратов или невыкупов по дате оформления.  Формат: ГГГГ-ММ-ДД.
$to_date = 2022-11-30; // \DateTime | Конечные дата и время для фильтрации возвратов или невыкупов по дате оформления.  Формат: ГГГГ-ММ-ДД.
$from_date2 = 2022-10-31; // \DateTime | Дата, с которой интересуют возвраты (устаревшее, будет удалено)
$to_date2 = 2022-11-30; // \DateTime | Дата, до которой интересуют возвраты (устаревшее, будет удалено)

try {
    $result = $apiInstance->getReturns($campaign_id, $page_token, $limit, $order_ids, $statuses, $type, $from_date, $to_date, $from_date2, $to_date2);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ExpressApi->getReturns: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **campaign_id** | **int**| Идентификатор кампании.  **Где его взять**  Войдите в личный кабинет, в меню слева выберите **Настройки** → **Настройки API** и скопируйте число из поля **Номер кампании**. | |
| **page_token** | **string**| Идентификатор страницы c результатами.  Если параметр не указан, возвращается самая старая страница.  Рекомендуется передавать значение выходного параметра &#x60;nextPageToken&#x60;, полученное при последнем запросе.  Если задан &#x60;page_token&#x60;, параметры &#x60;offset&#x60;, &#x60;page_number&#x60; и &#x60;page_size&#x60; игнорируются. | [optional] |
| **limit** | **int**| Количество товаров в выходных данных. | [optional] |
| **order_ids** | [**int[]**](../Model/int.md)| Идентификаторы заказов — для фильтрации результатов.  Несколько идентификаторов перечисляются через запятую без пробела. | [optional] |
| **statuses** | [**\YandexMarketApi\Model\RefundStatusType[]**](../Model/\YandexMarketApi\Model\RefundStatusType.md)| Статусы возвратов или невыкупов — для фильтрации результатов.  Возможные значения:  * CREATED — возврат создан.  * RECEIVED — принят у покупателя.  * IN_TRANSIT — возврат в пути.  * READY_FOR_PICKUP — возврат готов к выдаче магазину.  * PICKED — возврат выдан магазину.  * LOST — возврат утерян при транспортировке.  * CANCELLED — возврат отменен.  * EXPIRED — возврат просрочен, покупатель не передал товар.  * FULFILMENT_RECEIVED — возврат принят на складе Маркета.  * PREPARED_FOR_UTILIZATION — возврат передан в утилизацию.  * UTILIZED — возврат утилизирован.  Несколько статусов перечисляются через запятую. | [optional] |
| **type** | [**ReturnType**](../Model/.md)| Тип заказа для фильтрации:  * RETURN — возврат.  * UNREDEEMED — невыкуп.  Если не указывать, в ответе будут и возвраты, и невыкупы. | [optional] |
| **from_date** | **\DateTime**| Начальные дата и время для фильтрации возвратов или невыкупов по дате оформления.  Формат: ГГГГ-ММ-ДД. | [optional] |
| **to_date** | **\DateTime**| Конечные дата и время для фильтрации возвратов или невыкупов по дате оформления.  Формат: ГГГГ-ММ-ДД. | [optional] |
| **from_date2** | **\DateTime**| Дата, с которой интересуют возвраты (устаревшее, будет удалено) | [optional] |
| **to_date2** | **\DateTime**| Дата, до которой интересуют возвраты (устаревшее, будет удалено) | [optional] |

### Return type

[**\YandexMarketApi\Model\GetReturnsResponse**](../Model/GetReturnsResponse.md)

### Authorization

[OAuth](../../README.md#OAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getSuggestedOfferMappingEntries()`

```php
getSuggestedOfferMappingEntries($campaign_id, $get_suggested_offer_mapping_entries_request): \YandexMarketApi\Model\GetSuggestedOfferMappingEntriesResponse
```

Рекомендованные карточки для ваших товаров

Возвращает идентификаторы карточек товаров на Маркете, рекомендованных для ваших товаров.  Каждому товару, который вы размещаете, должна соответствовать карточка товара на Маркете со своим идентификатором — SKU на Маркете. Он указывается в URL карточки товара, после «...sku=», например:  ##https://market.yandex.ru/product--yandex-kniga/484830016?sku=484830016…##  Чтобы получить для товаров рекомендованные SKU на Маркете, передайте в теле POST-запроса как можно больше информации о них: названия, производителей, штрихкоды, цены и т. д.  Полученные SKU можно передать вместе с информацией о ваших товарах с помощью запроса [POST campaigns/{campaignId}/offer-mapping-entries/updates](../../reference/offer-mappings/updateOfferMappingEntries.md).  В одном запросе можно получить не более 500 рекомендаций.  В течение часа можно получить не более 100 000 рекомендаций.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: OAuth
$config = YandexMarketApi\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new YandexMarketApi\Api\ExpressApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$campaign_id = 56; // int | Идентификатор кампании.  **Где его взять**  Войдите в личный кабинет, в меню слева выберите **Настройки** → **Настройки API** и скопируйте число из поля **Номер кампании**.
$get_suggested_offer_mapping_entries_request = new \YandexMarketApi\Model\GetSuggestedOfferMappingEntriesRequest(); // \YandexMarketApi\Model\GetSuggestedOfferMappingEntriesRequest

try {
    $result = $apiInstance->getSuggestedOfferMappingEntries($campaign_id, $get_suggested_offer_mapping_entries_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ExpressApi->getSuggestedOfferMappingEntries: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **campaign_id** | **int**| Идентификатор кампании.  **Где его взять**  Войдите в личный кабинет, в меню слева выберите **Настройки** → **Настройки API** и скопируйте число из поля **Номер кампании**. | |
| **get_suggested_offer_mapping_entries_request** | [**\YandexMarketApi\Model\GetSuggestedOfferMappingEntriesRequest**](../Model/GetSuggestedOfferMappingEntriesRequest.md)|  | |

### Return type

[**\YandexMarketApi\Model\GetSuggestedOfferMappingEntriesResponse**](../Model/GetSuggestedOfferMappingEntriesResponse.md)

### Authorization

[OAuth](../../README.md#OAuth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getSuggestedPrices()`

```php
getSuggestedPrices($campaign_id, $suggest_prices_request): \YandexMarketApi\Model\SuggestPricesResponse
```

Цены для продвижения товаров

Возвращает цены для продвижения товаров, которые вы размещаете на Маркете.  Товары, для которых нужно получить цены, передаются в теле POST-запроса.  Цены для продвижения зависят от цен, установленных на товары другими партнерами. Если один товар поставляют несколько партнеров, на Маркете сначала продается товар с более низкой ценой. Когда закончится товар по низкой цене, начнет продаваться товар по более высокой цене.  Выходные данные содержат для каждого товара несколько цен, соответствующих разным типам продвижения.  Установить цены на товары можно с помощью запроса `POST /campaigns/{campaignId}/offer-prices/updates` или другими способами: например, указать их в файле с каталогом. Также вы можете использовать стратегии для автоматической установки рекомендованных цен или минимальных цен на Маркете.  В одном запросе можно получить цены не более чем для 1000 товаров.  В течение часа можно получить цены не более чем для 100 000 товаров.  Подробно об автоматическом управлении ценами рассказано [в Справке для продавцов](https://yandex.ru/support/marketplace/marketing/prices.html).

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: OAuth
$config = YandexMarketApi\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new YandexMarketApi\Api\ExpressApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$campaign_id = 56; // int | Идентификатор кампании.  **Где его взять**  Войдите в личный кабинет, в меню слева выберите **Настройки** → **Настройки API** и скопируйте число из поля **Номер кампании**.
$suggest_prices_request = new \YandexMarketApi\Model\SuggestPricesRequest(); // \YandexMarketApi\Model\SuggestPricesRequest

try {
    $result = $apiInstance->getSuggestedPrices($campaign_id, $suggest_prices_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ExpressApi->getSuggestedPrices: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **campaign_id** | **int**| Идентификатор кампании.  **Где его взять**  Войдите в личный кабинет, в меню слева выберите **Настройки** → **Настройки API** и скопируйте число из поля **Номер кампании**. | |
| **suggest_prices_request** | [**\YandexMarketApi\Model\SuggestPricesRequest**](../Model/SuggestPricesRequest.md)|  | |

### Return type

[**\YandexMarketApi\Model\SuggestPricesResponse**](../Model/SuggestPricesResponse.md)

### Authorization

[OAuth](../../README.md#OAuth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

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


$apiInstance = new YandexMarketApi\Api\ExpressApi(
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
    echo 'Exception when calling ExpressApi->provideOrderItemCis: ', $e->getMessage(), PHP_EOL;
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

## `provideOrderItemIdentifiers()`

```php
provideOrderItemIdentifiers($campaign_id, $order_id, $provide_order_item_identifiers_request): \YandexMarketApi\Model\ProvideOrderItemIdentifiersResponse
```

Передача уникальных кодов маркировки единиц товара

Передает Маркету коды маркировки для единиц товара в указанном заказе.  Принимаются коды двух типов:  * Коды «Честного знака». * УИН для ювелирных изделий.  {% note warning %}  Прежде чем работать с этим методом, обязательно прочтите [статью о работе с маркируемыми товарами](https://yandex.ru/support/marketplace/orders/cz.html).  {% endnote %}  Для каждой позиции в заказе, требующей маркировки, нужно передать список кодов — по одному для каждой единицы товара. Например, если в заказе две пары тапочек и одна пара туфель, получится список из двух кодов для первой позиции и список из одного кода для второй.  |**⚙️ Лимит:** 1 000 000 запросов в час| |-|

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: OAuth
$config = YandexMarketApi\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new YandexMarketApi\Api\ExpressApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$campaign_id = 56; // int | Идентификатор кампании.  **Где его взять**  Войдите в личный кабинет, в меню слева выберите **Настройки** → **Настройки API** и скопируйте число из поля **Номер кампании**.
$order_id = 56; // int | Идентификатор заказа.
$provide_order_item_identifiers_request = new \YandexMarketApi\Model\ProvideOrderItemIdentifiersRequest(); // \YandexMarketApi\Model\ProvideOrderItemIdentifiersRequest

try {
    $result = $apiInstance->provideOrderItemIdentifiers($campaign_id, $order_id, $provide_order_item_identifiers_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ExpressApi->provideOrderItemIdentifiers: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **campaign_id** | **int**| Идентификатор кампании.  **Где его взять**  Войдите в личный кабинет, в меню слева выберите **Настройки** → **Настройки API** и скопируйте число из поля **Номер кампании**. | |
| **order_id** | **int**| Идентификатор заказа. | |
| **provide_order_item_identifiers_request** | [**\YandexMarketApi\Model\ProvideOrderItemIdentifiersRequest**](../Model/ProvideOrderItemIdentifiersRequest.md)|  | |

### Return type

[**\YandexMarketApi\Model\ProvideOrderItemIdentifiersResponse**](../Model/ProvideOrderItemIdentifiersResponse.md)

### Authorization

[OAuth](../../README.md#OAuth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `putBidsForBusiness()`

```php
putBidsForBusiness($business_id, $put_sku_bids_request): \YandexMarketApi\Model\EmptyApiResponse
```

Включение буста продаж и установка ставок

Запускает буст продаж — создает и включает кампанию, добавляет в нее товары и назначает на них ставки.  При первом использовании запроса Маркет: создаст единую на все магазины бизнес-аккаунта кампанию, добавит в нее товары с указанными ставками, включит для них ценовую стратегию и запустит продвижение. Повторное использование запроса позволит обновить ставки на товары в этой кампании или добавить новые. Подробнее о ценовой стратегии читайте в [Справке Маркета для продавцов](https://yandex.ru/support/marketplace/marketing/campaigns.html#price-strategy).  Если товара с указанным SKU нет, он будет проигнорирован. Если в будущем в каталоге появится товар с таким SKU, он автоматически будет добавлен в кампанию с указанной ставкой.  Запрос всегда работает с одной и той же созданной через API кампанией. Если в личном кабинете удалить ее, при следующем выполнении запроса Маркет создаст новую. У созданной через API кампании всегда наибольший приоритет над остальными — изменить его нельзя.  Выполнение запроса включает кампанию и ценовую стратегию, если они были отключены.  Внести другие изменения в созданную через API кампанию можно в личном кабинете:  * выключить или включить кампанию; * изменить ее название; * выключить или включить ценовую стратегию.  Чтобы остановить продвижение отдельных товаров и удалить их из кампании, передайте для них нулевую ставку в поле bid.  Подробнее о том, как работает буст продаж, читайте в [Справке Маркета для продавцов](https://yandex.ru/support/marketplace/marketing/campaigns.html).  {% note info \"𝓠 Как посмотреть расходы на буст продаж?\" %}  𝓐 Фактические расходы на буст указаны в отчете по заказам ([POST campaigns/{campaignId}/stats/orders](https://yandex.ru/dev/market/partner-api/doc/ru/reference/stats/getOrdersStats)). Сумма содержится в поле `bidFee`.  {% endnote %}  В одном запросе может быть максимум 1500 товаров.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: OAuth
$config = YandexMarketApi\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new YandexMarketApi\Api\ExpressApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$business_id = 56; // int | Идентификатор бизнеса.  Чтобы узнать идентификатор, войдите в личный кабинет и выберите **Товары** → **Каталог**, а затем в левом верхнем углу откройте переключатель бизнес-аккаунтов. Чтобы скопировать идентификатор, наведите на него мышь и нажмите появившуюся кнопку.
$put_sku_bids_request = new \YandexMarketApi\Model\PutSkuBidsRequest(); // \YandexMarketApi\Model\PutSkuBidsRequest | description

try {
    $result = $apiInstance->putBidsForBusiness($business_id, $put_sku_bids_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ExpressApi->putBidsForBusiness: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **business_id** | **int**| Идентификатор бизнеса.  Чтобы узнать идентификатор, войдите в личный кабинет и выберите **Товары** → **Каталог**, а затем в левом верхнем углу откройте переключатель бизнес-аккаунтов. Чтобы скопировать идентификатор, наведите на него мышь и нажмите появившуюся кнопку. | |
| **put_sku_bids_request** | [**\YandexMarketApi\Model\PutSkuBidsRequest**](../Model/PutSkuBidsRequest.md)| description | |

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

## `setOrderShipmentBoxes()`

```php
setOrderShipmentBoxes($campaign_id, $order_id, $shipment_id, $set_order_shipment_boxes_request): \YandexMarketApi\Model\SetOrderShipmentBoxesResponse
```

Передача количества грузовых мест в заказе

Отгружаемый Маркету заказ может не влезть в одну коробку или упаковку — в этом случае получается, что он занимает несколько грузовых мест.  Количество грузовых мест нужно обязательно передавать Маркету, если оно не равно 1. Это делается перед переводом его в статус **Готов к отгрузке**. Подробно о том, что в какой момент нужно передавать, рассказано в [пошаговой инструкции](../../step-by-step/fbs.md).  Метод устроен немного нестандартно: количество задается длиной массива пустых объектов.  Раньше метод требовал передачи большего количества данных. Запросы, оформленные по старому образцу, работают, но лучше делать по-новому.  {% cut \"Как было раньше\" %}  Структура тела PUT-запроса:  ``` {   \"boxes\":   [     {       \"fulfilmentId\": \"{string}\",       \"weight\": {int64},       \"width\": {int64},       \"height\": {int64},       \"depth\": {int64},       \"items\":       [         {           \"id\": {int64},           \"count\": {int32}         },         ...       ]     },     ...   ] } ``` | **Параметр**  | **Тип**  | **Значение**  | | ----------- | ----------- | ----------- | | `boxes`       |           | Список грузовых мест.       |  **Параметры, вложенные в `boxes`** | **Параметр**  | **Тип**  | **Значение**  | | ----------- | ----------- | ----------- | | `fulfilmentId`       |  String   | Идентификатор грузового места в информационной системе магазина. Сформируйте идентификатор по шаблону: `номер заказа на Маркете-номер грузового места`. Например, `7206821‑1, 7206821‑2` и т. д. | | `weight`       | Int64        | Масса брутто грузового места (суммарная масса упаковки и содержимого) в граммах. | | `width`       | Int64   | Ширина грузового места в сантиметрах.       | | `height`       | Int64   | Высота грузового места в сантиметрах.       | | `depth`       | Int64   | Глубина грузового места в сантиметрах.        | | `items`       | Int64   | Список товаров в грузовом месте.       |  **Параметры, вложенные в `items`** | **Параметр**  | **Тип**  | **Значение**  | | ----------- | ----------- | ----------- | | `id`       | Int64     | Идентификатор товара в рамках заказа.   | | `count`    | Int32     | Количество единиц товара в грузовом месте.       |  {% endcut %}  |**⚙️ Лимит:** 1 000 000 запросов в час| |-|

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: OAuth
$config = YandexMarketApi\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new YandexMarketApi\Api\ExpressApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$campaign_id = 56; // int | Идентификатор кампании.  **Где его взять**  Войдите в личный кабинет, в меню слева выберите **Настройки** → **Настройки API** и скопируйте число из поля **Номер кампании**.
$order_id = 56; // int | Идентификатор заказа.
$shipment_id = 56; // int | Параметр больше не используется. Вставьте любое число — просто чтобы получился корректный URL.
$set_order_shipment_boxes_request = new \YandexMarketApi\Model\SetOrderShipmentBoxesRequest(); // \YandexMarketApi\Model\SetOrderShipmentBoxesRequest

try {
    $result = $apiInstance->setOrderShipmentBoxes($campaign_id, $order_id, $shipment_id, $set_order_shipment_boxes_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ExpressApi->setOrderShipmentBoxes: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **campaign_id** | **int**| Идентификатор кампании.  **Где его взять**  Войдите в личный кабинет, в меню слева выберите **Настройки** → **Настройки API** и скопируйте число из поля **Номер кампании**. | |
| **order_id** | **int**| Идентификатор заказа. | |
| **shipment_id** | **int**| Параметр больше не используется. Вставьте любое число — просто чтобы получился корректный URL. | |
| **set_order_shipment_boxes_request** | [**\YandexMarketApi\Model\SetOrderShipmentBoxesRequest**](../Model/SetOrderShipmentBoxesRequest.md)|  | |

### Return type

[**\YandexMarketApi\Model\SetOrderShipmentBoxesResponse**](../Model/SetOrderShipmentBoxesResponse.md)

### Authorization

[OAuth](../../README.md#OAuth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `updateOfferMappingEntries()`

```php
updateOfferMappingEntries($campaign_id, $update_offer_mapping_entry_request): \YandexMarketApi\Model\EmptyApiResponse
```

Добавление и редактирование товаров в каталоге

Добавляет товары, указанные в запросе, в ваш каталог товаров и редактирует уже имеющиеся товары.  Информацию о товарах нужно передать в теле POST-запроса.  У каждого товара должен быть ваш SKU — уникальный код, который вы используете для идентификации товара:  * Чтобы добавить в каталог новый товар, укажите в параметре `shopSku` ваш SKU, которого еще нет в каталоге. * Чтобы отредактировать товар из каталога, укажите в параметре `shopSku` ваш SKU этого товара в каталоге.  В обоих случаях в запросе нужно передать полное описание товара, даже если вы хотите изменить только несколько характеристик.  Если вы знаете, какой карточке товара на Маркете соответствует ваш товар, укажите ее идентификатор (SKU на Маркете) во входном параметре mapping. Получить SKU на Маркете рекомендованной карточки товара можно с помощью запроса [POST campaigns/{campaignId}/offer-mapping-entries/suggestions](../../reference/offer-mappings/getSuggestedOfferMappingEntries.md) или через личный кабинет. Если SKU на Маркете не указан, сотрудники Маркета сами подберут или создадут подходящую карточку товара, либо у него появится статус `NEED_CONTENT` (нужно найти карточку или создать ее самостоятельно) в выходных данных запроса [GET campaigns/{campaignId}/offer-mapping-entries](../../reference/offer-mappings/getOfferMappingEntries.md).  Перед публикацией товары проходят модерацию. Если в одном из отправленных товаров найдена ошибка, ответ на запрос будет иметь HTTP-код 400 Bad Request, и ни один из товаров не отправится на модерацию. При этом если вы не передадите все обязательные параметры для какого‑либо товара, после модерации у него появится статус `NEED_INFO` (в описании товара не хватает информации) в выходных данных запроса [GET campaigns/{campaignId}/offer-mapping-entries](../../reference/offer-mappings/getOfferMappingEntries.md).  В одном запросе можно добавить не более 500 товаров.  В течение минуты можно добавить не более 5000 товаров.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: OAuth
$config = YandexMarketApi\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new YandexMarketApi\Api\ExpressApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$campaign_id = 56; // int | Идентификатор кампании.  **Где его взять**  Войдите в личный кабинет, в меню слева выберите **Настройки** → **Настройки API** и скопируйте число из поля **Номер кампании**.
$update_offer_mapping_entry_request = new \YandexMarketApi\Model\UpdateOfferMappingEntryRequest(); // \YandexMarketApi\Model\UpdateOfferMappingEntryRequest

try {
    $result = $apiInstance->updateOfferMappingEntries($campaign_id, $update_offer_mapping_entry_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ExpressApi->updateOfferMappingEntries: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **campaign_id** | **int**| Идентификатор кампании.  **Где его взять**  Войдите в личный кабинет, в меню слева выберите **Настройки** → **Настройки API** и скопируйте число из поля **Номер кампании**. | |
| **update_offer_mapping_entry_request** | [**\YandexMarketApi\Model\UpdateOfferMappingEntryRequest**](../Model/UpdateOfferMappingEntryRequest.md)|  | |

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

## `updateOrderItems()`

```php
updateOrderItems($campaign_id, $order_id, $update_order_item_request)
```

Удаление товара из заказа или уменьшение числа единиц

Изменяет состав заказа, если позволяет выбранная служба доставки, в случаях:  * покупатель уменьшил количество товара; * магазин не может поставить все товары в заказе.  Для этого заказ должен находится в статусе `\"status\": \"PROCESSING\"` этапа обработки `\"substatus\": \"STARTED\"`. После передачи статуса `\"substatus\": \"READY_TO_SHIP\"` изменить состав невозможно.  Если одинаковых товаров несколько, для уменьшения количества передайте обновленное значение в атрибуте `count` параметра `item`.  Чтобы полностью удалить товар из заказа:  * передайте значение `0`; или * не передавайте параметр `item`.  Нельзя удалить или уменьшить количество товара, если он:  * добавлен по акции; * составляет 99% стоимости заказа; * единственный товар в заказе.  Если необходимо удалить такой товар, отмените заказ. Для этого отправьте запрос методом `PUT campaigns/{campaignId}/orders/{orderId}/status` и передайте статус заказа `CANCELLED` с причиной отмены `SHOP_FAILED`.  {% note info \"Увеличить заказ нельзя\" %}  С помощью запроса нельзя увеличить количество одинаковых товаров, добавить новые товары в заказ или заменить один товар другим.  {% endnote %}  **Возврат денег покупателю**  Если покупатель оплатил товар при оформлении, Маркет вернет ему деньги за удаленные из заказа товары в течение двух дней:  * при оплате банковской картой — с момента, когда магазин переведет заказ в статус `SHIPPED`;  * при оплате через Apple Pay или Google Pay — с момента, когда магазин удалит товар из заказа.  |**⚙️ Лимит:** 1 000 000 запросов в час| |-|

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: OAuth
$config = YandexMarketApi\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new YandexMarketApi\Api\ExpressApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$campaign_id = 56; // int | Идентификатор кампании.  **Где его взять**  Войдите в личный кабинет, в меню слева выберите **Настройки** → **Настройки API** и скопируйте число из поля **Номер кампании**.
$order_id = 56; // int | Идентификатор заказа.
$update_order_item_request = new \YandexMarketApi\Model\UpdateOrderItemRequest(); // \YandexMarketApi\Model\UpdateOrderItemRequest

try {
    $apiInstance->updateOrderItems($campaign_id, $order_id, $update_order_item_request);
} catch (Exception $e) {
    echo 'Exception when calling ExpressApi->updateOrderItems: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **campaign_id** | **int**| Идентификатор кампании.  **Где его взять**  Войдите в личный кабинет, в меню слева выберите **Настройки** → **Настройки API** и скопируйте число из поля **Номер кампании**. | |
| **order_id** | **int**| Идентификатор заказа. | |
| **update_order_item_request** | [**\YandexMarketApi\Model\UpdateOrderItemRequest**](../Model/UpdateOrderItemRequest.md)|  | |

### Return type

void (empty response body)

### Authorization

[OAuth](../../README.md#OAuth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `updateOrderStatus()`

```php
updateOrderStatus($campaign_id, $order_id, $update_order_status_request): \YandexMarketApi\Model\UpdateOrderStatusResponse
```

Изменение статуса заказа

Изменяет статус заказа. Возможные изменения статусов:  * Если магазин подтвердил и подготовил заказ к отправке, то заказ из статуса `\"status\": \"PROCESSING\"` и этапа обработки `\"substatus\": \"STARTED\"` нужно перевести в статус `\"status\": \"PROCESSING\"` и этап обработки `\"substatus\": \"READY_TO_SHIP\"`. * Если магазин подтвердил заказ, но не может его выполнить (например, товар числится в базе, но отсутствует на складе или нет нужного цвета), то заказ из статуса `\"status\": \"PROCESSING\"` и этапа обработки `\"substatus\": \"STARTED\"` нужно перевести в статус `\"status\": \"CANCELLED\"` с причиной отмены заказа `\"substatus\": \"SHOP_FAILED\"`. * Если магазин подготовил заказ к отгрузке, но не может его выполнить (например, последний товар был поврежден или оказался с браком), то заказ из статуса `\"status\": \"PROCESSING\"` и этапа обработки `\"substatus\": \"READY_TO_SHIP\"` нужно перевести в статус `\"status\": \"CANCELLED\"` с причиной отмены заказа `\"substatus\": \"SHOP_FAILED\"`.  |**⚙️ Лимит:** 1 000 000 запросов в час| |-|

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: OAuth
$config = YandexMarketApi\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new YandexMarketApi\Api\ExpressApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$campaign_id = 56; // int | Идентификатор кампании.  **Где его взять**  Войдите в личный кабинет, в меню слева выберите **Настройки** → **Настройки API** и скопируйте число из поля **Номер кампании**.
$order_id = 56; // int | Идентификатор заказа.
$update_order_status_request = new \YandexMarketApi\Model\UpdateOrderStatusRequest(); // \YandexMarketApi\Model\UpdateOrderStatusRequest

try {
    $result = $apiInstance->updateOrderStatus($campaign_id, $order_id, $update_order_status_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ExpressApi->updateOrderStatus: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **campaign_id** | **int**| Идентификатор кампании.  **Где его взять**  Войдите в личный кабинет, в меню слева выберите **Настройки** → **Настройки API** и скопируйте число из поля **Номер кампании**. | |
| **order_id** | **int**| Идентификатор заказа. | |
| **update_order_status_request** | [**\YandexMarketApi\Model\UpdateOrderStatusRequest**](../Model/UpdateOrderStatusRequest.md)|  | |

### Return type

[**\YandexMarketApi\Model\UpdateOrderStatusResponse**](../Model/UpdateOrderStatusResponse.md)

### Authorization

[OAuth](../../README.md#OAuth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `updateOrderStatuses()`

```php
updateOrderStatuses($campaign_id, $update_order_statuses_request): \YandexMarketApi\Model\UpdateOrderStatusesResponse
```

Изменение статусов заказа

Изменяет статусы нескольких заказов. Максимальное количество заказов, у которых можно изменить статус в одном запросе, — 30.  Возможные изменения статусов:  * Если магазин подтвердил и подготовил заказ к отправке, то заказ из статуса `\"status\": \"PROCESSING\"`и этапа обработки `\"substatus\": \"STARTED\"` нужно перевести в статус `\"status\": \"PROCESSING\"` и этап обработки `\"substatus\": \"READY_TO_SHIP\"`. * Если магазин подтвердил заказ, но не может его выполнить (например, товар числится в базе, но отсутствует на складе или нет нужного цвета), то заказ из статуса `\"status\": \"PROCESSING\"` и этапа обработки `\"substatus\": \"STARTED\"` нужно перевести в статус `\"status\": \"CANCELLED\"` с причиной отмены заказа `\"substatus\": \"SHOP_FAILED\"`. * Если магазин подготовил заказ к отгрузке, но не может его выполнить (например, последний товар был поврежден или оказался с браком), то заказ из статуса `\"status\": \"PROCESSING\"` и этапа обработки `\"substatus\": \"READY_TO_SHIP\"` нужно перевести в статус `\"status\": \"CANCELLED\"` с причиной отмены заказа `\"substatus\": \"SHOP_FAILED\"`.  Максимальное количество заказов, у которых можно изменить статус в одном запросе, — 30.  |**⚙️ Лимит:** 1 000 000 запросов в час| |-|

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: OAuth
$config = YandexMarketApi\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new YandexMarketApi\Api\ExpressApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$campaign_id = 56; // int | Идентификатор кампании.  **Где его взять**  Войдите в личный кабинет, в меню слева выберите **Настройки** → **Настройки API** и скопируйте число из поля **Номер кампании**.
$update_order_statuses_request = new \YandexMarketApi\Model\UpdateOrderStatusesRequest(); // \YandexMarketApi\Model\UpdateOrderStatusesRequest

try {
    $result = $apiInstance->updateOrderStatuses($campaign_id, $update_order_statuses_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ExpressApi->updateOrderStatuses: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **campaign_id** | **int**| Идентификатор кампании.  **Где его взять**  Войдите в личный кабинет, в меню слева выберите **Настройки** → **Настройки API** и скопируйте число из поля **Номер кампании**. | |
| **update_order_statuses_request** | [**\YandexMarketApi\Model\UpdateOrderStatusesRequest**](../Model/UpdateOrderStatusesRequest.md)|  | |

### Return type

[**\YandexMarketApi\Model\UpdateOrderStatusesResponse**](../Model/UpdateOrderStatusesResponse.md)

### Authorization

[OAuth](../../README.md#OAuth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `updatePrices()`

```php
updatePrices($campaign_id, $update_prices_request): \YandexMarketApi\Model\EmptyApiResponse
```

Установка цен на товары

Устанавливает цены на товары.  В течение минуты можно установить цены для определенного количества товаров на витрине. Если у магазина:  * не более 100 000 товаров — 500 товаров;  * более 100 000 товаров — ограничение определяется по формуле:  ```(количество товаров на витрине) / 200```  {% note info %}  Количество товаров магазина считается по данным за последние семь дней (не включая сегодня).  {% endnote %}

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: OAuth
$config = YandexMarketApi\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new YandexMarketApi\Api\ExpressApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$campaign_id = 56; // int | Идентификатор кампании.  **Где его взять**  Войдите в личный кабинет, в меню слева выберите **Настройки** → **Настройки API** и скопируйте число из поля **Номер кампании**.
$update_prices_request = new \YandexMarketApi\Model\UpdatePricesRequest(); // \YandexMarketApi\Model\UpdatePricesRequest

try {
    $result = $apiInstance->updatePrices($campaign_id, $update_prices_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ExpressApi->updatePrices: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **campaign_id** | **int**| Идентификатор кампании.  **Где его взять**  Войдите в личный кабинет, в меню слева выберите **Настройки** → **Настройки API** и скопируйте число из поля **Номер кампании**. | |
| **update_prices_request** | [**\YandexMarketApi\Model\UpdatePricesRequest**](../Model/UpdatePricesRequest.md)|  | |

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

## `updateStocks()`

```php
updateStocks($campaign_id, $update_stocks_request): \YandexMarketApi\Model\EmptyApiResponse
```

Передача информации об остатках

Передает данные об остатках товаров на витрине. В одном запросе можно передать от одного до 2000 товаров, в минуту можно передать не более 500 запросов.  Обязательно указывайте SKU **в точности** так, как он указан в каталоге. Например, _557722_ и _0557722_ — это два разных SKU.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: OAuth
$config = YandexMarketApi\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new YandexMarketApi\Api\ExpressApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$campaign_id = 56; // int | Идентификатор кампании.  **Где его взять**  Войдите в личный кабинет, в меню слева выберите **Настройки** → **Настройки API** и скопируйте число из поля **Номер кампании**.
$update_stocks_request = new \YandexMarketApi\Model\UpdateStocksRequest(); // \YandexMarketApi\Model\UpdateStocksRequest

try {
    $result = $apiInstance->updateStocks($campaign_id, $update_stocks_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ExpressApi->updateStocks: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **campaign_id** | **int**| Идентификатор кампании.  **Где его взять**  Войдите в личный кабинет, в меню слева выберите **Настройки** → **Настройки API** и скопируйте число из поля **Номер кампании**. | |
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

## `verifyOrderEac()`

```php
verifyOrderEac($campaign_id, $order_id, $verify_order_eac_request): \YandexMarketApi\Model\VerifyOrderEacResponse
```

Передача кода проверки

Отправляет Маркету код подтверждения для его проверки.  Код подтверждает передачу заказа или невыкупа:  * курьеру — курьер должен назвать магазину код; * магазину — магазин называет код курьеру.  Если магазин получает невыкупленный заказ, то ему нужно назвать курьеру код из личного кабинета или приложения.  Если у магазина настроена работа с кодами подтверждения, в запросах [POST /order/status](https://yandex.ru/dev/market/partner-api/doc/ru/pushapi/reference/post-order-status), [PUT campaigns/{campaignId}/orders/{orderId}/status](https://yandex.ru/dev/market/partner-api/doc/ru/reference/orders/updateOrderStatus), [GET campaigns/{campaignId}/orders](https://yandex.ru/dev/market/partner-api/doc/ru/reference/orders/getOrders), [GET campaigns/{campaignId}/orders/{orderId}](https://yandex.ru/dev/market/partner-api/doc/ru/reference/orders/getOrder) в параметре `delivery`, вложенном в `order` будет возвращаться параметр `eacType` с типом `Enum` — тип кода подтверждения для передачи заказа.  Возможные значения: `MERCHANT_TO_COURIER` — магазин называет код курьеру, `COURIER_TO_MERCHANT` — курьер называет код магазину.  Параметр `eacType` возвращается при статусах заказа `COURIER_FOUND`, `COURIER_ARRIVED_TO_SENDER` и `DELIVERY_SERVICE_UNDELIVERED`. Если заказ в других статусах, параметр может отсутствовать.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: OAuth
$config = YandexMarketApi\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new YandexMarketApi\Api\ExpressApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$campaign_id = 56; // int | Идентификатор кампании.  **Где его взять**  Войдите в личный кабинет, в меню слева выберите **Настройки** → **Настройки API** и скопируйте число из поля **Номер кампании**.
$order_id = 56; // int | Идентификатор заказа.
$verify_order_eac_request = new \YandexMarketApi\Model\VerifyOrderEacRequest(); // \YandexMarketApi\Model\VerifyOrderEacRequest

try {
    $result = $apiInstance->verifyOrderEac($campaign_id, $order_id, $verify_order_eac_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ExpressApi->verifyOrderEac: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **campaign_id** | **int**| Идентификатор кампании.  **Где его взять**  Войдите в личный кабинет, в меню слева выберите **Настройки** → **Настройки API** и скопируйте число из поля **Номер кампании**. | |
| **order_id** | **int**| Идентификатор заказа. | |
| **verify_order_eac_request** | [**\YandexMarketApi\Model\VerifyOrderEacRequest**](../Model/VerifyOrderEacRequest.md)|  | |

### Return type

[**\YandexMarketApi\Model\VerifyOrderEacResponse**](../Model/VerifyOrderEacResponse.md)

### Authorization

[OAuth](../../README.md#OAuth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
