# # OrderItemModificationDTO

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**id** | **int** | Идентификатор товара в рамках заказа.  Получить идентификатор можно с помощью ресурсов &#x60;GET /campaigns/{campaignId}/orders&#x60; или &#x60;GET /campaigns/{campaignId}/orders/{orderId}&#x60;.  Обязательный параметр. |
**count** | **int** | Новое количество товара. |
**instances** | [**\YandexMarketApi\Model\BriefOrderItemInstanceDTO[]**](BriefOrderItemInstanceDTO.md) | Информация о маркировке единиц товара.  Передавайте в запросе все единицы товара, который подлежит маркировке.  Обязательный параметр, если в заказе есть товары, подлежащие маркировке в системе «Честный ЗНАК». | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
