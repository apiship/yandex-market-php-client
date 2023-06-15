# # OutletAddressDTO

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**region_id** | **int** | Идентификатор региона. Идентификатор можно получить c помощью запроса &#x60;GET /regions&#x60;.  {% note alert %}  При создании и редактировании точек продаж можно указывать только регионы типов &#x60;TOWN&#x60; (город), &#x60;CITY&#x60; (крупный город) и &#x60;REPUBLIC_AREA&#x60; (район субъекта федерации). Тип региона указан в выходных параметрах type запросов &#x60;GET /regions&#x60; и &#x60;GET /regions/{regionId}&#x60;.  {% endnote %}  Обязательный параметр. |
**street** | **string** | Улица. | [optional]
**number** | **string** | Номер дома. | [optional]
**building** | **string** | Номер строения. | [optional]
**estate** | **string** | Номер владения. | [optional]
**block** | **string** | Номер корпуса. | [optional]
**additional** | **string** | Дополнительная информация. | [optional]
**km** | **int** | Порядковый номер километра дороги, на котором располагается точка продаж, если отсутствует улица. | [optional]
**city** | **string** | {% note alert %}  Параметр устарел и не рекомендуется к использованию. Город или населенный пункт возвращается в параметре &#x60;regionId&#x60;.  {% endnote %} | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
