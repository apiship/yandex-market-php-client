# # ParameterValueDTO

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**parameter_id** | **int** | Идентификатор характеристики. |
**unit_id** | **int** | Идентификатор единицы измерения. Если вы не передали параметр &#x60;unitId&#x60;, используется единица измерения по умолчанию. | [optional]
**value_id** | **int** | Идентификатор значения.  Обязательно указывайте идентификатор, если передаете значение из перечня допустимых значений, полученного от Маркета.  Только для характеристик типа &#x60;ENUM&#x60;. | [optional]
**value** | **string** | Значение. | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
