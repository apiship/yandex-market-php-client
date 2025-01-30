# YandexMarketApi\ReportsApi

All URIs are relative to https://api.partner.market.yandex.ru, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**generateBoostConsolidatedReport()**](ReportsApi.md#generateBoostConsolidatedReport) | **POST** /reports/boost-consolidated/generate | Отчет по бусту продаж |
| [**generateCompetitorsPositionReport()**](ReportsApi.md#generateCompetitorsPositionReport) | **POST** /reports/competitors-position/generate | Отчет «Конкурентная позиция» |
| [**generateGoodsFeedbackReport()**](ReportsApi.md#generateGoodsFeedbackReport) | **POST** /reports/goods-feedback/generate | Отчет по отзывам о товарах |
| [**generateGoodsMovementReport()**](ReportsApi.md#generateGoodsMovementReport) | **POST** /reports/goods-movement/generate | Отчет по движению товаров (FBY) |
| [**generateGoodsRealizationReport()**](ReportsApi.md#generateGoodsRealizationReport) | **POST** /reports/goods-realization/generate | Отчет по реализации |
| [**generateGoodsTurnoverReport()**](ReportsApi.md#generateGoodsTurnoverReport) | **POST** /reports/goods-turnover/generate | Отчет по оборачиваемости (FBY) |
| [**generateMassOrderLabelsReport()**](ReportsApi.md#generateMassOrderLabelsReport) | **POST** /reports/documents/labels/generate | Готовые ярлыки‑наклейки на все коробки в нескольких заказах |
| [**generatePricesReport()**](ReportsApi.md#generatePricesReport) | **POST** /reports/prices/generate | Отчет «Цены на рынке» |
| [**generateShelfsStatisticsReport()**](ReportsApi.md#generateShelfsStatisticsReport) | **POST** /reports/shelf-statistics/generate | Отчет по полкам |
| [**generateShipmentListDocumentReport()**](ReportsApi.md#generateShipmentListDocumentReport) | **POST** /reports/documents/shipment-list/generate | Получение листа сборки |
| [**generateShowsSalesReport()**](ReportsApi.md#generateShowsSalesReport) | **POST** /reports/shows-sales/generate | Отчет «Аналитика продаж» |
| [**generateStocksOnWarehousesReport()**](ReportsApi.md#generateStocksOnWarehousesReport) | **POST** /reports/stocks-on-warehouses/generate | Отчет по остаткам на складах |
| [**generateUnitedMarketplaceServicesReport()**](ReportsApi.md#generateUnitedMarketplaceServicesReport) | **POST** /reports/united-marketplace-services/generate | Отчет по стоимости услуг |
| [**generateUnitedNettingReport()**](ReportsApi.md#generateUnitedNettingReport) | **POST** /reports/united-netting/generate | Отчет по платежам |
| [**generateUnitedOrdersReport()**](ReportsApi.md#generateUnitedOrdersReport) | **POST** /reports/united-orders/generate | Отчет по заказам |
| [**getReportInfo()**](ReportsApi.md#getReportInfo) | **GET** /reports/info/{reportId} | Получение заданного отчета |


## `generateBoostConsolidatedReport()`

```php
generateBoostConsolidatedReport($generate_boost_consolidated_request, $format): \YandexMarketApi\Model\GenerateReportResponse
```

Отчет по бусту продаж

{% include notitle [access](../../_auto/method_scopes/generateBoostConsolidatedReport.md) %}  Запускает генерацию **сводного отчета по бусту продаж** за заданный период. Отчет содержит информацию по всем кампаниям, созданным и через API, и в кабинете.  Узнать статус генерации и получить ссылку на готовый отчет можно с помощью запроса [GET reports/info/{reportId}](../../reference/reports/getReportInfo.md).  {% include notitle [reports](../../_auto/reports/boost/consolidated/business_boost_consolidated.md) %}  |**⚙️ Лимит:** 100 запросов в час| |-|

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: ApiKey
$config = YandexMarketApi\Configuration::getDefaultConfiguration()->setApiKey('Api-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = YandexMarketApi\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Api-Key', 'Bearer');

// Configure OAuth2 access token for authorization: OAuth
$config = YandexMarketApi\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new YandexMarketApi\Api\ReportsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$generate_boost_consolidated_request = new \YandexMarketApi\Model\GenerateBoostConsolidatedRequest(); // \YandexMarketApi\Model\GenerateBoostConsolidatedRequest
$format = new \YandexMarketApi\Model\ReportFormatType(); // ReportFormatType | Формат отчета.

try {
    $result = $apiInstance->generateBoostConsolidatedReport($generate_boost_consolidated_request, $format);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ReportsApi->generateBoostConsolidatedReport: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **generate_boost_consolidated_request** | [**\YandexMarketApi\Model\GenerateBoostConsolidatedRequest**](../Model/GenerateBoostConsolidatedRequest.md)|  | |
| **format** | [**ReportFormatType**](../Model/.md)| Формат отчета. | [optional] |

### Return type

[**\YandexMarketApi\Model\GenerateReportResponse**](../Model/GenerateReportResponse.md)

### Authorization

[ApiKey](../../README.md#ApiKey), [OAuth](../../README.md#OAuth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `generateCompetitorsPositionReport()`

```php
generateCompetitorsPositionReport($generate_competitors_position_report_request, $format): \YandexMarketApi\Model\GenerateReportResponse
```

Отчет «Конкурентная позиция»

{% include notitle [access](../../_auto/method_scopes/generateCompetitorsPositionReport.md) %}  Запускает генерацию **отчета «Конкурентная позиция»** за заданный период. [Что это за отчет](https://yandex.ru/support2/marketplace/ru/analytics/competitors.html)  Узнать статус генерации и получить ссылку на готовый отчет можно с помощью запроса [GET reports/info/{reportId}](../../reference/reports/getReportInfo.md).  {% note info \"Значение -1 в отчете\" %}  Если в CSV-файле в столбце **POSITION** стоит -1, в этот день не было заказов с товарами в указанной категории.  {% endnote %}  {% include notitle [reports](../../_auto/reports/masterstat/competitors_position.md) %}  |**⚙️ Лимит:** 10 запросов в час| |-|

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: ApiKey
$config = YandexMarketApi\Configuration::getDefaultConfiguration()->setApiKey('Api-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = YandexMarketApi\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Api-Key', 'Bearer');

// Configure OAuth2 access token for authorization: OAuth
$config = YandexMarketApi\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new YandexMarketApi\Api\ReportsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$generate_competitors_position_report_request = new \YandexMarketApi\Model\GenerateCompetitorsPositionReportRequest(); // \YandexMarketApi\Model\GenerateCompetitorsPositionReportRequest
$format = new \YandexMarketApi\Model\ReportFormatType(); // ReportFormatType | Формат отчета.

try {
    $result = $apiInstance->generateCompetitorsPositionReport($generate_competitors_position_report_request, $format);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ReportsApi->generateCompetitorsPositionReport: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **generate_competitors_position_report_request** | [**\YandexMarketApi\Model\GenerateCompetitorsPositionReportRequest**](../Model/GenerateCompetitorsPositionReportRequest.md)|  | |
| **format** | [**ReportFormatType**](../Model/.md)| Формат отчета. | [optional] |

### Return type

[**\YandexMarketApi\Model\GenerateReportResponse**](../Model/GenerateReportResponse.md)

### Authorization

[ApiKey](../../README.md#ApiKey), [OAuth](../../README.md#OAuth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `generateGoodsFeedbackReport()`

```php
generateGoodsFeedbackReport($generate_goods_feedback_request, $format): \YandexMarketApi\Model\GenerateReportResponse
```

Отчет по отзывам о товарах

{% include notitle [access](../../_auto/method_scopes/generateGoodsFeedbackReport.md) %}  Запускает генерацию **отчета по отзывам о товарах**. [Что это за отчет](https://yandex.ru/support2/marketplace/ru/marketing/plus-reviews#stat)  Узнать статус генерации и получить ссылку на готовый отчет можно с помощью запроса [GET reports/info/{reportId}](../../reference/reports/getReportInfo.md).  {% include notitle [reports](../../_auto/reports/paid_opinion_models/paid_opinion_models.md) %}  |**⚙️ Лимит:** 100 запросов в час| |-|

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: ApiKey
$config = YandexMarketApi\Configuration::getDefaultConfiguration()->setApiKey('Api-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = YandexMarketApi\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Api-Key', 'Bearer');

// Configure OAuth2 access token for authorization: OAuth
$config = YandexMarketApi\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new YandexMarketApi\Api\ReportsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$generate_goods_feedback_request = new \YandexMarketApi\Model\GenerateGoodsFeedbackRequest(); // \YandexMarketApi\Model\GenerateGoodsFeedbackRequest
$format = new \YandexMarketApi\Model\ReportFormatType(); // ReportFormatType | Формат отчета.

try {
    $result = $apiInstance->generateGoodsFeedbackReport($generate_goods_feedback_request, $format);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ReportsApi->generateGoodsFeedbackReport: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **generate_goods_feedback_request** | [**\YandexMarketApi\Model\GenerateGoodsFeedbackRequest**](../Model/GenerateGoodsFeedbackRequest.md)|  | |
| **format** | [**ReportFormatType**](../Model/.md)| Формат отчета. | [optional] |

### Return type

[**\YandexMarketApi\Model\GenerateReportResponse**](../Model/GenerateReportResponse.md)

### Authorization

[ApiKey](../../README.md#ApiKey), [OAuth](../../README.md#OAuth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `generateGoodsMovementReport()`

```php
generateGoodsMovementReport($generate_goods_movement_report_request, $format): \YandexMarketApi\Model\GenerateReportResponse
```

Отчет по движению товаров (FBY)

{% include notitle [access](../../_auto/method_scopes/generateGoodsMovementReport.md) %}  Запускает генерацию **отчета по движению товаров**. [Что это за отчет](https://yandex.ru/support/marketplace/analytics/reports-fby-fbs.html#flow)  Узнать статус генерации и получить ссылку на готовый отчет можно с помощью запроса [GET reports/info/{reportId}](../../reference/reports/getReportInfo.md).  {% include notitle [reports](../../_auto/reports/sku/movement/movement_config.md) %}  |**⚙️ Лимит:** 100 запросов в час| |-|

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: ApiKey
$config = YandexMarketApi\Configuration::getDefaultConfiguration()->setApiKey('Api-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = YandexMarketApi\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Api-Key', 'Bearer');

// Configure OAuth2 access token for authorization: OAuth
$config = YandexMarketApi\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new YandexMarketApi\Api\ReportsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$generate_goods_movement_report_request = new \YandexMarketApi\Model\GenerateGoodsMovementReportRequest(); // \YandexMarketApi\Model\GenerateGoodsMovementReportRequest
$format = new \YandexMarketApi\Model\ReportFormatType(); // ReportFormatType | Формат отчета.

try {
    $result = $apiInstance->generateGoodsMovementReport($generate_goods_movement_report_request, $format);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ReportsApi->generateGoodsMovementReport: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **generate_goods_movement_report_request** | [**\YandexMarketApi\Model\GenerateGoodsMovementReportRequest**](../Model/GenerateGoodsMovementReportRequest.md)|  | |
| **format** | [**ReportFormatType**](../Model/.md)| Формат отчета. | [optional] |

### Return type

[**\YandexMarketApi\Model\GenerateReportResponse**](../Model/GenerateReportResponse.md)

### Authorization

[ApiKey](../../README.md#ApiKey), [OAuth](../../README.md#OAuth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `generateGoodsRealizationReport()`

```php
generateGoodsRealizationReport($generate_goods_realization_report_request, $format): \YandexMarketApi\Model\GenerateReportResponse
```

Отчет по реализации

{% include notitle [access](../../_auto/method_scopes/generateGoodsRealizationReport.md) %}  Запускает генерацию **отчета по реализации** за заданный период. [Что это за отчет](https://yandex.ru/support/marketplace/analytics/reports-fby-fbs.html#sales-report)  Узнать статус генерации и получить ссылку на готовый отчет можно с помощью запроса [GET reports/info/{reportId}](../../reference/reports/getReportInfo.md).  {% include notitle [reports](../../_auto/reports/goods/monthly/goods_realization.md) %}  |**⚙️ Лимит:** 100 запросов в час| |-|

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: ApiKey
$config = YandexMarketApi\Configuration::getDefaultConfiguration()->setApiKey('Api-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = YandexMarketApi\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Api-Key', 'Bearer');

// Configure OAuth2 access token for authorization: OAuth
$config = YandexMarketApi\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new YandexMarketApi\Api\ReportsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$generate_goods_realization_report_request = new \YandexMarketApi\Model\GenerateGoodsRealizationReportRequest(); // \YandexMarketApi\Model\GenerateGoodsRealizationReportRequest
$format = new \YandexMarketApi\Model\ReportFormatType(); // ReportFormatType | Формат отчета.

try {
    $result = $apiInstance->generateGoodsRealizationReport($generate_goods_realization_report_request, $format);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ReportsApi->generateGoodsRealizationReport: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **generate_goods_realization_report_request** | [**\YandexMarketApi\Model\GenerateGoodsRealizationReportRequest**](../Model/GenerateGoodsRealizationReportRequest.md)|  | |
| **format** | [**ReportFormatType**](../Model/.md)| Формат отчета. | [optional] |

### Return type

[**\YandexMarketApi\Model\GenerateReportResponse**](../Model/GenerateReportResponse.md)

### Authorization

[ApiKey](../../README.md#ApiKey), [OAuth](../../README.md#OAuth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `generateGoodsTurnoverReport()`

```php
generateGoodsTurnoverReport($generate_goods_turnover_request, $format): \YandexMarketApi\Model\GenerateReportResponse
```

Отчет по оборачиваемости (FBY)

{% include notitle [access](../../_auto/method_scopes/generateGoodsTurnoverReport.md) %}  Запускает генерацию **отчета по оборачиваемости** за заданную дату.  [Что это за отчет](https://yandex.ru/support/marketplace/analytics/turnover.html)  Узнать статус генерации и получить ссылку на готовый отчет можно с помощью запроса [GET reports/info/{reportId}](../../reference/reports/getReportInfo.md).  {% include notitle [reports](../../_auto/reports/turnover/turnover.md) %}  |**⚙️ Лимит:** 100 запросов в час| |-|

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: ApiKey
$config = YandexMarketApi\Configuration::getDefaultConfiguration()->setApiKey('Api-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = YandexMarketApi\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Api-Key', 'Bearer');

// Configure OAuth2 access token for authorization: OAuth
$config = YandexMarketApi\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new YandexMarketApi\Api\ReportsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$generate_goods_turnover_request = new \YandexMarketApi\Model\GenerateGoodsTurnoverRequest(); // \YandexMarketApi\Model\GenerateGoodsTurnoverRequest
$format = new \YandexMarketApi\Model\ReportFormatType(); // ReportFormatType | Формат отчета.

try {
    $result = $apiInstance->generateGoodsTurnoverReport($generate_goods_turnover_request, $format);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ReportsApi->generateGoodsTurnoverReport: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **generate_goods_turnover_request** | [**\YandexMarketApi\Model\GenerateGoodsTurnoverRequest**](../Model/GenerateGoodsTurnoverRequest.md)|  | |
| **format** | [**ReportFormatType**](../Model/.md)| Формат отчета. | [optional] |

### Return type

[**\YandexMarketApi\Model\GenerateReportResponse**](../Model/GenerateReportResponse.md)

### Authorization

[ApiKey](../../README.md#ApiKey), [OAuth](../../README.md#OAuth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `generateMassOrderLabelsReport()`

```php
generateMassOrderLabelsReport($generate_mass_order_labels_request, $format): \YandexMarketApi\Model\GenerateReportResponse
```

Готовые ярлыки‑наклейки на все коробки в нескольких заказах

{% include notitle [access](../../_auto/method_scopes/generateMassOrderLabelsReport.md) %}  Запускает генерацию PDF-файла с ярлыками для переданных заказов. Подробно о том, зачем они нужны и как выглядят, рассказано [в Справке Маркета для продавцов](https://yandex.ru/support/marketplace/orders/fbs/packaging/marking.html).  Узнать статус генерации и получить ссылку на готовый файл можно с помощью запроса [GET reports/info/{reportId}](../../reference/reports/getReportInfo.md).  |**⚙️ Лимит:** 1000 запросов в час| |-|

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: ApiKey
$config = YandexMarketApi\Configuration::getDefaultConfiguration()->setApiKey('Api-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = YandexMarketApi\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Api-Key', 'Bearer');

// Configure OAuth2 access token for authorization: OAuth
$config = YandexMarketApi\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new YandexMarketApi\Api\ReportsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$generate_mass_order_labels_request = new \YandexMarketApi\Model\GenerateMassOrderLabelsRequest(); // \YandexMarketApi\Model\GenerateMassOrderLabelsRequest
$format = new \YandexMarketApi\Model\PageFormatType(); // PageFormatType | Настройка размещения ярлыков на странице. Если параметра нет, возвращается PDF с ярлыками формата A7.

try {
    $result = $apiInstance->generateMassOrderLabelsReport($generate_mass_order_labels_request, $format);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ReportsApi->generateMassOrderLabelsReport: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **generate_mass_order_labels_request** | [**\YandexMarketApi\Model\GenerateMassOrderLabelsRequest**](../Model/GenerateMassOrderLabelsRequest.md)|  | |
| **format** | [**PageFormatType**](../Model/.md)| Настройка размещения ярлыков на странице. Если параметра нет, возвращается PDF с ярлыками формата A7. | [optional] |

### Return type

[**\YandexMarketApi\Model\GenerateReportResponse**](../Model/GenerateReportResponse.md)

### Authorization

[ApiKey](../../README.md#ApiKey), [OAuth](../../README.md#OAuth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `generatePricesReport()`

```php
generatePricesReport($generate_prices_report_request, $format): \YandexMarketApi\Model\GenerateReportResponse
```

Отчет «Цены на рынке»

{% include notitle [access](../../_auto/method_scopes/generatePricesReport.md) %}  Запускает генерацию **отчета «Цены на рынке»**.  {% note warning \"Данные в этом отчете постоянно обновляются\" %}  Поэтому информация в нем и в кабинете продавца на Маркете на странице **Цены** может отличаться.  {% endnote %}  Узнать статус генерации и получить ссылку на готовый отчет можно с помощью запроса [GET reports/info/{reportId}](../../reference/reports/getReportInfo.md).  {% include notitle [reports](../../_auto/reports/prices/business_prices_v2.md) %}  |**⚙️ Лимит:** 100 запросов в час| |-|

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: ApiKey
$config = YandexMarketApi\Configuration::getDefaultConfiguration()->setApiKey('Api-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = YandexMarketApi\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Api-Key', 'Bearer');

// Configure OAuth2 access token for authorization: OAuth
$config = YandexMarketApi\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new YandexMarketApi\Api\ReportsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$generate_prices_report_request = new \YandexMarketApi\Model\GeneratePricesReportRequest(); // \YandexMarketApi\Model\GeneratePricesReportRequest
$format = new \YandexMarketApi\Model\ReportFormatType(); // ReportFormatType | Формат отчета.

try {
    $result = $apiInstance->generatePricesReport($generate_prices_report_request, $format);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ReportsApi->generatePricesReport: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **generate_prices_report_request** | [**\YandexMarketApi\Model\GeneratePricesReportRequest**](../Model/GeneratePricesReportRequest.md)|  | |
| **format** | [**ReportFormatType**](../Model/.md)| Формат отчета. | [optional] |

### Return type

[**\YandexMarketApi\Model\GenerateReportResponse**](../Model/GenerateReportResponse.md)

### Authorization

[ApiKey](../../README.md#ApiKey), [OAuth](../../README.md#OAuth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `generateShelfsStatisticsReport()`

```php
generateShelfsStatisticsReport($generate_shelfs_statistics_request, $format): \YandexMarketApi\Model\GenerateReportResponse
```

Отчет по полкам

{% include notitle [access](../../_auto/method_scopes/generateShelfsStatisticsReport.md) %}  Запускает генерацию **сводного отчета по полкам** — рекламным блокам с баннером или видео и набором товаров. Подробнее о них читайте [в Справке Маркета для продавцов](https://yandex.ru/support2/marketplace/ru/marketing/shelf).  Узнать статус генерации и получить ссылку на готовый отчет можно с помощью запроса [GET reports/info/{reportId}](../../reference/reports/getReportInfo.md).  {% include notitle [reports](../../_auto/reports/incuts/shelfs_statistics.md) %}  |**⚙️ Лимит:** 100 запросов в час| |-|

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: ApiKey
$config = YandexMarketApi\Configuration::getDefaultConfiguration()->setApiKey('Api-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = YandexMarketApi\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Api-Key', 'Bearer');

// Configure OAuth2 access token for authorization: OAuth
$config = YandexMarketApi\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new YandexMarketApi\Api\ReportsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$generate_shelfs_statistics_request = new \YandexMarketApi\Model\GenerateShelfsStatisticsRequest(); // \YandexMarketApi\Model\GenerateShelfsStatisticsRequest
$format = new \YandexMarketApi\Model\ReportFormatType(); // ReportFormatType | Формат отчета.

try {
    $result = $apiInstance->generateShelfsStatisticsReport($generate_shelfs_statistics_request, $format);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ReportsApi->generateShelfsStatisticsReport: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **generate_shelfs_statistics_request** | [**\YandexMarketApi\Model\GenerateShelfsStatisticsRequest**](../Model/GenerateShelfsStatisticsRequest.md)|  | |
| **format** | [**ReportFormatType**](../Model/.md)| Формат отчета. | [optional] |

### Return type

[**\YandexMarketApi\Model\GenerateReportResponse**](../Model/GenerateReportResponse.md)

### Authorization

[ApiKey](../../README.md#ApiKey), [OAuth](../../README.md#OAuth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `generateShipmentListDocumentReport()`

```php
generateShipmentListDocumentReport($generate_shipment_list_document_report_request): \YandexMarketApi\Model\GenerateReportResponse
```

Получение листа сборки

{% include notitle [access](../../_auto/method_scopes/generateShipmentListDocumentReport.md) %}  Запускает генерацию **листа сборки** для отгрузки.  Узнать статус генерации и получить ссылку на готовый документ можно с помощью запроса [GET reports/info/{reportId}](../../reference/reports/getReportInfo.md).  |**⚙️ Лимит:** 100 запросов в час| |-|

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: ApiKey
$config = YandexMarketApi\Configuration::getDefaultConfiguration()->setApiKey('Api-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = YandexMarketApi\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Api-Key', 'Bearer');

// Configure OAuth2 access token for authorization: OAuth
$config = YandexMarketApi\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new YandexMarketApi\Api\ReportsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$generate_shipment_list_document_report_request = new \YandexMarketApi\Model\GenerateShipmentListDocumentReportRequest(); // \YandexMarketApi\Model\GenerateShipmentListDocumentReportRequest

try {
    $result = $apiInstance->generateShipmentListDocumentReport($generate_shipment_list_document_report_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ReportsApi->generateShipmentListDocumentReport: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **generate_shipment_list_document_report_request** | [**\YandexMarketApi\Model\GenerateShipmentListDocumentReportRequest**](../Model/GenerateShipmentListDocumentReportRequest.md)|  | |

### Return type

[**\YandexMarketApi\Model\GenerateReportResponse**](../Model/GenerateReportResponse.md)

### Authorization

[ApiKey](../../README.md#ApiKey), [OAuth](../../README.md#OAuth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `generateShowsSalesReport()`

```php
generateShowsSalesReport($generate_shows_sales_report_request, $format): \YandexMarketApi\Model\GenerateReportResponse
```

Отчет «Аналитика продаж»

{% include notitle [access](../../_auto/method_scopes/generateShowsSalesReport.md) %}  Запускает генерацию **отчета «Аналитика продаж»** за заданный период. [Что это за отчет](https://yandex.ru/support/marketplace/analytics/shows-sales.html)  Узнать статус генерации и получить ссылку на готовый отчет можно с помощью запроса [GET reports/info/{reportId}](../../reference/reports/getReportInfo.md).  {% include notitle [reports](../../_auto/reports/masterstat/sales_funnel.md) %}  |**⚙️ Лимит:** 10 запросов в час| |-|

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: ApiKey
$config = YandexMarketApi\Configuration::getDefaultConfiguration()->setApiKey('Api-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = YandexMarketApi\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Api-Key', 'Bearer');

// Configure OAuth2 access token for authorization: OAuth
$config = YandexMarketApi\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new YandexMarketApi\Api\ReportsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$generate_shows_sales_report_request = new \YandexMarketApi\Model\GenerateShowsSalesReportRequest(); // \YandexMarketApi\Model\GenerateShowsSalesReportRequest
$format = new \YandexMarketApi\Model\ReportFormatType(); // ReportFormatType | Формат отчета.

try {
    $result = $apiInstance->generateShowsSalesReport($generate_shows_sales_report_request, $format);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ReportsApi->generateShowsSalesReport: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **generate_shows_sales_report_request** | [**\YandexMarketApi\Model\GenerateShowsSalesReportRequest**](../Model/GenerateShowsSalesReportRequest.md)|  | |
| **format** | [**ReportFormatType**](../Model/.md)| Формат отчета. | [optional] |

### Return type

[**\YandexMarketApi\Model\GenerateReportResponse**](../Model/GenerateReportResponse.md)

### Authorization

[ApiKey](../../README.md#ApiKey), [OAuth](../../README.md#OAuth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `generateStocksOnWarehousesReport()`

```php
generateStocksOnWarehousesReport($generate_stocks_on_warehouses_report_request, $format): \YandexMarketApi\Model\GenerateReportResponse
```

Отчет по остаткам на складах

{% include notitle [access](../../_auto/method_scopes/generateStocksOnWarehousesReport.md) %}  Запускает генерацию **отчета по остаткам на складах**. Отчет содержит данные:  * Для модели FBY — об остатках на складах Маркета. * Для остальных моделей — об остатках на соответствующем складе магазина.  Узнать статус генерации и получить ссылку на готовый отчет можно с помощью запроса [GET reports/info/{reportId}](../../reference/reports/getReportInfo.md).  {% include notitle [reports](../../_auto/reports/stocks/stocks_on_warehouses.md) %}  |**⚙️ Лимит:** 100 запросов в час| |-|

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: ApiKey
$config = YandexMarketApi\Configuration::getDefaultConfiguration()->setApiKey('Api-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = YandexMarketApi\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Api-Key', 'Bearer');

// Configure OAuth2 access token for authorization: OAuth
$config = YandexMarketApi\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new YandexMarketApi\Api\ReportsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$generate_stocks_on_warehouses_report_request = new \YandexMarketApi\Model\GenerateStocksOnWarehousesReportRequest(); // \YandexMarketApi\Model\GenerateStocksOnWarehousesReportRequest
$format = new \YandexMarketApi\Model\ReportFormatType(); // ReportFormatType | Формат отчета.

try {
    $result = $apiInstance->generateStocksOnWarehousesReport($generate_stocks_on_warehouses_report_request, $format);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ReportsApi->generateStocksOnWarehousesReport: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **generate_stocks_on_warehouses_report_request** | [**\YandexMarketApi\Model\GenerateStocksOnWarehousesReportRequest**](../Model/GenerateStocksOnWarehousesReportRequest.md)|  | |
| **format** | [**ReportFormatType**](../Model/.md)| Формат отчета. | [optional] |

### Return type

[**\YandexMarketApi\Model\GenerateReportResponse**](../Model/GenerateReportResponse.md)

### Authorization

[ApiKey](../../README.md#ApiKey), [OAuth](../../README.md#OAuth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `generateUnitedMarketplaceServicesReport()`

```php
generateUnitedMarketplaceServicesReport($generate_united_marketplace_services_report_request, $format, $language): \YandexMarketApi\Model\GenerateReportResponse
```

Отчет по стоимости услуг

{% include notitle [access](../../_auto/method_scopes/generateUnitedMarketplaceServicesReport.md) %}  Запускает генерацию **отчета по стоимости услуг** за заданный период. [Что это за отчет](https://yandex.ru/support/marketplace/analytics/reports.html)  Тип отчета зависит от того, какие поля заполнены в запросе:  |**Тип отчета**               |**Какие поля нужны**             | |-----------------------------|---------------------------------| |По дате начисления услуги    |`dateFrom` и `dateTo`            | |По дате формирования акта    |`year` и `month`                 |  Заказать отчеты обоих типов одним запросом нельзя.  Узнать статус генерации и получить ссылку на готовый отчет можно с помощью запроса [GET reports/info/{reportId}](../../reference/reports/getReportInfo.md).  {% include notitle [reports](../../_auto/reports/united/services/generator/united_marketplace_services.md) %}  |**⚙️ Лимит:** 100 запросов в час| |-|

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: ApiKey
$config = YandexMarketApi\Configuration::getDefaultConfiguration()->setApiKey('Api-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = YandexMarketApi\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Api-Key', 'Bearer');

// Configure OAuth2 access token for authorization: OAuth
$config = YandexMarketApi\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new YandexMarketApi\Api\ReportsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$generate_united_marketplace_services_report_request = new \YandexMarketApi\Model\GenerateUnitedMarketplaceServicesReportRequest(); // \YandexMarketApi\Model\GenerateUnitedMarketplaceServicesReportRequest
$format = new \YandexMarketApi\Model\ReportFormatType(); // ReportFormatType | Формат отчета.
$language = new \YandexMarketApi\Model\ReportLanguageType(); // ReportLanguageType | Язык отчета.

try {
    $result = $apiInstance->generateUnitedMarketplaceServicesReport($generate_united_marketplace_services_report_request, $format, $language);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ReportsApi->generateUnitedMarketplaceServicesReport: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **generate_united_marketplace_services_report_request** | [**\YandexMarketApi\Model\GenerateUnitedMarketplaceServicesReportRequest**](../Model/GenerateUnitedMarketplaceServicesReportRequest.md)|  | |
| **format** | [**ReportFormatType**](../Model/.md)| Формат отчета. | [optional] |
| **language** | [**ReportLanguageType**](../Model/.md)| Язык отчета. | [optional] |

### Return type

[**\YandexMarketApi\Model\GenerateReportResponse**](../Model/GenerateReportResponse.md)

### Authorization

[ApiKey](../../README.md#ApiKey), [OAuth](../../README.md#OAuth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `generateUnitedNettingReport()`

```php
generateUnitedNettingReport($generate_united_netting_report_request, $format, $language): \YandexMarketApi\Model\GenerateReportResponse
```

Отчет по платежам

{% include notitle [access](../../_auto/method_scopes/generateUnitedNettingReport.md) %}  Запускает генерацию **отчета по платежам** за заданный период. [Что это за отчет](https://yandex.ru/support/marketplace/analytics/transactions.html)  Узнать статус генерации и получить ссылку на готовый отчет можно с помощью запроса [GET reports/info/{reportId}](../../reference/reports/getReportInfo.md).  Тип отчета зависит от того, какие поля заполнены в запросе:  |**Тип отчета**           |**Какие поля нужны**                   | |-------------------------|---------------------------------------| |О платежах за период     |`dateFrom` и `dateTo`                  | |О платежном поручении    |`bankOrderId` и `bankOrderDateTime`    |  Заказать отчеты обоих типов одним запросом нельзя.  {% include notitle [reports](../../_auto/reports/united/netting/generator/united_netting.md) %}  |**⚙️ Лимит:** 100 запросов в час| |-|

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: ApiKey
$config = YandexMarketApi\Configuration::getDefaultConfiguration()->setApiKey('Api-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = YandexMarketApi\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Api-Key', 'Bearer');

// Configure OAuth2 access token for authorization: OAuth
$config = YandexMarketApi\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new YandexMarketApi\Api\ReportsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$generate_united_netting_report_request = new \YandexMarketApi\Model\GenerateUnitedNettingReportRequest(); // \YandexMarketApi\Model\GenerateUnitedNettingReportRequest
$format = new \YandexMarketApi\Model\ReportFormatType(); // ReportFormatType | Формат отчета.
$language = new \YandexMarketApi\Model\ReportLanguageType(); // ReportLanguageType | Язык отчета.

try {
    $result = $apiInstance->generateUnitedNettingReport($generate_united_netting_report_request, $format, $language);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ReportsApi->generateUnitedNettingReport: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **generate_united_netting_report_request** | [**\YandexMarketApi\Model\GenerateUnitedNettingReportRequest**](../Model/GenerateUnitedNettingReportRequest.md)|  | |
| **format** | [**ReportFormatType**](../Model/.md)| Формат отчета. | [optional] |
| **language** | [**ReportLanguageType**](../Model/.md)| Язык отчета. | [optional] |

### Return type

[**\YandexMarketApi\Model\GenerateReportResponse**](../Model/GenerateReportResponse.md)

### Authorization

[ApiKey](../../README.md#ApiKey), [OAuth](../../README.md#OAuth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `generateUnitedOrdersReport()`

```php
generateUnitedOrdersReport($generate_united_orders_request, $format, $language): \YandexMarketApi\Model\GenerateReportResponse
```

Отчет по заказам

{% include notitle [access](../../_auto/method_scopes/generateUnitedOrdersReport.md) %}  Запускает генерацию **отчета по заказам** за заданный период. [Что это за отчет](https://yandex.ru/support/marketplace/analytics/orders.html)  {% note info \"Это новый отчет\" %}  Раньше мы так называли генерацию детальной информации по заказам. [Как получить детальную информацию по заказам](../../reference/stats/getOrdersStats.md)  {% endnote %}  Узнать статус генерации и получить ссылку на готовый отчет можно с помощью запроса [GET reports/info/{reportId}](../../reference/reports/getReportInfo.md).  {% include notitle [reports](../../_auto/reports/united/orders/generator/united_orders.md) %}  |**⚙️ Лимит:** 100 запросов в час| |-|

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: ApiKey
$config = YandexMarketApi\Configuration::getDefaultConfiguration()->setApiKey('Api-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = YandexMarketApi\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Api-Key', 'Bearer');

// Configure OAuth2 access token for authorization: OAuth
$config = YandexMarketApi\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new YandexMarketApi\Api\ReportsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$generate_united_orders_request = new \YandexMarketApi\Model\GenerateUnitedOrdersRequest(); // \YandexMarketApi\Model\GenerateUnitedOrdersRequest
$format = new \YandexMarketApi\Model\ReportFormatType(); // ReportFormatType | Формат отчета.
$language = new \YandexMarketApi\Model\ReportLanguageType(); // ReportLanguageType | Язык отчета.

try {
    $result = $apiInstance->generateUnitedOrdersReport($generate_united_orders_request, $format, $language);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ReportsApi->generateUnitedOrdersReport: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **generate_united_orders_request** | [**\YandexMarketApi\Model\GenerateUnitedOrdersRequest**](../Model/GenerateUnitedOrdersRequest.md)|  | |
| **format** | [**ReportFormatType**](../Model/.md)| Формат отчета. | [optional] |
| **language** | [**ReportLanguageType**](../Model/.md)| Язык отчета. | [optional] |

### Return type

[**\YandexMarketApi\Model\GenerateReportResponse**](../Model/GenerateReportResponse.md)

### Authorization

[ApiKey](../../README.md#ApiKey), [OAuth](../../README.md#OAuth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getReportInfo()`

```php
getReportInfo($report_id): \YandexMarketApi\Model\GetReportInfoResponse
```

Получение заданного отчета

{% include notitle [access](../../_auto/method_scopes/getReportInfo.md) %}  Возвращает статус генерации заданного отчета и, если отчет готов, ссылку для скачивания.  Чтобы воспользоваться этим запросом, вначале нужно запустить генерацию отчета. [Инструкция](../../step-by-step/reports.md)  |**⚙️ Лимит:** 100 запросов в минуту| |-|

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: ApiKey
$config = YandexMarketApi\Configuration::getDefaultConfiguration()->setApiKey('Api-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = YandexMarketApi\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Api-Key', 'Bearer');

// Configure OAuth2 access token for authorization: OAuth
$config = YandexMarketApi\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new YandexMarketApi\Api\ReportsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$report_id = 'report_id_example'; // string | Идентификатор отчета, который вы получили после запуска генерации.

try {
    $result = $apiInstance->getReportInfo($report_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ReportsApi->getReportInfo: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **report_id** | **string**| Идентификатор отчета, который вы получили после запуска генерации. | |

### Return type

[**\YandexMarketApi\Model\GetReportInfoResponse**](../Model/GetReportInfoResponse.md)

### Authorization

[ApiKey](../../README.md#ApiKey), [OAuth](../../README.md#OAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
