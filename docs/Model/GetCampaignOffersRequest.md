# # GetCampaignOffersRequest

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**offer_ids** | **string[]** | Идентификаторы товаров, информация о которых нужна. ⚠️ Не используйте это поле одновременно с фильтрами по статусам карточек, категориям, брендам или тегам. Если вы хотите воспользоваться фильтрами, оставьте поле пустым. | [optional]
**statuses** | [**\YandexMarketApi\Model\OfferCampaignStatusType[]**](OfferCampaignStatusType.md) | Фильтр по статусам товаров. | [optional]
**category_ids** | **int[]** | Фильтр по категориям на Маркете. | [optional]
**vendor_names** | **string[]** | Фильтр по брендам. | [optional]
**tags** | **string[]** | Фильтр по тегам. | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
