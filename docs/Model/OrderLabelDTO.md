# # OrderLabelDTO

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**order_id** | **int** | Идентификатор заказа. |
**places_number** | **int** | Количество грузовых мест в заказе. |
**url** | **string** | URL файла с ярлыками‑наклейками на все грузовые места в заказе.  Соответствует URL, по которому выполняется запрос &#x60;GET /campaigns/{campaignId}/orders/{orderId}/delivery/labels&#x60;. | [optional]
**parcel_box_labels** | [**\YandexMarketApi\Model\ParcelBoxLabelDTO[]**](ParcelBoxLabelDTO.md) | Информация на ярлыке. |

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
