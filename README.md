# OpenAPIClient-php

No description provided (generated by Openapi Generator https://github.com/openapitools/openapi-generator)


## Installation & Usage

### Requirements

PHP 7.4 and later.
Should also work with PHP 8.0.

### Composer

To install the bindings via [Composer](https://getcomposer.org/), add the following to `composer.json`:

```json
{
  "repositories": [
    {
      "type": "vcs",
      "url": "https://github.com/spysystem/economic-rest.git"
    }
  ],
  "require": {
    "spysystem/economic-rest": "*@dev"
  }
}
```

Then run `composer install`

### Manual Installation

Download the files and include `autoload.php`:

```php
<?php
require_once('/path/to/OpenAPIClient-php/vendor/autoload.php');
```

## Getting Started

Please follow the [installation procedure](#installation--usage) and then run the following:

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



// Configure API key authorization: X-AgreementGrantToken
$config = EconomicRest\Configuration::getDefaultConfiguration()->setApiKey('X-AgreementGrantToken', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = EconomicRest\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-AgreementGrantToken', 'Bearer');

// Configure API key authorization: X-AppSecretToken
$config = EconomicRest\Configuration::getDefaultConfiguration()->setApiKey('X-AppSecretToken', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = EconomicRest\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-AppSecretToken', 'Bearer');


$apiInstance = new EconomicRest\Api\AccountingYearsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 56; // int

try {
    $result = $apiInstance->getAccountingYear($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AccountingYearsApi->getAccountingYear: ', $e->getMessage(), PHP_EOL;
}

```

## API Endpoints

All URIs are relative to *https://restapi.e-conomic.com*

Class | Method | HTTP request | Description
------------ | ------------- | ------------- | -------------
*AccountingYearsApi* | [**getAccountingYear**](docs/Api/AccountingYearsApi.md#getaccountingyear) | **GET** /accounting-years/{id} | 
*AccountingYearsApi* | [**getAccountingYearPeriod**](docs/Api/AccountingYearsApi.md#getaccountingyearperiod) | **GET** /accounting-years/{yearId}/periods/{id} | 
*AccountingYearsApi* | [**searchAccountingYearPeriods**](docs/Api/AccountingYearsApi.md#searchaccountingyearperiods) | **GET** /accounting-years/{accountingYear}/periods | 
*AccountingYearsApi* | [**searchAccountingYears**](docs/Api/AccountingYearsApi.md#searchaccountingyears) | **GET** /accounting-years | 
*AccountsApi* | [**getAccount**](docs/Api/AccountsApi.md#getaccount) | **GET** /accounts/{id} | 
*AccountsApi* | [**getDepartment**](docs/Api/AccountsApi.md#getdepartment) | **GET** /departments/{id} | 
*AccountsApi* | [**searchAccountAccountingYearEntries**](docs/Api/AccountsApi.md#searchaccountaccountingyearentries) | **GET** /accounts/{id}/accounting-years/{accountingYear}/entries | 
*AccountsApi* | [**searchAccountAccountingYears**](docs/Api/AccountsApi.md#searchaccountaccountingyears) | **GET** /accounts/{id}/accounting-years | 
*AccountsApi* | [**searchAccounts**](docs/Api/AccountsApi.md#searchaccounts) | **GET** /accounts | 
*AccountsApi* | [**searchDepartmentalDistributions**](docs/Api/AccountsApi.md#searchdepartmentaldistributions) | **GET** /departmental-distributions | 
*AccountsApi* | [**searchDepartments**](docs/Api/AccountsApi.md#searchdepartments) | **GET** /departments | 
*CompanyApi* | [**getCompanySettings**](docs/Api/CompanyApi.md#getcompanysettings) | **GET** /self | 
*CustomerApi* | [**createCustomer**](docs/Api/CustomerApi.md#createcustomer) | **POST** /customers | 
*CustomerApi* | [**createCustomerGroup**](docs/Api/CustomerApi.md#createcustomergroup) | **POST** /customer-groups | 
*CustomerApi* | [**getCustomer**](docs/Api/CustomerApi.md#getcustomer) | **GET** /customers/{id} | 
*CustomerApi* | [**getCustomerGroup**](docs/Api/CustomerApi.md#getcustomergroup) | **GET** /customer-groups/{id} | 
*CustomerApi* | [**searchCustomerGroups**](docs/Api/CustomerApi.md#searchcustomergroups) | **GET** /customer-groups | 
*CustomerApi* | [**searchCustomers**](docs/Api/CustomerApi.md#searchcustomers) | **GET** /customers | 
*CustomerApi* | [**updateCustomer**](docs/Api/CustomerApi.md#updatecustomer) | **PUT** /customers/{id} | 
*CustomerApi* | [**updateCustomerGroup**](docs/Api/CustomerApi.md#updatecustomergroup) | **PUT** /customer-groups/{id} | 
*JournalVouchersApi* | [**createVoucher**](docs/Api/JournalVouchersApi.md#createvoucher) | **POST** /journals/{journalId}/vouchers | 
*JournalVouchersApi* | [**searchVouchers**](docs/Api/JournalVouchersApi.md#searchvouchers) | **GET** /journals/{journalId}/vouchers | 
*JournalsApi* | [**getJournal**](docs/Api/JournalsApi.md#getjournal) | **GET** /journals/{id} | 
*JournalsApi* | [**searchJournals**](docs/Api/JournalsApi.md#searchjournals) | **GET** /journals | 
*PaymentTermApi* | [**createPaymentTerm**](docs/Api/PaymentTermApi.md#createpaymentterm) | **POST** /payment-terms | 
*PaymentTermApi* | [**getPaymentTerm**](docs/Api/PaymentTermApi.md#getpaymentterm) | **GET** /payment-terms/{id} | 
*PaymentTermApi* | [**searchPaymentTerms**](docs/Api/PaymentTermApi.md#searchpaymentterms) | **GET** /payment-terms | 
*PaymentTermApi* | [**updatePaymentTerm**](docs/Api/PaymentTermApi.md#updatepaymentterm) | **PUT** /payment-terms/{id} | 
*SupplierApi* | [**getSupplier**](docs/Api/SupplierApi.md#getsupplier) | **GET** /suppliers/{id} | 
*SupplierApi* | [**searchSuppliers**](docs/Api/SupplierApi.md#searchsuppliers) | **GET** /suppliers | 
*VatAccountApi* | [**searchVatAccounts**](docs/Api/VatAccountApi.md#searchvataccounts) | **GET** /vat-accounts | 
*VatAccountsApi* | [**getVatAccount**](docs/Api/VatAccountsApi.md#getvataccount) | **GET** /vat-accounts/{id} | 

## Models

- [Account](docs/Model/Account.md)
- [AccountHandler](docs/Model/AccountHandler.md)
- [AccountInterval](docs/Model/AccountInterval.md)
- [AccountingYear](docs/Model/AccountingYear.md)
- [AccountingYearHandler](docs/Model/AccountingYearHandler.md)
- [AgreementType](docs/Model/AgreementType.md)
- [Application](docs/Model/Application.md)
- [BankInformation](docs/Model/BankInformation.md)
- [Company](docs/Model/Company.md)
- [CompanySettings](docs/Model/CompanySettings.md)
- [CostTypeHandler](docs/Model/CostTypeHandler.md)
- [CurrencyHandler](docs/Model/CurrencyHandler.md)
- [Customer](docs/Model/Customer.md)
- [CustomerGroup](docs/Model/CustomerGroup.md)
- [CustomerGroupHandler](docs/Model/CustomerGroupHandler.md)
- [CustomerGroupLayout](docs/Model/CustomerGroupLayout.md)
- [CustomerHandler](docs/Model/CustomerHandler.md)
- [CustomerPaymentEntry](docs/Model/CustomerPaymentEntry.md)
- [DefaultResponse](docs/Model/DefaultResponse.md)
- [Department](docs/Model/Department.md)
- [DepartmentHandler](docs/Model/DepartmentHandler.md)
- [DepartmentalDistribution](docs/Model/DepartmentalDistribution.md)
- [DepartmentalDistributionHandler](docs/Model/DepartmentalDistributionHandler.md)
- [Distribution](docs/Model/Distribution.md)
- [Entry](docs/Model/Entry.md)
- [Error](docs/Model/Error.md)
- [FinanceVoucherEntry](docs/Model/FinanceVoucherEntry.md)
- [GetCompanySettingsResponse](docs/Model/GetCompanySettingsResponse.md)
- [Journal](docs/Model/Journal.md)
- [JournalContraAccounts](docs/Model/JournalContraAccounts.md)
- [JournalHandler](docs/Model/JournalHandler.md)
- [JournalSettings](docs/Model/JournalSettings.md)
- [JournalTemplates](docs/Model/JournalTemplates.md)
- [JournalVoucherNumbers](docs/Model/JournalVoucherNumbers.md)
- [Language](docs/Model/Language.md)
- [ManualCustomerInvoiceEntry](docs/Model/ManualCustomerInvoiceEntry.md)
- [Module](docs/Model/Module.md)
- [Pagination](docs/Model/Pagination.md)
- [PaymentTerm](docs/Model/PaymentTerm.md)
- [PaymentTermHandler](docs/Model/PaymentTermHandler.md)
- [Period](docs/Model/Period.md)
- [Role](docs/Model/Role.md)
- [SearchAccountAccountingYearEntriesResponse](docs/Model/SearchAccountAccountingYearEntriesResponse.md)
- [SearchAccountAccountingYearEntriesResponseAllOf](docs/Model/SearchAccountAccountingYearEntriesResponseAllOf.md)
- [SearchAccountingYearPeriodsResponse](docs/Model/SearchAccountingYearPeriodsResponse.md)
- [SearchAccountingYearPeriodsResponseAllOf](docs/Model/SearchAccountingYearPeriodsResponseAllOf.md)
- [SearchAccountingYearsResponse](docs/Model/SearchAccountingYearsResponse.md)
- [SearchAccountingYearsResponseAllOf](docs/Model/SearchAccountingYearsResponseAllOf.md)
- [SearchAccountsResponse](docs/Model/SearchAccountsResponse.md)
- [SearchAccountsResponseAllOf](docs/Model/SearchAccountsResponseAllOf.md)
- [SearchCustomerGroupsResponse](docs/Model/SearchCustomerGroupsResponse.md)
- [SearchCustomerGroupsResponseAllOf](docs/Model/SearchCustomerGroupsResponseAllOf.md)
- [SearchCustomerResponse](docs/Model/SearchCustomerResponse.md)
- [SearchCustomerResponseAllOf](docs/Model/SearchCustomerResponseAllOf.md)
- [SearchDepartmentalDistributionsResponse](docs/Model/SearchDepartmentalDistributionsResponse.md)
- [SearchDepartmentalDistributionsResponseAllOf](docs/Model/SearchDepartmentalDistributionsResponseAllOf.md)
- [SearchDepartmentsResponse](docs/Model/SearchDepartmentsResponse.md)
- [SearchDepartmentsResponseAllOf](docs/Model/SearchDepartmentsResponseAllOf.md)
- [SearchJournalsResponse](docs/Model/SearchJournalsResponse.md)
- [SearchJournalsResponseAllOf](docs/Model/SearchJournalsResponseAllOf.md)
- [SearchPaymentTermsResponse](docs/Model/SearchPaymentTermsResponse.md)
- [SearchPaymentTermsResponseAllOf](docs/Model/SearchPaymentTermsResponseAllOf.md)
- [SearchSuppliersResponse](docs/Model/SearchSuppliersResponse.md)
- [SearchSuppliersResponseAllOf](docs/Model/SearchSuppliersResponseAllOf.md)
- [SearchVatAccountsResponse](docs/Model/SearchVatAccountsResponse.md)
- [SearchVatAccountsResponseAllOf](docs/Model/SearchVatAccountsResponseAllOf.md)
- [SearchVouchersResponse](docs/Model/SearchVouchersResponse.md)
- [SearchVouchersResponseAllOf](docs/Model/SearchVouchersResponseAllOf.md)
- [Supplier](docs/Model/Supplier.md)
- [SupplierAttention](docs/Model/SupplierAttention.md)
- [SupplierCostAccount](docs/Model/SupplierCostAccount.md)
- [SupplierHandler](docs/Model/SupplierHandler.md)
- [SupplierInvoiceEntry](docs/Model/SupplierInvoiceEntry.md)
- [SupplierLayout](docs/Model/SupplierLayout.md)
- [SupplierPaymentEntry](docs/Model/SupplierPaymentEntry.md)
- [SupplierPaymentTerms](docs/Model/SupplierPaymentTerms.md)
- [SupplierRemittanceAdvice](docs/Model/SupplierRemittanceAdvice.md)
- [SupplierRemittanceAdvicePaymentType](docs/Model/SupplierRemittanceAdvicePaymentType.md)
- [SupplierSalesPerson](docs/Model/SupplierSalesPerson.md)
- [SupplierSupplierContact](docs/Model/SupplierSupplierContact.md)
- [SupplierSupplierGroup](docs/Model/SupplierSupplierGroup.md)
- [SupplierVatZone](docs/Model/SupplierVatZone.md)
- [User](docs/Model/User.md)
- [VatAccount](docs/Model/VatAccount.md)
- [VatAccountAccount](docs/Model/VatAccountAccount.md)
- [VatAccountContraAccount](docs/Model/VatAccountContraAccount.md)
- [VatAccountVatType](docs/Model/VatAccountVatType.md)
- [VatCodeHandler](docs/Model/VatCodeHandler.md)
- [VatZoneHandler](docs/Model/VatZoneHandler.md)
- [Voucher](docs/Model/Voucher.md)
- [VoucherEntries](docs/Model/VoucherEntries.md)
- [VoucherHandler](docs/Model/VoucherHandler.md)

## Authorization

### X-AgreementGrantToken

- **Type**: API key
- **API key parameter name**: X-AgreementGrantToken
- **Location**: HTTP header



### X-AppSecretToken

- **Type**: API key
- **API key parameter name**: X-AppSecretToken
- **Location**: HTTP header


## Tests

To run the tests, use:

```bash
composer install
vendor/bin/phpunit
```

## Author



## About this package

This PHP package is automatically generated by the [OpenAPI Generator](https://openapi-generator.tech) project:

- API version: `1.0.0`
- Build package: `org.openapitools.codegen.languages.PhpClientCodegen`
