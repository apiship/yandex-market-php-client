# # EnrichedModelDTO

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**id** | **int** | Идентификатор модели товара. | [optional]
**name** | **string** | Название модели товара. | [optional]
**prices** | [**\YandexMarketApi\Model\ModelPriceDTO**](ModelPriceDTO.md) |  | [optional]
**offers** | [**\YandexMarketApi\Model\ModelOfferDTO[]**](ModelOfferDTO.md) | Список первых десяти предложений, расположенных на карточке модели.  В ответе на запрос возвращаются предложения различных магазинов. Если есть несколько предложений от одного магазина, в ответе отображается только одно, наиболее релевантное из них. | [optional]
**offline_offers** | **int** | Суммарное количество предложений в розничных магазинах в регионе. Учитываются все предложения от каждого магазина. | [optional]
**online_offers** | **int** | Суммарное количество предложений в интернет-магазинах в регионе. Учитываются все предложения от каждого магазина. | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
