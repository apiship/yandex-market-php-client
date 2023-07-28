# YandexMarketApi\OutletLicensesApi

All URIs are relative to https://api.partner.market.yandex.ru, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**deleteOutletLicenses()**](OutletLicensesApi.md#deleteOutletLicenses) | **DELETE** /campaigns/{campaignId}/outlets/licenses | Удаление лицензий для точек продаж |
| [**getOutletLicenses()**](OutletLicensesApi.md#getOutletLicenses) | **GET** /campaigns/{campaignId}/outlets/licenses | Информация о лицензиях для точек продаж |
| [**updateOutletLicenses()**](OutletLicensesApi.md#updateOutletLicenses) | **POST** /campaigns/{campaignId}/outlets/licenses | Создание и изменение лицензий для точек продаж |


## `deleteOutletLicenses()`

```php
deleteOutletLicenses($campaign_id, $ids): \YandexMarketApi\Model\EmptyApiResponse
```

Удаление лицензий для точек продаж

Удаляет информацию о лицензиях для точек продаж.  В течение суток этим и другими запросами о точках продаж, кроме запроса `GET /delivery/services`, можно получить и изменить информацию об определенном суммарном количестве точек продаж. Оно зависит от количества точек продаж магазина.  |**⚙️ Лимит:** 100 000 запросов в час| |-|

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: OAuth
$config = YandexMarketApi\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new YandexMarketApi\Api\OutletLicensesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$campaign_id = 56; // int | Идентификатор кампании и идентификатор магазина. Каждая кампания в API соответствует магазину в кабинете.  **Где его взять**  Войдите в личный кабинет, в меню слева выберите **Настройки** → **Настройки API** и скопируйте число из поля **Номер кампании**.
$ids = array(56); // int[] | Список идентификаторов лицензий.

try {
    $result = $apiInstance->deleteOutletLicenses($campaign_id, $ids);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OutletLicensesApi->deleteOutletLicenses: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **campaign_id** | **int**| Идентификатор кампании и идентификатор магазина. Каждая кампания в API соответствует магазину в кабинете.  **Где его взять**  Войдите в личный кабинет, в меню слева выберите **Настройки** → **Настройки API** и скопируйте число из поля **Номер кампании**. | |
| **ids** | [**int[]**](../Model/int.md)| Список идентификаторов лицензий. | [optional] |

### Return type

[**\YandexMarketApi\Model\EmptyApiResponse**](../Model/EmptyApiResponse.md)

### Authorization

[OAuth](../../README.md#OAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getOutletLicenses()`

```php
getOutletLicenses($campaign_id, $outlet_ids, $ids): \YandexMarketApi\Model\GetOutletLicensesResponse
```

Информация о лицензиях для точек продаж

Возвращает информацию о лицензиях для точек продаж.  В течение суток этим и другими запросами о точках продаж, кроме запроса `GET /delivery/services`, можно получить и изменить информацию об определенном суммарном количестве точек продаж. Оно зависит от количества точек продаж магазина.  |**⚙️ Лимит:** 100 000 запросов в час| |-|

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: OAuth
$config = YandexMarketApi\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new YandexMarketApi\Api\OutletLicensesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$campaign_id = 56; // int | Идентификатор кампании и идентификатор магазина. Каждая кампания в API соответствует магазину в кабинете.  **Где его взять**  Войдите в личный кабинет, в меню слева выберите **Настройки** → **Настройки API** и скопируйте число из поля **Номер кампании**.
$outlet_ids = array(56); // int[] | Список идентификаторов точек продаж, для которых нужно получить информацию о лицензиях. Идентификаторы указываются через запятую. В запросе должен быть либо параметр `outletIds`, либо параметр `ids`. Запрос с обоими параметрами или без них приведет к ошибке.
$ids = array(56); // int[] | Список идентификаторов лицензий.

try {
    $result = $apiInstance->getOutletLicenses($campaign_id, $outlet_ids, $ids);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OutletLicensesApi->getOutletLicenses: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **campaign_id** | **int**| Идентификатор кампании и идентификатор магазина. Каждая кампания в API соответствует магазину в кабинете.  **Где его взять**  Войдите в личный кабинет, в меню слева выберите **Настройки** → **Настройки API** и скопируйте число из поля **Номер кампании**. | |
| **outlet_ids** | [**int[]**](../Model/int.md)| Список идентификаторов точек продаж, для которых нужно получить информацию о лицензиях. Идентификаторы указываются через запятую. В запросе должен быть либо параметр &#x60;outletIds&#x60;, либо параметр &#x60;ids&#x60;. Запрос с обоими параметрами или без них приведет к ошибке. | [optional] |
| **ids** | [**int[]**](../Model/int.md)| Список идентификаторов лицензий. | [optional] |

### Return type

[**\YandexMarketApi\Model\GetOutletLicensesResponse**](../Model/GetOutletLicensesResponse.md)

### Authorization

[OAuth](../../README.md#OAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `updateOutletLicenses()`

```php
updateOutletLicenses($campaign_id, $update_outlet_license_request): \YandexMarketApi\Model\EmptyApiResponse
```

Создание и изменение лицензий для точек продаж

Передает информацию о новых и существующих лицензиях для точек продаж. Поддерживаются только лицензии на розничную продажу алкоголя. Чтобы размещать алкогольную продукцию на Маркете, надо также прислать гарантийное письмо (если вы еще не делали этого раньше) и правильно оформить предложения в прайс-листе. Информация о лицензиях проходит проверку. В течение суток этим и другими запросами о точках продаж, кроме запроса `GET /delivery/services`, можно получить и изменить информацию об определенном суммарном количестве точек продаж. Оно зависит от количества точек продаж магазина.  |**⚙️ Лимит:** 100 000 запросов в час| |-|

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: OAuth
$config = YandexMarketApi\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new YandexMarketApi\Api\OutletLicensesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$campaign_id = 56; // int | Идентификатор кампании и идентификатор магазина. Каждая кампания в API соответствует магазину в кабинете.  **Где его взять**  Войдите в личный кабинет, в меню слева выберите **Настройки** → **Настройки API** и скопируйте число из поля **Номер кампании**.
$update_outlet_license_request = new \YandexMarketApi\Model\UpdateOutletLicenseRequest(); // \YandexMarketApi\Model\UpdateOutletLicenseRequest

try {
    $result = $apiInstance->updateOutletLicenses($campaign_id, $update_outlet_license_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OutletLicensesApi->updateOutletLicenses: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **campaign_id** | **int**| Идентификатор кампании и идентификатор магазина. Каждая кампания в API соответствует магазину в кабинете.  **Где его взять**  Войдите в личный кабинет, в меню слева выберите **Настройки** → **Настройки API** и скопируйте число из поля **Номер кампании**. | |
| **update_outlet_license_request** | [**\YandexMarketApi\Model\UpdateOutletLicenseRequest**](../Model/UpdateOutletLicenseRequest.md)|  | |

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
