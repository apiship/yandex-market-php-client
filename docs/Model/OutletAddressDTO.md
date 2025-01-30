# # OutletAddressDTO

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**region_id** | **int** | Идентификатор региона.  Идентификатор можно получить c помощью запроса [GET regions](../../reference/regions/searchRegionsByName.md).  {% note alert \&quot;Типы регионов при создании и редактировании точек продаж\&quot; %}  Указывайте только регионы типов &#x60;TOWN&#x60; (город), &#x60;CITY&#x60; (крупный город) и &#x60;REPUBLIC_AREA&#x60; (район субъекта федерации). Тип региона указан в выходных параметрах &#x60;type&#x60; запросов [GET regions](../../reference/regions/searchRegionsByName.md) и [GET regions/{regionId}](../../reference/regions/searchRegionsById.md).  {% endnote %} |
**street** | **string** | Улица. | [optional]
**number** | **string** | Номер дома. | [optional]
**building** | **string** | Номер строения. | [optional]
**estate** | **string** | Номер владения. | [optional]
**block** | **string** | Номер корпуса. | [optional]
**additional** | **string** | Дополнительная информация. | [optional]
**km** | **int** | Порядковый номер километра дороги, на котором располагается точка продаж, если отсутствует улица. | [optional]
**city** | **string** | {% note warning \&quot;Этот параметр устарел\&quot; %}  Не используйте его.  В ответах города и населенные пункты возвращаются в параметре &#x60;regionId&#x60;.  {% endnote %} | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
