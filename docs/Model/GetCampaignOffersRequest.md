# # GetCampaignOffersRequest

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**offer_ids** | **string[]** | Идентификаторы товаров, информация о которых нужна.  {% note warning \&quot;Такой список возвращается только целиком\&quot; %}  Не используйте это поле одновременно с фильтрами по статусам карточек, категориям, брендам или тегам. Если вы хотите воспользоваться фильтрами, оставьте поле пустым.  Если вы запрашиваете информацию по конкретным SKU, не заполняйте:  * &#x60;page_token&#x60; * &#x60;limit&#x60;  {% endnote %}    | [optional]
**statuses** | [**\YandexMarketApi\Model\OfferCampaignStatusType[]**](OfferCampaignStatusType.md) | Фильтр по статусам товаров. | [optional]
**category_ids** | **int[]** | Фильтр по категориям на Маркете. | [optional]
**vendor_names** | **string[]** | Фильтр по брендам. | [optional]
**tags** | **string[]** | Фильтр по тегам. | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
