# # GenerateStocksOnWarehousesReportRequest

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**campaign_id** | **int** | Идентификатор магазина. |
**warehouse_ids** | **int[]** | Фильтр по идентификаторам складов (только FBY). Чтобы узнать идентификатор, воспользуйтесь запросом [GET warehouses](../../reference/warehouses/getFulfillmentWarehouses.md). | [optional]
**report_date** | **\DateTime** | Фильтр по дате (для FBY). В отчет попадут данные за **предшествующий** дате день. | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
