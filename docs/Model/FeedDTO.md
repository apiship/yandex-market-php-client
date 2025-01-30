# # FeedDTO

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**id** | **int** | Идентификатор прайс-листа. | [optional]
**login** | **string** | Логин для авторизации при скачивании прайс-листа. Параметр выводится при размещении прайс-листа на сайте магазина и в случае ограничения доступа к нему. | [optional]
**name** | **string** | Имя файла, содержащего прайс-лист. Параметр выводится при размещении прайс-листа на сервере Маркета. | [optional]
**password** | **string** | Пароль для авторизации при скачивании прайс-листа. Параметр выводится при размещении прайс-листа на сайте магазина и в случае ограничения доступа к нему. | [optional]
**upload_date** | **\DateTime** | Дата загрузки прайс-листа на Маркет.  Формат даты: &#x60;ДД-ММ-ГГГГ&#x60;.  Параметр выводится при размещении прайс-листа на сервере Маркета. | [optional]
**url** | **string** | URL прайс-листа. Параметр выводится при размещении прайс-листа на сайте магазина. | [optional]
**content** | [**\YandexMarketApi\Model\FeedContentDTO**](FeedContentDTO.md) |  | [optional]
**download** | [**\YandexMarketApi\Model\FeedDownloadDTO**](FeedDownloadDTO.md) |  | [optional]
**placement** | [**\YandexMarketApi\Model\FeedPlacementDTO**](FeedPlacementDTO.md) |  | [optional]
**publication** | [**\YandexMarketApi\Model\FeedPublicationDTO**](FeedPublicationDTO.md) |  | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
