# # OfferPriceDTO

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**offer_id** | **string** | **Ваш SKU**  Идентификатор товара в магазине. Разрешены английские и русские буквы (кроме ё), цифры и символы &#x60;. , / \\ ( ) [ ] - &#x3D; _&#x60;  Максимальная длина — 80 знаков.  [Что такое SKU и как его назначать](https://yandex.ru/support/marketplace/assortment/add/index.html#fields). | [optional]
**id** | **string** | Идентификатор предложения из прайс-листа. Поле устарело, временно поддерживается, но в будущем будет отключено. | [optional]
**feed** | [**\YandexMarketApi\Model\OfferPriceFeedDTO**](OfferPriceFeedDTO.md) |  | [optional]
**price** | [**\YandexMarketApi\Model\PriceDTO**](PriceDTO.md) |  | [optional]
**market_sku** | **int** | SKU на Маркете. | [optional]
**shop_sku** | **string** | **Ваш SKU**  Идентификатор товара в магазине. Разрешены английские и русские буквы (кроме ё), цифры и символы &#x60;. , / \\ ( ) [ ] - &#x3D; _&#x60;  Максимальная длина — 80 знаков.  [Что такое SKU и как его назначать](https://yandex.ru/support/marketplace/assortment/add/index.html#fields). | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
