# # PaymentTerm

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**payment_terms_number** | **int** | A unique identifier of the payment term. | [optional]
**days_of_credit** | **int** | The number of days before payment must be made. | [optional]
**description** | **string** | A description of the payment term. | [optional]
**name** | **string** | The name of the payment term. | [optional]
**payment_terms_type** | **string** | The type of payment term defines how the payment term behaves. | [optional]
**contra_account_for_prepaid_amount** | [**\EconomicRest\Model\AccountHandler**](AccountHandler.md) |  | [optional]
**contra_account_for_remainder_amount** | [**\EconomicRest\Model\AccountHandler**](AccountHandler.md) |  | [optional]
**percentage_for_prepaid_amount** | **float** | The % to be pre paid. | [optional]
**percentage_for_remainder_amount** | **float** | The % to be post paid. | [optional]
**credit_card_company** | [**\EconomicRest\Model\CustomerHandler**](CustomerHandler.md) |  | [optional]
**self** | **string** | A unique link reference to the payment term item. | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
