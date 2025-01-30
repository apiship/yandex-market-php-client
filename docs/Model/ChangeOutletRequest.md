# # ChangeOutletRequest

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**name** | **string** | Название точки продаж. |
**type** | [**\YandexMarketApi\Model\OutletType**](OutletType.md) |  |
**coords** | **string** | Координаты точки продаж.  Формат: долгота, широта. Разделители: запятая и / или пробел. Например, &#x60;20.4522144, 54.7104264&#x60;.  Если параметр не передан, координаты будут определены по значениям параметров, вложенных в &#x60;address&#x60;. | [optional]
**is_main** | **bool** | Признак основной точки продаж.  Возможные значения:  * &#x60;false&#x60; — неосновная точка продаж. * &#x60;true&#x60; — основная точка продаж. | [optional]
**shop_outlet_code** | **string** | Идентификатор точки продаж, присвоенный магазином. | [optional]
**visibility** | [**\YandexMarketApi\Model\OutletVisibilityType**](OutletVisibilityType.md) |  | [optional]
**address** | [**\YandexMarketApi\Model\OutletAddressDTO**](OutletAddressDTO.md) |  |
**phones** | **string[]** | Номера телефонов точки продаж. Передавайте в формате: &#x60;+7 (999) 999-99-99&#x60;. |
**working_schedule** | [**\YandexMarketApi\Model\OutletWorkingScheduleDTO**](OutletWorkingScheduleDTO.md) |  |
**delivery_rules** | [**\YandexMarketApi\Model\OutletDeliveryRuleDTO[]**](OutletDeliveryRuleDTO.md) | Информация об условиях доставки для данной точки продаж.  Обязательный параметр, если параметр &#x60;type&#x3D;DEPOT&#x60; или &#x60;type&#x3D;MIXED&#x60;. | [optional]
**storage_period** | **int** | Срок хранения заказа в собственном пункте выдачи заказов. Считается в днях. | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
