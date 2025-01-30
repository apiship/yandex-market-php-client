# # FeedbackDTO

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**id** | **int** | Идентификатор отзыва. | [optional]
**created_at** | **\DateTime** | Дата и время создания отзыва.  Формат даты: ISO 8601 со смещением относительно UTC. Например, &#x60;2017-11-21T00:00:00+03:00&#x60;. | [optional]
**text** | **string** | Комментарий автора отзыва. | [optional]
**state** | [**\YandexMarketApi\Model\FeedbackStateType**](FeedbackStateType.md) |  | [optional]
**author** | [**\YandexMarketApi\Model\FeedbackAuthorDTO**](FeedbackAuthorDTO.md) |  | [optional]
**pro** | **string** | Достоинства магазина, описанные в отзыве. | [optional]
**contra** | **string** | Недостатки магазина, описанные в отзыве. | [optional]
**comments** | [**\YandexMarketApi\Model\FeedbackCommentDTO[]**](FeedbackCommentDTO.md) | Переписка автора отзыва с магазином. |
**shop** | [**\YandexMarketApi\Model\FeedbackShopDTO**](FeedbackShopDTO.md) |  | [optional]
**resolved** | **bool** | Решена ли проблема автора отзыва:  * &#x60;true&#x60; — да. * &#x60;false&#x60; — нет.  Если проблема решена, около отзыва на странице магазина появляется соответствующая надпись. | [optional]
**verified** | **bool** | {% note warning \&quot;Этот параметр устарел\&quot; %}  Не используйте его.  {% endnote %}  Является ли отзыв рекомендованным:  * &#x60;true&#x60; — да. * &#x60;false&#x60; — нет. | [optional]
**recommend** | **bool** | Купил бы автор отзыва в магазине снова:  * &#x60;true&#x60; — да. * &#x60;false&#x60; — нет. | [optional]
**grades** | [**\YandexMarketApi\Model\FeedbackGradesDTO**](FeedbackGradesDTO.md) |  | [optional]
**order** | [**\YandexMarketApi\Model\FeedbackOrderDTO**](FeedbackOrderDTO.md) |  | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
