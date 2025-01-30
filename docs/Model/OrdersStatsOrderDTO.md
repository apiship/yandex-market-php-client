# # OrdersStatsOrderDTO

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**id** | **int** | Идентификатор заказа. | [optional]
**creation_date** | **\DateTime** | Дата создания заказа.  Формат даты: &#x60;ГГГГ-ММ-ДД&#x60;. | [optional]
**status_update_date** | **\DateTime** | Дата и время, когда статус заказа был изменен в последний раз.  Формат даты и времени: ISO 8601. Например, &#x60;2017-11-21T00:00:00&#x60;. Часовой пояс — UTC+03:00 (Москва). | [optional]
**status** | [**\YandexMarketApi\Model\OrderStatsStatusType**](OrderStatsStatusType.md) |  | [optional]
**partner_order_id** | **string** | Идентификатор заказа в информационной системе магазина. | [optional]
**payment_type** | [**\YandexMarketApi\Model\OrdersStatsOrderPaymentType**](OrdersStatsOrderPaymentType.md) |  | [optional]
**fake** | **bool** | Тип заказа:  * &#x60;false&#x60; — настоящий заказ покупателя.  * &#x60;true&#x60; — [тестовый](../../concepts/sandbox.md) заказ Маркета. | [optional]
**delivery_region** | [**\YandexMarketApi\Model\OrdersStatsDeliveryRegionDTO**](OrdersStatsDeliveryRegionDTO.md) |  | [optional]
**items** | [**\YandexMarketApi\Model\OrdersStatsItemDTO[]**](OrdersStatsItemDTO.md) | Список товаров в заказе после возможных изменений.  Информация о доставке заказа добавляется отдельным элементом в массиве &#x60;items&#x60;— параметр &#x60;offerName&#x60; со значением &#x60;Доставка&#x60;. |
**initial_items** | [**\YandexMarketApi\Model\OrdersStatsItemDTO[]**](OrdersStatsItemDTO.md) | Список товаров в заказе до изменений. | [optional]
**payments** | [**\YandexMarketApi\Model\OrdersStatsPaymentDTO[]**](OrdersStatsPaymentDTO.md) | Информация о денежных переводах по заказу.  Может вернуться пустым, если нет данных о переводах. |
**commissions** | [**\YandexMarketApi\Model\OrdersStatsCommissionDTO[]**](OrdersStatsCommissionDTO.md) | Информация о комиссиях за заказ. |
**subsidies** | [**\YandexMarketApi\Model\OrdersStatsSubsidyDTO[]**](OrdersStatsSubsidyDTO.md) | Начисление баллов, которые используются для уменьшения стоимости размещения, и их списание в случае возврата или невыкупа. | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
