# # CampaignSettingsDTO

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**country_region** | **int** | Идентификатор региона, в котором находится магазин. | [optional]
**shop_name** | **string** | Наименование магазина на Яндекс Маркете. Если наименование отсутствует, значение параметра выводится — &#x60;null&#x60;. | [optional]
**show_in_context** | **bool** | Признак размещения магазина на сайтах партнеров Яндекс Дистрибуции. Возможные значения: * &#x60;false&#x60; — магазин не размещен на сайтах партнеров Яндекс Дистрибуции. * &#x60;true&#x60; — магазин размещен на сайтах партнеров Яндекс Дистрибуции. | [optional]
**show_in_premium** | **bool** | Признак показа предложений магазина в рекламном блоке над результатами поиска (cпецразмещение). Возможные значения: * &#x60;false&#x60; — предложения не показываются в блоке cпецразмещения. * &#x60;true&#x60; — предложения показываются в блоке cпецразмещения. | [optional]
**use_open_stat** | **bool** | Признак использования внешней интернет-статистики. Возможные значения: * &#x60;false&#x60; — внешняя интернет-статистика не используется. * &#x60;true&#x60; — внешняя интернет-статистика используется. | [optional]
**local_region** | [**\YandexMarketApi\Model\CampaignSettingsLocalRegionDTO**](CampaignSettingsLocalRegionDTO.md) |  | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
