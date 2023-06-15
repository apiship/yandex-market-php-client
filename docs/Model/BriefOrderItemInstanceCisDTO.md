# # BriefOrderItemInstanceCisDTO

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**cis** | **string** | Код «Честного знака» для единицы товара.  Подробно о том, зачем он нужен и как его получить, рассказано в [Справке для продавцов](https://yandex.ru/support/marketplace/orders/cz.html).  {% note warning %}  Не экранируйте косую черту в коде символа-разделителя &#x60;\\u001d&#x60;!  ✅ &#x60;01030410947874432155Qbag!\\u001d93Zjqw&#x60;  ❌ &#x60;01030410947874432155Qbag!\\\\u001d93Zjqw&#x60;  Косые черты и кавычки в других местах экранируйте по правилам JSON: &#x60;\\\\&#x60; и &#x60;\\\&quot;&#x60;  {% endnote %} |

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
