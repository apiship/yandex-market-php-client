# # OrdersStatsPaymentDTO

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**id** | **string** | Идентификатор денежного перевода. | [optional]
**date** | **\DateTime** | Дата денежного перевода.  Формат даты: &#x60;ГГГГ-ММ-ДД&#x60;. | [optional]
**type** | [**\YandexMarketApi\Model\OrdersStatsPaymentType**](OrdersStatsPaymentType.md) |  | [optional]
**source** | [**\YandexMarketApi\Model\OrdersStatsPaymentSourceType**](OrdersStatsPaymentSourceType.md) |  | [optional]
**total** | **float** | Сумма денежного перевода. Значение указывается в рублях независимо от способа денежного перевода. Точность — два знака после запятой. | [optional]
**payment_order** | [**\YandexMarketApi\Model\OrdersStatsPaymentOrderDTO**](OrdersStatsPaymentOrderDTO.md) |  | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
