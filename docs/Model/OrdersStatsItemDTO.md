# # OrdersStatsItemDTO

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**offer_name** | **string** | Название товара. | [optional]
**market_sku** | **int** | SKU на Маркете. | [optional]
**shop_sku** | **string** | **Ваш SKU**  Идентификатор товара в магазине. Разрешены английские и русские буквы (кроме ё), цифры и символы &#x60;. , / \\ ( ) [ ] - &#x3D; _&#x60;  Максимальная длина — 80 знаков.  [Что такое SKU и как его назначать](https://yandex.ru/support/marketplace/assortment/add/index.html#fields). | [optional]
**count** | **int** | Количество единиц товара с учетом удаленных единиц.  Если из заказа удалены все единицы товара, он попадет только в список &#x60;initialItems&#x60;. | [optional]
**prices** | [**\YandexMarketApi\Model\OrdersStatsPriceDTO[]**](OrdersStatsPriceDTO.md) | Цена или скидки на товар. | [optional]
**warehouse** | [**\YandexMarketApi\Model\OrdersStatsWarehouseDTO**](OrdersStatsWarehouseDTO.md) |  | [optional]
**details** | [**\YandexMarketApi\Model\OrdersStatsDetailsDTO[]**](OrdersStatsDetailsDTO.md) | Информация об удалении товара из заказа. | [optional]
**cis_list** | **string[]** | Список кодов идентификации товара в системе «Честный ЗНАК». | [optional]
**initial_count** | **int** | Первоначальное количество единиц товара. | [optional]
**bid_fee** | **int** | Списанная ставка ближайшего конкурента.  Указывается в процентах от стоимости товара и умножается на 100. Например, ставка 5% обозначается как 500. | [optional]
**cofinance_threshold** | **float** | Порог для скидок с Маркетом на момент оформления заказа. [Что это такое?](https://yandex.ru/support/marketplace/marketing/smart-pricing.html#sponsored-discounts)  Указан в рублях. Точность — два знака после запятой. | [optional]
**cofinance_value** | **float** | Скидка с Маркетом. [Что это такое?](https://yandex.ru/support/marketplace/marketing/smart-pricing.html#sponsored-discounts)  Указана в рублях. Точность — два знака после запятой. | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
