# # JournalEntry

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**account** | [**\EconomicRest\Model\AccountHandler**](AccountHandler.md) |  | [optional]
**templates** | [**\EconomicRest\Model\JournalEntryTemplateHandler**](JournalEntryTemplateHandler.md) |  | [optional]
**journal** | [**\EconomicRest\Model\JournalHandler**](JournalHandler.md) |  | [optional]
**customer** | [**\EconomicRest\Model\CustomerHandler**](CustomerHandler.md) |  | [optional]
**customer_invoice** | **int** | Customer invoice number. | [optional]
**supplier** | [**\EconomicRest\Model\SupplierHandler**](SupplierHandler.md) |  | [optional]
**supplier_invoice_number** | **string** | The unique identifier of the supplier invoice gotten from the supplier. | [optional]
**payment_details** | [**\EconomicRest\Model\PaymentDetailsHandler**](PaymentDetailsHandler.md) |  | [optional]
**due_date** | **string** | The date the entry is due for payment. Format according to ISO-8601 (YYYY-MM-DD). | [optional]
**text** | **string** | Text on the entry | [optional]
**amount** | **float** |  | [optional]
**contra_account** | [**\EconomicRest\Model\ContraAccountHandler**](ContraAccountHandler.md) |  | [optional]
**contra_vat_account** | [**\EconomicRest\Model\ContraVatAccountHandler**](ContraVatAccountHandler.md) |  | [optional]
**contra_vat_amount** | **float** | The amount of VAT on the entry on the contra account. | [optional]
**contra_vat_amount_in_base_currency** | **float** | The amount of VAT on the entry on the contra account in base currency. | [optional]
**cost_type** | [**\EconomicRest\Model\CostTypeHandler**](CostTypeHandler.md) |  | [optional]
**currency** | [**\EconomicRest\Model\CurrencyHandler**](CurrencyHandler.md) |  | [optional]
**date** | **string** | Entry date. Format according to ISO-8601 (YYYY-MM-DD). | [optional]
**departmental_distribution** | [**\EconomicRest\Model\DepartmentalDistributionHandler**](DepartmentalDistributionHandler.md) |  | [optional]
**employee** | [**\EconomicRest\Model\EmployeeHandler**](EmployeeHandler.md) |  | [optional]
**exchange_rate** | **float** | The exchange rate between the base currency and the invoice currency. | [optional]
**entry_type** | **string** | Entry type of the entry. | [optional]
**voucher** | [**\EconomicRest\Model\VoucherHandler**](VoucherHandler.md) |  | [optional]
**project** | [**\EconomicRest\Model\ProjectHandler**](ProjectHandler.md) |  | [optional]
**amount_default_currency** | **float** | The amount of VAT on the entry on the contra account in base currency. | [optional]
**remainder** | **float** | Remaining amount to be paid. | [optional]
**remainder_in_default_currency** | **float** | Remaining amount to be paid in default currency. | [optional]
**journal_entry_number** | **int** | Unique journal number | [optional]
**quantity1** | **float** | Requires dimension module. | [optional]
**quantity2** | **float** | Requires dimension module. | [optional]
**unit1** | [**\EconomicRest\Model\UnitHandler**](UnitHandler.md) |  | [optional]
**unit2** | [**\EconomicRest\Model\UnitHandler**](UnitHandler.md) |  | [optional]
**self** | **string** | A unique link reference to the entry. | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
