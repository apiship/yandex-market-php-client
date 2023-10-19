# # OfferCardDTO

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**offer_id** | **string** | **Ваш SKU**  Идентификатор товара в магазине. Разрешены английские и русские буквы (кроме ё), цифры и символы &#x60;. , / \\ ( ) [ ] - &#x3D; _&#x60;  Максимальная длина — 80 знаков.  [Что такое SKU и как его назначать](https://yandex.ru/support/marketplace/assortment/add/index.html#fields). |
**mapping** | [**\YandexMarketApi\Model\GetMappingDTO**](GetMappingDTO.md) |  | [optional]
**card_status** | [**\YandexMarketApi\Model\OfferCardStatusType**](OfferCardStatusType.md) |  | [optional]
**content_rating** | **int** | Процент заполненности карточки. | [optional]
**recommendations** | [**\YandexMarketApi\Model\OfferCardRecommendationDTO[]**](OfferCardRecommendationDTO.md) | Список рекомендаций к заполнению карточки.  Рекомендации Маркета помогают заполнять карточку так, чтобы покупателям было проще найти ваш товар и решиться на покупку. | [optional]
**errors** | [**\YandexMarketApi\Model\OfferErrorDTO[]**](OfferErrorDTO.md) | Ошибки в контенте, препятствующие размещению товара на витрине. | [optional]
**warnings** | [**\YandexMarketApi\Model\OfferErrorDTO[]**](OfferErrorDTO.md) | Связанные с контентом предупреждения, не препятствующие размещению товара на витрине. | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
