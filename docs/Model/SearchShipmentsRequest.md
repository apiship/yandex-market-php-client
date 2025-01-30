# # SearchShipmentsRequest

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**date_from** | **\DateTime** | Начальная дата для фильтрации по дате отгрузки (включительно).  Формат даты: &#x60;ДД-ММ-ГГГГ&#x60;. |
**date_to** | **\DateTime** | Конечная дата для фильтрации по дате отгрузки (включительно).  Формат даты: &#x60;ДД-ММ-ГГГГ&#x60;. |
**statuses** | [**\YandexMarketApi\Model\ShipmentStatusType[]**](ShipmentStatusType.md) | Список статусов отгрузок. | [optional]
**order_ids** | **int[]** | Список идентификаторов заказов из отгрузок. | [optional]
**cancelled_orders** | **bool** | Возвращать ли отмененные заказы.  Значение по умолчанию: &#x60;true&#x60;. Если возвращать отмененные заказы не нужно, передайте значение &#x60;false&#x60;. | [optional] [default to true]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
