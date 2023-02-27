<?php
/**
 * VoucherEntriesModelFields
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
 * VoucherEntriesModelFields Class Doc Comment
 *
 * @category Class
 * @description Entries, separated by type, for the journal.
 * @package  EconomicRest
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */
class VoucherEntriesModelFields
{
    public string $strFinanceVouchers = 'financeVouchers';
    public string $strCustomerPayments = 'customerPayments';
    public string $strSupplierInvoices = 'supplierInvoices';
    public string $strSupplierPayments = 'supplierPayments';
    public string $strManualCustomerInvoices = 'manualCustomerInvoices';
}

