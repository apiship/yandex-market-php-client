# # GenerateUnitedNettingReportRequest

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**business_id** | **int** | Идентификатор бизнеса. |
**date_time_from** | **\DateTime** | {% note warning \&quot;Этот параметр устарел\&quot; %}  Не используйте его.  {% endnote %}  Начало периода, включительно. | [optional]
**date_time_to** | **\DateTime** | {% note warning \&quot;Этот параметр устарел\&quot; %}  Не используйте его.  {% endnote %}  Конец периода, включительно. Максимальный период — 3 месяца. | [optional]
**date_from** | **\DateTime** | Начало периода, включительно. | [optional]
**date_to** | **\DateTime** | Конец периода, включительно. Максимальный период — 3 месяца. | [optional]
**bank_order_id** | **int** | Номер платежного поручения. | [optional]
**bank_order_date_time** | **\DateTime** | Дата платежного поручения. | [optional]
**placement_programs** | [**\YandexMarketApi\Model\PlacementType[]**](PlacementType.md) | Список моделей, которые нужны в отчете. | [optional]
**inns** | **string[]** | Список ИНН, которые нужны в отчете. | [optional]
**campaign_ids** | **int[]** | Список магазинов, которые нужны в отчете. | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
