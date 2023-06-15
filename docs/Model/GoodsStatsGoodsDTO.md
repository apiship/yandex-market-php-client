# # GoodsStatsGoodsDTO

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**shop_sku** | **string** | **Ваш SKU**  Идентификатор товара в магазине. Разрешены английские и русские буквы (кроме ё), цифры и символы &#x60;. , / \\ ( ) [ ] - &#x3D; _&#x60;  Максимальная длина — 80 знаков.  [Что такое SKU и как его назначать](https://yandex.ru/support/marketplace/assortment/add/index.html#fields). | [optional]
**market_sku** | **int** | SKU на Маркете. | [optional]
**name** | **string** | Название товара. | [optional]
**price** | **float** | Цена на товар, выставленная партнером. | [optional]
**category_id** | **int** | Идентификатор категории товара на Маркете. | [optional]
**category_name** | **string** | Название категории товара на Маркете. | [optional]
**weight_dimensions** | [**\YandexMarketApi\Model\GoodsStatsWeightDimensionsDTO**](GoodsStatsWeightDimensionsDTO.md) |  | [optional]
**hiding_reasons** | [**\YandexMarketApi\Model\GoodsStatsHidingDTO[]**](GoodsStatsHidingDTO.md) | Информация о скрытии вашего предложения на Маркете. Если ваше предложение не скрыто, параметр не будет возвращаться. Вы можете скрыть ваш товар на Маркете через партнерский API с помощью запроса &#x60;POST /campaigns/{campaignId}/hidden-offers&#x60; или через каталог товаров. Также ваш товар может быть скрыт из‑за нарушения правил размещения, ошибок в описании предложения партнера и т. д. | [optional]
**warehouses** | [**\YandexMarketApi\Model\GoodsStatsWarehouseDTO[]**](GoodsStatsWarehouseDTO.md) | Информация о складах, на которых хранится товар. | [optional]
**storage** | [**\YandexMarketApi\Model\GoodsStatsStorageDTO[]**](GoodsStatsStorageDTO.md) | Информация об условиях хранения и обработки товара на складе. | [optional]
**tariffs** | [**\YandexMarketApi\Model\GoodsStatsTariffDTO[]**](GoodsStatsTariffDTO.md) | Информация о тарифах, по которым нужно заплатить за услуги Маркета. | [optional]
**pictures** | **string[]** | Ссылки (URL) изображений товара в хорошем качестве. | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
