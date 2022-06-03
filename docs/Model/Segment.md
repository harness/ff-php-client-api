# # Segment

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**identifier** | **string** | Unique identifier for the target group. |
**name** | **string** | Name of the target group. |
**environment** | **string** | The environment this target group belongs to | [optional]
**tags** | [**\OpenAPI\Client\Model\Tag[]**](Tag.md) | Tags for this target group | [optional]
**included** | [**\OpenAPI\Client\Model\Target[]**](Target.md) | A list of Targets who belong to this target group | [optional]
**excluded** | [**\OpenAPI\Client\Model\Target[]**](Target.md) | A list of Targets who are excluded from this target group | [optional]
**rules** | [**\OpenAPI\Client\Model\Clause[]**](Clause.md) | An array of rules that can cause a user to be included in this segment. | [optional]
**created_at** | **int** | The data and time in milliseconds when the group was created | [optional]
**modified_at** | **int** | The data and time in milliseconds when the group was last modified | [optional]
**version** | **int** | The version of this group.  Each time it is modified the version is incremented | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
