# # OrderItemDTO

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**id** | **int** | Идентификатор товара в заказе. | [optional]
**feed_id** | **int** | Идентификатор каталога товаров. | [optional]
**offer_id** | **string** | **Ваш SKU**  Идентификатор товара в магазине. Разрешены английские и русские буквы (кроме ё), цифры и символы &#x60;. , / \\ ( ) [ ] - &#x3D; _&#x60;  Максимальная длина — 80 знаков.  [Что такое SKU и как его назначать](https://yandex.ru/support/marketplace/assortment/add/index.html#fields). | [optional]
**feed_category_id** | **string** | Идентификатор категории, указанный в каталоге. | [optional]
**offer_name** | **string** | Название товара. | [optional]
**price** | **float** | Цена товара в валюте заказа без учета вознаграждения партнеру за скидки по промокодам, купонам и акциям (параметр &#x60;subsidy&#x60;).  Для отделения целой части от дробной используется точка. | [optional]
**buyer_price** | **float** | Цена товара в валюте покупателя. В цене уже учтены скидки по:  * акциям; * купонам; * промокодам.  Для отделения целой части от дробной используется точка. | [optional]
**buyer_price_before_discount** | **float** | Стоимость товара в валюте покупателя до применения скидок.  Для отделения целой части от дробной используется точка. | [optional]
**price_before_discount** | **float** | Стоимость товара в валюте магазина до применения скидок.  Для отделения целой части от дробной используется точка. | [optional]
**count** | **int** | Количество товара. | [optional]
**vat** | [**\YandexMarketApi\Model\OrderVatType**](OrderVatType.md) |  | [optional]
**shop_sku** | **string** | **Ваш SKU**  Идентификатор товара в магазине. Разрешены английские и русские буквы (кроме ё), цифры и символы &#x60;. , / \\ ( ) [ ] - &#x3D; _&#x60;  Максимальная длина — 80 знаков.  [Что такое SKU и как его назначать](https://yandex.ru/support/marketplace/assortment/add/index.html#fields). | [optional]
**subsidy** | **float** | Общее вознаграждение партнеру за все скидки на товар:  * по промокодам; * по купонам; * по баллам кешбэка по подписке Яндекс Плюс; * по акциям.  Передается в валюте заказа, для отделения целой части от дробной используется точка. | [optional]
**partner_warehouse_id** | **string** | Идентификатор склада в системе партнера, на который сформирован заказ.  {% note alert %}  Параметр устарел, временно поддерживается, но не доступен для ввода и редактирования.  {% endnote %} | [optional]
**promos** | [**\YandexMarketApi\Model\OrderItemPromoDTO[]**](OrderItemPromoDTO.md) | Информация о вознаграждениях партнеру за скидки на товар по промокодам, купонам и акциям. | [optional]
**instances** | [**\YandexMarketApi\Model\OrderItemInstanceDTO[]**](OrderItemInstanceDTO.md) | Информация о маркировке единиц товара.  Возвращаются данные для маркировки, переданные в запросе &#x60;PUT /campaigns/{campaignId}/orders/{orderId}/cis&#x60;.  Если магазин еще не передавал коды для этого заказа, &#x60;instances&#x60; отсутствует. | [optional]
**details** | [**\YandexMarketApi\Model\OrderItemDetailDTO[]**](OrderItemDetailDTO.md) | Информация об удалении товара из заказа. | [optional]
**subsidies** | [**\YandexMarketApi\Model\OrderItemSubsidyDTO[]**](OrderItemSubsidyDTO.md) | Список субсидий по типам. | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
