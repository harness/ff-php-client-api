# # Segment

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**identifier** | **string** | Unique identifier for the segment. |
**name** | **string** | Name of the segment. |
**environment** | **string** |  | [optional]
**tags** | [**\OpenAPI\Client\Model\Tag[]**](Tag.md) |  | [optional]
**included** | [**\OpenAPI\Client\Model\Target[]**](Target.md) |  | [optional]
**excluded** | [**\OpenAPI\Client\Model\Target[]**](Target.md) |  | [optional]
**rules** | [**\OpenAPI\Client\Model\Clause[]**](Clause.md) | An array of rules that can cause a user to be included in this segment. | [optional]
**created_at** | **int** |  | [optional]
**modified_at** | **int** |  | [optional]
**version** | **int** |  | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
