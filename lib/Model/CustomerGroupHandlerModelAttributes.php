<?php
/**
 * CustomerGroupHandlerModelAttributes
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
 * CustomerGroupHandlerModelAttributes Class Doc Comment
 *
 * @category Class
 * @description In order to set up a new customer, it is necessary to specify a customer group. It is useful to group a company’s customers (e.g., ‘domestic’ and ‘foreign’ customers) and to link the group members to the same account when generating reports.
 * @package  EconomicRest
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */
class CustomerGroupHandlerModelAttributes
{
    public string $strCustomerGroupNumber = 'customer_group_number';
    public string $strSelf = 'self';
}

