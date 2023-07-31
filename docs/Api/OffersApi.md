# YandexMarketApi\OffersApi

All URIs are relative to https://api.partner.market.yandex.ru, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**deleteCampaignOffers()**](OffersApi.md#deleteCampaignOffers) | **POST** /campaigns/{campaignId}/offers/delete | Удаление товаров из ассортимента магазина |
| [**getAllOffers()**](OffersApi.md#getAllOffers) | **GET** /campaigns/{campaignId}/offers/all | Все предложения магазина |
| [**getCampaignOffers()**](OffersApi.md#getCampaignOffers) | **POST** /campaigns/{campaignId}/offers | Список товаров, размещенных в заданном магазине, с параметрами размещения |
| [**getOffers()**](OffersApi.md#getOffers) | **GET** /campaigns/{campaignId}/offers | Предложения магазина |
| [**updateCampaignOffers()**](OffersApi.md#updateCampaignOffers) | **POST** /campaigns/{campaignId}/offers/update | Настройка размещения товаров в магазине |


## `deleteCampaignOffers()`

```php
deleteCampaignOffers($campaign_id, $delete_campaign_offers_request): \YandexMarketApi\Model\DeleteCampaignOffersResponse
```

Удаление товаров из ассортимента магазина

Удаляет заданные товары из заданного магазина.  {% note warning \"Запрос удаляет товары именно из конкретного магазина\" %}  На продажи в других магазинах и на наличие товара в общем каталоге он не влияет.  {% endnote %}  Товар не получится удалить, если он хранится на складах Маркета.  |**⚙️ Лимит:** 5000 товаров в минуту, не более 200 товаров в одном запросе| |-|

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: OAuth
$config = YandexMarketApi\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new YandexMarketApi\Api\OffersApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$campaign_id = 56; // int | Идентификатор кампании и идентификатор магазина. Каждая кампания в API соответствует магазину в кабинете.  **Где его взять**  Войдите в личный кабинет, в меню слева выберите **Настройки** → **Настройки API** и скопируйте число из поля **Номер кампании**.
$delete_campaign_offers_request = new \YandexMarketApi\Model\DeleteCampaignOffersRequest(); // \YandexMarketApi\Model\DeleteCampaignOffersRequest

try {
    $result = $apiInstance->deleteCampaignOffers($campaign_id, $delete_campaign_offers_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OffersApi->deleteCampaignOffers: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **campaign_id** | **int**| Идентификатор кампании и идентификатор магазина. Каждая кампания в API соответствует магазину в кабинете.  **Где его взять**  Войдите в личный кабинет, в меню слева выберите **Настройки** → **Настройки API** и скопируйте число из поля **Номер кампании**. | |
| **delete_campaign_offers_request** | [**\YandexMarketApi\Model\DeleteCampaignOffersRequest**](../Model/DeleteCampaignOffersRequest.md)|  | |

### Return type

[**\YandexMarketApi\Model\DeleteCampaignOffersResponse**](../Model/DeleteCampaignOffersResponse.md)

### Authorization

[OAuth](../../README.md#OAuth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getAllOffers()`

```php
getAllOffers($campaign_id, $feed_id, $chunk): \YandexMarketApi\Model\GetAllOffersResponse
```

Все предложения магазина

{% note alert \"Deprecated\" %}  Этот метод устарел. Не используйте его.  {% endnote %}  Позволяет максимально быстро получить информацию обо всех предложениях магазина, размещенных на Маркете. Возвращает результат в виде сегментов нефиксированного размера.  В ответе на запрос для каждого найденного предложения указывается URL и наименование этого предложения, его цена и валюта, в которой она указана, карточка модели Яндекс Маркета, с которой соотнесено предложение, а также аукционные ставки на него.  {% note info %}  Количество предложений считается по данным за последние семь дней (не включая сегодня).  Для новых магазинов, еще не разместивших предложения, ограничение равно 0 и пересчитывается на следующий день после размещения первых предложений.  {% endnote %}  |**⚙️ Лимит:** рассчитывается по [формуле](*rule)| |-|  [//]: <> (rule: суточный лимит товаров — среднее количество таваров в каталоге за неделю * 25)

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: OAuth
$config = YandexMarketApi\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new YandexMarketApi\Api\OffersApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$campaign_id = 56; // int | Идентификатор кампании и идентификатор магазина. Каждая кампания в API соответствует магазину в кабинете.  **Где его взять**  Войдите в личный кабинет, в меню слева выберите **Настройки** → **Настройки API** и скопируйте число из поля **Номер кампании**.
$feed_id = 56; // int | Идентификатор прайс-листа.
$chunk = 56; // int | Номер сегмента с результатами.  Значение по умолчанию: `0`.  {% note info %}  Номера сегментов запрашиваются последовательно, пока не будет получен сегмент с пустым ответом. Пустой ответ означает, что все предложения магазина получены.  {% endnote %}  {% note alert %}  Нумерация начинается с 0. Чтобы запросить первую страницу, необходимо указать `chunk=0` и т. д.  {% endnote %}

try {
    $result = $apiInstance->getAllOffers($campaign_id, $feed_id, $chunk);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OffersApi->getAllOffers: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **campaign_id** | **int**| Идентификатор кампании и идентификатор магазина. Каждая кампания в API соответствует магазину в кабинете.  **Где его взять**  Войдите в личный кабинет, в меню слева выберите **Настройки** → **Настройки API** и скопируйте число из поля **Номер кампании**. | |
| **feed_id** | **int**| Идентификатор прайс-листа. | [optional] |
| **chunk** | **int**| Номер сегмента с результатами.  Значение по умолчанию: &#x60;0&#x60;.  {% note info %}  Номера сегментов запрашиваются последовательно, пока не будет получен сегмент с пустым ответом. Пустой ответ означает, что все предложения магазина получены.  {% endnote %}  {% note alert %}  Нумерация начинается с 0. Чтобы запросить первую страницу, необходимо указать &#x60;chunk&#x3D;0&#x60; и т. д.  {% endnote %} | [optional] |

### Return type

[**\YandexMarketApi\Model\GetAllOffersResponse**](../Model/GetAllOffersResponse.md)

### Authorization

[OAuth](../../README.md#OAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getCampaignOffers()`

```php
getCampaignOffers($campaign_id, $get_campaign_offers_request, $page_token, $limit): \YandexMarketApi\Model\GetCampaignOffersResponse
```

Список товаров, размещенных в заданном магазине, с параметрами размещения

Возвращает список товаров, размещенных в заданном магазине. Для каждого товара указываются параметры размещения.  |**⚙️ Лимит:** 5000 товаров в минуту, не более 500 товаров в одном запросе| |-|

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: OAuth
$config = YandexMarketApi\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new YandexMarketApi\Api\OffersApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$campaign_id = 56; // int | Идентификатор кампании и идентификатор магазина. Каждая кампания в API соответствует магазину в кабинете.  **Где его взять**  Войдите в личный кабинет, в меню слева выберите **Настройки** → **Настройки API** и скопируйте число из поля **Номер кампании**.
$get_campaign_offers_request = new \YandexMarketApi\Model\GetCampaignOffersRequest(); // \YandexMarketApi\Model\GetCampaignOffersRequest
$page_token = eyBuZXh0SWQ6IDIzNDIgfQ==; // string | Идентификатор страницы c результатами.  Если параметр не указан, возвращается самая старая страница.  Рекомендуется передавать значение выходного параметра `nextPageToken`, полученное при последнем запросе.  Если задан `page_token`, параметры `offset`, `page_number` и `page_size` игнорируются.
$limit = 20; // int | Количество товаров в выходных данных.

try {
    $result = $apiInstance->getCampaignOffers($campaign_id, $get_campaign_offers_request, $page_token, $limit);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OffersApi->getCampaignOffers: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **campaign_id** | **int**| Идентификатор кампании и идентификатор магазина. Каждая кампания в API соответствует магазину в кабинете.  **Где его взять**  Войдите в личный кабинет, в меню слева выберите **Настройки** → **Настройки API** и скопируйте число из поля **Номер кампании**. | |
| **get_campaign_offers_request** | [**\YandexMarketApi\Model\GetCampaignOffersRequest**](../Model/GetCampaignOffersRequest.md)|  | |
| **page_token** | **string**| Идентификатор страницы c результатами.  Если параметр не указан, возвращается самая старая страница.  Рекомендуется передавать значение выходного параметра &#x60;nextPageToken&#x60;, полученное при последнем запросе.  Если задан &#x60;page_token&#x60;, параметры &#x60;offset&#x60;, &#x60;page_number&#x60; и &#x60;page_size&#x60; игнорируются. | [optional] |
| **limit** | **int**| Количество товаров в выходных данных. | [optional] |

### Return type

[**\YandexMarketApi\Model\GetCampaignOffersResponse**](../Model/GetCampaignOffersResponse.md)

### Authorization

[OAuth](../../README.md#OAuth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getOffers()`

```php
getOffers($campaign_id, $query, $feed_id, $shop_category_id, $currency, $matched, $page, $page_size): \YandexMarketApi\Model\GetOffersResponse
```

Предложения магазина

{% note alert \"Deprecated\" %}  Этот метод устарел. Не используйте его.  {% endnote %}  Позволяет фильтровать информацию о предложениях магазина, размещенных на Маркете, и искать предложения по заданному поисковому запросу.  Поиск предложений, размещенных на Маркете, работает по поисковому запросу аналогично поиску Маркета. Результаты возвращаются с использованием пейджера.  В ответе на запрос для каждого найденного предложения указывается URL и наименование этого предложения, его цена и валюта, в которой она указана, карточка модели Маркета, с которой соотнесено предложение, и аукционные ставки на него.  {% note info %}  Из-за особенностей поиска Маркета иногда на последних страницах пейджера фактическое количество результатов оказывается меньше количества, указанного ранее на предыдущих страницах.  В связи с этим настоятельно рекомендуется анализировать содержимое параметра pager для каждой полученной страницы.  {% endnote %}  {% note info %}  Количество предложений считается по данным за последние семь дней (не включая сегодня).  Для новых магазинов, еще не разместивших предложения, ограничение равно 0 и пересчитывается на следующий день после размещения первых предложений.  {% endnote %}  |**⚙️ Лимит:** рассчитывается по [формуле](*rule)| |-|  [//]: <> (rule: суточный лисит товаров — среднее количество таваров в каталоге за неделю * 25)

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: OAuth
$config = YandexMarketApi\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new YandexMarketApi\Api\OffersApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$campaign_id = 56; // int | Идентификатор кампании и идентификатор магазина. Каждая кампания в API соответствует магазину в кабинете.  **Где его взять**  Войдите в личный кабинет, в меню слева выберите **Настройки** → **Настройки API** и скопируйте число из поля **Номер кампании**.
$query = 'query_example'; // string | Поисковый запрос.  Поддерживается язык запросов.  Значение по умолчанию: все предложения магазина, размещенные на Маркете.
$feed_id = 56; // int | Идентификатор прайс-листа.
$shop_category_id = 'shop_category_id_example'; // string | Идентификатор категории предложения, указанный магазином в прайс-листе.  Параметр выводится только для предложений, у которых указана категория в прайс-листе.  Параметр доступен начиная с версии 2.0 партнерского API.
$currency = new \YandexMarketApi\Model\CurrencyType(); // CurrencyType | Валюта, в которой указана цена предложения.  Возможные значения:  * `BYN` — белорусский рубль.  * `KZT` — казахстанский тенге.  * `RUR` — российский рубль.  * `UAH` — украинская гривна.
$matched = True; // bool | Фильтр по признаку соотнесения предложения и карточки модели.  Возможные значения:  * `0 / FALSE / NO` — поиск выполняется среди предложений, не соотнесенных ни с какой карточкой модели.  * `1 / TRUE / YES` — поиск выполняется среди предложений, соотнесенных с карточками моделей).
$page = 1; // int | Номер страницы результатов.  Значение по умолчанию: 1.  Используется вместе с параметром page_size.  `page_number` игнорируется, если задан `page_token`, `limit` или `offset`.
$page_size = 56; // int | Количество скрытых товаров на странице.  Используется вместе с параметром page_number.  `page_size` игнорируется, если задан `page_token`, `limit` или `offset`.

try {
    $result = $apiInstance->getOffers($campaign_id, $query, $feed_id, $shop_category_id, $currency, $matched, $page, $page_size);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OffersApi->getOffers: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **campaign_id** | **int**| Идентификатор кампании и идентификатор магазина. Каждая кампания в API соответствует магазину в кабинете.  **Где его взять**  Войдите в личный кабинет, в меню слева выберите **Настройки** → **Настройки API** и скопируйте число из поля **Номер кампании**. | |
| **query** | **string**| Поисковый запрос.  Поддерживается язык запросов.  Значение по умолчанию: все предложения магазина, размещенные на Маркете. | [optional] |
| **feed_id** | **int**| Идентификатор прайс-листа. | [optional] |
| **shop_category_id** | **string**| Идентификатор категории предложения, указанный магазином в прайс-листе.  Параметр выводится только для предложений, у которых указана категория в прайс-листе.  Параметр доступен начиная с версии 2.0 партнерского API. | [optional] |
| **currency** | [**CurrencyType**](../Model/.md)| Валюта, в которой указана цена предложения.  Возможные значения:  * &#x60;BYN&#x60; — белорусский рубль.  * &#x60;KZT&#x60; — казахстанский тенге.  * &#x60;RUR&#x60; — российский рубль.  * &#x60;UAH&#x60; — украинская гривна. | [optional] |
| **matched** | **bool**| Фильтр по признаку соотнесения предложения и карточки модели.  Возможные значения:  * &#x60;0 / FALSE / NO&#x60; — поиск выполняется среди предложений, не соотнесенных ни с какой карточкой модели.  * &#x60;1 / TRUE / YES&#x60; — поиск выполняется среди предложений, соотнесенных с карточками моделей). | [optional] |
| **page** | **int**| Номер страницы результатов.  Значение по умолчанию: 1.  Используется вместе с параметром page_size.  &#x60;page_number&#x60; игнорируется, если задан &#x60;page_token&#x60;, &#x60;limit&#x60; или &#x60;offset&#x60;. | [optional] [default to 1] |
| **page_size** | **int**| Количество скрытых товаров на странице.  Используется вместе с параметром page_number.  &#x60;page_size&#x60; игнорируется, если задан &#x60;page_token&#x60;, &#x60;limit&#x60; или &#x60;offset&#x60;. | [optional] |

### Return type

[**\YandexMarketApi\Model\GetOffersResponse**](../Model/GetOffersResponse.md)

### Authorization

[OAuth](../../README.md#OAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `updateCampaignOffers()`

```php
updateCampaignOffers($campaign_id, $update_campaign_offers_request): \YandexMarketApi\Model\EmptyApiResponse
```

Настройка размещения товаров в магазине

Изменяет параметры размещения товаров в конкретном магазине: доступность товара, условия доставки и самовывоза, применяемую ставку НДС.  |**⚙️ Лимит:** 5000 товаров в минуту, не более 500 товаров в одном запросе| |-|

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: OAuth
$config = YandexMarketApi\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new YandexMarketApi\Api\OffersApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$campaign_id = 56; // int | Идентификатор кампании и идентификатор магазина. Каждая кампания в API соответствует магазину в кабинете.  **Где его взять**  Войдите в личный кабинет, в меню слева выберите **Настройки** → **Настройки API** и скопируйте число из поля **Номер кампании**.
$update_campaign_offers_request = new \YandexMarketApi\Model\UpdateCampaignOffersRequest(); // \YandexMarketApi\Model\UpdateCampaignOffersRequest

try {
    $result = $apiInstance->updateCampaignOffers($campaign_id, $update_campaign_offers_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OffersApi->updateCampaignOffers: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **campaign_id** | **int**| Идентификатор кампании и идентификатор магазина. Каждая кампания в API соответствует магазину в кабинете.  **Где его взять**  Войдите в личный кабинет, в меню слева выберите **Настройки** → **Настройки API** и скопируйте число из поля **Номер кампании**. | |
| **update_campaign_offers_request** | [**\YandexMarketApi\Model\UpdateCampaignOffersRequest**](../Model/UpdateCampaignOffersRequest.md)|  | |

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
