# # ReportInfoDTO

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**status** | [**\YandexMarketApi\Model\ReportStatusType**](ReportStatusType.md) |  |
**sub_status** | [**\YandexMarketApi\Model\ReportSubStatusType**](ReportSubStatusType.md) |  | [optional]
**generation_requested_at** | **\DateTime** | Дата и время запроса на генерацию. |
**generation_finished_at** | **\DateTime** | Дата и время завершения генерации. | [optional]
**file** | **string** | Ссылка на готовый отчет. | [optional]
**estimated_generation_time** | **int** | Ожидаемая продолжительность генерации в миллисекундах. | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
