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
**due_date** | **string** | The date the invoice is due for payment. Format according to ISO-8601 (YYYY-MM-DD). | [optional]
**departmental_distribution** | [**\EconomicRest\Model\DepartmentalDistributionHandler**](DepartmentalDistributionHandler.md) |  | [optional]
**project** | [**\EconomicRest\Model\ProjectHandler**](ProjectHandler.md) |  | [optional]
**cost_type** | [**\EconomicRest\Model\CostTypeHandler**](CostTypeHandler.md) |  | [optional]
**entry_number** | **int** | The unique identifier of the entry line. | [optional]
**text** | **string** | A short description about the entry. | [optional]
**entry_type** | **string** | The type of entry. | [optional]
**vat_account** | [**\EconomicRest\Model\VatAccountHandler**](VatAccountHandler.md) |  | [optional]
**customer** | [**\EconomicRest\Model\CustomerHandler**](CustomerHandler.md) |  | [optional]
**supplier** | [**\EconomicRest\Model\SupplierHandler**](SupplierHandler.md) |  | [optional]
**unit1** | [**\EconomicRest\Model\UnitHandler**](UnitHandler.md) |  | [optional]
**unit2** | [**\EconomicRest\Model\UnitHandler**](UnitHandler.md) |  | [optional]
**quantity1** | **float** | Requires dimension module. | [optional]
**quantity2** | **float** | Requires dimension module. | [optional]
**voucher_number** | **int** | The identifier of the voucher this entry belongs to. | [optional]
**booked_invoice** | [**\EconomicRest\Model\BookedInvoiceHandler**](BookedInvoiceHandler.md) |  | [optional]
**invoice_number** | **string** | Unique identifier for reminders and invoices. | [optional]
**remainder** | **float** | The remainder on the entry. | [optional]
**remainder_in_base_currency** | **float** | The remainder in base currency on the entry. | [optional]
**payment_details** | [**\EconomicRest\Model\PaymentDetailsHandler**](PaymentDetailsHandler.md) |  | [optional]
**self** | **string** | A unique reference to the entry resource. | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
