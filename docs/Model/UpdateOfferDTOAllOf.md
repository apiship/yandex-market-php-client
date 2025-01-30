# # UpdateOfferDTOAllOf

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**parameter_values** | [**\YandexMarketApi\Model\ParameterValueDTO[]**](ParameterValueDTO.md) | Список характеристик с их значениями.  С &#x60;parameterValues&#x60; обязательно передавайте &#x60;marketCategoryId&#x60; — идентификатор категории на Маркете, к которой относятся указанные характеристики товара.  При **изменении** характеристик передавайте только те, значение которых нужно обновить. Если в &#x60;marketCategoryId&#x60; вы меняете категорию, значения общих характеристик для старой и новой категории сохранятся, передавать их не нужно.  Чтобы **удалить** значение заданной характеристики, передайте ее &#x60;parameterId&#x60; с пустым &#x60;value&#x60;.  Максимальное количество характеристик — 300. | [optional]
**basic_price** | [**\YandexMarketApi\Model\UpdatePriceWithDiscountDTO**](UpdatePriceWithDiscountDTO.md) |  | [optional]
**purchase_price** | [**\YandexMarketApi\Model\BasePriceDTO**](BasePriceDTO.md) |  | [optional]
**additional_expenses** | [**\YandexMarketApi\Model\BasePriceDTO**](BasePriceDTO.md) |  | [optional]
**cofinance_price** | [**\YandexMarketApi\Model\BasePriceDTO**](BasePriceDTO.md) |  | [optional]
**first_video_as_cover** | **bool** | Использовать первое видео в карточке как видеообложку.  Передайте &#x60;true&#x60;, чтобы первое видео использовалось как видеообложка, или &#x60;false&#x60;, чтобы видеообложка не отображалась в карточке товара. | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
