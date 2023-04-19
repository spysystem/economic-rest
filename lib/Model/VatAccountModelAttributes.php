<?php
/**
 * VatAccountModelAttributes
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
 * VatAccountModelAttributes Class Doc Comment
 *
 * @category Class
 * @description A schema for retrieval of a single vat account.
 * @package  EconomicRest
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */
class VatAccountModelAttributes
{
    public string $strAccount = 'account';
    public string $strContraAccount = 'contra_account';
    public string $strVatType = 'vat_type';
    public string $strBarred = 'barred';
    public string $strName = 'name';
    public string $strRatePercentage = 'rate_percentage';
    public string $strVatCode = 'vat_code';
    public string $strSelf = 'self';
}
