# # SupplierPaymentEntry

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**text** | **string** | Entry description. | [optional]
**journal** | [**\EconomicRest\Model\JournalHandler**](JournalHandler.md) |  | [optional]
**amount** | **float** |  | [optional]
**contra_account** | [**\EconomicRest\Model\AccountHandler**](AccountHandler.md) |  | [optional]
**contra_vat_account** | [**\EconomicRest\Model\VatCodeHandler**](VatCodeHandler.md) |  | [optional]
**currency** | [**\EconomicRest\Model\CurrencyHandler**](CurrencyHandler.md) |  | [optional]
**date** | **string** | Entry date. Format according to ISO-8601 (YYYY-MM-DD). | [optional]
**departmental_distribution** | [**\EconomicRest\Model\DepartmentalDistributionHandler**](DepartmentalDistributionHandler.md) |  | [optional]
**exchange_rate** | **float** | The exchange rate between the base currency and the invoice currency. | [optional]
**entry_type** | **string** | Type of the journal entry. This is automatically set to supplierPayment. | [optional]
**voucher** | [**\EconomicRest\Model\VoucherHandler**](VoucherHandler.md) |  | [optional]
**contra_vat_amount** | **float** | The amount of VAT on the entry on the contra account. | [optional]
**contra_vat_amount_in_base_currency** | **float** | The amount of VAT on the entry on the contra account in base currency. | [optional]
**amount_base_currency** | **float** | The amount in base currency. | [optional]
**remainder** | **float** | Remaining amount to be paid. | [optional]
**remainder_in_default_currency** | **float** | Remaining amount to be paid in default currency. | [optional]
**supplier** | [**\EconomicRest\Model\SupplierHandler**](SupplierHandler.md) |  | [optional]
**supplier_invoice_number** | **string** | The unique identifier of the supplier invoice gotten from the supplier. | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
