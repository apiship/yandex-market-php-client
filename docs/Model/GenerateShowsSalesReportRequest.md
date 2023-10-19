# # GenerateShowsSalesReportRequest

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**business_id** | **int** | Идентификатор бизнеса.   Указывается, если нужно составить отчет по всем магазинам бизнеса. В запросе обязательно должен быть либо &#x60;businessID&#x60;, либо &#x60;campaignId&#x60;, но не оба сразу. | [optional]
**campaign_id** | **int** | Идентификатор кампании.   Указывается, если нужно составить отчет по конкретному магазину. В запросе обязательно должен быть либо &#x60;businessID&#x60;, либо &#x60;campaignId&#x60;, но не оба сразу. | [optional]
**date_from** | **\DateTime** | Начало периода, включительно. |
**date_to** | **\DateTime** | Конец периода, включительно. |
**grouping** | [**\YandexMarketApi\Model\ShowsSalesGroupingType**](ShowsSalesGroupingType.md) |  |

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
