# OpenAPI\Client\MetricsApi

All URIs are relative to http://localhost/api/1.0.

Method | HTTP request | Description
------------- | ------------- | -------------
[**postMetrics()**](MetricsApi.md#postMetrics) | **POST** /metrics/{environment} | Send metrics to the Analytics server.


## `postMetrics()`

```php
postMetrics($environment, $metrics)
```

Send metrics to the Analytics server.

Send metrics to Analytics server

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: BearerAuth
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\MetricsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$environment = 'environment_example'; // string | environment parameter in query.
$metrics = new \OpenAPI\Client\Model\Metrics(); // \OpenAPI\Client\Model\Metrics

try {
    $apiInstance->postMetrics($environment, $metrics);
} catch (Exception $e) {
    echo 'Exception when calling MetricsApi->postMetrics: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **environment** | **string**| environment parameter in query. |
 **metrics** | [**\OpenAPI\Client\Model\Metrics**](../Model/Metrics.md)|  | [optional]

### Return type

void (empty response body)

### Authorization

[BearerAuth](../../README.md#BearerAuth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
