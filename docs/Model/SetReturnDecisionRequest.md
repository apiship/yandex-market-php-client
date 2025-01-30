# # SetReturnDecisionRequest

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**return_item_id** | **int** | Идентификатор товара в возврате. |
**decision_type** | [**\YandexMarketApi\Model\ReturnRequestDecisionType**](ReturnRequestDecisionType.md) |  |
**comment** | **string** | Комментарий к решению. Укажите:  * для &#x60;REFUND_MONEY_INCLUDING_SHIPMENT&#x60;— стоимость обратной пересылки.  * для &#x60;REPAIR&#x60; — когда вы устраните недостатки товара.  * для &#x60;DECLINE_REFUND&#x60; — причину отказа.  * для &#x60;OTHER_DECISION&#x60; — какое решение вы предлагаете. | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
