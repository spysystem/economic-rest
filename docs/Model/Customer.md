# # Customer

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**address** | **string** | Address for the customer including street and number. | [optional]
**balance** | **float** | The outstanding amount for this customer. | [optional] [readonly]
**barred** | **bool** | Boolean indication of whether the customer is barred from invoicing. | [optional]
**city** | **string** | The customer&#39;s city. | [optional]
**corporate_identification_number** | **string** | Corporate Identification Number. For example CVR in Denmark. | [optional]
**p_number** | **string** | Extension of corporate identification number (CVR). Identifying separate production unit (p-nummer). | [optional]
**country** | **string** | The customer&#39;s country. | [optional]
**credit_limit** | **float** | A maximum credit for this customer. Once the maximum is reached or passed in connection with an order/quotation/invoice for this customer you see a warning in e-conomic. | [optional]
**currency** | **string** | Default payment currency. | [optional]
**customer_number** | **int** | The customer number is a positive unique numerical identifier with a maximum of 9 digits. | [optional]
**due_amount** | **float** | Due amount that the customer needs to pay. | [optional] [readonly]
**ean** | **string** | European Article Number. EAN is used for invoicing the Danish public sector. | [optional]
**email** | **string** | Customer e-mail address where e-conomic invoices should be emailed. Note: you can specify multiple email addresses in this field, separated by a space. If you need to send a copy of the invoice or write to other e-mail addresses, you can also create one or more customer contacts. | [optional]
**last_updated** | **string** | The date this customer was last updated. The date is formatted according to ISO-8601. | [optional]
**name** | **string** | The customer name. | [optional]
**public_entry_number** | **string** | The public entry number is used for electronic invoicing, to define the account invoices will be registered on at the customer. | [optional]
**telephone_and_fax_number** | **string** | The customer&#39;s telephone and/or fax number. | [optional]
**mobile_phone** | **string** | The customer&#39;s mobile phone number. | [optional]
**e_invoicing_disabled_by_default** | **bool** | Boolean indication of whether the default sending method should be email instead of e-invoice. This property is updatable only by using PATCH to /customers/:customerNumber | [optional]
**vat_number** | **string** | The customer&#39;s value added tax identification number. This field is only available to agreements in Sweden, UK, Germany, Poland and Finland. Not to be mistaken for the danish CVR number, which is defined on the corporateIdentificationNumber property. | [optional]
**website** | **string** | Customer website, if applicable. | [optional]
**zip** | **string** | The customer&#39;s postcode. | [optional]
**contacts** | **string** | A unique link reference to the customer contacts items. | [optional]
**delivery_locations** | **string** | A unique link reference to the customer delivery locations items. | [optional]
**self** | **string** | A unique link reference to the delivery location. | [optional]
**payment_terms** | [**\EconomicRest\Model\PaymentTermHandler**](PaymentTermHandler.md) |  | [optional]
**vat_zone** | [**\EconomicRest\Model\VatZoneHandler**](VatZoneHandler.md) |  | [optional]
**customer_group** | [**\EconomicRest\Model\CustomerGroupHandler**](CustomerGroupHandler.md) |  | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
