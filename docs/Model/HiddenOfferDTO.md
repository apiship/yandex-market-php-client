# # HiddenOfferDTO

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**feed_id** | **int** |  | [optional]
**offer_id** | **string** | **Ваш SKU**  Идентификатор товара в магазине. Разрешены английские и русские буквы (кроме ё), цифры и символы &#x60;. , / \\ ( ) [ ] - &#x3D; _&#x60;  Максимальная длина — 80 знаков.  [Что такое SKU и как его назначать](https://yandex.ru/support/marketplace/assortment/add/index.html#fields). | [optional]
**ttl_in_hours** | **int** | Количество часов до возобновления показа товара.  Минимальное значение — &#x60;1&#x60;.  Максимальное значение — &#x60;720&#x60;.  Значение по умолчанию — &#x60;48&#x60;.  Используется только совместно с параметром &#x60;priority&#x3D;\&quot;true\&quot;&#x60;. | [optional]
**comment** | **string** | Комментарий магазина.  Максимальная длина комментария — 100 символов.  Используется только совместно с параметром &#x60;priority&#x3D;\&quot;true\&quot;&#x60;. Если скрытие было без приоритета, комментарий не вернется в ответе. | [optional]
**market_sku** | **int** | SKU на Маркете. | [optional]
**priority** | **bool** | Приоритет скрытия предложений через API над скрытием в личном кабинете. Параметр принимает только значение true. | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
