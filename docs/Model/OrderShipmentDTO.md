# # OrderShipmentDTO

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**id** | **int** | Идентификатор посылки, присвоенный Маркетом. | [optional]
**status** | [**\YandexMarketApi\Model\OrderParcelStatusType**](OrderParcelStatusType.md) |  | [optional]
**shipment_date** | **string** | Формат даты: &#x60;ДД-ММ-ГГГГ&#x60;. | [optional]
**shipment_time** | **string** | Время, когда нужно отгрузить заказы службе доставки.  Формат времени: 24-часовой, &#x60;ЧЧ:ММ&#x60;.  Если заказ сделан организацией, параметр не возвращается до согласования даты доставки. | [optional]
**tracks** | [**\YandexMarketApi\Model\OrderTrackDTO[]**](OrderTrackDTO.md) | Информация для отслеживания перемещений посылки. | [optional]
**boxes** | [**\YandexMarketApi\Model\OrderParcelBoxDTO[]**](OrderParcelBoxDTO.md) | Список грузовых мест. | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
