# # Period

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**period_number** | **int** | A unique identifier of the period. | [optional]
**accounting_year** | [**\EconomicRest\Model\AccountingYearHandler**](AccountingYearHandler.md) |  | [optional]
**from_date** | **string** | The first date in the period formatted according to ISO-8601(YYYY-MM-DD). | [optional]
**to_date** | **string** | The last date in the period formatted according to ISO-8601(YYYY-MM-DD). | [optional]
**barred** | **bool** | If true this indicates that the accounting period is barred for further transactions. | [optional]
**closed** | **bool** | If true this indicates that the accounting period is with a closed accounting year | [optional]
**entries** | **string** | A link to a collection of all entries booked in the period. | [optional]
**totals** | **string** | A link to the chart of accounts with the periods total in base currency. | [optional]
**self** | **string** | A unique link reference to the period item. | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
