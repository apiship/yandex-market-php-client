# # ReturnItemDTO

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**market_sku** | **int** | SKU на Маркете. | [optional]
**shop_sku** | **string** | Ваш SKU — идентификатор товара в вашей системе.  Правила использования SKU:  * У каждого товара SKU должен быть свой.  * Уже заданный SKU нельзя освободить и использовать заново для другого товара. Каждый товар должен получать новый идентификатор, до того никогда не использовавшийся в вашем каталоге.  SKU товара можно изменить в кабинете продавца на Маркете. О том, как это сделать, читайте [в Справке Маркета для продавцов](https://yandex.ru/support2/marketplace/ru/assortment/operations/edit-sku).  [Что такое SKU и как его назначать](https://yandex.ru/support/marketplace/assortment/add/index.html#fields) |
**count** | **int** | Количество единиц товара. |
**decisions** | [**\YandexMarketApi\Model\ReturnDecisionDTO[]**](ReturnDecisionDTO.md) | Список решений по возврату. | [optional]
**instances** | [**\YandexMarketApi\Model\ReturnInstanceDTO[]**](ReturnInstanceDTO.md) | Список логистических позиций возврата. | [optional]
**tracks** | [**\YandexMarketApi\Model\TrackDTO[]**](TrackDTO.md) | Список трек-кодов для почтовых отправлений. | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
