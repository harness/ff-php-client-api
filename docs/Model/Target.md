# # Target

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**identifier** | **string** | The unique identifier for this target |
**account** | **string** | The account ID that the target belongs to |
**org** | **string** | The identifier for the organization that the target belongs to |
**environment** | **string** | The identifier for the environment that the target belongs to |
**project** | **string** | The identifier for the project that this target belongs to |
**name** | **string** | The name of this Target |
**anonymous** | **bool** | Indicates if this target is anonymous | [optional]
**attributes** | **object** | a JSON representation of the attributes for this target | [optional]
**created_at** | **int** | The date and time in milliseconds when this Target was created | [optional]
**segments** | [**\OpenAPI\Client\Model\Segment[]**](Segment.md) | A list of Target Groups (Segments) that this Target belongs to | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
