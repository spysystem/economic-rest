<?php
/**
 * VATZoneModelAttributes
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
 * VATZoneModelAttributes Class Doc Comment
 *
 * @category Class
 * @description A schema for retrieval of a single vat zone.
 * @package  EconomicRest
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */
class VATZoneModelAttributes
{
    public string $strVatZoneNumber = 'vat_zone_number';
    public string $strName = 'name';
    public string $strEnabledForCustomer = 'enabled_for_customer';
    public string $strEnabledForSupplier = 'enabled_for_supplier';
    public string $strSelf = 'self';
}

