# # OfferContentDTO

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**offer_id** | **string** | **Ваш SKU**  Идентификатор товара в магазине. Разрешены английские и русские буквы (кроме ё), цифры и символы &#x60;. , / \\ ( ) [ ] - &#x3D; _&#x60;  Максимальная длина — 80 знаков.  [Что такое SKU и как его назначать](https://yandex.ru/support/marketplace/assortment/add/index.html#fields). |
**category_id** | **int** | Идентификатор категории на Маркете. |
**parameter_values** | [**\YandexMarketApi\Model\ParameterValueDTO[]**](ParameterValueDTO.md) | Список характеристик с их значениями. Обновляется всегда целиком. Максимальное количество - 300. |

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
