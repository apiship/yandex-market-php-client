# # PriceDTO

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**value** | **float** | Цена на товар. | [optional]
**discount_base** | **float** | Цена на товар без скидки. | [optional]
**currency_id** | **string** | Валюта, в которой указана цена на товар.  Возможно только значение RUR — российский рубль. | [optional]
**vat** | **int** | Идентификатор ставки НДС, применяемой для товара:  * 2 — 10%. * 5 — 0%. * 6 — не облагается НДС. * 7 — 20%.  Если параметр не указан, используется ставка НДС, установленная в личном кабинете магазина. | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
