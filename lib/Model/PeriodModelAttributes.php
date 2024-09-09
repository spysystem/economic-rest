<?php
/**
 * PeriodModelAttributes
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
 * Generator version: 7.6.0
 */

/**
 * NOTE: This class is auto generated by OpenAPI Generator (https://openapi-generator.tech).
 * https://openapi-generator.tech
 * Do not edit the class manually.
 */

namespace EconomicRest\Model;

/**
 * PeriodModelAttributes Class Doc Comment
 *
 * @category Class
 * @description A schema for retrieving a period of an accounting year.
 * @package  EconomicRest
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */
class PeriodModelAttributes
{
    public string $strPeriodNumber = 'period_number';
    public string $strAccountingYear = 'accounting_year';
    public string $strFromDate = 'from_date';
    public string $strToDate = 'to_date';
    public string $strBarred = 'barred';
    public string $strClosed = 'closed';
    public string $strEntries = 'entries';
    public string $strTotals = 'totals';
    public string $strSelf = 'self';
}

