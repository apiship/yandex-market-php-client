# # OrderBuyerInfoDTO

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**id** | **string** | Идентификатор покупателя. | [optional]
**last_name** | **string** | Фамилия покупателя. | [optional]
**first_name** | **string** | Имя покупателя. | [optional]
**middle_name** | **string** | Отчество покупателя. | [optional]
**type** | [**\YandexMarketApi\Model\OrderBuyerType**](OrderBuyerType.md) |  |
**phone** | **string** | Подменный номер телефона покупателя. Подробнее о таких номерах читайте [в Справке Маркета для продавцов](https://yandex.ru/support2/marketplace/ru/orders/dbs/call#fake-number).  Формат номера: &#x60;+&lt;код_страны&gt;&lt;код_региона&gt;&lt;номер_телефона&gt;&#x60;. | [optional]
**trusted** | **bool** | Проверенный покупатель.  Если параметр &#x60;trusted&#x60; вернулся со значением &#x60;true&#x60;, Маркет уже проверил покупателя — не звоните ему. Обработайте заказ как обычно и передайте его курьеру или отвезите в ПВЗ.  При необходимости свяжитесь с покупателем в чате. [Как это сделать](../../step-by-step/chats.md)  Подробнее о звонках покупателю читайте [в Справке Маркета для продавцов](https://yandex.ru/support/marketplace/ru/orders/dbs/call). | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
