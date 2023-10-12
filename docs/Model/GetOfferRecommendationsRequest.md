# # GetOfferRecommendationsRequest

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**offer_ids** | **string[]** | Идентификаторы товаров, информация о которых нужна. ⚠️ Не используйте это поле одновременно с остальными фильтрами. Если вы хотите воспользоваться фильтрами, оставьте поле пустым. | [optional]
**cofinance_price_filter** | [**\YandexMarketApi\Model\FieldStateType**](FieldStateType.md) |  | [optional]
**recommended_cofinance_price_filter** | [**\YandexMarketApi\Model\FieldStateType**](FieldStateType.md) |  | [optional]
**competitiveness_filter** | [**\YandexMarketApi\Model\PriceCompetitivenessType**](PriceCompetitivenessType.md) |  | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
