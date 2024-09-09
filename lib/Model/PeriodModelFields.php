<?php
/**
 * PeriodModelFields
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
 * PeriodModelFields Class Doc Comment
 *
 * @category Class
 * @description A schema for retrieving a period of an accounting year.
 * @package  EconomicRest
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */
class PeriodModelFields
{
    public string $strPeriodNumber = 'periodNumber';
    public string $strAccountingYear = 'accountingYear';
    public string $strFromDate = 'fromDate';
    public string $strToDate = 'toDate';
    public string $strBarred = 'barred';
    public string $strClosed = 'closed';
    public string $strEntries = 'entries';
    public string $strTotals = 'totals';
    public string $strSelf = 'self';
}

