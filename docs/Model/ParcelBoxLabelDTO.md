# # ParcelBoxLabelDTO

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**url** | **string** | Соответствует URL, по которому выполняется запрос &#x60;GET /campaigns/{campaignId}/orders/{orderId}/delivery/shipments/{shipmentId}/boxes/{boxId}/label&#x60;. |
**supplier_name** | **string** | Юридическое название магазина. |
**delivery_service_name** | **string** | Юридическое название службы доставки. |
**order_id** | **int** | Идентификатор заказа в системе Маркета. |
**order_num** | **string** | Идентификатор заказа в информационной системе магазина.  Совпадает с &#x60;orderId&#x60;, если Маркету неизвестен номер заказа в системе магазина. |
**recipient_name** | **string** | Фамилия и инициалы получателя заказа. |
**fulfilment_id** | **string** | Идентификатор грузового места в информационной системе магазина.  Возвращается в формате: номер заказа на Маркете-номер грузового места. Например, 7206821‑1, 7206821‑2 и т. д. |
**place** | **string** | Номер грузового места в заказе. Возвращается в формате: номер места/общее количество мест. |
**weight** | **string** | Устаревший параметр.  Общая масса всех товаров в заказе. Возвращается в формате: &#39;weight&#39; кг. |
**delivery_service_id** | **string** | Идентификатор службы доставки. |
**delivery_address** | **string** | Адрес получателя. | [optional]
**shipment_date** | **string** | Дата отгрузки в формате dd.MM.yyyy. | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
