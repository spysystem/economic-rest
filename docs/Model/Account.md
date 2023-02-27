# # Account

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**account_number** | **int** | The account&#39;s number. | [optional]
**account_type** | **string** | The type of account in the chart of accounts. | [optional] [default to 'profitAndLoss']
**balance** | **float** | The current balance of the account. | [optional]
**draft_balance** | **float** | The current balance of the account including draft (not yet booked) entries. | [optional]
**barred** | **bool** | Shows if the account is barred from being used. | [optional]
**block_direct_entries** | **bool** | Determines if the account can be manually updated with entries. | [optional]
**contra_account** | [**\EconomicRest\Model\AccountHandler**](AccountHandler.md) |  | [optional]
**debit_credit** | **string** | Describes the default update type of the account. | [optional] [default to 'debit']
**name** | **string** | The name of the account. | [optional]
**vat_account** | [**\EconomicRest\Model\VatCodeHandler**](VatCodeHandler.md) |  | [optional]
**accounts_summed** | [**\EconomicRest\Model\AccountInterval[]**](AccountInterval.md) | An array of the account intervals used for calculating the total for this account. | [optional]
**total_from_account** | [**\EconomicRest\Model\AccountHandler**](AccountHandler.md) |  | [optional]
**accounting_years** | **string** | A link to a list of accounting years for which the account is usable. | [optional]
**self** | **string** | A unique reference to the account resource. | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
