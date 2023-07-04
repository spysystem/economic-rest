# EconomicRest\SupplierApi

All URIs are relative to https://restapi.e-conomic.com, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**createSuppliers()**](SupplierApi.md#createSuppliers) | **POST** /suppliers |  |
| [**getSupplier()**](SupplierApi.md#getSupplier) | **GET** /suppliers/{id} |  |
| [**searchSuppliers()**](SupplierApi.md#searchSuppliers) | **GET** /suppliers |  |
| [**updateSupplier()**](SupplierApi.md#updateSupplier) | **PUT** /suppliers/{id} |  |


## `createSuppliers()`

```php
createSuppliers($supplier): \EconomicRest\Model\Supplier
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


$apiInstance = new EconomicRest\Api\SupplierApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$supplier = new \EconomicRest\Model\Supplier(); // \EconomicRest\Model\Supplier

try {
    $result = $apiInstance->createSuppliers($supplier);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SupplierApi->createSuppliers: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **supplier** | [**\EconomicRest\Model\Supplier**](../Model/Supplier.md)|  | [optional] |

### Return type

[**\EconomicRest\Model\Supplier**](../Model/Supplier.md)

### Authorization

[X-AgreementGrantToken](../../README.md#X-AgreementGrantToken), [X-AppSecretToken](../../README.md#X-AppSecretToken)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getSupplier()`

```php
getSupplier($id): \EconomicRest\Model\Supplier
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


$apiInstance = new EconomicRest\Api\SupplierApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 56; // int

try {
    $result = $apiInstance->getSupplier($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SupplierApi->getSupplier: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **int**|  | |

### Return type

[**\EconomicRest\Model\Supplier**](../Model/Supplier.md)

### Authorization

[X-AgreementGrantToken](../../README.md#X-AgreementGrantToken), [X-AppSecretToken](../../README.md#X-AppSecretToken)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `searchSuppliers()`

```php
searchSuppliers($skip_pages, $page_size): \EconomicRest\Model\SearchSuppliersResponse
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


$apiInstance = new EconomicRest\Api\SupplierApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$skip_pages = 56; // int
$page_size = 500; // int

try {
    $result = $apiInstance->searchSuppliers($skip_pages, $page_size);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SupplierApi->searchSuppliers: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **skip_pages** | **int**|  | [optional] |
| **page_size** | **int**|  | [optional] [default to 500] |

### Return type

[**\EconomicRest\Model\SearchSuppliersResponse**](../Model/SearchSuppliersResponse.md)

### Authorization

[X-AgreementGrantToken](../../README.md#X-AgreementGrantToken), [X-AppSecretToken](../../README.md#X-AppSecretToken)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `updateSupplier()`

```php
updateSupplier($id, $supplier): \EconomicRest\Model\Supplier
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


$apiInstance = new EconomicRest\Api\SupplierApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 56; // int
$supplier = new \EconomicRest\Model\Supplier(); // \EconomicRest\Model\Supplier

try {
    $result = $apiInstance->updateSupplier($id, $supplier);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SupplierApi->updateSupplier: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **int**|  | |
| **supplier** | [**\EconomicRest\Model\Supplier**](../Model/Supplier.md)|  | [optional] |

### Return type

[**\EconomicRest\Model\Supplier**](../Model/Supplier.md)

### Authorization

[X-AgreementGrantToken](../../README.md#X-AgreementGrantToken), [X-AppSecretToken](../../README.md#X-AppSecretToken)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
