# # GetQuarantineOffersRequest

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**offer_ids** | **string[]** | Идентификаторы товаров, информация о которых нужна. ⚠️ Не используйте это поле одновременно с фильтрами по статусам карточек, категориям, брендам или тегам. Если вы хотите воспользоваться фильтрами, оставьте поле пустым. | [optional]
**card_statuses** | [**\YandexMarketApi\Model\OfferCardStatusType[]**](OfferCardStatusType.md) | Фильтр по статусам карточек.  [Что такое карточка товара](https://yandex.ru/support/marketplace/assortment/content/index.html) | [optional]
**category_ids** | **int[]** | Фильтр по категориям на Маркете. | [optional]
**vendor_names** | **string[]** | Фильтр по брендам. | [optional]
**tags** | **string[]** | Фильтр по тегам. | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
