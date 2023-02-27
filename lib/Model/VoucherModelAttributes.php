<?php
/**
 * VoucherModelAttributes
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
 * VoucherModelAttributes Class Doc Comment
 *
 * @category Class
 * @description A schema for getting a specific entry belonging to a voucher.
 * @package  EconomicRest
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */
class VoucherModelAttributes
{
    public string $strAccountingYear = 'accounting_year';
    public string $strJournal = 'journal';
    public string $strEntries = 'entries';
    public string $strAttachment = 'attachment';
    public string $strVoucherNumber = 'voucher_number';
    public string $strSelf = 'self';
}

