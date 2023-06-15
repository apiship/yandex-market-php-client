# # ReturnItemDTO

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**market_sku** | **int** | SKU на Маркете. | [optional]
**shop_sku** | **string** | **Ваш SKU**  Идентификатор товара в магазине. Разрешены английские и русские буквы (кроме ё), цифры и символы &#x60;. , / \\ ( ) [ ] - &#x3D; _&#x60;  Максимальная длина — 80 знаков.  [Что такое SKU и как его назначать](https://yandex.ru/support/marketplace/assortment/add/index.html#fields). |
**count** | **int** | Количество товаров. |
**decisions** | [**\YandexMarketApi\Model\ReturnDecisionDTO[]**](ReturnDecisionDTO.md) | Список решений по возврату. | [optional]
**instances** | [**\YandexMarketApi\Model\ReturnInstanceDTO[]**](ReturnInstanceDTO.md) | Список логистических позиций возврата. | [optional]
**tracks** | [**\YandexMarketApi\Model\TrackDTO[]**](TrackDTO.md) | Список трек-кодов для почтовых отправлений. | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
