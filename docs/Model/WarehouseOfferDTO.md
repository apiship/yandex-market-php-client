# # WarehouseOfferDTO

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**offer_id** | **string** | **Ваш SKU**  Идентификатор товара в магазине. Разрешены английские и русские буквы (кроме ё), цифры и символы &#x60;. , / \\ ( ) [ ] - &#x3D; _&#x60;  Максимальная длина — 80 знаков.  [Что такое SKU и как его назначать](https://yandex.ru/support/marketplace/assortment/add/index.html#fields). |
**turnover_summary** | [**\YandexMarketApi\Model\TurnoverDTO**](TurnoverDTO.md) |  | [optional]
**stocks** | [**\YandexMarketApi\Model\WarehouseStockDTO[]**](WarehouseStockDTO.md) | Информация об остатках. |
**updated_at** | **\DateTime** | Дата и время последнего обновления информации об остатках.  Формат даты и времени: ISO 8601 со смещением относительно UTC. Например, &#x60;2023-11-21T00:42:42+03:00&#x60;. |

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
