# # OrderDigitalItemDTO

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**id** | **int** | Идентификатор товара в заказе.  Он приходит в ответе на запрос [GET campaigns/{campaignId}/orders/{orderId}](../../reference/orders/getOrder.md) — параметр &#x60;id&#x60; в &#x60;items&#x60;. |
**code** | **string** | {% note warning \&quot;Этот параметр устарел\&quot; %}  Вместо него используйте &#x60;codes&#x60;. Совместное использование обоих параметров приведет к ошибке.  {% endnote %}  Сам ключ. | [optional]
**codes** | **string[]** | Ключи, относящиеся к товару. | [optional]
**slip** | **string** | Инструкция по активации. |
**activate_till** | **\DateTime** | Дата, до которой нужно активировать ключи. Если ключи действуют бессрочно, укажите любую дату в отдаленном будущем.  Формат даты: &#x60;ГГГГ-ММ-ДД&#x60;. |

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
