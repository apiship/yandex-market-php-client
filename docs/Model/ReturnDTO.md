# # ReturnDTO

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**id** | **int** | Идентификатор возврата. | [optional]
**order_id** | **int** | Номер заказа. | [optional]
**creation_date** | **\DateTime** | Дата создания возврата клиентом. | [optional]
**update_date** | **\DateTime** | Дата обновления заказа. | [optional]
**refund_status** | [**\YandexMarketApi\Model\RefundStatusType**](RefundStatusType.md) |  | [optional]
**logistic_pickup_point** | [**\YandexMarketApi\Model\LogisticPickupPointDTO**](LogisticPickupPointDTO.md) |  | [optional]
**shipment_recipient_type** | [**\YandexMarketApi\Model\RecipientType**](RecipientType.md) |  | [optional]
**shipment_status** | [**\YandexMarketApi\Model\ReturnShipmentStatusType**](ReturnShipmentStatusType.md) |  | [optional]
**refund_amount** | **int** | Сумма возврата. | [optional]
**items** | [**\YandexMarketApi\Model\ReturnItemDTO[]**](ReturnItemDTO.md) | Список товаров в возврате. | [optional]
**return_type** | [**\YandexMarketApi\Model\ReturnType**](ReturnType.md) |  | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
