# # AccountingYear

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**from_date** | **string** | The first date in the accounting year in the format YYYY-MM-DD. Except for the first accounting year on an agreement, it must be the date immediately following the previous accounting year, and thus must be the first day of a month. The first accounting year on an agreement can begin on any day of the month. | [optional]
**to_date** | **string** | The last date in the accounting year in the format YYYY-MM-DD. It must be the last date in the last month of the accounting year. An accounting year can at most have a duration of 18 months. | [optional]
**closed** | **bool** | If true this indicates that the accounting year is closed for further transactions. | [optional]
**year** | **string** | The calendar year or years spanned by the accounting year in the format YYYY or YYYY/YYYY. | [optional]
**periods** | **string** | A link to the collection of accounting year periods in the accounting year. | [optional]
**entries** | **string** | A link to a collection of all entries booked in the accounting year. | [optional]
**totals** | **string** | A link to the chart of accounts with the years total in base currency. | [optional]
**vouchers** | **string** | A link to a collection of vouchers created in the accounting year. This requires that international ledger is enabled. | [optional]
**self** | **string** | A unique link reference to the accounting year item. | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
