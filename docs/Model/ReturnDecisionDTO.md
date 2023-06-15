# # ReturnDecisionDTO

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**return_item_id** | **int** | Идентификатор товара в возврате. | [optional]
**count** | **int** | Количество товаров. | [optional]
**comment** | **string** | Комментарий. | [optional]
**reason_type** | [**\YandexMarketApi\Model\ReturnDecisionReasonType**](ReturnDecisionReasonType.md) |  | [optional]
**subreason_type** | [**\YandexMarketApi\Model\ReturnDecisionSubreasonType**](ReturnDecisionSubreasonType.md) |  | [optional]
**decision_type** | [**\YandexMarketApi\Model\ReturnDecisionType**](ReturnDecisionType.md) |  | [optional]
**refund_amount** | **int** | Сумма возврата. | [optional]
**partner_compensation** | **int** | Компенсация за обратную доставку. | [optional]
**images** | **string[]** | Список хеш-кодов фотографий товара от покупателя. | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
