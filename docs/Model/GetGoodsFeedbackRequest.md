# # GetGoodsFeedbackRequest

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**date_time_from** | **\DateTime** | Начало периода. Не включительно.  Если параметр не указан, возвращается информация за 6 месяцев до указанной в &#x60;dateTimeTo&#x60; даты. | [optional]
**date_time_to** | **\DateTime** | Конец периода. Не включительно.  Если параметр не указан, используется текущая дата. | [optional]
**reaction_status** | [**\YandexMarketApi\Model\FeedbackReactionStatusType**](FeedbackReactionStatusType.md) |  | [optional]
**rating_values** | **int[]** | Оценка товара. | [optional]
**model_ids** | **int[]** | Фильтр по идентификатору модели товара.  Получить идентификатор модели можно с помощью одного из запросов:  * [POST businesses/{businessId}/offer-mappings](../../reference/business-assortment/getOfferMappings.md);  * [POST businesses/{businessId}/offer-cards](../../reference/content/getOfferCardsContentStatus.md);  * [POST models](../../reference/models/getModels.md). | [optional]
**paid** | **bool** | Фильтр отзывов за баллы Плюса. | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
