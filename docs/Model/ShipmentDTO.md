# # ShipmentDTO

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**id** | **int** | Идентификатор отгрузки. | [optional]
**plan_interval_from** | **\DateTime** | Начало планового интервала отгрузки. | [optional]
**plan_interval_to** | **\DateTime** | Конец планового интервала отгрузки. | [optional]
**shipment_type** | [**\YandexMarketApi\Model\ShipmentType**](ShipmentType.md) |  | [optional]
**warehouse** | [**\YandexMarketApi\Model\PartnerShipmentWarehouseDTO**](PartnerShipmentWarehouseDTO.md) |  | [optional]
**warehouse_to** | [**\YandexMarketApi\Model\PartnerShipmentWarehouseDTO**](PartnerShipmentWarehouseDTO.md) |  | [optional]
**delivery_service** | [**\YandexMarketApi\Model\DeliveryServiceDTO**](DeliveryServiceDTO.md) |  | [optional]
**pallets_count** | [**\YandexMarketApi\Model\PalletsCountDTO**](PalletsCountDTO.md) |  | [optional]
**current_status** | [**\YandexMarketApi\Model\ShipmentStatusChangeDTO**](ShipmentStatusChangeDTO.md) |  | [optional]
**order_ids** | **int[]** | Идентификаторы заказов в отгрузке. | [optional]
**available_actions** | [**\YandexMarketApi\Model\ShipmentActionType[]**](ShipmentActionType.md) | Доступные действия над отгрузкой. | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
