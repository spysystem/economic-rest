# # DepartmentalDistribution

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**departmental_distribution_number** | **int** | A unique numeric identifier for the departmental distribution. | [optional]
**name** | **string** | A descriptive name of the specific departmental distribution. | [optional]
**distribution_type** | **string** | This property indicates whether the distribution is system generated from a department or if it is one created by a user. In order to make it easy to distribute everything to one department, the system generates a distribution for each department. | [optional]
**distributions** | [**\EconomicRest\Model\Distribution[]**](Distribution.md) | A list of departments and their share of the distribution in percentage. The percentages always add up to 100%. | [optional]
**self** | **string** | The unique self reference of the departmental distribution. | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
