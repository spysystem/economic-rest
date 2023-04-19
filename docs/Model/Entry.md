# # Entry

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**account** | [**\EconomicRest\Model\AccountHandler**](AccountHandler.md) |  | [optional]
**amount** | **float** | The total entry amount. | [optional]
**supplier_invoice_number** | **string** | A unique identifier of the supplier invoice. | [optional]
**amount_in_base_currency** | **float** | The total entry amount in base currency. | [optional]
**currency** | **string** | The ISO 4217 currency code of the entry. | [optional]
**date** | **string** | Entry issue date. The date is formatted according to ISO-8601(YYYY-MM-DD). | [optional]
**entry_number** | **int** | The unique identifier of the entry line. | [optional]
**text** | **string** | A short description about the entry. | [optional]
**entry_type** | **string** | The type of entry. | [optional]
**voucher_number** | **int** | The identifier of the voucher this entry belongs to. | [optional]
**self** | **string** | A unique reference to the entry resource. | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
