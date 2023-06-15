# YandexMarketApi\PricesApi

All URIs are relative to https://api.partner.market.yandex.ru, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**getPrices()**](PricesApi.md#getPrices) | **GET** /campaigns/{campaignId}/offer-prices | Список цен |
| [**getSuggestedPrices()**](PricesApi.md#getSuggestedPrices) | **POST** /campaigns/{campaignId}/offer-prices/suggestions | Цены для продвижения товаров |
| [**updatePrices()**](PricesApi.md#updatePrices) | **POST** /campaigns/{campaignId}/offer-prices/updates | Установка цен на товары |


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


$apiInstance = new YandexMarketApi\Api\PricesApi(
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
    echo 'Exception when calling PricesApi->getPrices: ', $e->getMessage(), PHP_EOL;
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


$apiInstance = new YandexMarketApi\Api\PricesApi(
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
    echo 'Exception when calling PricesApi->getSuggestedPrices: ', $e->getMessage(), PHP_EOL;
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


$apiInstance = new YandexMarketApi\Api\PricesApi(
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
    echo 'Exception when calling PricesApi->updatePrices: ', $e->getMessage(), PHP_EOL;
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
