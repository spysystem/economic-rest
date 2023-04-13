# EconomicRest\VatAccountApi

All URIs are relative to https://restapi.e-conomic.com, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**searchVatAccounts()**](VatAccountApi.md#searchVatAccounts) | **GET** /vat-accounts |  |


## `searchVatAccounts()`

```php
searchVatAccounts($skip_pages, $page_size): \EconomicRest\Model\SearchVatAccountsResponse
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


$apiInstance = new EconomicRest\Api\VatAccountApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$skip_pages = 56; // int
$page_size = 56; // int

try {
    $result = $apiInstance->searchVatAccounts($skip_pages, $page_size);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling VatAccountApi->searchVatAccounts: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **skip_pages** | **int**|  | [optional] |
| **page_size** | **int**|  | [optional] |

### Return type

[**\EconomicRest\Model\SearchVatAccountsResponse**](../Model/SearchVatAccountsResponse.md)

### Authorization

[X-AgreementGrantToken](../../README.md#X-AgreementGrantToken), [X-AppSecretToken](../../README.md#X-AppSecretToken)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
