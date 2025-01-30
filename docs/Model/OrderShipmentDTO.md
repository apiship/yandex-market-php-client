# # OrderShipmentDTO

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**id** | **int** | Идентификатор посылки, присвоенный Маркетом. | [optional]
**shipment_date** | **string** | Формат даты: &#x60;ДД-ММ-ГГГГ&#x60;. | [optional]
**shipment_time** | **string** | **Только для модели Экспресс**  Время, к которому магазин должен упаковать заказ и перевести его в статус &#x60;READY_TO_SHIP&#x60;. После смены статуса за заказом приедет курьер.  Поле может появиться не сразу. Запрашивайте информацию о заказе в течении 5–10 минут, пока оно не вернется.  Формат времени: 24-часовой, &#x60;ЧЧ:ММ&#x60;.  Если заказ сделан организацией, параметр не возвращается до согласования даты доставки. | [optional]
**tracks** | [**\YandexMarketApi\Model\OrderTrackDTO[]**](OrderTrackDTO.md) | **Только для модели DBS**  Информация для отслеживания перемещений посылки. | [optional]
**boxes** | [**\YandexMarketApi\Model\OrderParcelBoxDTO[]**](OrderParcelBoxDTO.md) | Список грузовых мест. | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
