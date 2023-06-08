# EconomicRest\CustomerApi

All URIs are relative to https://restapi.e-conomic.com, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**createCustomer()**](CustomerApi.md#createCustomer) | **POST** /customers |  |
| [**createCustomerGroup()**](CustomerApi.md#createCustomerGroup) | **POST** /customer-groups |  |
| [**getCustomer()**](CustomerApi.md#getCustomer) | **GET** /customers/{id} |  |
| [**getCustomerGroup()**](CustomerApi.md#getCustomerGroup) | **GET** /customer-groups/{id} |  |
| [**searchCustomerGroups()**](CustomerApi.md#searchCustomerGroups) | **GET** /customer-groups |  |
| [**searchCustomers()**](CustomerApi.md#searchCustomers) | **GET** /customers |  |
| [**updateCustomer()**](CustomerApi.md#updateCustomer) | **PUT** /customers/{id} |  |
| [**updateCustomerGroup()**](CustomerApi.md#updateCustomerGroup) | **PUT** /customer-groups/{id} |  |


## `createCustomer()`

```php
createCustomer($customer): \EconomicRest\Model\Customer
```



### Example

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


$apiInstance = new EconomicRest\Api\CustomerApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$customer = new \EconomicRest\Model\Customer(); // \EconomicRest\Model\Customer

try {
    $result = $apiInstance->createCustomer($customer);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CustomerApi->createCustomer: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **customer** | [**\EconomicRest\Model\Customer**](../Model/Customer.md)|  | [optional] |

### Return type

[**\EconomicRest\Model\Customer**](../Model/Customer.md)

### Authorization

[X-AgreementGrantToken](../../README.md#X-AgreementGrantToken), [X-AppSecretToken](../../README.md#X-AppSecretToken)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `createCustomerGroup()`

```php
createCustomerGroup($customer_group): \EconomicRest\Model\CustomerGroup
```



### Example

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


$apiInstance = new EconomicRest\Api\CustomerApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$customer_group = new \EconomicRest\Model\CustomerGroup(); // \EconomicRest\Model\CustomerGroup

try {
    $result = $apiInstance->createCustomerGroup($customer_group);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CustomerApi->createCustomerGroup: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **customer_group** | [**\EconomicRest\Model\CustomerGroup**](../Model/CustomerGroup.md)|  | [optional] |

### Return type

[**\EconomicRest\Model\CustomerGroup**](../Model/CustomerGroup.md)

### Authorization

[X-AgreementGrantToken](../../README.md#X-AgreementGrantToken), [X-AppSecretToken](../../README.md#X-AppSecretToken)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getCustomer()`

```php
getCustomer($id): \EconomicRest\Model\Customer
```



### Example

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


$apiInstance = new EconomicRest\Api\CustomerApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 56; // int

try {
    $result = $apiInstance->getCustomer($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CustomerApi->getCustomer: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **int**|  | |

### Return type

[**\EconomicRest\Model\Customer**](../Model/Customer.md)

### Authorization

[X-AgreementGrantToken](../../README.md#X-AgreementGrantToken), [X-AppSecretToken](../../README.md#X-AppSecretToken)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getCustomerGroup()`

```php
getCustomerGroup($id): \EconomicRest\Model\CustomerGroup
```



### Example

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


$apiInstance = new EconomicRest\Api\CustomerApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 56; // int

try {
    $result = $apiInstance->getCustomerGroup($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CustomerApi->getCustomerGroup: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **int**|  | |

### Return type

[**\EconomicRest\Model\CustomerGroup**](../Model/CustomerGroup.md)

### Authorization

[X-AgreementGrantToken](../../README.md#X-AgreementGrantToken), [X-AppSecretToken](../../README.md#X-AppSecretToken)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `searchCustomerGroups()`

```php
searchCustomerGroups($filter, $sort, $skip_pages, $page_size): \EconomicRest\Model\SearchCustomerGroupsResponse
```



### Example

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


$apiInstance = new EconomicRest\Api\CustomerApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$filter = 'filter_example'; // string
$sort = 'sort_example'; // string
$skip_pages = 56; // int
$page_size = 500; // int

try {
    $result = $apiInstance->searchCustomerGroups($filter, $sort, $skip_pages, $page_size);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CustomerApi->searchCustomerGroups: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **filter** | **string**|  | [optional] |
| **sort** | **string**|  | [optional] |
| **skip_pages** | **int**|  | [optional] |
| **page_size** | **int**|  | [optional] [default to 500] |

### Return type

[**\EconomicRest\Model\SearchCustomerGroupsResponse**](../Model/SearchCustomerGroupsResponse.md)

### Authorization

[X-AgreementGrantToken](../../README.md#X-AgreementGrantToken), [X-AppSecretToken](../../README.md#X-AppSecretToken)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `searchCustomers()`

```php
searchCustomers($filter, $sort, $skip_pages, $page_size): \EconomicRest\Model\SearchCustomerResponse
```



### Example

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


$apiInstance = new EconomicRest\Api\CustomerApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$filter = 'filter_example'; // string
$sort = 'sort_example'; // string
$skip_pages = 56; // int
$page_size = 500; // int

try {
    $result = $apiInstance->searchCustomers($filter, $sort, $skip_pages, $page_size);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CustomerApi->searchCustomers: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **filter** | **string**|  | [optional] |
| **sort** | **string**|  | [optional] |
| **skip_pages** | **int**|  | [optional] |
| **page_size** | **int**|  | [optional] [default to 500] |

### Return type

[**\EconomicRest\Model\SearchCustomerResponse**](../Model/SearchCustomerResponse.md)

### Authorization

[X-AgreementGrantToken](../../README.md#X-AgreementGrantToken), [X-AppSecretToken](../../README.md#X-AppSecretToken)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `updateCustomer()`

```php
updateCustomer($id, $customer): \EconomicRest\Model\Customer
```



### Example

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


$apiInstance = new EconomicRest\Api\CustomerApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 56; // int
$customer = new \EconomicRest\Model\Customer(); // \EconomicRest\Model\Customer

try {
    $result = $apiInstance->updateCustomer($id, $customer);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CustomerApi->updateCustomer: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **int**|  | |
| **customer** | [**\EconomicRest\Model\Customer**](../Model/Customer.md)|  | [optional] |

### Return type

[**\EconomicRest\Model\Customer**](../Model/Customer.md)

### Authorization

[X-AgreementGrantToken](../../README.md#X-AgreementGrantToken), [X-AppSecretToken](../../README.md#X-AppSecretToken)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `updateCustomerGroup()`

```php
updateCustomerGroup($id, $customer_group): \EconomicRest\Model\CustomerGroup
```



### Example

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


$apiInstance = new EconomicRest\Api\CustomerApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 56; // int
$customer_group = new \EconomicRest\Model\CustomerGroup(); // \EconomicRest\Model\CustomerGroup

try {
    $result = $apiInstance->updateCustomerGroup($id, $customer_group);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CustomerApi->updateCustomerGroup: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **int**|  | |
| **customer_group** | [**\EconomicRest\Model\CustomerGroup**](../Model/CustomerGroup.md)|  | [optional] |

### Return type

[**\EconomicRest\Model\CustomerGroup**](../Model/CustomerGroup.md)

### Authorization

[X-AgreementGrantToken](../../README.md#X-AgreementGrantToken), [X-AppSecretToken](../../README.md#X-AppSecretToken)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
