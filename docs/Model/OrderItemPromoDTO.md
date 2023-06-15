# # OrderItemPromoDTO

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**type** | [**\YandexMarketApi\Model\OrderPromoType**](OrderPromoType.md) |  |
**discount** | **float** | Размер пользовательской скидки в валюте покупателя. | [optional]
**subsidy** | **float** | Вознаграждение партнеру за скидку.  Передается в валюте заказа, для отделения целой части от дробной используется точка. | [optional]
**shop_promo_id** | **string** | Идентификатор акции поставщика. | [optional]
**market_promo_id** | **string** | Идентификатор акции в рамках соглашения на оказание услуг по продвижению сервиса между маркетплейсом Яндекс Маркета и партнером.  Параметр передается, только если параметр &#x60;type&#x3D;MARKET_DEAL&#x60;. | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
