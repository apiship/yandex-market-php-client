# # StockDTO

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**sku** | **string** | **Ваш SKU**  Идентификатор товара в магазине. Разрешены английские и русские буквы (кроме ё), цифры и символы &#x60;. , / \\ ( ) [ ] - &#x3D; _&#x60;  Максимальная длина — 80 знаков.  [Что такое SKU и как его назначать](https://yandex.ru/support/marketplace/assortment/add/index.html#fields). |
**warehouse_id** | **int** | Идентификатор склада.  Узнать идентификатор склада вы можете в личном кабинете в разделе **Логистика → Склады**. Он указан в поле ID склада.  Если вы работаете с общими остатками, вы можете посмотреть идентификатор склада в личном кабинете в разделе **Настройки → Настройки API** в блоке **Обновление данных об остатках товаров** или с помощью запроса [GET businesses/{businessId}/warehouses](../../reference/warehouses/getWarehouses.md).  Если вы отвечаете на запрос Маркета, указывайте тот идентификатор, что пришел в запросе. |
**items** | [**\YandexMarketApi\Model\StockItemDTO[]**](StockItemDTO.md) | Информация об остатках товара на данном складе. |

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
