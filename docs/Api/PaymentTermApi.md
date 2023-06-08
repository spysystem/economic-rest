# EconomicRest\PaymentTermApi

All URIs are relative to https://restapi.e-conomic.com, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**createPaymentTerm()**](PaymentTermApi.md#createPaymentTerm) | **POST** /payment-terms |  |
| [**getPaymentTerm()**](PaymentTermApi.md#getPaymentTerm) | **GET** /payment-terms/{id} |  |
| [**searchPaymentTerms()**](PaymentTermApi.md#searchPaymentTerms) | **GET** /payment-terms |  |
| [**updatePaymentTerm()**](PaymentTermApi.md#updatePaymentTerm) | **PUT** /payment-terms/{id} |  |


## `createPaymentTerm()`

```php
createPaymentTerm($payment_term): \EconomicRest\Model\PaymentTerm
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


$apiInstance = new EconomicRest\Api\PaymentTermApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$payment_term = new \EconomicRest\Model\PaymentTerm(); // \EconomicRest\Model\PaymentTerm

try {
    $result = $apiInstance->createPaymentTerm($payment_term);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PaymentTermApi->createPaymentTerm: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **payment_term** | [**\EconomicRest\Model\PaymentTerm**](../Model/PaymentTerm.md)|  | [optional] |

### Return type

[**\EconomicRest\Model\PaymentTerm**](../Model/PaymentTerm.md)

### Authorization

[X-AgreementGrantToken](../../README.md#X-AgreementGrantToken), [X-AppSecretToken](../../README.md#X-AppSecretToken)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getPaymentTerm()`

```php
getPaymentTerm($id): \EconomicRest\Model\PaymentTerm
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


$apiInstance = new EconomicRest\Api\PaymentTermApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 56; // int

try {
    $result = $apiInstance->getPaymentTerm($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PaymentTermApi->getPaymentTerm: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **int**|  | |

### Return type

[**\EconomicRest\Model\PaymentTerm**](../Model/PaymentTerm.md)

### Authorization

[X-AgreementGrantToken](../../README.md#X-AgreementGrantToken), [X-AppSecretToken](../../README.md#X-AppSecretToken)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `searchPaymentTerms()`

```php
searchPaymentTerms($skip_pages, $page_size): \EconomicRest\Model\SearchPaymentTermsResponse
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


$apiInstance = new EconomicRest\Api\PaymentTermApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$skip_pages = 56; // int
$page_size = 500; // int

try {
    $result = $apiInstance->searchPaymentTerms($skip_pages, $page_size);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PaymentTermApi->searchPaymentTerms: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **skip_pages** | **int**|  | [optional] |
| **page_size** | **int**|  | [optional] [default to 500] |

### Return type

[**\EconomicRest\Model\SearchPaymentTermsResponse**](../Model/SearchPaymentTermsResponse.md)

### Authorization

[X-AgreementGrantToken](../../README.md#X-AgreementGrantToken), [X-AppSecretToken](../../README.md#X-AppSecretToken)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `updatePaymentTerm()`

```php
updatePaymentTerm($id, $payment_term): \EconomicRest\Model\PaymentTerm
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


$apiInstance = new EconomicRest\Api\PaymentTermApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 56; // int
$payment_term = new \EconomicRest\Model\PaymentTerm(); // \EconomicRest\Model\PaymentTerm

try {
    $result = $apiInstance->updatePaymentTerm($id, $payment_term);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PaymentTermApi->updatePaymentTerm: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **int**|  | |
| **payment_term** | [**\EconomicRest\Model\PaymentTerm**](../Model/PaymentTerm.md)|  | [optional] |

### Return type

[**\EconomicRest\Model\PaymentTerm**](../Model/PaymentTerm.md)

### Authorization

[X-AgreementGrantToken](../../README.md#X-AgreementGrantToken), [X-AppSecretToken](../../README.md#X-AppSecretToken)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
