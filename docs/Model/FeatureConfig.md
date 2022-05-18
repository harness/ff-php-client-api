# # FeatureConfig

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**project** | **string** |  |
**environment** | **string** |  |
**feature** | **string** |  |
**state** | [**\OpenAPI\Client\Model\FeatureState**](FeatureState.md) |  |
**kind** | **string** |  |
**variations** | [**\OpenAPI\Client\Model\Variation[]**](Variation.md) |  |
**rules** | [**\OpenAPI\Client\Model\ServingRule[]**](ServingRule.md) |  | [optional]
**default_serve** | [**\OpenAPI\Client\Model\Serve**](Serve.md) |  |
**off_variation** | **string** |  |
**prerequisites** | [**\OpenAPI\Client\Model\Prerequisite[]**](Prerequisite.md) |  | [optional]
**variation_to_target_map** | [**\OpenAPI\Client\Model\VariationMap[]**](VariationMap.md) |  | [optional]
**version** | **int** |  | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
