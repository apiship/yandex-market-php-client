# # SearchShipmentsRequest

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**date_from** | **\DateTime** | Начальная дата для фильтрации по дате отгрузки (включительно).  Формат даты: &#x60;ДД-ММ-ГГГГ&#x60;. | [optional]
**date_to** | **\DateTime** | Конечная дата для фильтрации по дате отгрузки (включительно).  Формат даты: &#x60;ДД-ММ-ГГГГ&#x60;. | [optional]
**statuses** | [**\YandexMarketApi\Model\ShipmentStatusType[]**](ShipmentStatusType.md) | Список статусов отгрузок. | [optional]
**order_ids** | **int[]** | Список идентификаторов заказов из отгрузок. | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
