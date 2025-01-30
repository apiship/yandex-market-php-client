# # CampaignSettingsScheduleDTO

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**available_on_holidays** | **bool** | Признак работы службы доставки в государственные праздники. Возможные значения. * &#x60;false&#x60; — служба доставки не работает в праздничные дни. * &#x60;true&#x60; — служба доставки работает в праздничные дни. | [optional]
**custom_holidays** | **string[]** | Список дней, в которые служба доставки не работает. Дни магазин указал в кабинете продавца на Маркете. |
**custom_working_days** | **string[]** | Список выходных и праздничных дней, в которые служба доставки работает. Дни магазин указал в кабинете продавца на Маркете. |
**period** | [**\YandexMarketApi\Model\CampaignSettingsTimePeriodDTO**](CampaignSettingsTimePeriodDTO.md) |  | [optional]
**total_holidays** | **string[]** | Итоговый список нерабочих дней службы доставки. Список рассчитывается с учетом выходных, нерабочих дней и государственных праздников. Информацию по ним магазин указывает в кабинете продавца на Маркете. |
**weekly_holidays** | **int[]** | Список выходных дней недели и государственных праздников. |

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
