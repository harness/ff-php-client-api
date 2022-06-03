# OpenAPI\Client\ClientApi

All URIs are relative to http://localhost/api/1.0.

Method | HTTP request | Description
------------- | ------------- | -------------
[**authenticate()**](ClientApi.md#authenticate) | **POST** /client/auth | Authenticate with the admin server.
[**getAllSegments()**](ClientApi.md#getAllSegments) | **GET** /client/env/{environmentUUID}/target-segments | Retrieve all segments.
[**getEvaluationByIdentifier()**](ClientApi.md#getEvaluationByIdentifier) | **GET** /client/env/{environmentUUID}/target/{target}/evaluations/{feature} | Get feature evaluations for target
[**getEvaluations()**](ClientApi.md#getEvaluations) | **GET** /client/env/{environmentUUID}/target/{target}/evaluations | Get feature evaluations for target
[**getFeatureConfig()**](ClientApi.md#getFeatureConfig) | **GET** /client/env/{environmentUUID}/feature-configs | Get all feature flags activations
[**getFeatureConfigByIdentifier()**](ClientApi.md#getFeatureConfigByIdentifier) | **GET** /client/env/{environmentUUID}/feature-configs/{identifier} | Get feature config
[**getSegmentByIdentifier()**](ClientApi.md#getSegmentByIdentifier) | **GET** /client/env/{environmentUUID}/target-segments/{identifier} | Retrieve a segment by identifier
[**stream()**](ClientApi.md#stream) | **GET** /stream | Stream endpoint.


## `authenticate()`

```php
authenticate($authentication_request): \OpenAPI\Client\Model\AuthenticationResponse
```

Authenticate with the admin server.

Used to retrieve all target segments for certain account id.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\ClientApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$authentication_request = new \OpenAPI\Client\Model\AuthenticationRequest(); // \OpenAPI\Client\Model\AuthenticationRequest

try {
    $result = $apiInstance->authenticate($authentication_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ClientApi->authenticate: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **authentication_request** | [**\OpenAPI\Client\Model\AuthenticationRequest**](../Model/AuthenticationRequest.md)|  | [optional]

### Return type

[**\OpenAPI\Client\Model\AuthenticationResponse**](../Model/AuthenticationResponse.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getAllSegments()`

```php
getAllSegments($environment_uuid): \OpenAPI\Client\Model\Segment[]
```

Retrieve all segments.

Used to retrieve all segments for certain account id.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: BearerAuth
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\ClientApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$environment_uuid = 'environment_uuid_example'; // string | Unique identifier for the environment object in the API.

try {
    $result = $apiInstance->getAllSegments($environment_uuid);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ClientApi->getAllSegments: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **environment_uuid** | **string**| Unique identifier for the environment object in the API. |

### Return type

[**\OpenAPI\Client\Model\Segment[]**](../Model/Segment.md)

### Authorization

[BearerAuth](../../README.md#BearerAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getEvaluationByIdentifier()`

```php
getEvaluationByIdentifier($environment_uuid, $feature, $target): \OpenAPI\Client\Model\Evaluation
```

Get feature evaluations for target

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: BearerAuth
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\ClientApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$environment_uuid = 'environment_uuid_example'; // string | Unique identifier for the environment object in the API.
$feature = 'feature_example'; // string | Unique identifier for the flag object in the API.
$target = 'target_example'; // string | Unique identifier for the target object in the API.

try {
    $result = $apiInstance->getEvaluationByIdentifier($environment_uuid, $feature, $target);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ClientApi->getEvaluationByIdentifier: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **environment_uuid** | **string**| Unique identifier for the environment object in the API. |
 **feature** | **string**| Unique identifier for the flag object in the API. |
 **target** | **string**| Unique identifier for the target object in the API. |

### Return type

[**\OpenAPI\Client\Model\Evaluation**](../Model/Evaluation.md)

### Authorization

[BearerAuth](../../README.md#BearerAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getEvaluations()`

```php
getEvaluations($environment_uuid, $target): \OpenAPI\Client\Model\GetEvaluations200Response
```

Get feature evaluations for target

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: BearerAuth
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\ClientApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$environment_uuid = 'environment_uuid_example'; // string | Unique identifier for the environment object in the API.
$target = 'target_example'; // string | Unique identifier for the target object in the API.

try {
    $result = $apiInstance->getEvaluations($environment_uuid, $target);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ClientApi->getEvaluations: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **environment_uuid** | **string**| Unique identifier for the environment object in the API. |
 **target** | **string**| Unique identifier for the target object in the API. |

### Return type

[**\OpenAPI\Client\Model\GetEvaluations200Response**](../Model/GetEvaluations200Response.md)

### Authorization

[BearerAuth](../../README.md#BearerAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getFeatureConfig()`

```php
getFeatureConfig($environment_uuid): \OpenAPI\Client\Model\FeatureConfig[]
```

Get all feature flags activations

All feature flags with activations in project environment

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: BearerAuth
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\ClientApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$environment_uuid = 'environment_uuid_example'; // string | Unique identifier for the environment object in the API.

try {
    $result = $apiInstance->getFeatureConfig($environment_uuid);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ClientApi->getFeatureConfig: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **environment_uuid** | **string**| Unique identifier for the environment object in the API. |

### Return type

[**\OpenAPI\Client\Model\FeatureConfig[]**](../Model/FeatureConfig.md)

### Authorization

[BearerAuth](../../README.md#BearerAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getFeatureConfigByIdentifier()`

```php
getFeatureConfigByIdentifier($identifier, $environment_uuid): \OpenAPI\Client\Model\FeatureConfig
```

Get feature config

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: BearerAuth
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\ClientApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$identifier = 'identifier_example'; // string | Unique identifier for the flag object in the API.
$environment_uuid = 'environment_uuid_example'; // string | Unique identifier for the environment object in the API.

try {
    $result = $apiInstance->getFeatureConfigByIdentifier($identifier, $environment_uuid);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ClientApi->getFeatureConfigByIdentifier: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **identifier** | **string**| Unique identifier for the flag object in the API. |
 **environment_uuid** | **string**| Unique identifier for the environment object in the API. |

### Return type

[**\OpenAPI\Client\Model\FeatureConfig**](../Model/FeatureConfig.md)

### Authorization

[BearerAuth](../../README.md#BearerAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getSegmentByIdentifier()`

```php
getSegmentByIdentifier($identifier, $environment_uuid): \OpenAPI\Client\Model\Segment
```

Retrieve a segment by identifier

Used to retrieve a segment for a certain account id by identifier

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: BearerAuth
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\ClientApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$identifier = 'identifier_example'; // string | Unique identifier for the segment object in the API
$environment_uuid = 'environment_uuid_example'; // string | Unique identifier for the environment object in the API

try {
    $result = $apiInstance->getSegmentByIdentifier($identifier, $environment_uuid);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ClientApi->getSegmentByIdentifier: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **identifier** | **string**| Unique identifier for the segment object in the API |
 **environment_uuid** | **string**| Unique identifier for the environment object in the API |

### Return type

[**\OpenAPI\Client\Model\Segment**](../Model/Segment.md)

### Authorization

[BearerAuth](../../README.md#BearerAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `stream()`

```php
stream($api_key)
```

Stream endpoint.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: BearerAuth
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\ClientApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$api_key = 'api_key_example'; // string

try {
    $apiInstance->stream($api_key);
} catch (Exception $e) {
    echo 'Exception when calling ClientApi->stream: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **api_key** | **string**|  |

### Return type

void (empty response body)

### Authorization

[BearerAuth](../../README.md#BearerAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
