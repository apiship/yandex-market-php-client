# # UpdateCampaignOfferDTO

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**offer_id** | **string** | **Ваш SKU**  Идентификатор товара в магазине. Разрешены английские и русские буквы (кроме ё), цифры и символы &#x60;. , / \\ ( ) [ ] - &#x3D; _&#x60;  Максимальная длина — 80 знаков.  [Что такое SKU и как его назначать](https://yandex.ru/support/marketplace/assortment/add/index.html#fields). |
**quantum** | [**\YandexMarketApi\Model\QuantumDTO**](QuantumDTO.md) |  | [optional]
**available** | **bool** | Есть ли товар в продаже. | [optional]
**vat** | **int** | Ставка НДС, применяемая для товара. Задается цифрой:  * 2 — 10%. * 5 — 0%. * 6 — не облагается НДС. * 7 — 20%.  Если параметр не указан, используется ставка НДС, установленная в личном кабинете магазина. | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
