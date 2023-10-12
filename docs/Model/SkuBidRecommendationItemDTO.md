# # SkuBidRecommendationItemDTO

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**sku** | **string** | **Ваш SKU**  Идентификатор товара в магазине. Разрешены английские и русские буквы (кроме ё), цифры и символы &#x60;. , / \\ ( ) [ ] - &#x3D; _&#x60;  Максимальная длина — 80 знаков.  [Что такое SKU и как его назначать](https://yandex.ru/support/marketplace/assortment/add/index.html#fields). |
**bid** | **int** | Значение ставки. |
**bid_recommendations** | [**\YandexMarketApi\Model\BidRecommendationItemDTO[]**](BidRecommendationItemDTO.md) | Список рекомендованных ставок с соответствующими долями показов. Чем больше ставка, тем большую долю показов она помогает получить. | [optional]
**price_recommendations** | [**\YandexMarketApi\Model\PriceRecommendationItemDTO[]**](PriceRecommendationItemDTO.md) | Рекомендованные цены. | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
