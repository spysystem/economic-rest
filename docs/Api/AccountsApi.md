# EconomicRest\AccountsApi

All URIs are relative to https://restapi.e-conomic.com, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**getAccount()**](AccountsApi.md#getAccount) | **GET** /accounts/{id} |  |
| [**getDepartment()**](AccountsApi.md#getDepartment) | **GET** /departments/{id} |  |
| [**searchAccountAccountingYearEntries()**](AccountsApi.md#searchAccountAccountingYearEntries) | **GET** /accounts/{id}/accounting-years/{accountingYear}/entries |  |
| [**searchAccountAccountingYears()**](AccountsApi.md#searchAccountAccountingYears) | **GET** /accounts/{id}/accounting-years |  |
| [**searchAccounts()**](AccountsApi.md#searchAccounts) | **GET** /accounts |  |
| [**searchDepartmentalDistributions()**](AccountsApi.md#searchDepartmentalDistributions) | **GET** /departmental-distributions |  |
| [**searchDepartments()**](AccountsApi.md#searchDepartments) | **GET** /departments |  |


## `getAccount()`

```php
getAccount($id): \EconomicRest\Model\Account
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


$apiInstance = new EconomicRest\Api\AccountsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 56; // int

try {
    $result = $apiInstance->getAccount($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AccountsApi->getAccount: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **int**|  | |

### Return type

[**\EconomicRest\Model\Account**](../Model/Account.md)

### Authorization

[X-AgreementGrantToken](../../README.md#X-AgreementGrantToken), [X-AppSecretToken](../../README.md#X-AppSecretToken)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getDepartment()`

```php
getDepartment($id): \EconomicRest\Model\Department
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


$apiInstance = new EconomicRest\Api\AccountsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 56; // int

try {
    $result = $apiInstance->getDepartment($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AccountsApi->getDepartment: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **int**|  | |

### Return type

[**\EconomicRest\Model\Department**](../Model/Department.md)

### Authorization

[X-AgreementGrantToken](../../README.md#X-AgreementGrantToken), [X-AppSecretToken](../../README.md#X-AppSecretToken)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `searchAccountAccountingYearEntries()`

```php
searchAccountAccountingYearEntries($id, $accounting_year, $filter, $sort, $skip_pages, $page_size): \EconomicRest\Model\SearchAccountAccountingYearEntriesResponse
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


$apiInstance = new EconomicRest\Api\AccountsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 56; // int
$accounting_year = 'accounting_year_example'; // string
$filter = 'filter_example'; // string
$sort = 'sort_example'; // string
$skip_pages = 56; // int
$page_size = 56; // int

try {
    $result = $apiInstance->searchAccountAccountingYearEntries($id, $accounting_year, $filter, $sort, $skip_pages, $page_size);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AccountsApi->searchAccountAccountingYearEntries: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **int**|  | |
| **accounting_year** | **string**|  | |
| **filter** | **string**|  | [optional] |
| **sort** | **string**|  | [optional] |
| **skip_pages** | **int**|  | [optional] |
| **page_size** | **int**|  | [optional] |

### Return type

[**\EconomicRest\Model\SearchAccountAccountingYearEntriesResponse**](../Model/SearchAccountAccountingYearEntriesResponse.md)

### Authorization

[X-AgreementGrantToken](../../README.md#X-AgreementGrantToken), [X-AppSecretToken](../../README.md#X-AppSecretToken)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `searchAccountAccountingYears()`

```php
searchAccountAccountingYears($id, $filter, $sort, $skip_pages, $page_size): \EconomicRest\Model\SearchAccountingYearsResponse
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


$apiInstance = new EconomicRest\Api\AccountsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 56; // int
$filter = 'filter_example'; // string
$sort = 'sort_example'; // string
$skip_pages = 56; // int
$page_size = 56; // int

try {
    $result = $apiInstance->searchAccountAccountingYears($id, $filter, $sort, $skip_pages, $page_size);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AccountsApi->searchAccountAccountingYears: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **int**|  | |
| **filter** | **string**|  | [optional] |
| **sort** | **string**|  | [optional] |
| **skip_pages** | **int**|  | [optional] |
| **page_size** | **int**|  | [optional] |

### Return type

[**\EconomicRest\Model\SearchAccountingYearsResponse**](../Model/SearchAccountingYearsResponse.md)

### Authorization

[X-AgreementGrantToken](../../README.md#X-AgreementGrantToken), [X-AppSecretToken](../../README.md#X-AppSecretToken)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `searchAccounts()`

```php
searchAccounts($filter, $sort, $skip_pages, $page_size): \EconomicRest\Model\SearchAccountsResponse
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


$apiInstance = new EconomicRest\Api\AccountsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$filter = 'filter_example'; // string
$sort = 'sort_example'; // string
$skip_pages = 56; // int
$page_size = 56; // int

try {
    $result = $apiInstance->searchAccounts($filter, $sort, $skip_pages, $page_size);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AccountsApi->searchAccounts: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **filter** | **string**|  | [optional] |
| **sort** | **string**|  | [optional] |
| **skip_pages** | **int**|  | [optional] |
| **page_size** | **int**|  | [optional] |

### Return type

[**\EconomicRest\Model\SearchAccountsResponse**](../Model/SearchAccountsResponse.md)

### Authorization

[X-AgreementGrantToken](../../README.md#X-AgreementGrantToken), [X-AppSecretToken](../../README.md#X-AppSecretToken)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `searchDepartmentalDistributions()`

```php
searchDepartmentalDistributions($filter, $sort, $skip_pages, $page_size): \EconomicRest\Model\SearchDepartmentalDistributionsResponse
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


$apiInstance = new EconomicRest\Api\AccountsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$filter = 'filter_example'; // string
$sort = 'sort_example'; // string
$skip_pages = 56; // int
$page_size = 56; // int

try {
    $result = $apiInstance->searchDepartmentalDistributions($filter, $sort, $skip_pages, $page_size);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AccountsApi->searchDepartmentalDistributions: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **filter** | **string**|  | [optional] |
| **sort** | **string**|  | [optional] |
| **skip_pages** | **int**|  | [optional] |
| **page_size** | **int**|  | [optional] |

### Return type

[**\EconomicRest\Model\SearchDepartmentalDistributionsResponse**](../Model/SearchDepartmentalDistributionsResponse.md)

### Authorization

[X-AgreementGrantToken](../../README.md#X-AgreementGrantToken), [X-AppSecretToken](../../README.md#X-AppSecretToken)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `searchDepartments()`

```php
searchDepartments($filter, $sort, $skip_pages, $page_size): \EconomicRest\Model\SearchDepartmentsResponse
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


$apiInstance = new EconomicRest\Api\AccountsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$filter = 'filter_example'; // string
$sort = 'sort_example'; // string
$skip_pages = 56; // int
$page_size = 56; // int

try {
    $result = $apiInstance->searchDepartments($filter, $sort, $skip_pages, $page_size);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AccountsApi->searchDepartments: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **filter** | **string**|  | [optional] |
| **sort** | **string**|  | [optional] |
| **skip_pages** | **int**|  | [optional] |
| **page_size** | **int**|  | [optional] |

### Return type

[**\EconomicRest\Model\SearchDepartmentsResponse**](../Model/SearchDepartmentsResponse.md)

### Authorization

[X-AgreementGrantToken](../../README.md#X-AgreementGrantToken), [X-AppSecretToken](../../README.md#X-AppSecretToken)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
