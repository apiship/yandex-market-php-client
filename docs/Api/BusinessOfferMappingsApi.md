# YandexMarketApi\BusinessOfferMappingsApi

All URIs are relative to https://api.partner.market.yandex.ru, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**deleteOffers()**](BusinessOfferMappingsApi.md#deleteOffers) | **POST** /businesses/{businessId}/offer-mappings/delete | Удаление товаров из каталога |
| [**getOfferMappings()**](BusinessOfferMappingsApi.md#getOfferMappings) | **POST** /businesses/{businessId}/offer-mappings | Информация о товарах в каталоге |
| [**getSuggestedOfferMappings()**](BusinessOfferMappingsApi.md#getSuggestedOfferMappings) | **POST** /businesses/{businessId}/offer-mappings/suggestions | Предварительный просмотр карточек на Маркете, соответствующих вашим товарам |
| [**updateOfferMappings()**](BusinessOfferMappingsApi.md#updateOfferMappings) | **POST** /businesses/{businessId}/offer-mappings/update | Добавление товаров в каталог и редактирование информации о них |


## `deleteOffers()`

```php
deleteOffers($business_id, $delete_offers_request): \YandexMarketApi\Model\DeleteOffersResponse
```

Удаление товаров из каталога

Удаляет товары из каталога.  |**⚙️ Лимит:** 5000 товаров в минуту, не более 200 товаров в одном запросе| |-|

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: OAuth
$config = YandexMarketApi\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new YandexMarketApi\Api\BusinessOfferMappingsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$business_id = 56; // int | Идентификатор бизнеса.  Чтобы узнать идентификатор, войдите в личный кабинет и выберите **Товары** → **Каталог**, а затем в левом верхнем углу откройте переключатель бизнес-аккаунтов. Чтобы скопировать идентификатор, наведите на него мышь и нажмите появившуюся кнопку.
$delete_offers_request = new \YandexMarketApi\Model\DeleteOffersRequest(); // \YandexMarketApi\Model\DeleteOffersRequest

try {
    $result = $apiInstance->deleteOffers($business_id, $delete_offers_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling BusinessOfferMappingsApi->deleteOffers: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **business_id** | **int**| Идентификатор бизнеса.  Чтобы узнать идентификатор, войдите в личный кабинет и выберите **Товары** → **Каталог**, а затем в левом верхнем углу откройте переключатель бизнес-аккаунтов. Чтобы скопировать идентификатор, наведите на него мышь и нажмите появившуюся кнопку. | |
| **delete_offers_request** | [**\YandexMarketApi\Model\DeleteOffersRequest**](../Model/DeleteOffersRequest.md)|  | |

### Return type

[**\YandexMarketApi\Model\DeleteOffersResponse**](../Model/DeleteOffersResponse.md)

### Authorization

[OAuth](../../README.md#OAuth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getOfferMappings()`

```php
getOfferMappings($business_id, $get_offer_mappings_request, $page_token, $limit): \YandexMarketApi\Model\GetOfferMappingsResponse
```

Информация о товарах в каталоге

Возвращает список товаров в каталоге с параметрами каждого товара.  В запросе можно использовать фильтры.  Результаты возвращаются постранично.  |**⚙️ Лимит:** рассчитывается по [формуле](*rule)| |-|  [//]: <> (rule: суточный лимит товаров — количество товаров в каталоге * 25)

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: OAuth
$config = YandexMarketApi\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new YandexMarketApi\Api\BusinessOfferMappingsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$business_id = 56; // int | Идентификатор бизнеса.  Чтобы узнать идентификатор, войдите в личный кабинет и выберите **Товары** → **Каталог**, а затем в левом верхнем углу откройте переключатель бизнес-аккаунтов. Чтобы скопировать идентификатор, наведите на него мышь и нажмите появившуюся кнопку.
$get_offer_mappings_request = new \YandexMarketApi\Model\GetOfferMappingsRequest(); // \YandexMarketApi\Model\GetOfferMappingsRequest
$page_token = eyBuZXh0SWQ6IDIzNDIgfQ==; // string | Идентификатор страницы c результатами.  Если параметр не указан, возвращается самая старая страница.  Рекомендуется передавать значение выходного параметра `nextPageToken`, полученное при последнем запросе.  Если задан `page_token`, параметры `offset`, `page_number` и `page_size` игнорируются.
$limit = 20; // int | Количество товаров в выходных данных.

try {
    $result = $apiInstance->getOfferMappings($business_id, $get_offer_mappings_request, $page_token, $limit);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling BusinessOfferMappingsApi->getOfferMappings: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **business_id** | **int**| Идентификатор бизнеса.  Чтобы узнать идентификатор, войдите в личный кабинет и выберите **Товары** → **Каталог**, а затем в левом верхнем углу откройте переключатель бизнес-аккаунтов. Чтобы скопировать идентификатор, наведите на него мышь и нажмите появившуюся кнопку. | |
| **get_offer_mappings_request** | [**\YandexMarketApi\Model\GetOfferMappingsRequest**](../Model/GetOfferMappingsRequest.md)|  | |
| **page_token** | **string**| Идентификатор страницы c результатами.  Если параметр не указан, возвращается самая старая страница.  Рекомендуется передавать значение выходного параметра &#x60;nextPageToken&#x60;, полученное при последнем запросе.  Если задан &#x60;page_token&#x60;, параметры &#x60;offset&#x60;, &#x60;page_number&#x60; и &#x60;page_size&#x60; игнорируются. | [optional] |
| **limit** | **int**| Количество товаров в выходных данных. | [optional] |

### Return type

[**\YandexMarketApi\Model\GetOfferMappingsResponse**](../Model/GetOfferMappingsResponse.md)

### Authorization

[OAuth](../../README.md#OAuth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getSuggestedOfferMappings()`

```php
getSuggestedOfferMappings($business_id, $get_suggested_offer_mappings_request): \YandexMarketApi\Model\GetSuggestedOfferMappingsResponse
```

Предварительный просмотр карточек на Маркете, соответствующих вашим товарам

Возвращает идентификаторы карточек на Маркете, которые соответствуют товарам с заданными параметрами.  Пользоваться этим запросом необязательно: он просто помогает заранее убедиться, что Маркет верно определяет карточке по предоставленным вами данным.  **Как пользоваться запросом**  1. Передайте Маркету список товаров, которые нужно проверить. 2. В ответ вы получите список SKU на Маркете с расшифровкой: названием, идентификатором модели, категорией. 3. Если расшифровки мало, вы можете открыть карточку. Для этого перейдите по ссылке вида `https://market.yandex.ru/product/<marketModelId>?sku=<marketSku>`. 4. Если карточка соответствует товару, значит его можно добавлять в каталог с теми данными, что вы указали. Если карточка определилась неправильно — проверьте данные о товаре. Возможно, их нужно уточнить или дополнить. Кроме того, на этапе добавления товара вы можете указать `marketSKU`, который ему подходит по вашему мнению.  {% note info \"𝓠 Как определить `marketSku` товара, найденного на Маркете?\" %}  𝓐 Он есть в адресе страницы товара — расположен после `sku=`.  Например, `https://market.yandex.ru/product--yandex-kniga/484830016?sku=484830016`  {% endnote %}  Если в ответе на запрос нет идентификатора карточки для одного из товаров, значит Маркету не удалось подобрать для товара подходящую карточку или карточка товара будет специально создана.  |**⚙️ Лимит:** 100 000 товаров в час, не более 500 товаров в одном запросе| |-|

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: OAuth
$config = YandexMarketApi\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new YandexMarketApi\Api\BusinessOfferMappingsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$business_id = 56; // int | Идентификатор бизнеса.  Чтобы узнать идентификатор, войдите в личный кабинет и выберите **Товары** → **Каталог**, а затем в левом верхнем углу откройте переключатель бизнес-аккаунтов. Чтобы скопировать идентификатор, наведите на него мышь и нажмите появившуюся кнопку.
$get_suggested_offer_mappings_request = new \YandexMarketApi\Model\GetSuggestedOfferMappingsRequest(); // \YandexMarketApi\Model\GetSuggestedOfferMappingsRequest

try {
    $result = $apiInstance->getSuggestedOfferMappings($business_id, $get_suggested_offer_mappings_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling BusinessOfferMappingsApi->getSuggestedOfferMappings: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **business_id** | **int**| Идентификатор бизнеса.  Чтобы узнать идентификатор, войдите в личный кабинет и выберите **Товары** → **Каталог**, а затем в левом верхнем углу откройте переключатель бизнес-аккаунтов. Чтобы скопировать идентификатор, наведите на него мышь и нажмите появившуюся кнопку. | |
| **get_suggested_offer_mappings_request** | [**\YandexMarketApi\Model\GetSuggestedOfferMappingsRequest**](../Model/GetSuggestedOfferMappingsRequest.md)|  | |

### Return type

[**\YandexMarketApi\Model\GetSuggestedOfferMappingsResponse**](../Model/GetSuggestedOfferMappingsResponse.md)

### Authorization

[OAuth](../../README.md#OAuth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `updateOfferMappings()`

```php
updateOfferMappings($business_id, $update_offer_mappings_request): \YandexMarketApi\Model\EmptyApiResponse
```

Добавление товаров в каталог и редактирование информации о них

Добавляет товары в каталог или редактирует информацию об уже имеющихся товарах.  Чтобы **добавить новый товар**, передайте его с новым идентификатором, который раньше никогда не использовался в каталоге. Старайтесь сразу передать как можно больше информации — она потребуется Маркету для подбора подходящей карточки или создания новой. Если известно, какой карточке на Маркете соответствует товар, можно сразу указать идентификатор этой карточки (**SKU на Маркете**) в поле `marketSKU`.  Для **новых товаров** обязательно укажите параметры: `offerId`, `name`, `category`, `pictures`, `vendor`, `description`.   Чтобы **отредактировать информацию о товаре**, передайте новые данные, указав в `offerId` соответствующий **ваш SKU**. Поля, в которых ничего не меняется, можно не передавать.  {% note warning \"Правила использования SKU\" %}  * SKU товара нельзя менять — можно только удалить товар и добавить заново с новым SKU.  * Уже заданный SKU нельзя освободить и использовать заново для другого товара. Каждый товар должен получать новый идентификатор, до того никогда не использовавшийся в вашем каталоге.  {% endnote %}  |**⚙️ Лимит:** 5000 товаров в минуту, не более 500 товаров в одном запросе| |-|

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: OAuth
$config = YandexMarketApi\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new YandexMarketApi\Api\BusinessOfferMappingsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$business_id = 56; // int | Идентификатор бизнеса.  Чтобы узнать идентификатор, войдите в личный кабинет и выберите **Товары** → **Каталог**, а затем в левом верхнем углу откройте переключатель бизнес-аккаунтов. Чтобы скопировать идентификатор, наведите на него мышь и нажмите появившуюся кнопку.
$update_offer_mappings_request = new \YandexMarketApi\Model\UpdateOfferMappingsRequest(); // \YandexMarketApi\Model\UpdateOfferMappingsRequest

try {
    $result = $apiInstance->updateOfferMappings($business_id, $update_offer_mappings_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling BusinessOfferMappingsApi->updateOfferMappings: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **business_id** | **int**| Идентификатор бизнеса.  Чтобы узнать идентификатор, войдите в личный кабинет и выберите **Товары** → **Каталог**, а затем в левом верхнем углу откройте переключатель бизнес-аккаунтов. Чтобы скопировать идентификатор, наведите на него мышь и нажмите появившуюся кнопку. | |
| **update_offer_mappings_request** | [**\YandexMarketApi\Model\UpdateOfferMappingsRequest**](../Model/UpdateOfferMappingsRequest.md)|  | |

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
