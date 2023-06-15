# # ShipmentInfoDTO

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**id** | **int** | Идентификатор отгрузки. | [optional]
**plan_interval_from** | **\DateTime** | Начало планового интервала отгрузки. | [optional]
**plan_interval_to** | **\DateTime** | Конец планового интервала отгрузки. | [optional]
**shipment_type** | [**\YandexMarketApi\Model\ShipmentType**](ShipmentType.md) |  | [optional]
**external_id** | **string** | Идентификатор отгрузки в вашей системе. Если вы еще не передавали идентификатор, вернется идентификатор из параметра &#x60;id&#x60;. | [optional]
**status** | [**\YandexMarketApi\Model\ShipmentStatusType**](ShipmentStatusType.md) |  | [optional]
**status_description** | **string** | Описание статуса отгрузки. | [optional]
**delivery_service** | [**\YandexMarketApi\Model\DeliveryServiceDTO**](DeliveryServiceDTO.md) |  | [optional]
**draft_count** | **int** | Количество заказов, запланированных к отгрузке. | [optional]
**planned_count** | **int** | Количество отгруженных заказов. | [optional]
**fact_count** | **int** | Количество заказов, принятых в сортировочном центре или пункте приема. | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
