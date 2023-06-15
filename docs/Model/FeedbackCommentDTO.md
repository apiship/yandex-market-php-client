# # FeedbackCommentDTO

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**id** | **int** | Идентификатор ответа. | [optional]
**parent_id** | **int** | Идентификатор родительского ответа. | [optional]
**body** | **string** | Текст ответа. | [optional]
**created_at** | **\DateTime** | Дата и время создания ответа.  Формат даты: ISO 8601 со смещением относительно UTC. Например, &#x60;2017-11-21T00:00:00+03:00&#x60;. | [optional]
**updated_at** | **\DateTime** | Дата и время изменения ответа.  Формат даты: ISO 8601 со смещением относительно UTC. Например, &#x60;2017-11-21T00:00:00+03:00&#x60;. | [optional]
**author** | [**\YandexMarketApi\Model\FeedbackCommentAuthorDTO**](FeedbackCommentAuthorDTO.md) |  | [optional]
**children** | [**\YandexMarketApi\Model\FeedbackCommentDTO[]**](FeedbackCommentDTO.md) | Дочерние ответы. | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
