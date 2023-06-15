# YandexMarketApi\HiddenOffersApi

All URIs are relative to https://api.partner.market.yandex.ru, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**addHiddenOffers()**](HiddenOffersApi.md#addHiddenOffers) | **POST** /campaigns/{campaignId}/hidden-offers | Скрытие товаров и настройки скрытия |
| [**deleteHiddenOffers()**](HiddenOffersApi.md#deleteHiddenOffers) | **DELETE** /campaigns/{campaignId}/hidden-offers | Возобновление показа товаров |
| [**getHiddenOffers()**](HiddenOffersApi.md#getHiddenOffers) | **GET** /campaigns/{campaignId}/hidden-offers | Информация о скрытых товарах |


## `addHiddenOffers()`

```php
addHiddenOffers($campaign_id, $add_hidden_offers_request): \YandexMarketApi\Model\EmptyApiResponse
```

Скрытие товаров и настройки скрытия

Метод позволяет:  1. Скрыть товары магазина на Маркете на указанное время. В теле запроса можно передать от одного до 500 товаров.  2. Установить приоритет скрытия через API над скрытием в личном кабинете.     Для этого передайте в теле запроса параметр `priority=\"true\"`.    Возобновить показ в этом случае можно только с помощью запроса `DELETE /campaigns/{campaignId}/hidden-offers`.  3. Для скрытий, установленных с приоритетом, можно изменить время скрытия товаров и комментарии.     Чтобы внести изменения, передайте в теле запроса идентификатор уже скрытого товара и новые значения параметров `comment` и / или `ttlInHours`. При этом предыдущие значения этих параметров будут удалены.  В одном запросе можно скрыть или изменить параметры скрытия не более чем 500 товаров.  В течение минуты можно скрыть или изменить параметры скрытия определенного количества товаров на витрине. Если у магазина:  * не более 200 000 товаров — 1000 товаров;  * более 200 000 товаров — ограничение определяется по формуле:  ```(количество товаров на витрине) / 200```  {% note info %}  Примечание. Количество товаров магазина считается по данным за последние семь дней (не включая сегодня).  {% endnote %}

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: OAuth
$config = YandexMarketApi\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new YandexMarketApi\Api\HiddenOffersApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$campaign_id = 56; // int | Идентификатор кампании.  **Где его взять**  Войдите в личный кабинет, в меню слева выберите **Настройки** → **Настройки API** и скопируйте число из поля **Номер кампании**.
$add_hidden_offers_request = new \YandexMarketApi\Model\AddHiddenOffersRequest(); // \YandexMarketApi\Model\AddHiddenOffersRequest | Запрос на скрытие оферов.

try {
    $result = $apiInstance->addHiddenOffers($campaign_id, $add_hidden_offers_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling HiddenOffersApi->addHiddenOffers: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **campaign_id** | **int**| Идентификатор кампании.  **Где его взять**  Войдите в личный кабинет, в меню слева выберите **Настройки** → **Настройки API** и скопируйте число из поля **Номер кампании**. | |
| **add_hidden_offers_request** | [**\YandexMarketApi\Model\AddHiddenOffersRequest**](../Model/AddHiddenOffersRequest.md)| Запрос на скрытие оферов. | |

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

## `deleteHiddenOffers()`

```php
deleteHiddenOffers($campaign_id, $delete_hidden_offers_request): \YandexMarketApi\Model\EmptyApiResponse
```

Возобновление показа товаров

Возобновляет показ товаров магазина на Маркете, скрытых через партнерский API запросом `POST /campaigns/{campaignId}/hidden-offers`. Если предложение не отображается по другой причине (например, удалено из прайс-листа или не соответствует требованиям Маркета), оно не начнет показываться.  В теле запроса можно передать от одного до 500 товаров.  В одном запросе можно возобновить показы не более чем 500 товаров.  В течение минуты можно возобновить показы определенного количества товаров на витрине. Если у магазина:  * не более 200 000 товаров — 1000 товаров; * более 200 000 товаров — ограничение определяется по формуле:  ```(количество товаров на витрине) / 200```  {% note info %}  Количество товаров магазина считается по данным за последние семь дней (не включая сегодня).  {% endnote %}

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: OAuth
$config = YandexMarketApi\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new YandexMarketApi\Api\HiddenOffersApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$campaign_id = 56; // int | Идентификатор кампании.  **Где его взять**  Войдите в личный кабинет, в меню слева выберите **Настройки** → **Настройки API** и скопируйте число из поля **Номер кампании**.
$delete_hidden_offers_request = new \YandexMarketApi\Model\DeleteHiddenOffersRequest(); // \YandexMarketApi\Model\DeleteHiddenOffersRequest | Запрос на возобновление показа оферов.

try {
    $result = $apiInstance->deleteHiddenOffers($campaign_id, $delete_hidden_offers_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling HiddenOffersApi->deleteHiddenOffers: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **campaign_id** | **int**| Идентификатор кампании.  **Где его взять**  Войдите в личный кабинет, в меню слева выберите **Настройки** → **Настройки API** и скопируйте число из поля **Номер кампании**. | |
| **delete_hidden_offers_request** | [**\YandexMarketApi\Model\DeleteHiddenOffersRequest**](../Model/DeleteHiddenOffersRequest.md)| Запрос на возобновление показа оферов. | |

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

## `getHiddenOffers()`

```php
getHiddenOffers($campaign_id, $offer_id, $feed_id, $page_token, $limit, $offset, $page, $page_size): \YandexMarketApi\Model\GetHiddenOffersResponse
```

Информация о скрытых товарах

Возвращает список скрытых товаров магазина. Товары отсортированы в лексикографическом порядке по возрастанию SKU на Маркете.  Результаты возвращаются постранично. Выходные данные содержат идентификаторы предыдущей и следующей страницы.  В одном запросе можно получить информацию не более чем о 500 товарах.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: OAuth
$config = YandexMarketApi\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new YandexMarketApi\Api\HiddenOffersApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$campaign_id = 56; // int | Идентификатор кампании.  **Где его взять**  Войдите в личный кабинет, в меню слева выберите **Настройки** → **Настройки API** и скопируйте число из поля **Номер кампании**.
$offer_id = array('offer_id_example'); // string[] | Идентификатор скрытого предложения.
$feed_id = array(56); // int[] | Идентификатор кампании партнера.
$page_token = eyBuZXh0SWQ6IDIzNDIgfQ==; // string | Идентификатор страницы c результатами.  Если параметр не указан, возвращается самая старая страница.  Рекомендуется передавать значение выходного параметра `nextPageToken`, полученное при последнем запросе.  Если задан `page_token`, параметры `offset`, `page_number` и `page_size` игнорируются.
$limit = 20; // int | Количество товаров в выходных данных.
$offset = 56; // int | Количество скрытых товаров, которые нужно не отображать в выходных данных, начиная с первого.  Скрытые товары выводятся отсортированными в лексикографическом порядке по возрастанию значений marketSku.  Используется вместе с параметром `limit`.  Если задан `offset`, параметры `page_number` и `page_size` игнорируются.  `offset` игнорируется, если задан `page_token`.
$page = 1; // int | Номер страницы результатов.  Значение по умолчанию: 1.  Используется вместе с параметром page_size.  `page_number` игнорируется, если задан `page_token`, `limit` или `offset`.
$page_size = 56; // int | Количество скрытых товаров на странице.  Используется вместе с параметром page_number.  `page_size` игнорируется, если задан `page_token`, `limit` или `offset`.

try {
    $result = $apiInstance->getHiddenOffers($campaign_id, $offer_id, $feed_id, $page_token, $limit, $offset, $page, $page_size);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling HiddenOffersApi->getHiddenOffers: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **campaign_id** | **int**| Идентификатор кампании.  **Где его взять**  Войдите в личный кабинет, в меню слева выберите **Настройки** → **Настройки API** и скопируйте число из поля **Номер кампании**. | |
| **offer_id** | [**string[]**](../Model/string.md)| Идентификатор скрытого предложения. | [optional] |
| **feed_id** | [**int[]**](../Model/int.md)| Идентификатор кампании партнера. | [optional] |
| **page_token** | **string**| Идентификатор страницы c результатами.  Если параметр не указан, возвращается самая старая страница.  Рекомендуется передавать значение выходного параметра &#x60;nextPageToken&#x60;, полученное при последнем запросе.  Если задан &#x60;page_token&#x60;, параметры &#x60;offset&#x60;, &#x60;page_number&#x60; и &#x60;page_size&#x60; игнорируются. | [optional] |
| **limit** | **int**| Количество товаров в выходных данных. | [optional] |
| **offset** | **int**| Количество скрытых товаров, которые нужно не отображать в выходных данных, начиная с первого.  Скрытые товары выводятся отсортированными в лексикографическом порядке по возрастанию значений marketSku.  Используется вместе с параметром &#x60;limit&#x60;.  Если задан &#x60;offset&#x60;, параметры &#x60;page_number&#x60; и &#x60;page_size&#x60; игнорируются.  &#x60;offset&#x60; игнорируется, если задан &#x60;page_token&#x60;. | [optional] |
| **page** | **int**| Номер страницы результатов.  Значение по умолчанию: 1.  Используется вместе с параметром page_size.  &#x60;page_number&#x60; игнорируется, если задан &#x60;page_token&#x60;, &#x60;limit&#x60; или &#x60;offset&#x60;. | [optional] [default to 1] |
| **page_size** | **int**| Количество скрытых товаров на странице.  Используется вместе с параметром page_number.  &#x60;page_size&#x60; игнорируется, если задан &#x60;page_token&#x60;, &#x60;limit&#x60; или &#x60;offset&#x60;. | [optional] |

### Return type

[**\YandexMarketApi\Model\GetHiddenOffersResponse**](../Model/GetHiddenOffersResponse.md)

### Authorization

[OAuth](../../README.md#OAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
