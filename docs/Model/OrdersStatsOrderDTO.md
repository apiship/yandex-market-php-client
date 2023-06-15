# # OrdersStatsOrderDTO

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**id** | **int** | Идентификатор заказа. | [optional]
**creation_date** | **\DateTime** | Дата создания заказа. Формат даты: &#x60;ГГГГ-ММ-ДД&#x60;. | [optional]
**status_update_date** | **\DateTime** | Дата и время, когда статус заказа был изменен в последний раз. Формат даты и времени: ISO 8601. Например, &#x60;2017-11-21T00:00:00&#x60;. Часовой пояс — UTC+03:00 (Москва). | [optional]
**status** | [**\YandexMarketApi\Model\OrderStatsStatusType**](OrderStatsStatusType.md) |  | [optional]
**partner_order_id** | **string** | Идентификатор заказа в информационной системе магазина. | [optional]
**payment_type** | [**\YandexMarketApi\Model\OrdersStatsOrderPaymentType**](OrdersStatsOrderPaymentType.md) |  | [optional]
**fake** | **bool** | Тип заказа:  * false — заказ покупателя.  * true — тестовый заказ Маркета. | [optional]
**delivery_region** | [**\YandexMarketApi\Model\OrdersStatsDeliveryRegionDTO**](OrdersStatsDeliveryRegionDTO.md) |  | [optional]
**items** | [**\YandexMarketApi\Model\OrdersStatsItemDTO[]**](OrdersStatsItemDTO.md) | Список товаров в заказе после возможных изменений. | [optional]
**initial_items** | [**\YandexMarketApi\Model\OrdersStatsItemDTO[]**](OrdersStatsItemDTO.md) | Список товаров в заказе до изменений. | [optional]
**payments** | [**\YandexMarketApi\Model\OrdersStatsPaymentDTO[]**](OrdersStatsPaymentDTO.md) | Информация о денежных переводах по заказу. | [optional]
**commissions** | [**\YandexMarketApi\Model\OrdersStatsCommissionDTO[]**](OrdersStatsCommissionDTO.md) | Информация о комиссиях за заказ. | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
