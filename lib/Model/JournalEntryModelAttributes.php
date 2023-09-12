<?php
/**
 * JournalEntryModelAttributes
 *
 * PHP version 7.2
 *
 * @category Class
 * @package  EconomicRest
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */

/**
 * e-conomic JSON-schema REST API
 *
 * No description provided (generated by Openapi Generator https://github.com/openapitools/openapi-generator)
 *
 * The version of the OpenAPI document: 1.0.0
 * Generated by: https://openapi-generator.tech
 * OpenAPI Generator version: 6.3.0-SNAPSHOT
 */

/**
 * NOTE: This class is auto generated by OpenAPI Generator (https://openapi-generator.tech).
 * https://openapi-generator.tech
 * Do not edit the class manually.
 */

namespace EconomicRest\Model;

/**
 * JournalEntryModelAttributes Class Doc Comment
 *
 * @category Class
 * @description A specific journal entry.
 * @package  EconomicRest
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */
class JournalEntryModelAttributes
{
    public string $strAccount = 'account';
    public string $strTemplates = 'templates';
    public string $strJournal = 'journal';
    public string $strCustomer = 'customer';
    public string $strCustomerInvoice = 'customer_invoice';
    public string $strSupplier = 'supplier';
    public string $strSupplierInvoiceNumber = 'supplier_invoice_number';
    public string $strPaymentDetails = 'payment_details';
    public string $strDueDate = 'due_date';
    public string $strText = 'text';
    public string $strAmount = 'amount';
    public string $strContraAccount = 'contra_account';
    public string $strContraVatAccount = 'contra_vat_account';
    public string $strContraVatAmount = 'contra_vat_amount';
    public string $strContraVatAmountInBaseCurrency = 'contra_vat_amount_in_base_currency';
    public string $strCostType = 'cost_type';
    public string $strCurrency = 'currency';
    public string $strDate = 'date';
    public string $strDepartmentalDistribution = 'departmental_distribution';
    public string $strEmployee = 'employee';
    public string $strExchangeRate = 'exchange_rate';
    public string $strEntryType = 'entry_type';
    public string $strVoucher = 'voucher';
    public string $strProject = 'project';
    public string $strAmountDefaultCurrency = 'amount_default_currency';
    public string $strRemainder = 'remainder';
    public string $strRemainderInDefaultCurrency = 'remainder_in_default_currency';
    public string $strJournalEntryNumber = 'journal_entry_number';
    public string $strQuantity1 = 'quantity1';
    public string $strQuantity2 = 'quantity2';
    public string $strUnit1 = 'unit1';
    public string $strUnit2 = 'unit2';
    public string $strSelf = 'self';
}

