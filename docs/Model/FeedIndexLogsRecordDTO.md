# # FeedIndexLogsRecordDTO

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**download_time** | **\DateTime** | Дата и время загрузки прайс-листа.  Формат даты: ISO 8601 со смещением относительно UTC. Например, &#x60;2017-11-21T00:42:42+03:00&#x60;. | [optional]
**file_time** | **\DateTime** | Дата и время, которые магазин указал в прайс-листе.  Формат даты: ISO 8601 со смещением относительно UTC. Например, &#x60;2017-11-21T00:42:42+03:00&#x60;. | [optional]
**generation_id** | **int** | Идентификатор индексации. | [optional]
**index_type** | [**\YandexMarketApi\Model\FeedIndexLogsIndexType**](FeedIndexLogsIndexType.md) |  | [optional]
**published_time** | **\DateTime** | Дата и время публикации предложений из прайс-листа на Яндекс Маркете.  Формат даты: ISO 8601 со смещением относительно UTC. Например, &#x60;2017-11-21T00:42:42+03:00&#x60;. | [optional]
**status** | [**\YandexMarketApi\Model\FeedIndexLogsStatusType**](FeedIndexLogsStatusType.md) |  | [optional]
**error** | [**\YandexMarketApi\Model\FeedIndexLogsErrorDTO**](FeedIndexLogsErrorDTO.md) |  | [optional]
**offers** | [**\YandexMarketApi\Model\FeedIndexLogsOffersDTO**](FeedIndexLogsOffersDTO.md) |  | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
