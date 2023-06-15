# # SearchModelsResponse

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**models** | [**\YandexMarketApi\Model\ModelDTO[]**](ModelDTO.md) | Список моделей товаров. | [optional]
**currency** | [**\YandexMarketApi\Model\CurrencyType**](CurrencyType.md) |  | [optional]
**region_id** | **int** | Идентификатор региона, для которого выводится информация о предложениях модели (доставляемых в этот регион).  Информацию о регионе по идентификатору можно получить с помощью запроса &#x60;GET /regions/{regionId}&#x60;. | [optional]
**pager** | [**\YandexMarketApi\Model\FlippingPagerDTO**](FlippingPagerDTO.md) |  | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
