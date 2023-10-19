# apiship/yandex-market-php-client

API Яндекс Маркета помогает продавцам автоматизировать и упростить работу с маркетплейсом.

В числе возможностей интеграции:

* управление каталогом товаров и витриной,

* обработка заказов,

* изменение настроек магазина,

* получение отчетов.



## Installation & Usage

### Requirements

PHP 7.4 and later.
Should also work with PHP 8.0.

### Composer

To install the bindings via [Composer](https://getcomposer.org/), add the following to `composer.json`:

```json
{
  "repositories": [
    {
      "type": "vcs",
      "url": "https://github.com/apiship/yandex-market-php-client.git"
    }
  ],
  "require": {
    "GIT_USER_ID/GIT_REPO_ID": "*@dev"
  }
}
```

Then run `composer install`

### Manual Installation

Download the files and include `autoload.php`:

```php
<?php
require_once('/path/to/apiship/yandex-market-php-client/vendor/autoload.php');
```

## Getting Started

Please follow the [installation procedure](#installation--usage) and then run the following:

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



// Configure OAuth2 access token for authorization: OAuth
$config = YandexMarketApi\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new YandexMarketApi\Api\BidsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$business_id = 56; // int | Идентификатор кабинета. Чтобы узнать идентификатор, воспользуйтесь запросом [GET campaigns](../../reference/campaigns/getCampaigns.md#businessdto).  ℹ️ [Что такое кабинет и магазин на Маркете](https://yandex.ru/support/marketplace/account/introduction.html)
$page_token = eyBuZXh0SWQ6IDIzNDIgfQ==; // string | Идентификатор страницы c результатами.  Если параметр не указан, возвращается самая старая страница.  Рекомендуется передавать значение выходного параметра `nextPageToken`, полученное при последнем запросе.  Если задан `page_token`, параметры `offset`, `page_number` и `page_size` игнорируются.
$limit = 20; // int | Количество товаров на одной странице.
$get_bids_info_request = new \YandexMarketApi\Model\GetBidsInfoRequest(); // \YandexMarketApi\Model\GetBidsInfoRequest | description

try {
    $result = $apiInstance->getBidsInfoForBusiness($business_id, $page_token, $limit, $get_bids_info_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling BidsApi->getBidsInfoForBusiness: ', $e->getMessage(), PHP_EOL;
}

```

## API Endpoints

All URIs are relative to *https://api.partner.market.yandex.ru*

Class | Method | HTTP request | Description
------------ | ------------- | ------------- | -------------
*BidsApi* | [**getBidsInfoForBusiness**](docs/Api/BidsApi.md#getbidsinfoforbusiness) | **POST** /businesses/{businessId}/bids/info | Информация об установленных ставках
*BidsApi* | [**getBidsRecommendations**](docs/Api/BidsApi.md#getbidsrecommendations) | **POST** /businesses/{businessId}/bids/recommendations | Рекомендованные ставки для заданных товаров
*BidsApi* | [**putBidsForBusiness**](docs/Api/BidsApi.md#putbidsforbusiness) | **PUT** /businesses/{businessId}/bids | Включение буста продаж и установка ставок
*BidsApi* | [**putBidsForCampaign**](docs/Api/BidsApi.md#putbidsforcampaign) | **PUT** /campaigns/{campaignId}/bids | Включение буста продаж и установка ставок для магазина
*BusinessOfferMappingsApi* | [**deleteOffers**](docs/Api/BusinessOfferMappingsApi.md#deleteoffers) | **POST** /businesses/{businessId}/offer-mappings/delete | Удаление товаров из каталога
*BusinessOfferMappingsApi* | [**getOfferMappings**](docs/Api/BusinessOfferMappingsApi.md#getoffermappings) | **POST** /businesses/{businessId}/offer-mappings | Информация о товарах в каталоге
*BusinessOfferMappingsApi* | [**getSuggestedOfferMappings**](docs/Api/BusinessOfferMappingsApi.md#getsuggestedoffermappings) | **POST** /businesses/{businessId}/offer-mappings/suggestions | Предварительный просмотр карточек на Маркете, соответствующих вашим товарам
*BusinessOfferMappingsApi* | [**updateOfferMappings**](docs/Api/BusinessOfferMappingsApi.md#updateoffermappings) | **POST** /businesses/{businessId}/offer-mappings/update | Добавление товаров в каталог и редактирование информации о них
*CampaignsApi* | [**getCampaign**](docs/Api/CampaignsApi.md#getcampaign) | **GET** /campaigns/{campaignId} | Информация о магазине
*CampaignsApi* | [**getCampaignLogins**](docs/Api/CampaignsApi.md#getcampaignlogins) | **GET** /campaigns/{campaignId}/logins | Логины, связанные с магазином
*CampaignsApi* | [**getCampaignRegion**](docs/Api/CampaignsApi.md#getcampaignregion) | **GET** /campaigns/{campaignId}/region | Регион магазина
*CampaignsApi* | [**getCampaignSettings**](docs/Api/CampaignsApi.md#getcampaignsettings) | **GET** /campaigns/{campaignId}/settings | Настройки магазина
*CampaignsApi* | [**getCampaigns**](docs/Api/CampaignsApi.md#getcampaigns) | **GET** /campaigns | Магазины пользователя
*CampaignsApi* | [**getCampaignsByLogin**](docs/Api/CampaignsApi.md#getcampaignsbylogin) | **GET** /campaigns/by_login/{login} | Магазины, доступные логину
*ContentApi* | [**getCategoryContentParameters**](docs/Api/ContentApi.md#getcategorycontentparameters) | **POST** /category/{categoryId}/parameters | Списки характеристик товаров по категориям
*ContentApi* | [**getOfferCardsContentStatus**](docs/Api/ContentApi.md#getoffercardscontentstatus) | **POST** /businesses/{businessId}/offer-cards | Получение информации о заполненности карточек
*ContentApi* | [**updateOfferContent**](docs/Api/ContentApi.md#updateoffercontent) | **POST** /businesses/{businessId}/offer-cards/update | Редактирование категорийных характеристик товара
*DbsApi* | [**acceptOrderCancellation**](docs/Api/DbsApi.md#acceptordercancellation) | **PUT** /campaigns/{campaignId}/orders/{orderId}/cancellation/accept | Отмена заказа покупателем
*DbsApi* | [**addHiddenOffers**](docs/Api/DbsApi.md#addhiddenoffers) | **POST** /campaigns/{campaignId}/hidden-offers | Скрытие товаров и настройки скрытия
*DbsApi* | [**confirmBusinessPrices**](docs/Api/DbsApi.md#confirmbusinessprices) | **POST** /businesses/{businessId}/price-quarantine/confirm | Подтверждение цены товара, попавшего в карантин (основная цена)
*DbsApi* | [**confirmCampaignPrices**](docs/Api/DbsApi.md#confirmcampaignprices) | **POST** /campaigns/{campaignId}/price-quarantine/confirm | Подтверждение цены товара, попавшего в карантин (цена в магазине)
*DbsApi* | [**createOutlet**](docs/Api/DbsApi.md#createoutlet) | **POST** /campaigns/{campaignId}/outlets | Создание точки продаж
*DbsApi* | [**deleteCampaignOffers**](docs/Api/DbsApi.md#deletecampaignoffers) | **POST** /campaigns/{campaignId}/offers/delete | Удаление товаров из ассортимента магазина
*DbsApi* | [**deleteHiddenOffers**](docs/Api/DbsApi.md#deletehiddenoffers) | **DELETE** /campaigns/{campaignId}/hidden-offers | Возобновление показа товаров
*DbsApi* | [**deleteOffers**](docs/Api/DbsApi.md#deleteoffers) | **POST** /businesses/{businessId}/offer-mappings/delete | Удаление товаров из каталога
*DbsApi* | [**deleteOutlet**](docs/Api/DbsApi.md#deleteoutlet) | **DELETE** /campaigns/{campaignId}/outlets/{outletId} | Удаление точки продаж
*DbsApi* | [**deleteOutletLicenses**](docs/Api/DbsApi.md#deleteoutletlicenses) | **DELETE** /campaigns/{campaignId}/outlets/licenses | Удаление лицензий для точек продаж
*DbsApi* | [**generateGoodsRealizationReport**](docs/Api/DbsApi.md#generategoodsrealizationreport) | **POST** /reports/goods-realization/generate | Отчет по реализации
*DbsApi* | [**generateOrderLabel**](docs/Api/DbsApi.md#generateorderlabel) | **GET** /campaigns/{campaignId}/orders/{orderId}/delivery/shipments/{shipmentId}/boxes/{boxId}/label | Ярлык‑наклейка на отдельное грузовое место в заказе
*DbsApi* | [**generateOrderLabels**](docs/Api/DbsApi.md#generateorderlabels) | **GET** /campaigns/{campaignId}/orders/{orderId}/delivery/labels | Ярлыки‑наклейки на все грузовые места в заказе
*DbsApi* | [**generatePricesReport**](docs/Api/DbsApi.md#generatepricesreport) | **POST** /reports/prices/generate | Отчет «Цены на рынке»
*DbsApi* | [**generateShowsSalesReport**](docs/Api/DbsApi.md#generateshowssalesreport) | **POST** /reports/shows-sales/generate | Отчет «Аналитика продаж»
*DbsApi* | [**generateStocksOnWarehousesReport**](docs/Api/DbsApi.md#generatestocksonwarehousesreport) | **POST** /reports/stocks-on-warehouses/generate | Отчет по остаткам на складах
*DbsApi* | [**generateUnitedMarketplaceServicesReport**](docs/Api/DbsApi.md#generateunitedmarketplaceservicesreport) | **POST** /reports/united-marketplace-services/generate | Отчет по стоимости услуг
*DbsApi* | [**generateUnitedNettingReport**](docs/Api/DbsApi.md#generateunitednettingreport) | **POST** /reports/united-netting/generate | Отчет по платежам
*DbsApi* | [**getAllOffers**](docs/Api/DbsApi.md#getalloffers) | **GET** /campaigns/{campaignId}/offers/all | Все предложения магазина
*DbsApi* | [**getBidsInfoForBusiness**](docs/Api/DbsApi.md#getbidsinfoforbusiness) | **POST** /businesses/{businessId}/bids/info | Информация об установленных ставках
*DbsApi* | [**getBidsRecommendations**](docs/Api/DbsApi.md#getbidsrecommendations) | **POST** /businesses/{businessId}/bids/recommendations | Рекомендованные ставки для заданных товаров
*DbsApi* | [**getBusinessQuarantineOffers**](docs/Api/DbsApi.md#getbusinessquarantineoffers) | **POST** /businesses/{businessId}/price-quarantine | Список товаров, находящихся в карантине (основная цена)
*DbsApi* | [**getCampaign**](docs/Api/DbsApi.md#getcampaign) | **GET** /campaigns/{campaignId} | Информация о магазине
*DbsApi* | [**getCampaignFeedCategories**](docs/Api/DbsApi.md#getcampaignfeedcategories) | **GET** /campaigns/{campaignId}/feeds/categories | Категории магазина
*DbsApi* | [**getCampaignLogins**](docs/Api/DbsApi.md#getcampaignlogins) | **GET** /campaigns/{campaignId}/logins | Логины, связанные с магазином
*DbsApi* | [**getCampaignOffers**](docs/Api/DbsApi.md#getcampaignoffers) | **POST** /campaigns/{campaignId}/offers | Список товаров, размещенных в заданном магазине, с параметрами размещения
*DbsApi* | [**getCampaignQuarantineOffers**](docs/Api/DbsApi.md#getcampaignquarantineoffers) | **POST** /campaigns/{campaignId}/price-quarantine | Список товаров, находящихся в карантине (цена в магазине)
*DbsApi* | [**getCampaignRegion**](docs/Api/DbsApi.md#getcampaignregion) | **GET** /campaigns/{campaignId}/region | Регион магазина
*DbsApi* | [**getCampaignSettings**](docs/Api/DbsApi.md#getcampaignsettings) | **GET** /campaigns/{campaignId}/settings | Настройки магазина
*DbsApi* | [**getCampaigns**](docs/Api/DbsApi.md#getcampaigns) | **GET** /campaigns | Магазины пользователя
*DbsApi* | [**getCampaignsByLogin**](docs/Api/DbsApi.md#getcampaignsbylogin) | **GET** /campaigns/by_login/{login} | Магазины, доступные логину
*DbsApi* | [**getCategoryContentParameters**](docs/Api/DbsApi.md#getcategorycontentparameters) | **POST** /category/{categoryId}/parameters | Списки характеристик товаров по категориям
*DbsApi* | [**getDeliveryServices**](docs/Api/DbsApi.md#getdeliveryservices) | **GET** /delivery/services | Справочник служб доставки
*DbsApi* | [**getFeed**](docs/Api/DbsApi.md#getfeed) | **GET** /campaigns/{campaignId}/feeds/{feedId} | Информация о прайс-листе
*DbsApi* | [**getFeedCategories**](docs/Api/DbsApi.md#getfeedcategories) | **GET** /campaigns/{campaignId}/feeds/{feedId}/categories | Категории прайс-листа
*DbsApi* | [**getFeedIndexLogs**](docs/Api/DbsApi.md#getfeedindexlogs) | **GET** /campaigns/{campaignId}/feeds/{feedId}/index-logs | Отчет по индексации прайс-листа
*DbsApi* | [**getFeedbackAndCommentUpdates**](docs/Api/DbsApi.md#getfeedbackandcommentupdates) | **GET** /campaigns/{campaignId}/feedback/updates | Новые и обновленные отзывы о магазине
*DbsApi* | [**getFeeds**](docs/Api/DbsApi.md#getfeeds) | **GET** /campaigns/{campaignId}/feeds | Список прайс-листов магазина
*DbsApi* | [**getGoodsStats**](docs/Api/DbsApi.md#getgoodsstats) | **POST** /campaigns/{campaignId}/stats/skus | Отчет по товарам
*DbsApi* | [**getHiddenOffers**](docs/Api/DbsApi.md#gethiddenoffers) | **GET** /campaigns/{campaignId}/hidden-offers | Информация о скрытых вами товарах
*DbsApi* | [**getModel**](docs/Api/DbsApi.md#getmodel) | **GET** /models/{modelId} | Информация о модели
*DbsApi* | [**getModelOffers**](docs/Api/DbsApi.md#getmodeloffers) | **GET** /models/{modelId}/offers | Список предложений для модели
*DbsApi* | [**getModels**](docs/Api/DbsApi.md#getmodels) | **POST** /models | Информация о нескольких моделях
*DbsApi* | [**getModelsOffers**](docs/Api/DbsApi.md#getmodelsoffers) | **POST** /models/offers | Список предложений для нескольких моделей
*DbsApi* | [**getOfferCardsContentStatus**](docs/Api/DbsApi.md#getoffercardscontentstatus) | **POST** /businesses/{businessId}/offer-cards | Получение информации о заполненности карточек
*DbsApi* | [**getOfferMappings**](docs/Api/DbsApi.md#getoffermappings) | **POST** /businesses/{businessId}/offer-mappings | Информация о товарах в каталоге
*DbsApi* | [**getOfferRecommendations**](docs/Api/DbsApi.md#getofferrecommendations) | **POST** /businesses/{businessId}/offers/recommendations | Рекомендации Маркета, касающиеся цен
*DbsApi* | [**getOffers**](docs/Api/DbsApi.md#getoffers) | **GET** /campaigns/{campaignId}/offers | Предложения магазина
*DbsApi* | [**getOrder**](docs/Api/DbsApi.md#getorder) | **GET** /campaigns/{campaignId}/orders/{orderId} | Информация о заказе
*DbsApi* | [**getOrderBuyerInfo**](docs/Api/DbsApi.md#getorderbuyerinfo) | **GET** /campaigns/{campaignId}/orders/{orderId}/buyer | Информация о покупателе
*DbsApi* | [**getOrders**](docs/Api/DbsApi.md#getorders) | **GET** /campaigns/{campaignId}/orders | Информация о заказах
*DbsApi* | [**getOrdersStats**](docs/Api/DbsApi.md#getordersstats) | **POST** /campaigns/{campaignId}/stats/orders | Отчет по заказам
*DbsApi* | [**getOutlet**](docs/Api/DbsApi.md#getoutlet) | **GET** /campaigns/{campaignId}/outlets/{outletId} | Информация о точке продаж
*DbsApi* | [**getOutletLicenses**](docs/Api/DbsApi.md#getoutletlicenses) | **GET** /campaigns/{campaignId}/outlets/licenses | Информация о лицензиях для точек продаж
*DbsApi* | [**getOutlets**](docs/Api/DbsApi.md#getoutlets) | **GET** /campaigns/{campaignId}/outlets | Информация о точках продаж
*DbsApi* | [**getPrices**](docs/Api/DbsApi.md#getprices) | **GET** /campaigns/{campaignId}/offer-prices | Список цен
*DbsApi* | [**getPricesByOfferIds**](docs/Api/DbsApi.md#getpricesbyofferids) | **POST** /campaigns/{campaignId}/offer-prices | Просмотр установленных в магазине цен
*DbsApi* | [**getReportInfo**](docs/Api/DbsApi.md#getreportinfo) | **GET** /reports/info/{reportId} | Статус генерации и скачивание готовых отчетов
*DbsApi* | [**getReturn**](docs/Api/DbsApi.md#getreturn) | **GET** /campaigns/{campaignId}/orders/{orderId}/returns/{returnId} | Информация о возврате или невыкупе
*DbsApi* | [**getReturnApplication**](docs/Api/DbsApi.md#getreturnapplication) | **GET** /campaigns/{campaignId}/orders/{orderId}/returns/{returnId}/application | Получение заявления на возврат
*DbsApi* | [**getReturnPhoto**](docs/Api/DbsApi.md#getreturnphoto) | **GET** /campaigns/{campaignId}/orders/{orderId}/returns/{returnId}/decision/{itemId}/image/{imageHash} | Получение фотографии возврата
*DbsApi* | [**getReturns**](docs/Api/DbsApi.md#getreturns) | **GET** /campaigns/{campaignId}/returns | Список возвратов и невыкупов
*DbsApi* | [**getSuggestedOfferMappings**](docs/Api/DbsApi.md#getsuggestedoffermappings) | **POST** /businesses/{businessId}/offer-mappings/suggestions | Предварительный просмотр карточек на Маркете, соответствующих вашим товарам
*DbsApi* | [**getWarehouses**](docs/Api/DbsApi.md#getwarehouses) | **GET** /businesses/{businessId}/warehouses | Список складов и групп складов
*DbsApi* | [**provideOrderDigitalCodes**](docs/Api/DbsApi.md#provideorderdigitalcodes) | **POST** /campaigns/{campaignId}/orders/{orderId}/deliverDigitalGoods | Передача ключей цифровых товаров
*DbsApi* | [**provideOrderItemIdentifiers**](docs/Api/DbsApi.md#provideorderitemidentifiers) | **PUT** /campaigns/{campaignId}/orders/{orderId}/identifiers | Передача уникальных кодов маркировки единиц товара
*DbsApi* | [**putBidsForBusiness**](docs/Api/DbsApi.md#putbidsforbusiness) | **PUT** /businesses/{businessId}/bids | Включение буста продаж и установка ставок
*DbsApi* | [**putBidsForCampaign**](docs/Api/DbsApi.md#putbidsforcampaign) | **PUT** /campaigns/{campaignId}/bids | Включение буста продаж и установка ставок для магазина
*DbsApi* | [**refreshFeed**](docs/Api/DbsApi.md#refreshfeed) | **POST** /campaigns/{campaignId}/feeds/{feedId}/refresh | Сообщить, что прайс-лист обновился
*DbsApi* | [**searchModels**](docs/Api/DbsApi.md#searchmodels) | **GET** /models | Поиск модели товара
*DbsApi* | [**searchRegionChildren**](docs/Api/DbsApi.md#searchregionchildren) | **GET** /regions/{regionId}/children | Информация о дочерних регионах
*DbsApi* | [**searchRegionsById**](docs/Api/DbsApi.md#searchregionsbyid) | **GET** /regions/{regionId} | Информация о регионе
*DbsApi* | [**searchRegionsByName**](docs/Api/DbsApi.md#searchregionsbyname) | **GET** /regions | Метод для поиска регионов по их имени
*DbsApi* | [**setFeedParams**](docs/Api/DbsApi.md#setfeedparams) | **POST** /campaigns/{campaignId}/feeds/{feedId}/params | Изменение параметров прайс-листа
*DbsApi* | [**setOrderDeliveryDate**](docs/Api/DbsApi.md#setorderdeliverydate) | **PUT** /campaigns/{campaignId}/orders/{orderId}/delivery/date | Изменение даты доставки заказа
*DbsApi* | [**setOrderDeliveryTrackCode**](docs/Api/DbsApi.md#setorderdeliverytrackcode) | **POST** /campaigns/{campaignId}/orders/{orderId}/delivery/track | Передача трек‑номера посылки
*DbsApi* | [**setOrderShipmentBoxes**](docs/Api/DbsApi.md#setordershipmentboxes) | **PUT** /campaigns/{campaignId}/orders/{orderId}/delivery/shipments/{shipmentId}/boxes | Передача количества грузовых мест в заказе
*DbsApi* | [**setReturnDecision**](docs/Api/DbsApi.md#setreturndecision) | **POST** /campaigns/{campaignId}/orders/{orderId}/returns/{returnId}/decision | Принятие/изменение решения по позиции в возврате
*DbsApi* | [**submitReturnDecision**](docs/Api/DbsApi.md#submitreturndecision) | **POST** /campaigns/{campaignId}/orders/{orderId}/returns/{returnId}/decision/submit | Подтверждение решения по возвратным позициям
*DbsApi* | [**updateBusinessPrices**](docs/Api/DbsApi.md#updatebusinessprices) | **POST** /businesses/{businessId}/offer-prices/updates | Установка цен
*DbsApi* | [**updateCampaignOffers**](docs/Api/DbsApi.md#updatecampaignoffers) | **POST** /campaigns/{campaignId}/offers/update | Настройка размещения товаров в магазине
*DbsApi* | [**updateOfferContent**](docs/Api/DbsApi.md#updateoffercontent) | **POST** /businesses/{businessId}/offer-cards/update | Редактирование категорийных характеристик товара
*DbsApi* | [**updateOfferMappings**](docs/Api/DbsApi.md#updateoffermappings) | **POST** /businesses/{businessId}/offer-mappings/update | Добавление товаров в каталог и редактирование информации о них
*DbsApi* | [**updateOrderItems**](docs/Api/DbsApi.md#updateorderitems) | **PUT** /campaigns/{campaignId}/orders/{orderId}/items | Удаление товара из заказа или уменьшение числа единиц
*DbsApi* | [**updateOrderStatus**](docs/Api/DbsApi.md#updateorderstatus) | **PUT** /campaigns/{campaignId}/orders/{orderId}/status | Изменение статуса заказа
*DbsApi* | [**updateOrderStatuses**](docs/Api/DbsApi.md#updateorderstatuses) | **POST** /campaigns/{campaignId}/orders/status-update | Изменение статусов заказа
*DbsApi* | [**updateOrderStorageLimit**](docs/Api/DbsApi.md#updateorderstoragelimit) | **PUT** /campaigns/{campaignId}/orders/{orderId}/delivery/storage-limit | Продление срока хранения заказа
*DbsApi* | [**updateOutlet**](docs/Api/DbsApi.md#updateoutlet) | **PUT** /campaigns/{campaignId}/outlets/{outletId} | Изменение информации о точке продаж
*DbsApi* | [**updateOutletLicenses**](docs/Api/DbsApi.md#updateoutletlicenses) | **POST** /campaigns/{campaignId}/outlets/licenses | Создание и изменение лицензий для точек продаж
*DbsApi* | [**updatePrices**](docs/Api/DbsApi.md#updateprices) | **POST** /campaigns/{campaignId}/offer-prices/updates | Установка цен на товары в конкретном магазине.
*DbsApi* | [**updateStocks**](docs/Api/DbsApi.md#updatestocks) | **PUT** /campaigns/{campaignId}/offers/stocks | Передача информации об остатках
*DeliveryServicesApi* | [**getDeliveryServices**](docs/Api/DeliveryServicesApi.md#getdeliveryservices) | **GET** /delivery/services | Справочник служб доставки
*ExpressApi* | [**confirmBusinessPrices**](docs/Api/ExpressApi.md#confirmbusinessprices) | **POST** /businesses/{businessId}/price-quarantine/confirm | Подтверждение цены товара, попавшего в карантин (основная цена)
*ExpressApi* | [**confirmCampaignPrices**](docs/Api/ExpressApi.md#confirmcampaignprices) | **POST** /campaigns/{campaignId}/price-quarantine/confirm | Подтверждение цены товара, попавшего в карантин (цена в магазине)
*ExpressApi* | [**deleteCampaignOffers**](docs/Api/ExpressApi.md#deletecampaignoffers) | **POST** /campaigns/{campaignId}/offers/delete | Удаление товаров из ассортимента магазина
*ExpressApi* | [**deleteOffers**](docs/Api/ExpressApi.md#deleteoffers) | **POST** /businesses/{businessId}/offer-mappings/delete | Удаление товаров из каталога
*ExpressApi* | [**generateGoodsRealizationReport**](docs/Api/ExpressApi.md#generategoodsrealizationreport) | **POST** /reports/goods-realization/generate | Отчет по реализации
*ExpressApi* | [**generateOrderLabel**](docs/Api/ExpressApi.md#generateorderlabel) | **GET** /campaigns/{campaignId}/orders/{orderId}/delivery/shipments/{shipmentId}/boxes/{boxId}/label | Ярлык‑наклейка на отдельное грузовое место в заказе
*ExpressApi* | [**generateOrderLabels**](docs/Api/ExpressApi.md#generateorderlabels) | **GET** /campaigns/{campaignId}/orders/{orderId}/delivery/labels | Ярлыки‑наклейки на все грузовые места в заказе
*ExpressApi* | [**generatePricesReport**](docs/Api/ExpressApi.md#generatepricesreport) | **POST** /reports/prices/generate | Отчет «Цены на рынке»
*ExpressApi* | [**generateShowsSalesReport**](docs/Api/ExpressApi.md#generateshowssalesreport) | **POST** /reports/shows-sales/generate | Отчет «Аналитика продаж»
*ExpressApi* | [**generateStocksOnWarehousesReport**](docs/Api/ExpressApi.md#generatestocksonwarehousesreport) | **POST** /reports/stocks-on-warehouses/generate | Отчет по остаткам на складах
*ExpressApi* | [**generateUnitedMarketplaceServicesReport**](docs/Api/ExpressApi.md#generateunitedmarketplaceservicesreport) | **POST** /reports/united-marketplace-services/generate | Отчет по стоимости услуг
*ExpressApi* | [**generateUnitedNettingReport**](docs/Api/ExpressApi.md#generateunitednettingreport) | **POST** /reports/united-netting/generate | Отчет по платежам
*ExpressApi* | [**getBidsInfoForBusiness**](docs/Api/ExpressApi.md#getbidsinfoforbusiness) | **POST** /businesses/{businessId}/bids/info | Информация об установленных ставках
*ExpressApi* | [**getBidsRecommendations**](docs/Api/ExpressApi.md#getbidsrecommendations) | **POST** /businesses/{businessId}/bids/recommendations | Рекомендованные ставки для заданных товаров
*ExpressApi* | [**getBusinessQuarantineOffers**](docs/Api/ExpressApi.md#getbusinessquarantineoffers) | **POST** /businesses/{businessId}/price-quarantine | Список товаров, находящихся в карантине (основная цена)
*ExpressApi* | [**getCampaign**](docs/Api/ExpressApi.md#getcampaign) | **GET** /campaigns/{campaignId} | Информация о магазине
*ExpressApi* | [**getCampaignLogins**](docs/Api/ExpressApi.md#getcampaignlogins) | **GET** /campaigns/{campaignId}/logins | Логины, связанные с магазином
*ExpressApi* | [**getCampaignOffers**](docs/Api/ExpressApi.md#getcampaignoffers) | **POST** /campaigns/{campaignId}/offers | Список товаров, размещенных в заданном магазине, с параметрами размещения
*ExpressApi* | [**getCampaignQuarantineOffers**](docs/Api/ExpressApi.md#getcampaignquarantineoffers) | **POST** /campaigns/{campaignId}/price-quarantine | Список товаров, находящихся в карантине (цена в магазине)
*ExpressApi* | [**getCampaigns**](docs/Api/ExpressApi.md#getcampaigns) | **GET** /campaigns | Магазины пользователя
*ExpressApi* | [**getCampaignsByLogin**](docs/Api/ExpressApi.md#getcampaignsbylogin) | **GET** /campaigns/by_login/{login} | Магазины, доступные логину
*ExpressApi* | [**getCategoryContentParameters**](docs/Api/ExpressApi.md#getcategorycontentparameters) | **POST** /category/{categoryId}/parameters | Списки характеристик товаров по категориям
*ExpressApi* | [**getDeliveryServices**](docs/Api/ExpressApi.md#getdeliveryservices) | **GET** /delivery/services | Справочник служб доставки
*ExpressApi* | [**getGoodsStats**](docs/Api/ExpressApi.md#getgoodsstats) | **POST** /campaigns/{campaignId}/stats/skus | Отчет по товарам
*ExpressApi* | [**getOfferCardsContentStatus**](docs/Api/ExpressApi.md#getoffercardscontentstatus) | **POST** /businesses/{businessId}/offer-cards | Получение информации о заполненности карточек
*ExpressApi* | [**getOfferMappingEntries**](docs/Api/ExpressApi.md#getoffermappingentries) | **GET** /campaigns/{campaignId}/offer-mapping-entries | Список товаров в каталоге
*ExpressApi* | [**getOfferMappings**](docs/Api/ExpressApi.md#getoffermappings) | **POST** /businesses/{businessId}/offer-mappings | Информация о товарах в каталоге
*ExpressApi* | [**getOfferRecommendations**](docs/Api/ExpressApi.md#getofferrecommendations) | **POST** /businesses/{businessId}/offers/recommendations | Рекомендации Маркета, касающиеся цен
*ExpressApi* | [**getOrder**](docs/Api/ExpressApi.md#getorder) | **GET** /campaigns/{campaignId}/orders/{orderId} | Информация о заказе
*ExpressApi* | [**getOrderLabelsData**](docs/Api/ExpressApi.md#getorderlabelsdata) | **GET** /campaigns/{campaignId}/orders/{orderId}/delivery/labels/data | Информация на ярлыках‑наклейках
*ExpressApi* | [**getOrders**](docs/Api/ExpressApi.md#getorders) | **GET** /campaigns/{campaignId}/orders | Информация о заказах
*ExpressApi* | [**getOrdersStats**](docs/Api/ExpressApi.md#getordersstats) | **POST** /campaigns/{campaignId}/stats/orders | Отчет по заказам
*ExpressApi* | [**getPrices**](docs/Api/ExpressApi.md#getprices) | **GET** /campaigns/{campaignId}/offer-prices | Список цен
*ExpressApi* | [**getPricesByOfferIds**](docs/Api/ExpressApi.md#getpricesbyofferids) | **POST** /campaigns/{campaignId}/offer-prices | Просмотр установленных в магазине цен
*ExpressApi* | [**getReportInfo**](docs/Api/ExpressApi.md#getreportinfo) | **GET** /reports/info/{reportId} | Статус генерации и скачивание готовых отчетов
*ExpressApi* | [**getReturn**](docs/Api/ExpressApi.md#getreturn) | **GET** /campaigns/{campaignId}/orders/{orderId}/returns/{returnId} | Информация о возврате или невыкупе
*ExpressApi* | [**getReturnApplication**](docs/Api/ExpressApi.md#getreturnapplication) | **GET** /campaigns/{campaignId}/orders/{orderId}/returns/{returnId}/application | Получение заявления на возврат
*ExpressApi* | [**getReturnPhoto**](docs/Api/ExpressApi.md#getreturnphoto) | **GET** /campaigns/{campaignId}/orders/{orderId}/returns/{returnId}/decision/{itemId}/image/{imageHash} | Получение фотографии возврата
*ExpressApi* | [**getReturns**](docs/Api/ExpressApi.md#getreturns) | **GET** /campaigns/{campaignId}/returns | Список возвратов и невыкупов
*ExpressApi* | [**getSuggestedOfferMappingEntries**](docs/Api/ExpressApi.md#getsuggestedoffermappingentries) | **POST** /campaigns/{campaignId}/offer-mapping-entries/suggestions | Рекомендованные карточки для ваших товаров
*ExpressApi* | [**getSuggestedOfferMappings**](docs/Api/ExpressApi.md#getsuggestedoffermappings) | **POST** /businesses/{businessId}/offer-mappings/suggestions | Предварительный просмотр карточек на Маркете, соответствующих вашим товарам
*ExpressApi* | [**getSuggestedPrices**](docs/Api/ExpressApi.md#getsuggestedprices) | **POST** /campaigns/{campaignId}/offer-prices/suggestions | Цены для продвижения товаров
*ExpressApi* | [**getWarehouses**](docs/Api/ExpressApi.md#getwarehouses) | **GET** /businesses/{businessId}/warehouses | Список складов и групп складов
*ExpressApi* | [**provideOrderItemIdentifiers**](docs/Api/ExpressApi.md#provideorderitemidentifiers) | **PUT** /campaigns/{campaignId}/orders/{orderId}/identifiers | Передача уникальных кодов маркировки единиц товара
*ExpressApi* | [**putBidsForBusiness**](docs/Api/ExpressApi.md#putbidsforbusiness) | **PUT** /businesses/{businessId}/bids | Включение буста продаж и установка ставок
*ExpressApi* | [**setOrderShipmentBoxes**](docs/Api/ExpressApi.md#setordershipmentboxes) | **PUT** /campaigns/{campaignId}/orders/{orderId}/delivery/shipments/{shipmentId}/boxes | Передача количества грузовых мест в заказе
*ExpressApi* | [**updateBusinessPrices**](docs/Api/ExpressApi.md#updatebusinessprices) | **POST** /businesses/{businessId}/offer-prices/updates | Установка цен
*ExpressApi* | [**updateCampaignOffers**](docs/Api/ExpressApi.md#updatecampaignoffers) | **POST** /campaigns/{campaignId}/offers/update | Настройка размещения товаров в магазине
*ExpressApi* | [**updateOfferContent**](docs/Api/ExpressApi.md#updateoffercontent) | **POST** /businesses/{businessId}/offer-cards/update | Редактирование категорийных характеристик товара
*ExpressApi* | [**updateOfferMappingEntries**](docs/Api/ExpressApi.md#updateoffermappingentries) | **POST** /campaigns/{campaignId}/offer-mapping-entries/updates | Добавление и редактирование товаров в каталоге
*ExpressApi* | [**updateOfferMappings**](docs/Api/ExpressApi.md#updateoffermappings) | **POST** /businesses/{businessId}/offer-mappings/update | Добавление товаров в каталог и редактирование информации о них
*ExpressApi* | [**updateOrderItems**](docs/Api/ExpressApi.md#updateorderitems) | **PUT** /campaigns/{campaignId}/orders/{orderId}/items | Удаление товара из заказа или уменьшение числа единиц
*ExpressApi* | [**updateOrderStatus**](docs/Api/ExpressApi.md#updateorderstatus) | **PUT** /campaigns/{campaignId}/orders/{orderId}/status | Изменение статуса заказа
*ExpressApi* | [**updateOrderStatuses**](docs/Api/ExpressApi.md#updateorderstatuses) | **POST** /campaigns/{campaignId}/orders/status-update | Изменение статусов заказа
*ExpressApi* | [**updatePrices**](docs/Api/ExpressApi.md#updateprices) | **POST** /campaigns/{campaignId}/offer-prices/updates | Установка цен на товары в конкретном магазине.
*ExpressApi* | [**updateStocks**](docs/Api/ExpressApi.md#updatestocks) | **PUT** /campaigns/{campaignId}/offers/stocks | Передача информации об остатках
*ExpressApi* | [**verifyOrderEac**](docs/Api/ExpressApi.md#verifyordereac) | **PUT** /campaigns/{campaignId}/orders/{orderId}/verifyEac | Передача кода проверки
*FbsApi* | [**addHiddenOffers**](docs/Api/FbsApi.md#addhiddenoffers) | **POST** /campaigns/{campaignId}/hidden-offers | Скрытие товаров и настройки скрытия
*FbsApi* | [**confirmBusinessPrices**](docs/Api/FbsApi.md#confirmbusinessprices) | **POST** /businesses/{businessId}/price-quarantine/confirm | Подтверждение цены товара, попавшего в карантин (основная цена)
*FbsApi* | [**confirmCampaignPrices**](docs/Api/FbsApi.md#confirmcampaignprices) | **POST** /campaigns/{campaignId}/price-quarantine/confirm | Подтверждение цены товара, попавшего в карантин (цена в магазине)
*FbsApi* | [**confirmShipment**](docs/Api/FbsApi.md#confirmshipment) | **POST** /campaigns/{campaignId}/first-mile/shipments/{shipmentId}/confirm | Подтверждение отгрузки
*FbsApi* | [**deleteCampaignOffers**](docs/Api/FbsApi.md#deletecampaignoffers) | **POST** /campaigns/{campaignId}/offers/delete | Удаление товаров из ассортимента магазина
*FbsApi* | [**deleteHiddenOffers**](docs/Api/FbsApi.md#deletehiddenoffers) | **DELETE** /campaigns/{campaignId}/hidden-offers | Возобновление показа товаров
*FbsApi* | [**deleteOffers**](docs/Api/FbsApi.md#deleteoffers) | **POST** /businesses/{businessId}/offer-mappings/delete | Удаление товаров из каталога
*FbsApi* | [**downloadShipmentAct**](docs/Api/FbsApi.md#downloadshipmentact) | **GET** /campaigns/{campaignId}/first-mile/shipments/{shipmentId}/act | Получение акта приема-передачи
*FbsApi* | [**downloadShipmentDiscrepancyAct**](docs/Api/FbsApi.md#downloadshipmentdiscrepancyact) | **GET** /campaigns/{campaignId}/first-mile/shipments/{shipmentId}/discrepancy-act | Получение акта расхождений
*FbsApi* | [**downloadShipmentInboundAct**](docs/Api/FbsApi.md#downloadshipmentinboundact) | **GET** /campaigns/{campaignId}/first-mile/shipments/{shipmentId}/inbound-act | Получение фактического акта приема-передачи
*FbsApi* | [**downloadShipmentPalletLabels**](docs/Api/FbsApi.md#downloadshipmentpalletlabels) | **GET** /campaigns/{campaignId}/first-mile/shipments/{shipmentId}/pallet/labels | Ярлыки на все упаковки в отгрузке
*FbsApi* | [**downloadShipmentReceptionTransferAct**](docs/Api/FbsApi.md#downloadshipmentreceptiontransferact) | **GET** /campaigns/{campaignId}/shipments/reception-transfer-act | Подтверждение ближайшей отгрузки и получение акта приема-передачи для нее
*FbsApi* | [**downloadShipmentTransportationWaybill**](docs/Api/FbsApi.md#downloadshipmenttransportationwaybill) | **GET** /campaigns/{campaignId}/first-mile/shipments/{shipmentId}/transportation-waybill | Получение транспортной накладной
*FbsApi* | [**generateGoodsRealizationReport**](docs/Api/FbsApi.md#generategoodsrealizationreport) | **POST** /reports/goods-realization/generate | Отчет по реализации
*FbsApi* | [**generateOrderLabel**](docs/Api/FbsApi.md#generateorderlabel) | **GET** /campaigns/{campaignId}/orders/{orderId}/delivery/shipments/{shipmentId}/boxes/{boxId}/label | Ярлык‑наклейка на отдельное грузовое место в заказе
*FbsApi* | [**generateOrderLabels**](docs/Api/FbsApi.md#generateorderlabels) | **GET** /campaigns/{campaignId}/orders/{orderId}/delivery/labels | Ярлыки‑наклейки на все грузовые места в заказе
*FbsApi* | [**generatePricesReport**](docs/Api/FbsApi.md#generatepricesreport) | **POST** /reports/prices/generate | Отчет «Цены на рынке»
*FbsApi* | [**generateShowsSalesReport**](docs/Api/FbsApi.md#generateshowssalesreport) | **POST** /reports/shows-sales/generate | Отчет «Аналитика продаж»
*FbsApi* | [**generateStocksOnWarehousesReport**](docs/Api/FbsApi.md#generatestocksonwarehousesreport) | **POST** /reports/stocks-on-warehouses/generate | Отчет по остаткам на складах
*FbsApi* | [**generateUnitedMarketplaceServicesReport**](docs/Api/FbsApi.md#generateunitedmarketplaceservicesreport) | **POST** /reports/united-marketplace-services/generate | Отчет по стоимости услуг
*FbsApi* | [**generateUnitedNettingReport**](docs/Api/FbsApi.md#generateunitednettingreport) | **POST** /reports/united-netting/generate | Отчет по платежам
*FbsApi* | [**getBidsInfoForBusiness**](docs/Api/FbsApi.md#getbidsinfoforbusiness) | **POST** /businesses/{businessId}/bids/info | Информация об установленных ставках
*FbsApi* | [**getBidsRecommendations**](docs/Api/FbsApi.md#getbidsrecommendations) | **POST** /businesses/{businessId}/bids/recommendations | Рекомендованные ставки для заданных товаров
*FbsApi* | [**getBusinessQuarantineOffers**](docs/Api/FbsApi.md#getbusinessquarantineoffers) | **POST** /businesses/{businessId}/price-quarantine | Список товаров, находящихся в карантине (основная цена)
*FbsApi* | [**getCampaign**](docs/Api/FbsApi.md#getcampaign) | **GET** /campaigns/{campaignId} | Информация о магазине
*FbsApi* | [**getCampaignLogins**](docs/Api/FbsApi.md#getcampaignlogins) | **GET** /campaigns/{campaignId}/logins | Логины, связанные с магазином
*FbsApi* | [**getCampaignOffers**](docs/Api/FbsApi.md#getcampaignoffers) | **POST** /campaigns/{campaignId}/offers | Список товаров, размещенных в заданном магазине, с параметрами размещения
*FbsApi* | [**getCampaignQuarantineOffers**](docs/Api/FbsApi.md#getcampaignquarantineoffers) | **POST** /campaigns/{campaignId}/price-quarantine | Список товаров, находящихся в карантине (цена в магазине)
*FbsApi* | [**getCampaigns**](docs/Api/FbsApi.md#getcampaigns) | **GET** /campaigns | Магазины пользователя
*FbsApi* | [**getCampaignsByLogin**](docs/Api/FbsApi.md#getcampaignsbylogin) | **GET** /campaigns/by_login/{login} | Магазины, доступные логину
*FbsApi* | [**getCategoryContentParameters**](docs/Api/FbsApi.md#getcategorycontentparameters) | **POST** /category/{categoryId}/parameters | Списки характеристик товаров по категориям
*FbsApi* | [**getDeliveryServices**](docs/Api/FbsApi.md#getdeliveryservices) | **GET** /delivery/services | Справочник служб доставки
*FbsApi* | [**getGoodsStats**](docs/Api/FbsApi.md#getgoodsstats) | **POST** /campaigns/{campaignId}/stats/skus | Отчет по товарам
*FbsApi* | [**getHiddenOffers**](docs/Api/FbsApi.md#gethiddenoffers) | **GET** /campaigns/{campaignId}/hidden-offers | Информация о скрытых вами товарах
*FbsApi* | [**getOfferCardsContentStatus**](docs/Api/FbsApi.md#getoffercardscontentstatus) | **POST** /businesses/{businessId}/offer-cards | Получение информации о заполненности карточек
*FbsApi* | [**getOfferMappingEntries**](docs/Api/FbsApi.md#getoffermappingentries) | **GET** /campaigns/{campaignId}/offer-mapping-entries | Список товаров в каталоге
*FbsApi* | [**getOfferMappings**](docs/Api/FbsApi.md#getoffermappings) | **POST** /businesses/{businessId}/offer-mappings | Информация о товарах в каталоге
*FbsApi* | [**getOfferRecommendations**](docs/Api/FbsApi.md#getofferrecommendations) | **POST** /businesses/{businessId}/offers/recommendations | Рекомендации Маркета, касающиеся цен
*FbsApi* | [**getOrder**](docs/Api/FbsApi.md#getorder) | **GET** /campaigns/{campaignId}/orders/{orderId} | Информация о заказе
*FbsApi* | [**getOrderLabelsData**](docs/Api/FbsApi.md#getorderlabelsdata) | **GET** /campaigns/{campaignId}/orders/{orderId}/delivery/labels/data | Информация на ярлыках‑наклейках
*FbsApi* | [**getOrders**](docs/Api/FbsApi.md#getorders) | **GET** /campaigns/{campaignId}/orders | Информация о заказах
*FbsApi* | [**getOrdersStats**](docs/Api/FbsApi.md#getordersstats) | **POST** /campaigns/{campaignId}/stats/orders | Отчет по заказам
*FbsApi* | [**getPrices**](docs/Api/FbsApi.md#getprices) | **GET** /campaigns/{campaignId}/offer-prices | Список цен
*FbsApi* | [**getPricesByOfferIds**](docs/Api/FbsApi.md#getpricesbyofferids) | **POST** /campaigns/{campaignId}/offer-prices | Просмотр установленных в магазине цен
*FbsApi* | [**getReportInfo**](docs/Api/FbsApi.md#getreportinfo) | **GET** /reports/info/{reportId} | Статус генерации и скачивание готовых отчетов
*FbsApi* | [**getReturn**](docs/Api/FbsApi.md#getreturn) | **GET** /campaigns/{campaignId}/orders/{orderId}/returns/{returnId} | Информация о возврате или невыкупе
*FbsApi* | [**getReturnApplication**](docs/Api/FbsApi.md#getreturnapplication) | **GET** /campaigns/{campaignId}/orders/{orderId}/returns/{returnId}/application | Получение заявления на возврат
*FbsApi* | [**getReturnPhoto**](docs/Api/FbsApi.md#getreturnphoto) | **GET** /campaigns/{campaignId}/orders/{orderId}/returns/{returnId}/decision/{itemId}/image/{imageHash} | Получение фотографии возврата
*FbsApi* | [**getReturns**](docs/Api/FbsApi.md#getreturns) | **GET** /campaigns/{campaignId}/returns | Список возвратов и невыкупов
*FbsApi* | [**getShipment**](docs/Api/FbsApi.md#getshipment) | **GET** /campaigns/{campaignId}/first-mile/shipments/{shipmentId} | Получение информации об отгрузке
*FbsApi* | [**getShipmentOrdersInfo**](docs/Api/FbsApi.md#getshipmentordersinfo) | **GET** /campaigns/{campaignId}/first-mile/shipments/{shipmentId}/orders/info | Получение информации о ярлыках
*FbsApi* | [**getStocks**](docs/Api/FbsApi.md#getstocks) | **POST** /campaigns/{campaignId}/offers/stocks | Информация об остатках и оборачиваемости
*FbsApi* | [**getSuggestedOfferMappingEntries**](docs/Api/FbsApi.md#getsuggestedoffermappingentries) | **POST** /campaigns/{campaignId}/offer-mapping-entries/suggestions | Рекомендованные карточки для ваших товаров
*FbsApi* | [**getSuggestedOfferMappings**](docs/Api/FbsApi.md#getsuggestedoffermappings) | **POST** /businesses/{businessId}/offer-mappings/suggestions | Предварительный просмотр карточек на Маркете, соответствующих вашим товарам
*FbsApi* | [**getSuggestedPrices**](docs/Api/FbsApi.md#getsuggestedprices) | **POST** /campaigns/{campaignId}/offer-prices/suggestions | Цены для продвижения товаров
*FbsApi* | [**getWarehouses**](docs/Api/FbsApi.md#getwarehouses) | **GET** /businesses/{businessId}/warehouses | Список складов и групп складов
*FbsApi* | [**provideOrderItemIdentifiers**](docs/Api/FbsApi.md#provideorderitemidentifiers) | **PUT** /campaigns/{campaignId}/orders/{orderId}/identifiers | Передача уникальных кодов маркировки единиц товара
*FbsApi* | [**putBidsForBusiness**](docs/Api/FbsApi.md#putbidsforbusiness) | **PUT** /businesses/{businessId}/bids | Включение буста продаж и установка ставок
*FbsApi* | [**searchRegionChildren**](docs/Api/FbsApi.md#searchregionchildren) | **GET** /regions/{regionId}/children | Информация о дочерних регионах
*FbsApi* | [**searchRegionsById**](docs/Api/FbsApi.md#searchregionsbyid) | **GET** /regions/{regionId} | Информация о регионе
*FbsApi* | [**searchRegionsByName**](docs/Api/FbsApi.md#searchregionsbyname) | **GET** /regions | Метод для поиска регионов по их имени
*FbsApi* | [**searchShipments**](docs/Api/FbsApi.md#searchshipments) | **PUT** /campaigns/{campaignId}/first-mile/shipments | Получение информации об отгрузках
*FbsApi* | [**setOrderShipmentBoxes**](docs/Api/FbsApi.md#setordershipmentboxes) | **PUT** /campaigns/{campaignId}/orders/{orderId}/delivery/shipments/{shipmentId}/boxes | Передача количества грузовых мест в заказе
*FbsApi* | [**setShipmentPalletsCount**](docs/Api/FbsApi.md#setshipmentpalletscount) | **PUT** /campaigns/{campaignId}/first-mile/shipments/{shipmentId}/pallets | Передача количества упаковок в отгрузке
*FbsApi* | [**transferOrdersFromShipment**](docs/Api/FbsApi.md#transferordersfromshipment) | **POST** /campaigns/{campaignId}/first-mile/shipments/{shipmentId}/orders/transfer | Перенос заказов в следующую отгрузку
*FbsApi* | [**updateBusinessPrices**](docs/Api/FbsApi.md#updatebusinessprices) | **POST** /businesses/{businessId}/offer-prices/updates | Установка цен
*FbsApi* | [**updateCampaignOffers**](docs/Api/FbsApi.md#updatecampaignoffers) | **POST** /campaigns/{campaignId}/offers/update | Настройка размещения товаров в магазине
*FbsApi* | [**updateOfferContent**](docs/Api/FbsApi.md#updateoffercontent) | **POST** /businesses/{businessId}/offer-cards/update | Редактирование категорийных характеристик товара
*FbsApi* | [**updateOfferMappingEntries**](docs/Api/FbsApi.md#updateoffermappingentries) | **POST** /campaigns/{campaignId}/offer-mapping-entries/updates | Добавление и редактирование товаров в каталоге
*FbsApi* | [**updateOfferMappings**](docs/Api/FbsApi.md#updateoffermappings) | **POST** /businesses/{businessId}/offer-mappings/update | Добавление товаров в каталог и редактирование информации о них
*FbsApi* | [**updateOrderItems**](docs/Api/FbsApi.md#updateorderitems) | **PUT** /campaigns/{campaignId}/orders/{orderId}/items | Удаление товара из заказа или уменьшение числа единиц
*FbsApi* | [**updateOrderStatus**](docs/Api/FbsApi.md#updateorderstatus) | **PUT** /campaigns/{campaignId}/orders/{orderId}/status | Изменение статуса заказа
*FbsApi* | [**updateOrderStatuses**](docs/Api/FbsApi.md#updateorderstatuses) | **POST** /campaigns/{campaignId}/orders/status-update | Изменение статусов заказа
*FbsApi* | [**updatePrices**](docs/Api/FbsApi.md#updateprices) | **POST** /campaigns/{campaignId}/offer-prices/updates | Установка цен на товары в конкретном магазине.
*FbsApi* | [**updateStocks**](docs/Api/FbsApi.md#updatestocks) | **PUT** /campaigns/{campaignId}/offers/stocks | Передача информации об остатках
*FbyApi* | [**addHiddenOffers**](docs/Api/FbyApi.md#addhiddenoffers) | **POST** /campaigns/{campaignId}/hidden-offers | Скрытие товаров и настройки скрытия
*FbyApi* | [**confirmBusinessPrices**](docs/Api/FbyApi.md#confirmbusinessprices) | **POST** /businesses/{businessId}/price-quarantine/confirm | Подтверждение цены товара, попавшего в карантин (основная цена)
*FbyApi* | [**confirmCampaignPrices**](docs/Api/FbyApi.md#confirmcampaignprices) | **POST** /campaigns/{campaignId}/price-quarantine/confirm | Подтверждение цены товара, попавшего в карантин (цена в магазине)
*FbyApi* | [**createFaasOrder**](docs/Api/FbyApi.md#createfaasorder) | **POST** /campaigns/{campaignId}/orders | Создание заказа
*FbyApi* | [**deleteCampaignOffers**](docs/Api/FbyApi.md#deletecampaignoffers) | **POST** /campaigns/{campaignId}/offers/delete | Удаление товаров из ассортимента магазина
*FbyApi* | [**deleteHiddenOffers**](docs/Api/FbyApi.md#deletehiddenoffers) | **DELETE** /campaigns/{campaignId}/hidden-offers | Возобновление показа товаров
*FbyApi* | [**deleteOffers**](docs/Api/FbyApi.md#deleteoffers) | **POST** /businesses/{businessId}/offer-mappings/delete | Удаление товаров из каталога
*FbyApi* | [**generateGoodsMovementReport**](docs/Api/FbyApi.md#generategoodsmovementreport) | **POST** /reports/goods-movement/generate | Отчет по движению товаров
*FbyApi* | [**generateGoodsRealizationReport**](docs/Api/FbyApi.md#generategoodsrealizationreport) | **POST** /reports/goods-realization/generate | Отчет по реализации
*FbyApi* | [**generatePricesReport**](docs/Api/FbyApi.md#generatepricesreport) | **POST** /reports/prices/generate | Отчет «Цены на рынке»
*FbyApi* | [**generateShowsSalesReport**](docs/Api/FbyApi.md#generateshowssalesreport) | **POST** /reports/shows-sales/generate | Отчет «Аналитика продаж»
*FbyApi* | [**generateStocksOnWarehousesReport**](docs/Api/FbyApi.md#generatestocksonwarehousesreport) | **POST** /reports/stocks-on-warehouses/generate | Отчет по остаткам на складах
*FbyApi* | [**generateUnitedMarketplaceServicesReport**](docs/Api/FbyApi.md#generateunitedmarketplaceservicesreport) | **POST** /reports/united-marketplace-services/generate | Отчет по стоимости услуг
*FbyApi* | [**generateUnitedNettingReport**](docs/Api/FbyApi.md#generateunitednettingreport) | **POST** /reports/united-netting/generate | Отчет по платежам
*FbyApi* | [**getActualStocks**](docs/Api/FbyApi.md#getactualstocks) | **GET** /campaigns/{campaignId}/warehouses/{warehouseId}/stocks/actual | Запрос информации об остатках
*FbyApi* | [**getBidsInfoForBusiness**](docs/Api/FbyApi.md#getbidsinfoforbusiness) | **POST** /businesses/{businessId}/bids/info | Информация об установленных ставках
*FbyApi* | [**getBidsRecommendations**](docs/Api/FbyApi.md#getbidsrecommendations) | **POST** /businesses/{businessId}/bids/recommendations | Рекомендованные ставки для заданных товаров
*FbyApi* | [**getBusinessQuarantineOffers**](docs/Api/FbyApi.md#getbusinessquarantineoffers) | **POST** /businesses/{businessId}/price-quarantine | Список товаров, находящихся в карантине (основная цена)
*FbyApi* | [**getCampaign**](docs/Api/FbyApi.md#getcampaign) | **GET** /campaigns/{campaignId} | Информация о магазине
*FbyApi* | [**getCampaignLogins**](docs/Api/FbyApi.md#getcampaignlogins) | **GET** /campaigns/{campaignId}/logins | Логины, связанные с магазином
*FbyApi* | [**getCampaignOffers**](docs/Api/FbyApi.md#getcampaignoffers) | **POST** /campaigns/{campaignId}/offers | Список товаров, размещенных в заданном магазине, с параметрами размещения
*FbyApi* | [**getCampaignQuarantineOffers**](docs/Api/FbyApi.md#getcampaignquarantineoffers) | **POST** /campaigns/{campaignId}/price-quarantine | Список товаров, находящихся в карантине (цена в магазине)
*FbyApi* | [**getCampaigns**](docs/Api/FbyApi.md#getcampaigns) | **GET** /campaigns | Магазины пользователя
*FbyApi* | [**getCampaignsByLogin**](docs/Api/FbyApi.md#getcampaignsbylogin) | **GET** /campaigns/by_login/{login} | Магазины, доступные логину
*FbyApi* | [**getCategoryContentParameters**](docs/Api/FbyApi.md#getcategorycontentparameters) | **POST** /category/{categoryId}/parameters | Списки характеристик товаров по категориям
*FbyApi* | [**getFulfillmentWarehouses**](docs/Api/FbyApi.md#getfulfillmentwarehouses) | **GET** /warehouses | Идентификаторы складов Маркета (FBY)
*FbyApi* | [**getGoodsStats**](docs/Api/FbyApi.md#getgoodsstats) | **POST** /campaigns/{campaignId}/stats/skus | Отчет по товарам
*FbyApi* | [**getHiddenOffers**](docs/Api/FbyApi.md#gethiddenoffers) | **GET** /campaigns/{campaignId}/hidden-offers | Информация о скрытых вами товарах
*FbyApi* | [**getOfferCardsContentStatus**](docs/Api/FbyApi.md#getoffercardscontentstatus) | **POST** /businesses/{businessId}/offer-cards | Получение информации о заполненности карточек
*FbyApi* | [**getOfferMappingEntries**](docs/Api/FbyApi.md#getoffermappingentries) | **GET** /campaigns/{campaignId}/offer-mapping-entries | Список товаров в каталоге
*FbyApi* | [**getOfferMappings**](docs/Api/FbyApi.md#getoffermappings) | **POST** /businesses/{businessId}/offer-mappings | Информация о товарах в каталоге
*FbyApi* | [**getOfferRecommendations**](docs/Api/FbyApi.md#getofferrecommendations) | **POST** /businesses/{businessId}/offers/recommendations | Рекомендации Маркета, касающиеся цен
*FbyApi* | [**getOrder**](docs/Api/FbyApi.md#getorder) | **GET** /campaigns/{campaignId}/orders/{orderId} | Информация о заказе
*FbyApi* | [**getOrdersStats**](docs/Api/FbyApi.md#getordersstats) | **POST** /campaigns/{campaignId}/stats/orders | Отчет по заказам
*FbyApi* | [**getPrices**](docs/Api/FbyApi.md#getprices) | **GET** /campaigns/{campaignId}/offer-prices | Список цен
*FbyApi* | [**getPricesByOfferIds**](docs/Api/FbyApi.md#getpricesbyofferids) | **POST** /campaigns/{campaignId}/offer-prices | Просмотр установленных в магазине цен
*FbyApi* | [**getReportInfo**](docs/Api/FbyApi.md#getreportinfo) | **GET** /reports/info/{reportId} | Статус генерации и скачивание готовых отчетов
*FbyApi* | [**getStocks**](docs/Api/FbyApi.md#getstocks) | **POST** /campaigns/{campaignId}/offers/stocks | Информация об остатках и оборачиваемости
*FbyApi* | [**getSuggestedOfferMappingEntries**](docs/Api/FbyApi.md#getsuggestedoffermappingentries) | **POST** /campaigns/{campaignId}/offer-mapping-entries/suggestions | Рекомендованные карточки для ваших товаров
*FbyApi* | [**getSuggestedOfferMappings**](docs/Api/FbyApi.md#getsuggestedoffermappings) | **POST** /businesses/{businessId}/offer-mappings/suggestions | Предварительный просмотр карточек на Маркете, соответствующих вашим товарам
*FbyApi* | [**getSuggestedPrices**](docs/Api/FbyApi.md#getsuggestedprices) | **POST** /campaigns/{campaignId}/offer-prices/suggestions | Цены для продвижения товаров
*FbyApi* | [**putBidsForBusiness**](docs/Api/FbyApi.md#putbidsforbusiness) | **PUT** /businesses/{businessId}/bids | Включение буста продаж и установка ставок
*FbyApi* | [**searchRegionChildren**](docs/Api/FbyApi.md#searchregionchildren) | **GET** /regions/{regionId}/children | Информация о дочерних регионах
*FbyApi* | [**searchRegionsById**](docs/Api/FbyApi.md#searchregionsbyid) | **GET** /regions/{regionId} | Информация о регионе
*FbyApi* | [**searchRegionsByName**](docs/Api/FbyApi.md#searchregionsbyname) | **GET** /regions | Метод для поиска регионов по их имени
*FbyApi* | [**updateBusinessPrices**](docs/Api/FbyApi.md#updatebusinessprices) | **POST** /businesses/{businessId}/offer-prices/updates | Установка цен
*FbyApi* | [**updateCampaignOffers**](docs/Api/FbyApi.md#updatecampaignoffers) | **POST** /campaigns/{campaignId}/offers/update | Настройка размещения товаров в магазине
*FbyApi* | [**updateOfferContent**](docs/Api/FbyApi.md#updateoffercontent) | **POST** /businesses/{businessId}/offer-cards/update | Редактирование категорийных характеристик товара
*FbyApi* | [**updateOfferMappingEntries**](docs/Api/FbyApi.md#updateoffermappingentries) | **POST** /campaigns/{campaignId}/offer-mapping-entries/updates | Добавление и редактирование товаров в каталоге
*FbyApi* | [**updateOfferMappings**](docs/Api/FbyApi.md#updateoffermappings) | **POST** /businesses/{businessId}/offer-mappings/update | Добавление товаров в каталог и редактирование информации о них
*FbyApi* | [**updateOrderStatus**](docs/Api/FbyApi.md#updateorderstatus) | **PUT** /campaigns/{campaignId}/orders/{orderId}/status | Изменение статуса заказа
*FbyApi* | [**updatePrices**](docs/Api/FbyApi.md#updateprices) | **POST** /campaigns/{campaignId}/offer-prices/updates | Установка цен на товары в конкретном магазине.
*FeedCategoriesApi* | [**getCampaignFeedCategories**](docs/Api/FeedCategoriesApi.md#getcampaignfeedcategories) | **GET** /campaigns/{campaignId}/feeds/categories | Категории магазина
*FeedCategoriesApi* | [**getFeedCategories**](docs/Api/FeedCategoriesApi.md#getfeedcategories) | **GET** /campaigns/{campaignId}/feeds/{feedId}/categories | Категории прайс-листа
*FeedbacksApi* | [**getFeedbackAndCommentUpdates**](docs/Api/FeedbacksApi.md#getfeedbackandcommentupdates) | **GET** /campaigns/{campaignId}/feedback/updates | Новые и обновленные отзывы о магазине
*FeedsApi* | [**getFeed**](docs/Api/FeedsApi.md#getfeed) | **GET** /campaigns/{campaignId}/feeds/{feedId} | Информация о прайс-листе
*FeedsApi* | [**getFeedIndexLogs**](docs/Api/FeedsApi.md#getfeedindexlogs) | **GET** /campaigns/{campaignId}/feeds/{feedId}/index-logs | Отчет по индексации прайс-листа
*FeedsApi* | [**getFeeds**](docs/Api/FeedsApi.md#getfeeds) | **GET** /campaigns/{campaignId}/feeds | Список прайс-листов магазина
*FeedsApi* | [**refreshFeed**](docs/Api/FeedsApi.md#refreshfeed) | **POST** /campaigns/{campaignId}/feeds/{feedId}/refresh | Сообщить, что прайс-лист обновился
*FeedsApi* | [**setFeedParams**](docs/Api/FeedsApi.md#setfeedparams) | **POST** /campaigns/{campaignId}/feeds/{feedId}/params | Изменение параметров прайс-листа
*GoodsStatsApi* | [**getGoodsStats**](docs/Api/GoodsStatsApi.md#getgoodsstats) | **POST** /campaigns/{campaignId}/stats/skus | Отчет по товарам
*HiddenOffersApi* | [**addHiddenOffers**](docs/Api/HiddenOffersApi.md#addhiddenoffers) | **POST** /campaigns/{campaignId}/hidden-offers | Скрытие товаров и настройки скрытия
*HiddenOffersApi* | [**deleteHiddenOffers**](docs/Api/HiddenOffersApi.md#deletehiddenoffers) | **DELETE** /campaigns/{campaignId}/hidden-offers | Возобновление показа товаров
*HiddenOffersApi* | [**getHiddenOffers**](docs/Api/HiddenOffersApi.md#gethiddenoffers) | **GET** /campaigns/{campaignId}/hidden-offers | Информация о скрытых вами товарах
*ModelsApi* | [**getModel**](docs/Api/ModelsApi.md#getmodel) | **GET** /models/{modelId} | Информация о модели
*ModelsApi* | [**getModelOffers**](docs/Api/ModelsApi.md#getmodeloffers) | **GET** /models/{modelId}/offers | Список предложений для модели
*ModelsApi* | [**getModels**](docs/Api/ModelsApi.md#getmodels) | **POST** /models | Информация о нескольких моделях
*ModelsApi* | [**getModelsOffers**](docs/Api/ModelsApi.md#getmodelsoffers) | **POST** /models/offers | Список предложений для нескольких моделей
*ModelsApi* | [**searchModels**](docs/Api/ModelsApi.md#searchmodels) | **GET** /models | Поиск модели товара
*OfferMappingsApi* | [**getOfferMappingEntries**](docs/Api/OfferMappingsApi.md#getoffermappingentries) | **GET** /campaigns/{campaignId}/offer-mapping-entries | Список товаров в каталоге
*OfferMappingsApi* | [**getSuggestedOfferMappingEntries**](docs/Api/OfferMappingsApi.md#getsuggestedoffermappingentries) | **POST** /campaigns/{campaignId}/offer-mapping-entries/suggestions | Рекомендованные карточки для ваших товаров
*OfferMappingsApi* | [**updateOfferMappingEntries**](docs/Api/OfferMappingsApi.md#updateoffermappingentries) | **POST** /campaigns/{campaignId}/offer-mapping-entries/updates | Добавление и редактирование товаров в каталоге
*OffersApi* | [**deleteCampaignOffers**](docs/Api/OffersApi.md#deletecampaignoffers) | **POST** /campaigns/{campaignId}/offers/delete | Удаление товаров из ассортимента магазина
*OffersApi* | [**getAllOffers**](docs/Api/OffersApi.md#getalloffers) | **GET** /campaigns/{campaignId}/offers/all | Все предложения магазина
*OffersApi* | [**getCampaignOffers**](docs/Api/OffersApi.md#getcampaignoffers) | **POST** /campaigns/{campaignId}/offers | Список товаров, размещенных в заданном магазине, с параметрами размещения
*OffersApi* | [**getOfferRecommendations**](docs/Api/OffersApi.md#getofferrecommendations) | **POST** /businesses/{businessId}/offers/recommendations | Рекомендации Маркета, касающиеся цен
*OffersApi* | [**getOffers**](docs/Api/OffersApi.md#getoffers) | **GET** /campaigns/{campaignId}/offers | Предложения магазина
*OffersApi* | [**updateCampaignOffers**](docs/Api/OffersApi.md#updatecampaignoffers) | **POST** /campaigns/{campaignId}/offers/update | Настройка размещения товаров в магазине
*OrderDeliveryApi* | [**getOrderBuyerInfo**](docs/Api/OrderDeliveryApi.md#getorderbuyerinfo) | **GET** /campaigns/{campaignId}/orders/{orderId}/buyer | Информация о покупателе
*OrderDeliveryApi* | [**setOrderDeliveryDate**](docs/Api/OrderDeliveryApi.md#setorderdeliverydate) | **PUT** /campaigns/{campaignId}/orders/{orderId}/delivery/date | Изменение даты доставки заказа
*OrderDeliveryApi* | [**setOrderDeliveryTrackCode**](docs/Api/OrderDeliveryApi.md#setorderdeliverytrackcode) | **POST** /campaigns/{campaignId}/orders/{orderId}/delivery/track | Передача трек‑номера посылки
*OrderDeliveryApi* | [**updateOrderStorageLimit**](docs/Api/OrderDeliveryApi.md#updateorderstoragelimit) | **PUT** /campaigns/{campaignId}/orders/{orderId}/delivery/storage-limit | Продление срока хранения заказа
*OrderDeliveryApi* | [**verifyOrderEac**](docs/Api/OrderDeliveryApi.md#verifyordereac) | **PUT** /campaigns/{campaignId}/orders/{orderId}/verifyEac | Передача кода проверки
*OrderLabelsApi* | [**generateOrderLabel**](docs/Api/OrderLabelsApi.md#generateorderlabel) | **GET** /campaigns/{campaignId}/orders/{orderId}/delivery/shipments/{shipmentId}/boxes/{boxId}/label | Ярлык‑наклейка на отдельное грузовое место в заказе
*OrderLabelsApi* | [**generateOrderLabels**](docs/Api/OrderLabelsApi.md#generateorderlabels) | **GET** /campaigns/{campaignId}/orders/{orderId}/delivery/labels | Ярлыки‑наклейки на все грузовые места в заказе
*OrderLabelsApi* | [**getOrderLabelsData**](docs/Api/OrderLabelsApi.md#getorderlabelsdata) | **GET** /campaigns/{campaignId}/orders/{orderId}/delivery/labels/data | Информация на ярлыках‑наклейках
*OrdersApi* | [**acceptOrderCancellation**](docs/Api/OrdersApi.md#acceptordercancellation) | **PUT** /campaigns/{campaignId}/orders/{orderId}/cancellation/accept | Отмена заказа покупателем
*OrdersApi* | [**createFaasOrder**](docs/Api/OrdersApi.md#createfaasorder) | **POST** /campaigns/{campaignId}/orders | Создание заказа
*OrdersApi* | [**getOrder**](docs/Api/OrdersApi.md#getorder) | **GET** /campaigns/{campaignId}/orders/{orderId} | Информация о заказе
*OrdersApi* | [**getOrders**](docs/Api/OrdersApi.md#getorders) | **GET** /campaigns/{campaignId}/orders | Информация о заказах
*OrdersApi* | [**provideOrderDigitalCodes**](docs/Api/OrdersApi.md#provideorderdigitalcodes) | **POST** /campaigns/{campaignId}/orders/{orderId}/deliverDigitalGoods | Передача ключей цифровых товаров
*OrdersApi* | [**provideOrderItemIdentifiers**](docs/Api/OrdersApi.md#provideorderitemidentifiers) | **PUT** /campaigns/{campaignId}/orders/{orderId}/identifiers | Передача уникальных кодов маркировки единиц товара
*OrdersApi* | [**setOrderShipmentBoxes**](docs/Api/OrdersApi.md#setordershipmentboxes) | **PUT** /campaigns/{campaignId}/orders/{orderId}/delivery/shipments/{shipmentId}/boxes | Передача количества грузовых мест в заказе
*OrdersApi* | [**updateOrderItems**](docs/Api/OrdersApi.md#updateorderitems) | **PUT** /campaigns/{campaignId}/orders/{orderId}/items | Удаление товара из заказа или уменьшение числа единиц
*OrdersApi* | [**updateOrderStatus**](docs/Api/OrdersApi.md#updateorderstatus) | **PUT** /campaigns/{campaignId}/orders/{orderId}/status | Изменение статуса заказа
*OrdersApi* | [**updateOrderStatuses**](docs/Api/OrdersApi.md#updateorderstatuses) | **POST** /campaigns/{campaignId}/orders/status-update | Изменение статусов заказа
*OrdersStatsApi* | [**getOrdersStats**](docs/Api/OrdersStatsApi.md#getordersstats) | **POST** /campaigns/{campaignId}/stats/orders | Отчет по заказам
*OutletLicensesApi* | [**deleteOutletLicenses**](docs/Api/OutletLicensesApi.md#deleteoutletlicenses) | **DELETE** /campaigns/{campaignId}/outlets/licenses | Удаление лицензий для точек продаж
*OutletLicensesApi* | [**getOutletLicenses**](docs/Api/OutletLicensesApi.md#getoutletlicenses) | **GET** /campaigns/{campaignId}/outlets/licenses | Информация о лицензиях для точек продаж
*OutletLicensesApi* | [**updateOutletLicenses**](docs/Api/OutletLicensesApi.md#updateoutletlicenses) | **POST** /campaigns/{campaignId}/outlets/licenses | Создание и изменение лицензий для точек продаж
*OutletsApi* | [**createOutlet**](docs/Api/OutletsApi.md#createoutlet) | **POST** /campaigns/{campaignId}/outlets | Создание точки продаж
*OutletsApi* | [**deleteOutlet**](docs/Api/OutletsApi.md#deleteoutlet) | **DELETE** /campaigns/{campaignId}/outlets/{outletId} | Удаление точки продаж
*OutletsApi* | [**getOutlet**](docs/Api/OutletsApi.md#getoutlet) | **GET** /campaigns/{campaignId}/outlets/{outletId} | Информация о точке продаж
*OutletsApi* | [**getOutlets**](docs/Api/OutletsApi.md#getoutlets) | **GET** /campaigns/{campaignId}/outlets | Информация о точках продаж
*OutletsApi* | [**updateOutlet**](docs/Api/OutletsApi.md#updateoutlet) | **PUT** /campaigns/{campaignId}/outlets/{outletId} | Изменение информации о точке продаж
*PriceQuarantineApi* | [**confirmBusinessPrices**](docs/Api/PriceQuarantineApi.md#confirmbusinessprices) | **POST** /businesses/{businessId}/price-quarantine/confirm | Подтверждение цены товара, попавшего в карантин (основная цена)
*PriceQuarantineApi* | [**confirmCampaignPrices**](docs/Api/PriceQuarantineApi.md#confirmcampaignprices) | **POST** /campaigns/{campaignId}/price-quarantine/confirm | Подтверждение цены товара, попавшего в карантин (цена в магазине)
*PriceQuarantineApi* | [**getBusinessQuarantineOffers**](docs/Api/PriceQuarantineApi.md#getbusinessquarantineoffers) | **POST** /businesses/{businessId}/price-quarantine | Список товаров, находящихся в карантине (основная цена)
*PriceQuarantineApi* | [**getCampaignQuarantineOffers**](docs/Api/PriceQuarantineApi.md#getcampaignquarantineoffers) | **POST** /campaigns/{campaignId}/price-quarantine | Список товаров, находящихся в карантине (цена в магазине)
*PricesApi* | [**getPrices**](docs/Api/PricesApi.md#getprices) | **GET** /campaigns/{campaignId}/offer-prices | Список цен
*PricesApi* | [**getPricesByOfferIds**](docs/Api/PricesApi.md#getpricesbyofferids) | **POST** /campaigns/{campaignId}/offer-prices | Просмотр установленных в магазине цен
*PricesApi* | [**getSuggestedPrices**](docs/Api/PricesApi.md#getsuggestedprices) | **POST** /campaigns/{campaignId}/offer-prices/suggestions | Цены для продвижения товаров
*PricesApi* | [**updateBusinessPrices**](docs/Api/PricesApi.md#updatebusinessprices) | **POST** /businesses/{businessId}/offer-prices/updates | Установка цен
*PricesApi* | [**updatePrices**](docs/Api/PricesApi.md#updateprices) | **POST** /campaigns/{campaignId}/offer-prices/updates | Установка цен на товары в конкретном магазине.
*RegionsApi* | [**searchRegionChildren**](docs/Api/RegionsApi.md#searchregionchildren) | **GET** /regions/{regionId}/children | Информация о дочерних регионах
*RegionsApi* | [**searchRegionsById**](docs/Api/RegionsApi.md#searchregionsbyid) | **GET** /regions/{regionId} | Информация о регионе
*RegionsApi* | [**searchRegionsByName**](docs/Api/RegionsApi.md#searchregionsbyname) | **GET** /regions | Метод для поиска регионов по их имени
*ReportsApi* | [**generateGoodsMovementReport**](docs/Api/ReportsApi.md#generategoodsmovementreport) | **POST** /reports/goods-movement/generate | Отчет по движению товаров
*ReportsApi* | [**generateGoodsRealizationReport**](docs/Api/ReportsApi.md#generategoodsrealizationreport) | **POST** /reports/goods-realization/generate | Отчет по реализации
*ReportsApi* | [**generatePricesReport**](docs/Api/ReportsApi.md#generatepricesreport) | **POST** /reports/prices/generate | Отчет «Цены на рынке»
*ReportsApi* | [**generateShowsSalesReport**](docs/Api/ReportsApi.md#generateshowssalesreport) | **POST** /reports/shows-sales/generate | Отчет «Аналитика продаж»
*ReportsApi* | [**generateStocksOnWarehousesReport**](docs/Api/ReportsApi.md#generatestocksonwarehousesreport) | **POST** /reports/stocks-on-warehouses/generate | Отчет по остаткам на складах
*ReportsApi* | [**generateUnitedMarketplaceServicesReport**](docs/Api/ReportsApi.md#generateunitedmarketplaceservicesreport) | **POST** /reports/united-marketplace-services/generate | Отчет по стоимости услуг
*ReportsApi* | [**generateUnitedNettingReport**](docs/Api/ReportsApi.md#generateunitednettingreport) | **POST** /reports/united-netting/generate | Отчет по платежам
*ReportsApi* | [**getReportInfo**](docs/Api/ReportsApi.md#getreportinfo) | **GET** /reports/info/{reportId} | Статус генерации и скачивание готовых отчетов
*ReturnsApi* | [**getReturn**](docs/Api/ReturnsApi.md#getreturn) | **GET** /campaigns/{campaignId}/orders/{orderId}/returns/{returnId} | Информация о возврате или невыкупе
*ReturnsApi* | [**getReturnApplication**](docs/Api/ReturnsApi.md#getreturnapplication) | **GET** /campaigns/{campaignId}/orders/{orderId}/returns/{returnId}/application | Получение заявления на возврат
*ReturnsApi* | [**getReturnPhoto**](docs/Api/ReturnsApi.md#getreturnphoto) | **GET** /campaigns/{campaignId}/orders/{orderId}/returns/{returnId}/decision/{itemId}/image/{imageHash} | Получение фотографии возврата
*ReturnsApi* | [**getReturns**](docs/Api/ReturnsApi.md#getreturns) | **GET** /campaigns/{campaignId}/returns | Список возвратов и невыкупов
*ReturnsApi* | [**setReturnDecision**](docs/Api/ReturnsApi.md#setreturndecision) | **POST** /campaigns/{campaignId}/orders/{orderId}/returns/{returnId}/decision | Принятие/изменение решения по позиции в возврате
*ReturnsApi* | [**submitReturnDecision**](docs/Api/ReturnsApi.md#submitreturndecision) | **POST** /campaigns/{campaignId}/orders/{orderId}/returns/{returnId}/decision/submit | Подтверждение решения по возвратным позициям
*ShipmentsApi* | [**confirmShipment**](docs/Api/ShipmentsApi.md#confirmshipment) | **POST** /campaigns/{campaignId}/first-mile/shipments/{shipmentId}/confirm | Подтверждение отгрузки
*ShipmentsApi* | [**downloadShipmentAct**](docs/Api/ShipmentsApi.md#downloadshipmentact) | **GET** /campaigns/{campaignId}/first-mile/shipments/{shipmentId}/act | Получение акта приема-передачи
*ShipmentsApi* | [**downloadShipmentDiscrepancyAct**](docs/Api/ShipmentsApi.md#downloadshipmentdiscrepancyact) | **GET** /campaigns/{campaignId}/first-mile/shipments/{shipmentId}/discrepancy-act | Получение акта расхождений
*ShipmentsApi* | [**downloadShipmentInboundAct**](docs/Api/ShipmentsApi.md#downloadshipmentinboundact) | **GET** /campaigns/{campaignId}/first-mile/shipments/{shipmentId}/inbound-act | Получение фактического акта приема-передачи
*ShipmentsApi* | [**downloadShipmentPalletLabels**](docs/Api/ShipmentsApi.md#downloadshipmentpalletlabels) | **GET** /campaigns/{campaignId}/first-mile/shipments/{shipmentId}/pallet/labels | Ярлыки на все упаковки в отгрузке
*ShipmentsApi* | [**downloadShipmentReceptionTransferAct**](docs/Api/ShipmentsApi.md#downloadshipmentreceptiontransferact) | **GET** /campaigns/{campaignId}/shipments/reception-transfer-act | Подтверждение ближайшей отгрузки и получение акта приема-передачи для нее
*ShipmentsApi* | [**downloadShipmentTransportationWaybill**](docs/Api/ShipmentsApi.md#downloadshipmenttransportationwaybill) | **GET** /campaigns/{campaignId}/first-mile/shipments/{shipmentId}/transportation-waybill | Получение транспортной накладной
*ShipmentsApi* | [**getShipment**](docs/Api/ShipmentsApi.md#getshipment) | **GET** /campaigns/{campaignId}/first-mile/shipments/{shipmentId} | Получение информации об отгрузке
*ShipmentsApi* | [**getShipmentOrdersInfo**](docs/Api/ShipmentsApi.md#getshipmentordersinfo) | **GET** /campaigns/{campaignId}/first-mile/shipments/{shipmentId}/orders/info | Получение информации о ярлыках
*ShipmentsApi* | [**searchShipments**](docs/Api/ShipmentsApi.md#searchshipments) | **PUT** /campaigns/{campaignId}/first-mile/shipments | Получение информации об отгрузках
*ShipmentsApi* | [**setShipmentPalletsCount**](docs/Api/ShipmentsApi.md#setshipmentpalletscount) | **PUT** /campaigns/{campaignId}/first-mile/shipments/{shipmentId}/pallets | Передача количества упаковок в отгрузке
*ShipmentsApi* | [**transferOrdersFromShipment**](docs/Api/ShipmentsApi.md#transferordersfromshipment) | **POST** /campaigns/{campaignId}/first-mile/shipments/{shipmentId}/orders/transfer | Перенос заказов в следующую отгрузку
*StocksApi* | [**getActualStocks**](docs/Api/StocksApi.md#getactualstocks) | **GET** /campaigns/{campaignId}/warehouses/{warehouseId}/stocks/actual | Запрос информации об остатках
*StocksApi* | [**getStocks**](docs/Api/StocksApi.md#getstocks) | **POST** /campaigns/{campaignId}/offers/stocks | Информация об остатках и оборачиваемости
*StocksApi* | [**updateStocks**](docs/Api/StocksApi.md#updatestocks) | **PUT** /campaigns/{campaignId}/offers/stocks | Передача информации об остатках
*WarehousesApi* | [**getFulfillmentWarehouses**](docs/Api/WarehousesApi.md#getfulfillmentwarehouses) | **GET** /warehouses | Идентификаторы складов Маркета (FBY)
*WarehousesApi* | [**getWarehouses**](docs/Api/WarehousesApi.md#getwarehouses) | **GET** /businesses/{businessId}/warehouses | Список складов и групп складов

## Models

- [AcceptOrderCancellationRequest](docs/Model/AcceptOrderCancellationRequest.md)
- [AddHiddenOffersRequest](docs/Model/AddHiddenOffersRequest.md)
- [AgeDTO](docs/Model/AgeDTO.md)
- [AgeUnitType](docs/Model/AgeUnitType.md)
- [ApiClientDataErrorResponse](docs/Model/ApiClientDataErrorResponse.md)
- [ApiErrorDTO](docs/Model/ApiErrorDTO.md)
- [ApiErrorResponse](docs/Model/ApiErrorResponse.md)
- [ApiErrorResponseAllOf](docs/Model/ApiErrorResponseAllOf.md)
- [ApiForbiddenErrorResponse](docs/Model/ApiForbiddenErrorResponse.md)
- [ApiLimitErrorResponse](docs/Model/ApiLimitErrorResponse.md)
- [ApiLockedErrorResponse](docs/Model/ApiLockedErrorResponse.md)
- [ApiNotFoundErrorResponse](docs/Model/ApiNotFoundErrorResponse.md)
- [ApiResponse](docs/Model/ApiResponse.md)
- [ApiResponseStatusType](docs/Model/ApiResponseStatusType.md)
- [ApiServerErrorResponse](docs/Model/ApiServerErrorResponse.md)
- [ApiUnauthorizedErrorResponse](docs/Model/ApiUnauthorizedErrorResponse.md)
- [BaseCampaignOfferDTO](docs/Model/BaseCampaignOfferDTO.md)
- [BaseOfferDTO](docs/Model/BaseOfferDTO.md)
- [BasePriceDTO](docs/Model/BasePriceDTO.md)
- [BidRecommendationItemDTO](docs/Model/BidRecommendationItemDTO.md)
- [BriefOrderItemDTO](docs/Model/BriefOrderItemDTO.md)
- [BriefOrderItemInstanceDTO](docs/Model/BriefOrderItemInstanceDTO.md)
- [BusinessDTO](docs/Model/BusinessDTO.md)
- [CampaignDTO](docs/Model/CampaignDTO.md)
- [CampaignSettingsDTO](docs/Model/CampaignSettingsDTO.md)
- [CampaignSettingsDeliveryDTO](docs/Model/CampaignSettingsDeliveryDTO.md)
- [CampaignSettingsLocalRegionDTO](docs/Model/CampaignSettingsLocalRegionDTO.md)
- [CampaignSettingsScheduleDTO](docs/Model/CampaignSettingsScheduleDTO.md)
- [CampaignSettingsScheduleSourceType](docs/Model/CampaignSettingsScheduleSourceType.md)
- [CampaignSettingsTimePeriodDTO](docs/Model/CampaignSettingsTimePeriodDTO.md)
- [CategoryContentParametersDTO](docs/Model/CategoryContentParametersDTO.md)
- [CategoryParameterDTO](docs/Model/CategoryParameterDTO.md)
- [ChangeOutletRequest](docs/Model/ChangeOutletRequest.md)
- [ConfirmPricesRequest](docs/Model/ConfirmPricesRequest.md)
- [ConfirmShipmentRequest](docs/Model/ConfirmShipmentRequest.md)
- [CreateOrderRequest](docs/Model/CreateOrderRequest.md)
- [CreateOrderResponse](docs/Model/CreateOrderResponse.md)
- [CreateOutletResponse](docs/Model/CreateOutletResponse.md)
- [CreateOutletResponseAllOf](docs/Model/CreateOutletResponseAllOf.md)
- [CurrencyType](docs/Model/CurrencyType.md)
- [DayOfWeekType](docs/Model/DayOfWeekType.md)
- [DeleteCampaignOffersDTO](docs/Model/DeleteCampaignOffersDTO.md)
- [DeleteCampaignOffersRequest](docs/Model/DeleteCampaignOffersRequest.md)
- [DeleteCampaignOffersResponse](docs/Model/DeleteCampaignOffersResponse.md)
- [DeleteCampaignOffersResponseAllOf](docs/Model/DeleteCampaignOffersResponseAllOf.md)
- [DeleteHiddenOffersRequest](docs/Model/DeleteHiddenOffersRequest.md)
- [DeleteOffersDTO](docs/Model/DeleteOffersDTO.md)
- [DeleteOffersRequest](docs/Model/DeleteOffersRequest.md)
- [DeleteOffersResponse](docs/Model/DeleteOffersResponse.md)
- [DeleteOffersResponseAllOf](docs/Model/DeleteOffersResponseAllOf.md)
- [DeliveryServiceDTO](docs/Model/DeliveryServiceDTO.md)
- [DeliveryServiceInfoDTO](docs/Model/DeliveryServiceInfoDTO.md)
- [DeliveryServicesDTO](docs/Model/DeliveryServicesDTO.md)
- [EacVerificationResultDTO](docs/Model/EacVerificationResultDTO.md)
- [EacVerificationStatusType](docs/Model/EacVerificationStatusType.md)
- [EmptyApiResponse](docs/Model/EmptyApiResponse.md)
- [EnrichedMappingsOfferDTO](docs/Model/EnrichedMappingsOfferDTO.md)
- [EnrichedMappingsOfferDTOAllOf](docs/Model/EnrichedMappingsOfferDTOAllOf.md)
- [EnrichedModelDTO](docs/Model/EnrichedModelDTO.md)
- [EnrichedModelDTOAllOf](docs/Model/EnrichedModelDTOAllOf.md)
- [FeedCategoryDTO](docs/Model/FeedCategoryDTO.md)
- [FeedContentDTO](docs/Model/FeedContentDTO.md)
- [FeedContentErrorDTO](docs/Model/FeedContentErrorDTO.md)
- [FeedContentErrorType](docs/Model/FeedContentErrorType.md)
- [FeedDTO](docs/Model/FeedDTO.md)
- [FeedDownloadDTO](docs/Model/FeedDownloadDTO.md)
- [FeedDownloadErrorDTO](docs/Model/FeedDownloadErrorDTO.md)
- [FeedDownloadErrorType](docs/Model/FeedDownloadErrorType.md)
- [FeedIndexLogsErrorDTO](docs/Model/FeedIndexLogsErrorDTO.md)
- [FeedIndexLogsErrorType](docs/Model/FeedIndexLogsErrorType.md)
- [FeedIndexLogsFeedDTO](docs/Model/FeedIndexLogsFeedDTO.md)
- [FeedIndexLogsIndexType](docs/Model/FeedIndexLogsIndexType.md)
- [FeedIndexLogsOffersDTO](docs/Model/FeedIndexLogsOffersDTO.md)
- [FeedIndexLogsRecordDTO](docs/Model/FeedIndexLogsRecordDTO.md)
- [FeedIndexLogsResultDTO](docs/Model/FeedIndexLogsResultDTO.md)
- [FeedIndexLogsStatusType](docs/Model/FeedIndexLogsStatusType.md)
- [FeedParameterDTO](docs/Model/FeedParameterDTO.md)
- [FeedPlacementDTO](docs/Model/FeedPlacementDTO.md)
- [FeedPublicationDTO](docs/Model/FeedPublicationDTO.md)
- [FeedPublicationFullDTO](docs/Model/FeedPublicationFullDTO.md)
- [FeedPublicationPriceAndStockUpdateDTO](docs/Model/FeedPublicationPriceAndStockUpdateDTO.md)
- [FeedStatusType](docs/Model/FeedStatusType.md)
- [FeedbackAuthorDTO](docs/Model/FeedbackAuthorDTO.md)
- [FeedbackCommentAuthorDTO](docs/Model/FeedbackCommentAuthorDTO.md)
- [FeedbackCommentAuthorType](docs/Model/FeedbackCommentAuthorType.md)
- [FeedbackCommentDTO](docs/Model/FeedbackCommentDTO.md)
- [FeedbackDTO](docs/Model/FeedbackDTO.md)
- [FeedbackDeliveryType](docs/Model/FeedbackDeliveryType.md)
- [FeedbackFactorDTO](docs/Model/FeedbackFactorDTO.md)
- [FeedbackGradesDTO](docs/Model/FeedbackGradesDTO.md)
- [FeedbackListDTO](docs/Model/FeedbackListDTO.md)
- [FeedbackOrderDTO](docs/Model/FeedbackOrderDTO.md)
- [FeedbackShopDTO](docs/Model/FeedbackShopDTO.md)
- [FeedbackStateType](docs/Model/FeedbackStateType.md)
- [FieldStateType](docs/Model/FieldStateType.md)
- [FlippingPagerDTO](docs/Model/FlippingPagerDTO.md)
- [ForwardScrollingPagerDTO](docs/Model/ForwardScrollingPagerDTO.md)
- [FulfillmentWarehouseDTO](docs/Model/FulfillmentWarehouseDTO.md)
- [FulfillmentWarehousesDTO](docs/Model/FulfillmentWarehousesDTO.md)
- [FullOutletDTO](docs/Model/FullOutletDTO.md)
- [FullOutletDTOAllOf](docs/Model/FullOutletDTOAllOf.md)
- [FullOutletLicenseDTO](docs/Model/FullOutletLicenseDTO.md)
- [FullOutletLicenseDTOAllOf](docs/Model/FullOutletLicenseDTOAllOf.md)
- [GenerateGoodsMovementReportRequest](docs/Model/GenerateGoodsMovementReportRequest.md)
- [GenerateGoodsRealizationReportRequest](docs/Model/GenerateGoodsRealizationReportRequest.md)
- [GeneratePricesReportRequest](docs/Model/GeneratePricesReportRequest.md)
- [GenerateReportDTO](docs/Model/GenerateReportDTO.md)
- [GenerateReportResponse](docs/Model/GenerateReportResponse.md)
- [GenerateReportResponseAllOf](docs/Model/GenerateReportResponseAllOf.md)
- [GenerateShowsSalesReportRequest](docs/Model/GenerateShowsSalesReportRequest.md)
- [GenerateStocksOnWarehousesReportRequest](docs/Model/GenerateStocksOnWarehousesReportRequest.md)
- [GenerateUnitedMarketplaceServicesReportRequest](docs/Model/GenerateUnitedMarketplaceServicesReportRequest.md)
- [GenerateUnitedNettingReportRequest](docs/Model/GenerateUnitedNettingReportRequest.md)
- [GetActualStocksDTO](docs/Model/GetActualStocksDTO.md)
- [GetActualStocksResponse](docs/Model/GetActualStocksResponse.md)
- [GetActualStocksResponseAllOf](docs/Model/GetActualStocksResponseAllOf.md)
- [GetAllOffersResponse](docs/Model/GetAllOffersResponse.md)
- [GetBidsInfoRequest](docs/Model/GetBidsInfoRequest.md)
- [GetBidsInfoResponse](docs/Model/GetBidsInfoResponse.md)
- [GetBidsInfoResponseAllOf](docs/Model/GetBidsInfoResponseAllOf.md)
- [GetBidsInfoResponseDTO](docs/Model/GetBidsInfoResponseDTO.md)
- [GetBidsRecommendationsRequest](docs/Model/GetBidsRecommendationsRequest.md)
- [GetBidsRecommendationsResponse](docs/Model/GetBidsRecommendationsResponse.md)
- [GetBidsRecommendationsResponseAllOf](docs/Model/GetBidsRecommendationsResponseAllOf.md)
- [GetBidsRecommendationsResponseDTO](docs/Model/GetBidsRecommendationsResponseDTO.md)
- [GetCampaignCategoriesResponse](docs/Model/GetCampaignCategoriesResponse.md)
- [GetCampaignLoginsResponse](docs/Model/GetCampaignLoginsResponse.md)
- [GetCampaignOfferDTO](docs/Model/GetCampaignOfferDTO.md)
- [GetCampaignOfferDTOAllOf](docs/Model/GetCampaignOfferDTOAllOf.md)
- [GetCampaignOffersRequest](docs/Model/GetCampaignOffersRequest.md)
- [GetCampaignOffersResponse](docs/Model/GetCampaignOffersResponse.md)
- [GetCampaignOffersResponseAllOf](docs/Model/GetCampaignOffersResponseAllOf.md)
- [GetCampaignOffersResultDTO](docs/Model/GetCampaignOffersResultDTO.md)
- [GetCampaignRegionResponse](docs/Model/GetCampaignRegionResponse.md)
- [GetCampaignResponse](docs/Model/GetCampaignResponse.md)
- [GetCampaignSettingsResponse](docs/Model/GetCampaignSettingsResponse.md)
- [GetCampaignsResponse](docs/Model/GetCampaignsResponse.md)
- [GetCategoryContentParametersResponse](docs/Model/GetCategoryContentParametersResponse.md)
- [GetCategoryContentParametersResponseAllOf](docs/Model/GetCategoryContentParametersResponseAllOf.md)
- [GetDeliveryServicesResponse](docs/Model/GetDeliveryServicesResponse.md)
- [GetFeedCategoriesResponse](docs/Model/GetFeedCategoriesResponse.md)
- [GetFeedIndexLogsResponse](docs/Model/GetFeedIndexLogsResponse.md)
- [GetFeedIndexLogsResponseAllOf](docs/Model/GetFeedIndexLogsResponseAllOf.md)
- [GetFeedResponse](docs/Model/GetFeedResponse.md)
- [GetFeedbackListResponse](docs/Model/GetFeedbackListResponse.md)
- [GetFeedbackListResponseAllOf](docs/Model/GetFeedbackListResponseAllOf.md)
- [GetFeedsResponse](docs/Model/GetFeedsResponse.md)
- [GetFulfillmentWarehousesResponse](docs/Model/GetFulfillmentWarehousesResponse.md)
- [GetFulfillmentWarehousesResponseAllOf](docs/Model/GetFulfillmentWarehousesResponseAllOf.md)
- [GetGoodsStatsRequest](docs/Model/GetGoodsStatsRequest.md)
- [GetGoodsStatsResponse](docs/Model/GetGoodsStatsResponse.md)
- [GetGoodsStatsResponseAllOf](docs/Model/GetGoodsStatsResponseAllOf.md)
- [GetHiddenOffersResponse](docs/Model/GetHiddenOffersResponse.md)
- [GetHiddenOffersResponseAllOf](docs/Model/GetHiddenOffersResponseAllOf.md)
- [GetHiddenOffersResultDTO](docs/Model/GetHiddenOffersResultDTO.md)
- [GetMappingDTO](docs/Model/GetMappingDTO.md)
- [GetMappingDTOAllOf](docs/Model/GetMappingDTOAllOf.md)
- [GetModelsOffersResponse](docs/Model/GetModelsOffersResponse.md)
- [GetModelsOffersResponseAllOf](docs/Model/GetModelsOffersResponseAllOf.md)
- [GetModelsRequest](docs/Model/GetModelsRequest.md)
- [GetModelsResponse](docs/Model/GetModelsResponse.md)
- [GetModelsResponseAllOf](docs/Model/GetModelsResponseAllOf.md)
- [GetOfferCardsContentStatusRequest](docs/Model/GetOfferCardsContentStatusRequest.md)
- [GetOfferCardsContentStatusResponse](docs/Model/GetOfferCardsContentStatusResponse.md)
- [GetOfferCardsContentStatusResponseAllOf](docs/Model/GetOfferCardsContentStatusResponseAllOf.md)
- [GetOfferDTO](docs/Model/GetOfferDTO.md)
- [GetOfferDTOAllOf](docs/Model/GetOfferDTOAllOf.md)
- [GetOfferMappingDTO](docs/Model/GetOfferMappingDTO.md)
- [GetOfferMappingEntriesResponse](docs/Model/GetOfferMappingEntriesResponse.md)
- [GetOfferMappingEntriesResponseAllOf](docs/Model/GetOfferMappingEntriesResponseAllOf.md)
- [GetOfferMappingsRequest](docs/Model/GetOfferMappingsRequest.md)
- [GetOfferMappingsResponse](docs/Model/GetOfferMappingsResponse.md)
- [GetOfferMappingsResponseAllOf](docs/Model/GetOfferMappingsResponseAllOf.md)
- [GetOfferMappingsResultDTO](docs/Model/GetOfferMappingsResultDTO.md)
- [GetOfferRecommendationsRequest](docs/Model/GetOfferRecommendationsRequest.md)
- [GetOfferRecommendationsResponse](docs/Model/GetOfferRecommendationsResponse.md)
- [GetOfferRecommendationsResponseAllOf](docs/Model/GetOfferRecommendationsResponseAllOf.md)
- [GetOffersResponse](docs/Model/GetOffersResponse.md)
- [GetOffersResponseAllOf](docs/Model/GetOffersResponseAllOf.md)
- [GetOrderBuyerInfoResponse](docs/Model/GetOrderBuyerInfoResponse.md)
- [GetOrderBuyerInfoResponseAllOf](docs/Model/GetOrderBuyerInfoResponseAllOf.md)
- [GetOrderLabelsDataResponse](docs/Model/GetOrderLabelsDataResponse.md)
- [GetOrderLabelsDataResponseAllOf](docs/Model/GetOrderLabelsDataResponseAllOf.md)
- [GetOrderResponse](docs/Model/GetOrderResponse.md)
- [GetOrdersResponse](docs/Model/GetOrdersResponse.md)
- [GetOrdersStatsRequest](docs/Model/GetOrdersStatsRequest.md)
- [GetOrdersStatsResponse](docs/Model/GetOrdersStatsResponse.md)
- [GetOrdersStatsResponseAllOf](docs/Model/GetOrdersStatsResponseAllOf.md)
- [GetOutletLicensesResponse](docs/Model/GetOutletLicensesResponse.md)
- [GetOutletLicensesResponseAllOf](docs/Model/GetOutletLicensesResponseAllOf.md)
- [GetOutletResponse](docs/Model/GetOutletResponse.md)
- [GetOutletsResponse](docs/Model/GetOutletsResponse.md)
- [GetPriceDTO](docs/Model/GetPriceDTO.md)
- [GetPriceWithDiscountDTO](docs/Model/GetPriceWithDiscountDTO.md)
- [GetPriceWithVatDTO](docs/Model/GetPriceWithVatDTO.md)
- [GetPricesByOfferIdsRequest](docs/Model/GetPricesByOfferIdsRequest.md)
- [GetPricesByOfferIdsResponse](docs/Model/GetPricesByOfferIdsResponse.md)
- [GetPricesByOfferIdsResponseAllOf](docs/Model/GetPricesByOfferIdsResponseAllOf.md)
- [GetPricesResponse](docs/Model/GetPricesResponse.md)
- [GetPricesResponseAllOf](docs/Model/GetPricesResponseAllOf.md)
- [GetQuarantineOffersRequest](docs/Model/GetQuarantineOffersRequest.md)
- [GetQuarantineOffersResponse](docs/Model/GetQuarantineOffersResponse.md)
- [GetQuarantineOffersResponseAllOf](docs/Model/GetQuarantineOffersResponseAllOf.md)
- [GetQuarantineOffersResultDTO](docs/Model/GetQuarantineOffersResultDTO.md)
- [GetRegionWithChildrenResponse](docs/Model/GetRegionWithChildrenResponse.md)
- [GetRegionsResponse](docs/Model/GetRegionsResponse.md)
- [GetReportInfoResponse](docs/Model/GetReportInfoResponse.md)
- [GetReportInfoResponseAllOf](docs/Model/GetReportInfoResponseAllOf.md)
- [GetReturnResponse](docs/Model/GetReturnResponse.md)
- [GetReturnResponseAllOf](docs/Model/GetReturnResponseAllOf.md)
- [GetReturnsResponse](docs/Model/GetReturnsResponse.md)
- [GetReturnsResponseAllOf](docs/Model/GetReturnsResponseAllOf.md)
- [GetShipmentOrdersInfoResponse](docs/Model/GetShipmentOrdersInfoResponse.md)
- [GetShipmentOrdersInfoResponseAllOf](docs/Model/GetShipmentOrdersInfoResponseAllOf.md)
- [GetShipmentResponse](docs/Model/GetShipmentResponse.md)
- [GetShipmentResponseAllOf](docs/Model/GetShipmentResponseAllOf.md)
- [GetSuggestedOfferMappingEntriesRequest](docs/Model/GetSuggestedOfferMappingEntriesRequest.md)
- [GetSuggestedOfferMappingEntriesResponse](docs/Model/GetSuggestedOfferMappingEntriesResponse.md)
- [GetSuggestedOfferMappingEntriesResponseAllOf](docs/Model/GetSuggestedOfferMappingEntriesResponseAllOf.md)
- [GetSuggestedOfferMappingsRequest](docs/Model/GetSuggestedOfferMappingsRequest.md)
- [GetSuggestedOfferMappingsResponse](docs/Model/GetSuggestedOfferMappingsResponse.md)
- [GetSuggestedOfferMappingsResponseAllOf](docs/Model/GetSuggestedOfferMappingsResponseAllOf.md)
- [GetSuggestedOfferMappingsResultDTO](docs/Model/GetSuggestedOfferMappingsResultDTO.md)
- [GetWarehouseStocksDTO](docs/Model/GetWarehouseStocksDTO.md)
- [GetWarehouseStocksRequest](docs/Model/GetWarehouseStocksRequest.md)
- [GetWarehouseStocksResponse](docs/Model/GetWarehouseStocksResponse.md)
- [GetWarehouseStocksResponseAllOf](docs/Model/GetWarehouseStocksResponseAllOf.md)
- [GetWarehousesResponse](docs/Model/GetWarehousesResponse.md)
- [GetWarehousesResponseAllOf](docs/Model/GetWarehousesResponseAllOf.md)
- [GoodsStatsDTO](docs/Model/GoodsStatsDTO.md)
- [GoodsStatsGoodsDTO](docs/Model/GoodsStatsGoodsDTO.md)
- [GoodsStatsTariffDTO](docs/Model/GoodsStatsTariffDTO.md)
- [GoodsStatsTariffType](docs/Model/GoodsStatsTariffType.md)
- [GoodsStatsWarehouseDTO](docs/Model/GoodsStatsWarehouseDTO.md)
- [GoodsStatsWeightDimensionsDTO](docs/Model/GoodsStatsWeightDimensionsDTO.md)
- [GpsDTO](docs/Model/GpsDTO.md)
- [HiddenOfferDTO](docs/Model/HiddenOfferDTO.md)
- [LicenseCheckStatusType](docs/Model/LicenseCheckStatusType.md)
- [LicenseType](docs/Model/LicenseType.md)
- [LogisticPickupPointDTO](docs/Model/LogisticPickupPointDTO.md)
- [LogisticPointType](docs/Model/LogisticPointType.md)
- [MappingsOfferDTO](docs/Model/MappingsOfferDTO.md)
- [ModelDTO](docs/Model/ModelDTO.md)
- [ModelOfferDTO](docs/Model/ModelOfferDTO.md)
- [ModelPriceDTO](docs/Model/ModelPriceDTO.md)
- [OfferAvailabilityStatusType](docs/Model/OfferAvailabilityStatusType.md)
- [OfferCampaignStatusDTO](docs/Model/OfferCampaignStatusDTO.md)
- [OfferCampaignStatusType](docs/Model/OfferCampaignStatusType.md)
- [OfferCardDTO](docs/Model/OfferCardDTO.md)
- [OfferCardRecommendationDTO](docs/Model/OfferCardRecommendationDTO.md)
- [OfferCardRecommendationType](docs/Model/OfferCardRecommendationType.md)
- [OfferCardStatusType](docs/Model/OfferCardStatusType.md)
- [OfferCardsContentStatusDTO](docs/Model/OfferCardsContentStatusDTO.md)
- [OfferConditionDTO](docs/Model/OfferConditionDTO.md)
- [OfferConditionQualityType](docs/Model/OfferConditionQualityType.md)
- [OfferConditionType](docs/Model/OfferConditionType.md)
- [OfferContentDTO](docs/Model/OfferContentDTO.md)
- [OfferContentErrorDTO](docs/Model/OfferContentErrorDTO.md)
- [OfferContentErrorType](docs/Model/OfferContentErrorType.md)
- [OfferDTO](docs/Model/OfferDTO.md)
- [OfferErrorDTO](docs/Model/OfferErrorDTO.md)
- [OfferForRecommendationDTO](docs/Model/OfferForRecommendationDTO.md)
- [OfferMappingDTO](docs/Model/OfferMappingDTO.md)
- [OfferMappingEntriesDTO](docs/Model/OfferMappingEntriesDTO.md)
- [OfferMappingEntryDTO](docs/Model/OfferMappingEntryDTO.md)
- [OfferMappingKindType](docs/Model/OfferMappingKindType.md)
- [OfferMappingSuggestionsListDTO](docs/Model/OfferMappingSuggestionsListDTO.md)
- [OfferParamDTO](docs/Model/OfferParamDTO.md)
- [OfferPriceByOfferIdsListResponseDTO](docs/Model/OfferPriceByOfferIdsListResponseDTO.md)
- [OfferPriceByOfferIdsResponseDTO](docs/Model/OfferPriceByOfferIdsResponseDTO.md)
- [OfferPriceDTO](docs/Model/OfferPriceDTO.md)
- [OfferPriceFeedDTO](docs/Model/OfferPriceFeedDTO.md)
- [OfferPriceListResponseDTO](docs/Model/OfferPriceListResponseDTO.md)
- [OfferPriceResponseDTO](docs/Model/OfferPriceResponseDTO.md)
- [OfferProcessingNoteDTO](docs/Model/OfferProcessingNoteDTO.md)
- [OfferProcessingNoteType](docs/Model/OfferProcessingNoteType.md)
- [OfferProcessingStateDTO](docs/Model/OfferProcessingStateDTO.md)
- [OfferProcessingStatusType](docs/Model/OfferProcessingStatusType.md)
- [OfferRecommendationDTO](docs/Model/OfferRecommendationDTO.md)
- [OfferRecommendationInfoDTO](docs/Model/OfferRecommendationInfoDTO.md)
- [OfferRecommendationsResultDTO](docs/Model/OfferRecommendationsResultDTO.md)
- [OfferSellingProgramDTO](docs/Model/OfferSellingProgramDTO.md)
- [OfferSellingProgramStatusType](docs/Model/OfferSellingProgramStatusType.md)
- [OfferType](docs/Model/OfferType.md)
- [OfferWeightDimensionsDTO](docs/Model/OfferWeightDimensionsDTO.md)
- [OffersDTO](docs/Model/OffersDTO.md)
- [OptionValuesLimitedDTO](docs/Model/OptionValuesLimitedDTO.md)
- [OrderBuyerDTO](docs/Model/OrderBuyerDTO.md)
- [OrderBuyerType](docs/Model/OrderBuyerType.md)
- [OrderCancellationReasonType](docs/Model/OrderCancellationReasonType.md)
- [OrderCourierDTO](docs/Model/OrderCourierDTO.md)
- [OrderCreateAddressDTO](docs/Model/OrderCreateAddressDTO.md)
- [OrderCreateBuyerDTO](docs/Model/OrderCreateBuyerDTO.md)
- [OrderCreateDTO](docs/Model/OrderCreateDTO.md)
- [OrderCreateDeliveryDTO](docs/Model/OrderCreateDeliveryDTO.md)
- [OrderCreateItemDTO](docs/Model/OrderCreateItemDTO.md)
- [OrderDTO](docs/Model/OrderDTO.md)
- [OrderDeliveryAddressDTO](docs/Model/OrderDeliveryAddressDTO.md)
- [OrderDeliveryDTO](docs/Model/OrderDeliveryDTO.md)
- [OrderDeliveryDateDTO](docs/Model/OrderDeliveryDateDTO.md)
- [OrderDeliveryDateReasonType](docs/Model/OrderDeliveryDateReasonType.md)
- [OrderDeliveryDatesDTO](docs/Model/OrderDeliveryDatesDTO.md)
- [OrderDeliveryDispatchType](docs/Model/OrderDeliveryDispatchType.md)
- [OrderDeliveryEacType](docs/Model/OrderDeliveryEacType.md)
- [OrderDeliveryPartnerType](docs/Model/OrderDeliveryPartnerType.md)
- [OrderDeliverySlotDTO](docs/Model/OrderDeliverySlotDTO.md)
- [OrderDeliveryType](docs/Model/OrderDeliveryType.md)
- [OrderDigitalItemDTO](docs/Model/OrderDigitalItemDTO.md)
- [OrderItemDTO](docs/Model/OrderItemDTO.md)
- [OrderItemDetailDTO](docs/Model/OrderItemDetailDTO.md)
- [OrderItemInstanceDTO](docs/Model/OrderItemInstanceDTO.md)
- [OrderItemInstanceModificationDTO](docs/Model/OrderItemInstanceModificationDTO.md)
- [OrderItemInstanceType](docs/Model/OrderItemInstanceType.md)
- [OrderItemModificationDTO](docs/Model/OrderItemModificationDTO.md)
- [OrderItemPromoDTO](docs/Model/OrderItemPromoDTO.md)
- [OrderItemStatusType](docs/Model/OrderItemStatusType.md)
- [OrderItemSubsidyDTO](docs/Model/OrderItemSubsidyDTO.md)
- [OrderItemsModificationRequestReasonType](docs/Model/OrderItemsModificationRequestReasonType.md)
- [OrderItemsModificationResultDTO](docs/Model/OrderItemsModificationResultDTO.md)
- [OrderLabelDTO](docs/Model/OrderLabelDTO.md)
- [OrderLiftType](docs/Model/OrderLiftType.md)
- [OrderParcelBoxDTO](docs/Model/OrderParcelBoxDTO.md)
- [OrderParcelStatusType](docs/Model/OrderParcelStatusType.md)
- [OrderPaymentMethodType](docs/Model/OrderPaymentMethodType.md)
- [OrderPaymentType](docs/Model/OrderPaymentType.md)
- [OrderPromoType](docs/Model/OrderPromoType.md)
- [OrderShipmentDTO](docs/Model/OrderShipmentDTO.md)
- [OrderStateDTO](docs/Model/OrderStateDTO.md)
- [OrderStatsStatusType](docs/Model/OrderStatsStatusType.md)
- [OrderStatusChangeDTO](docs/Model/OrderStatusChangeDTO.md)
- [OrderStatusChangeDeliveryDTO](docs/Model/OrderStatusChangeDeliveryDTO.md)
- [OrderStatusChangeDeliveryDatesDTO](docs/Model/OrderStatusChangeDeliveryDatesDTO.md)
- [OrderStatusType](docs/Model/OrderStatusType.md)
- [OrderSubsidyType](docs/Model/OrderSubsidyType.md)
- [OrderSubstatusType](docs/Model/OrderSubstatusType.md)
- [OrderTaxSystemType](docs/Model/OrderTaxSystemType.md)
- [OrderTrackDTO](docs/Model/OrderTrackDTO.md)
- [OrderUpdateStatusType](docs/Model/OrderUpdateStatusType.md)
- [OrderVatType](docs/Model/OrderVatType.md)
- [OrdersShipmentInfoDTO](docs/Model/OrdersShipmentInfoDTO.md)
- [OrdersStatsCommissionDTO](docs/Model/OrdersStatsCommissionDTO.md)
- [OrdersStatsCommissionType](docs/Model/OrdersStatsCommissionType.md)
- [OrdersStatsDTO](docs/Model/OrdersStatsDTO.md)
- [OrdersStatsDeliveryRegionDTO](docs/Model/OrdersStatsDeliveryRegionDTO.md)
- [OrdersStatsDetailsDTO](docs/Model/OrdersStatsDetailsDTO.md)
- [OrdersStatsItemDTO](docs/Model/OrdersStatsItemDTO.md)
- [OrdersStatsItemStatusType](docs/Model/OrdersStatsItemStatusType.md)
- [OrdersStatsOrderDTO](docs/Model/OrdersStatsOrderDTO.md)
- [OrdersStatsOrderPaymentType](docs/Model/OrdersStatsOrderPaymentType.md)
- [OrdersStatsPaymentDTO](docs/Model/OrdersStatsPaymentDTO.md)
- [OrdersStatsPaymentOrderDTO](docs/Model/OrdersStatsPaymentOrderDTO.md)
- [OrdersStatsPaymentSourceType](docs/Model/OrdersStatsPaymentSourceType.md)
- [OrdersStatsPaymentType](docs/Model/OrdersStatsPaymentType.md)
- [OrdersStatsPriceDTO](docs/Model/OrdersStatsPriceDTO.md)
- [OrdersStatsPriceType](docs/Model/OrdersStatsPriceType.md)
- [OrdersStatsStockType](docs/Model/OrdersStatsStockType.md)
- [OrdersStatsWarehouseDTO](docs/Model/OrdersStatsWarehouseDTO.md)
- [OutletAddressDTO](docs/Model/OutletAddressDTO.md)
- [OutletDTO](docs/Model/OutletDTO.md)
- [OutletDeliveryRuleDTO](docs/Model/OutletDeliveryRuleDTO.md)
- [OutletLicenseDTO](docs/Model/OutletLicenseDTO.md)
- [OutletLicensesResponseDTO](docs/Model/OutletLicensesResponseDTO.md)
- [OutletResponseDTO](docs/Model/OutletResponseDTO.md)
- [OutletStatusType](docs/Model/OutletStatusType.md)
- [OutletType](docs/Model/OutletType.md)
- [OutletVisibilityType](docs/Model/OutletVisibilityType.md)
- [OutletWorkingScheduleDTO](docs/Model/OutletWorkingScheduleDTO.md)
- [OutletWorkingScheduleItemDTO](docs/Model/OutletWorkingScheduleItemDTO.md)
- [PageFormatType](docs/Model/PageFormatType.md)
- [PagedReturnsDTO](docs/Model/PagedReturnsDTO.md)
- [PalletsCountDTO](docs/Model/PalletsCountDTO.md)
- [ParameterType](docs/Model/ParameterType.md)
- [ParameterValueConstraintsDTO](docs/Model/ParameterValueConstraintsDTO.md)
- [ParameterValueDTO](docs/Model/ParameterValueDTO.md)
- [ParameterValueOptionDTO](docs/Model/ParameterValueOptionDTO.md)
- [ParcelBoxDTO](docs/Model/ParcelBoxDTO.md)
- [ParcelBoxLabelDTO](docs/Model/ParcelBoxLabelDTO.md)
- [ParcelDTO](docs/Model/ParcelDTO.md)
- [PartnerShipmentWarehouseDTO](docs/Model/PartnerShipmentWarehouseDTO.md)
- [PickupAddressDTO](docs/Model/PickupAddressDTO.md)
- [PlacementType](docs/Model/PlacementType.md)
- [PriceCompetitivenessThresholdsDTO](docs/Model/PriceCompetitivenessThresholdsDTO.md)
- [PriceCompetitivenessType](docs/Model/PriceCompetitivenessType.md)
- [PriceDTO](docs/Model/PriceDTO.md)
- [PriceQuarantineVerdictDTO](docs/Model/PriceQuarantineVerdictDTO.md)
- [PriceQuarantineVerdictParamNameType](docs/Model/PriceQuarantineVerdictParamNameType.md)
- [PriceQuarantineVerdictParameterDTO](docs/Model/PriceQuarantineVerdictParameterDTO.md)
- [PriceQuarantineVerdictType](docs/Model/PriceQuarantineVerdictType.md)
- [PriceRecommendationItemDTO](docs/Model/PriceRecommendationItemDTO.md)
- [PriceSuggestDTO](docs/Model/PriceSuggestDTO.md)
- [PriceSuggestOfferDTO](docs/Model/PriceSuggestOfferDTO.md)
- [PriceSuggestType](docs/Model/PriceSuggestType.md)
- [ProvideOrderDigitalCodesRequest](docs/Model/ProvideOrderDigitalCodesRequest.md)
- [ProvideOrderItemIdentifiersRequest](docs/Model/ProvideOrderItemIdentifiersRequest.md)
- [ProvideOrderItemIdentifiersResponse](docs/Model/ProvideOrderItemIdentifiersResponse.md)
- [ProvideOrderItemIdentifiersResponseAllOf](docs/Model/ProvideOrderItemIdentifiersResponseAllOf.md)
- [PutSkuBidsRequest](docs/Model/PutSkuBidsRequest.md)
- [QuantumDTO](docs/Model/QuantumDTO.md)
- [QuarantineOfferDTO](docs/Model/QuarantineOfferDTO.md)
- [RecipientType](docs/Model/RecipientType.md)
- [RefundStatusType](docs/Model/RefundStatusType.md)
- [RegionDTO](docs/Model/RegionDTO.md)
- [RegionType](docs/Model/RegionType.md)
- [RegionalModelInfoDTO](docs/Model/RegionalModelInfoDTO.md)
- [ReportFormatType](docs/Model/ReportFormatType.md)
- [ReportInfoDTO](docs/Model/ReportInfoDTO.md)
- [ReportStatusType](docs/Model/ReportStatusType.md)
- [ReportSubStatusType](docs/Model/ReportSubStatusType.md)
- [ReturnDTO](docs/Model/ReturnDTO.md)
- [ReturnDecisionDTO](docs/Model/ReturnDecisionDTO.md)
- [ReturnDecisionReasonType](docs/Model/ReturnDecisionReasonType.md)
- [ReturnDecisionSubreasonType](docs/Model/ReturnDecisionSubreasonType.md)
- [ReturnDecisionType](docs/Model/ReturnDecisionType.md)
- [ReturnInstanceDTO](docs/Model/ReturnInstanceDTO.md)
- [ReturnInstanceStatusType](docs/Model/ReturnInstanceStatusType.md)
- [ReturnInstanceStockType](docs/Model/ReturnInstanceStockType.md)
- [ReturnItemDTO](docs/Model/ReturnItemDTO.md)
- [ReturnRequestDecisionType](docs/Model/ReturnRequestDecisionType.md)
- [ReturnShipmentStatusType](docs/Model/ReturnShipmentStatusType.md)
- [ReturnType](docs/Model/ReturnType.md)
- [ScrollingPagerDTO](docs/Model/ScrollingPagerDTO.md)
- [ScrollingPagerDTOAllOf](docs/Model/ScrollingPagerDTOAllOf.md)
- [SearchModelsResponse](docs/Model/SearchModelsResponse.md)
- [SearchShipmentsRequest](docs/Model/SearchShipmentsRequest.md)
- [SearchShipmentsResponse](docs/Model/SearchShipmentsResponse.md)
- [SearchShipmentsResponseAllOf](docs/Model/SearchShipmentsResponseAllOf.md)
- [SearchShipmentsResponseDTO](docs/Model/SearchShipmentsResponseDTO.md)
- [SellingProgramType](docs/Model/SellingProgramType.md)
- [SetFeedParamsRequest](docs/Model/SetFeedParamsRequest.md)
- [SetOrderDeliveryDateRequest](docs/Model/SetOrderDeliveryDateRequest.md)
- [SetOrderDeliveryTrackCodeRequest](docs/Model/SetOrderDeliveryTrackCodeRequest.md)
- [SetOrderShipmentBoxesRequest](docs/Model/SetOrderShipmentBoxesRequest.md)
- [SetOrderShipmentBoxesResponse](docs/Model/SetOrderShipmentBoxesResponse.md)
- [SetOrderShipmentBoxesResponseAllOf](docs/Model/SetOrderShipmentBoxesResponseAllOf.md)
- [SetReturnDecisionRequest](docs/Model/SetReturnDecisionRequest.md)
- [SetShipmentPalletsCountRequest](docs/Model/SetShipmentPalletsCountRequest.md)
- [ShipmentActionType](docs/Model/ShipmentActionType.md)
- [ShipmentBoxesDTO](docs/Model/ShipmentBoxesDTO.md)
- [ShipmentDTO](docs/Model/ShipmentDTO.md)
- [ShipmentInfoDTO](docs/Model/ShipmentInfoDTO.md)
- [ShipmentPalletLabelPageFormatType](docs/Model/ShipmentPalletLabelPageFormatType.md)
- [ShipmentStatusChangeDTO](docs/Model/ShipmentStatusChangeDTO.md)
- [ShipmentStatusType](docs/Model/ShipmentStatusType.md)
- [ShipmentType](docs/Model/ShipmentType.md)
- [ShowsSalesGroupingType](docs/Model/ShowsSalesGroupingType.md)
- [SkuBidItemDTO](docs/Model/SkuBidItemDTO.md)
- [SkuBidRecommendationItemDTO](docs/Model/SkuBidRecommendationItemDTO.md)
- [SortOrderType](docs/Model/SortOrderType.md)
- [StockDTO](docs/Model/StockDTO.md)
- [StockItemDTO](docs/Model/StockItemDTO.md)
- [StockType](docs/Model/StockType.md)
- [SuggestOfferPriceDTO](docs/Model/SuggestOfferPriceDTO.md)
- [SuggestPricesRequest](docs/Model/SuggestPricesRequest.md)
- [SuggestPricesResponse](docs/Model/SuggestPricesResponse.md)
- [SuggestPricesResponseAllOf](docs/Model/SuggestPricesResponseAllOf.md)
- [SuggestPricesResultDTO](docs/Model/SuggestPricesResultDTO.md)
- [SuggestedOfferDTO](docs/Model/SuggestedOfferDTO.md)
- [SuggestedOfferMappingDTO](docs/Model/SuggestedOfferMappingDTO.md)
- [TimePeriodDTO](docs/Model/TimePeriodDTO.md)
- [TimeUnitType](docs/Model/TimeUnitType.md)
- [TrackDTO](docs/Model/TrackDTO.md)
- [TransferOrdersFromShipmentRequest](docs/Model/TransferOrdersFromShipmentRequest.md)
- [TurnoverDTO](docs/Model/TurnoverDTO.md)
- [TurnoverType](docs/Model/TurnoverType.md)
- [UpdateBusinessOfferPriceDTO](docs/Model/UpdateBusinessOfferPriceDTO.md)
- [UpdateBusinessPricesRequest](docs/Model/UpdateBusinessPricesRequest.md)
- [UpdateCampaignOfferDTO](docs/Model/UpdateCampaignOfferDTO.md)
- [UpdateCampaignOfferDTOAllOf](docs/Model/UpdateCampaignOfferDTOAllOf.md)
- [UpdateCampaignOffersRequest](docs/Model/UpdateCampaignOffersRequest.md)
- [UpdateMappingDTO](docs/Model/UpdateMappingDTO.md)
- [UpdateOfferContentRequest](docs/Model/UpdateOfferContentRequest.md)
- [UpdateOfferContentResponse](docs/Model/UpdateOfferContentResponse.md)
- [UpdateOfferContentResponseAllOf](docs/Model/UpdateOfferContentResponseAllOf.md)
- [UpdateOfferContentResultDTO](docs/Model/UpdateOfferContentResultDTO.md)
- [UpdateOfferDTO](docs/Model/UpdateOfferDTO.md)
- [UpdateOfferDTOAllOf](docs/Model/UpdateOfferDTOAllOf.md)
- [UpdateOfferMappingDTO](docs/Model/UpdateOfferMappingDTO.md)
- [UpdateOfferMappingEntryRequest](docs/Model/UpdateOfferMappingEntryRequest.md)
- [UpdateOfferMappingsRequest](docs/Model/UpdateOfferMappingsRequest.md)
- [UpdateOrderItemRequest](docs/Model/UpdateOrderItemRequest.md)
- [UpdateOrderStatusDTO](docs/Model/UpdateOrderStatusDTO.md)
- [UpdateOrderStatusRequest](docs/Model/UpdateOrderStatusRequest.md)
- [UpdateOrderStatusResponse](docs/Model/UpdateOrderStatusResponse.md)
- [UpdateOrderStatusesDTO](docs/Model/UpdateOrderStatusesDTO.md)
- [UpdateOrderStatusesRequest](docs/Model/UpdateOrderStatusesRequest.md)
- [UpdateOrderStatusesResponse](docs/Model/UpdateOrderStatusesResponse.md)
- [UpdateOrderStatusesResponseAllOf](docs/Model/UpdateOrderStatusesResponseAllOf.md)
- [UpdateOrderStorageLimitRequest](docs/Model/UpdateOrderStorageLimitRequest.md)
- [UpdateOutletLicenseRequest](docs/Model/UpdateOutletLicenseRequest.md)
- [UpdatePriceWithDiscountDTO](docs/Model/UpdatePriceWithDiscountDTO.md)
- [UpdatePriceWithDiscountDTOAllOf](docs/Model/UpdatePriceWithDiscountDTOAllOf.md)
- [UpdatePricesRequest](docs/Model/UpdatePricesRequest.md)
- [UpdateStocksRequest](docs/Model/UpdateStocksRequest.md)
- [UpdateTimeDTO](docs/Model/UpdateTimeDTO.md)
- [ValueRestrictionDTO](docs/Model/ValueRestrictionDTO.md)
- [VerifyOrderEacRequest](docs/Model/VerifyOrderEacRequest.md)
- [VerifyOrderEacResponse](docs/Model/VerifyOrderEacResponse.md)
- [VerifyOrderEacResponseAllOf](docs/Model/VerifyOrderEacResponseAllOf.md)
- [WarehouseDTO](docs/Model/WarehouseDTO.md)
- [WarehouseGroupDTO](docs/Model/WarehouseGroupDTO.md)
- [WarehouseOfferDTO](docs/Model/WarehouseOfferDTO.md)
- [WarehouseOffersDTO](docs/Model/WarehouseOffersDTO.md)
- [WarehouseStockDTO](docs/Model/WarehouseStockDTO.md)
- [WarehouseStockType](docs/Model/WarehouseStockType.md)
- [WarehousesDTO](docs/Model/WarehousesDTO.md)

## Authorization

Authentication schemes defined for the API:
### OAuth

- **Type**: `OAuth`
- **Flow**: `implicit`
- **Authorization URL**: `https://oauth.yandex.ru/authorize`
- **Scopes**: 
    - **market:partner-api**: API Яндекс.Маркета / Поиска по товарам для партнеров

## Tests

To run the tests, use:

```bash
composer install
vendor/bin/phpunit
```

## Author



## About this package

This PHP package is automatically generated by the [OpenAPI Generator](https://openapi-generator.tech) project:

- API version: `LATEST`
- Build package: `org.openapitools.codegen.languages.PhpClientCodegen`
