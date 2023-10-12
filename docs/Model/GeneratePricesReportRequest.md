# # GeneratePricesReportRequest

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**business_id** | **int** | Идентификатор бизнеса.  В большинстве случаев обязателен. Не указывается, если задан &#x60;campaignId&#x60;. | [optional]
**campaign_id** | **int** | Идентификатор кампании.  Как правило, не используется. Передавайте только если в кабинете есть магазины с уникальными ценами и вы хотите получить отчет для них. В этом случае передавать &#x60;businessId&#x60; не нужно. | [optional]
**category_ids** | **int[]** | Фильтр по категориям на Маркете. | [optional]
**creation_date_from** | **\DateTime** | Фильтр по времени появления предложения — начало периода.  Формат даты: &#x60;ДД-ММ-ГГГГ&#x60;. | [optional]
**creation_date_to** | **\DateTime** | Фильтр по времени появления предложения — окончание периода.  Формат даты: &#x60;ДД-ММ-ГГГГ&#x60;. | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
