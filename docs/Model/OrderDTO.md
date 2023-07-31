# # OrderDTO

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**id** | **int** | Идентификатор заказа. | [optional]
**status** | [**\YandexMarketApi\Model\OrderStatusType**](OrderStatusType.md) |  | [optional]
**substatus** | [**\YandexMarketApi\Model\OrderSubstatusType**](OrderSubstatusType.md) |  | [optional]
**creation_date** | **string** |  | [optional]
**currency** | [**\YandexMarketApi\Model\CurrencyType**](CurrencyType.md) |  | [optional]
**items_total** | **float** | Общая сумма заказа в валюте заказа без учета стоимости доставки и вознаграждения партнеру за скидки по промокодам, купонам и акциям (параметр subsidyTotal).  Для отделения целой части от дробной используется точка. | [optional]
**total** | **float** | Общая сумма заказа в валюте заказа с учетом стоимости доставки, но без учета вознаграждения партнеру за скидки по промокодам, купонам, кешбэку и акциям (параметр &#x60;subsidyTotal&#x60;).  Для отделения целой части от дробной используется точка. | [optional]
**delivery_total** | **float** | Стоимость доставки в валюте заказа. | [optional]
**subsidy_total** | **float** | Общее вознаграждение партнеру за скидки:  * по промокодам; * по купонам; * по баллам кешбэка по подписке Яндекс Плюс; * по акциям.  Передается в валюте, указанной в параметре &#x60;currency&#x60;.  Для отделения целой части от дробной используется точка. | [optional]
**total_with_subsidy** | **float** | Сумма стоимости всех товаров в заказе и вознаграждения за них в валюте магазина (сумма параметров total и subsidyTotal) | [optional]
**buyer_items_total** | **float** | Стоимость всех товаров в заказе в валюте покупателя после применения скидок и без учета стоимости доставки. | [optional]
**buyer_total** | **float** | Стоимость всех товаров в заказе в валюте покупателя после применения скидок и с учетом стоимости доставки. | [optional]
**buyer_items_total_before_discount** | **float** | Стоимость всех товаров в заказе в валюте покупателя до применения скидок и без учета стоимости доставки. | [optional]
**buyer_total_before_discount** | **float** | Стоимость всех товаров в заказе в валюте покупателя до применения скидок и с учетом стоимости доставки. | [optional]
**payment_type** | [**\YandexMarketApi\Model\OrderPaymentType**](OrderPaymentType.md) |  | [optional]
**payment_method** | [**\YandexMarketApi\Model\OrderPaymentMethodType**](OrderPaymentMethodType.md) |  | [optional]
**fake** | **bool** | Тип заказа:  * false — заказ покупателя.  * true — тестовый заказ Маркета. | [optional]
**items** | [**\YandexMarketApi\Model\OrderItemDTO[]**](OrderItemDTO.md) | Список товаров в заказе. | [optional]
**subsidies** | [**\YandexMarketApi\Model\OrderItemSubsidyDTO[]**](OrderItemSubsidyDTO.md) | Список субсидий по типам. | [optional]
**delivery** | [**\YandexMarketApi\Model\OrderDeliveryDTO**](OrderDeliveryDTO.md) |  | [optional]
**buyer** | [**\YandexMarketApi\Model\OrderBuyerDTO**](OrderBuyerDTO.md) |  | [optional]
**notes** | **string** | Комментарий к заказу. | [optional]
**tax_system** | [**\YandexMarketApi\Model\OrderTaxSystemType**](OrderTaxSystemType.md) |  | [optional]
**cancel_requested** | **bool** | Запрошена ли отмена. | [optional]
**expiry_date** | **string** |  | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
