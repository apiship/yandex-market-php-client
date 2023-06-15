# # BriefOrderItemCisDTO

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**id** | **int** | Идентификатор позиции. | [optional]
**vat** | [**\YandexMarketApi\Model\OrderVatType**](OrderVatType.md) |  | [optional]
**count** | **int** | Количество единиц товара. | [optional]
**price** | **float** | Цена на товар. Указана в той валюте, которая была задана в каталоге. Разделитель целой и дробной части — точка. | [optional]
**feed_id** | **int** | Идентификатор каталога, в котором указан товар. | [optional]
**feed_category_id** | **string** | Идентификатор категории, в которую входит товар. | [optional]
**offer_name** | **string** | Название товара. | [optional]
**offer_id** | **string** | **Ваш SKU**  Идентификатор товара в магазине. Разрешены английские и русские буквы (кроме ё), цифры и символы &#x60;. , / \\ ( ) [ ] - &#x3D; _&#x60;  Максимальная длина — 80 знаков.  [Что такое SKU и как его назначать](https://yandex.ru/support/marketplace/assortment/add/index.html#fields). | [optional]
**instances** | [**\YandexMarketApi\Model\OrderItemInstanceCisDTO[]**](OrderItemInstanceCisDTO.md) | Переданные вами коды маркировки. | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
