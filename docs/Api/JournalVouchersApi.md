# EconomicRest\JournalVouchersApi

All URIs are relative to https://restapi.e-conomic.com, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**createVoucher()**](JournalVouchersApi.md#createVoucher) | **POST** /journals/{journalId}/vouchers |  |
| [**searchVouchers()**](JournalVouchersApi.md#searchVouchers) | **GET** /journals/{journalId}/vouchers |  |
| [**uploadVoucherAttachment()**](JournalVouchersApi.md#uploadVoucherAttachment) | **PATCH** /journals/{journalId}/vouchers/{accountingYear-voucherNumber}/attachment/file |  |


## `createVoucher()`

```php
createVoucher($journal_id, $voucher): \EconomicRest\Model\Voucher[]
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


$apiInstance = new EconomicRest\Api\JournalVouchersApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$journal_id = 56; // int
$voucher = new \EconomicRest\Model\Voucher(); // \EconomicRest\Model\Voucher

try {
    $result = $apiInstance->createVoucher($journal_id, $voucher);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling JournalVouchersApi->createVoucher: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **journal_id** | **int**|  | |
| **voucher** | [**\EconomicRest\Model\Voucher**](../Model/Voucher.md)|  | [optional] |

### Return type

[**\EconomicRest\Model\Voucher[]**](../Model/Voucher.md)

### Authorization

[X-AgreementGrantToken](../../README.md#X-AgreementGrantToken), [X-AppSecretToken](../../README.md#X-AppSecretToken)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `searchVouchers()`

```php
searchVouchers($journal_id, $filter, $sort, $skip_pages, $page_size): \EconomicRest\Model\SearchVouchersResponse
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


$apiInstance = new EconomicRest\Api\JournalVouchersApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$journal_id = 56; // int
$filter = 'filter_example'; // string
$sort = 'sort_example'; // string
$skip_pages = 56; // int
$page_size = 500; // int

try {
    $result = $apiInstance->searchVouchers($journal_id, $filter, $sort, $skip_pages, $page_size);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling JournalVouchersApi->searchVouchers: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **journal_id** | **int**|  | |
| **filter** | **string**|  | [optional] |
| **sort** | **string**|  | [optional] |
| **skip_pages** | **int**|  | [optional] |
| **page_size** | **int**|  | [optional] [default to 500] |

### Return type

[**\EconomicRest\Model\SearchVouchersResponse**](../Model/SearchVouchersResponse.md)

### Authorization

[X-AgreementGrantToken](../../README.md#X-AgreementGrantToken), [X-AppSecretToken](../../README.md#X-AppSecretToken)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `uploadVoucherAttachment()`

```php
uploadVoucherAttachment($journal_id, $accounting_year_voucher_number, $file)
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


$apiInstance = new EconomicRest\Api\JournalVouchersApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$journal_id = 56; // int
$accounting_year_voucher_number = 'accounting_year_voucher_number_example'; // string
$file = "/path/to/file.txt"; // \SplFileObject

try {
    $apiInstance->uploadVoucherAttachment($journal_id, $accounting_year_voucher_number, $file);
} catch (Exception $e) {
    echo 'Exception when calling JournalVouchersApi->uploadVoucherAttachment: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **journal_id** | **int**|  | |
| **accounting_year_voucher_number** | **string**|  | |
| **file** | **\SplFileObject****\SplFileObject**|  | |

### Return type

void (empty response body)

### Authorization

[X-AgreementGrantToken](../../README.md#X-AgreementGrantToken), [X-AppSecretToken](../../README.md#X-AppSecretToken)

### HTTP request headers

- **Content-Type**: `multipart/form-data`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
