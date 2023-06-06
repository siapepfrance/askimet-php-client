# SiapepFranceAskimet\Client\DefaultApi

All URIs are relative to https://rest.akismet.com, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**call1CommentCheckPost()**](DefaultApi.md#call1CommentCheckPost) | **POST** /1.1/comment-check | Verify a comment against Akismet |
| [**call1SubmitHamPost()**](DefaultApi.md#call1SubmitHamPost) | **POST** /1.1/submit-ham | Submit a comment identified as legitimate |
| [**call1SubmitSpamPost()**](DefaultApi.md#call1SubmitSpamPost) | **POST** /1.1/submit-spam | Submit a comment identified as spam |
| [**call1VerifyKeyPost()**](DefaultApi.md#call1VerifyKeyPost) | **POST** /1.1/verify-key | Verify the validity of an Akismet API key |
| [**call2KeySitesPost()**](DefaultApi.md#call2KeySitesPost) | **POST** /1.2/key-sites | Get a list of sites associated with an Akismet key |
| [**call2UsageLimitPost()**](DefaultApi.md#call2UsageLimitPost) | **POST** /1.2/usage-limit | Get usage limits of the Akismet key |


## `call1CommentCheckPost()`

```php
call1CommentCheckPost($comment_check_model)
```

Verify a comment against Akismet

Verifies a comment using Akismet to determine if it is considered spam.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new SiapepFranceAskimet\Client\Api\DefaultApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$comment_check_model = new \SiapepFranceAskimet\Client\Model\CommentCheckModel(); // \SiapepFranceAskimet\Client\Model\CommentCheckModel

try {
    $apiInstance->call1CommentCheckPost($comment_check_model);
} catch (Exception $e) {
    echo 'Exception when calling DefaultApi->call1CommentCheckPost: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **comment_check_model** | [**\SiapepFranceAskimet\Client\Model\CommentCheckModel**](../Model/CommentCheckModel.md)|  | |

### Return type

void (empty response body)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `call1SubmitHamPost()`

```php
call1SubmitHamPost($comment_check_model)
```

Submit a comment identified as legitimate

Submits a comment identified as legitimate to Akismet to improve its detection.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new SiapepFranceAskimet\Client\Api\DefaultApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$comment_check_model = new \SiapepFranceAskimet\Client\Model\CommentCheckModel(); // \SiapepFranceAskimet\Client\Model\CommentCheckModel

try {
    $apiInstance->call1SubmitHamPost($comment_check_model);
} catch (Exception $e) {
    echo 'Exception when calling DefaultApi->call1SubmitHamPost: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **comment_check_model** | [**\SiapepFranceAskimet\Client\Model\CommentCheckModel**](../Model/CommentCheckModel.md)|  | |

### Return type

void (empty response body)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `call1SubmitSpamPost()`

```php
call1SubmitSpamPost($comment_check_model)
```

Submit a comment identified as spam

Submits a comment identified as spam to Akismet to improve its detection.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new SiapepFranceAskimet\Client\Api\DefaultApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$comment_check_model = new \SiapepFranceAskimet\Client\Model\CommentCheckModel(); // \SiapepFranceAskimet\Client\Model\CommentCheckModel

try {
    $apiInstance->call1SubmitSpamPost($comment_check_model);
} catch (Exception $e) {
    echo 'Exception when calling DefaultApi->call1SubmitSpamPost: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **comment_check_model** | [**\SiapepFranceAskimet\Client\Model\CommentCheckModel**](../Model/CommentCheckModel.md)|  | |

### Return type

void (empty response body)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `call1VerifyKeyPost()`

```php
call1VerifyKeyPost($verify_key_model)
```

Verify the validity of an Akismet API key

Verifies the validity of an Akismet API key.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new SiapepFranceAskimet\Client\Api\DefaultApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$verify_key_model = new \SiapepFranceAskimet\Client\Model\VerifyKeyModel(); // \SiapepFranceAskimet\Client\Model\VerifyKeyModel

try {
    $apiInstance->call1VerifyKeyPost($verify_key_model);
} catch (Exception $e) {
    echo 'Exception when calling DefaultApi->call1VerifyKeyPost: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **verify_key_model** | [**\SiapepFranceAskimet\Client\Model\VerifyKeyModel**](../Model/VerifyKeyModel.md)|  | |

### Return type

void (empty response body)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `call2KeySitesPost()`

```php
call2KeySitesPost($key_sites_model)
```

Get a list of sites associated with an Akismet key

Retrieves a list of sites associated with an Akismet key.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new SiapepFranceAskimet\Client\Api\DefaultApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$key_sites_model = new \SiapepFranceAskimet\Client\Model\KeySitesModel(); // \SiapepFranceAskimet\Client\Model\KeySitesModel

try {
    $apiInstance->call2KeySitesPost($key_sites_model);
} catch (Exception $e) {
    echo 'Exception when calling DefaultApi->call2KeySitesPost: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **key_sites_model** | [**\SiapepFranceAskimet\Client\Model\KeySitesModel**](../Model/KeySitesModel.md)|  | |

### Return type

void (empty response body)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `call2UsageLimitPost()`

```php
call2UsageLimitPost($usage_limit_model)
```

Get usage limits of the Akismet key

Retrieves the usage limits of the Akismet key.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new SiapepFranceAskimet\Client\Api\DefaultApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$usage_limit_model = new \SiapepFranceAskimet\Client\Model\UsageLimitModel(); // \SiapepFranceAskimet\Client\Model\UsageLimitModel

try {
    $apiInstance->call2UsageLimitPost($usage_limit_model);
} catch (Exception $e) {
    echo 'Exception when calling DefaultApi->call2UsageLimitPost: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **usage_limit_model** | [**\SiapepFranceAskimet\Client\Model\UsageLimitModel**](../Model/UsageLimitModel.md)|  | |

### Return type

void (empty response body)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
