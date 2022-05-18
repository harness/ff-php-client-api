<?php
/**
 * FeatureConfig
 *
 * PHP version 7.2
 *
 * @category Class
 * @package  OpenAPI\Client
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */

/**
 * Harness feature flag service client apis
 *
 * No description provided (generated by Openapi Generator https://github.com/openapitools/openapi-generator)
 *
 * The version of the OpenAPI document: 1.0.0
 * Contact: cf@harness.io
 * Generated by: https://openapi-generator.tech
 * OpenAPI Generator version: 5.2.0-SNAPSHOT
 */

/**
 * NOTE: This class is auto generated by OpenAPI Generator (https://openapi-generator.tech).
 * https://openapi-generator.tech
 * Do not edit the class manually.
 */

namespace OpenAPI\Client\Model;

use \ArrayAccess;
use \OpenAPI\Client\ObjectSerializer;

/**
 * FeatureConfig Class Doc Comment
 *
 * @category Class
 * @package  OpenAPI\Client
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<TKey, TValue>
 * @template TKey int|null
 * @template TValue mixed|null
 */
class FeatureConfig implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'FeatureConfig';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'project' => 'string',
        'environment' => 'string',
        'feature' => 'string',
        'state' => '\OpenAPI\Client\Model\FeatureState',
        'kind' => 'string',
        'variations' => '\OpenAPI\Client\Model\Variation[]',
        'rules' => '\OpenAPI\Client\Model\ServingRule[]',
        'default_serve' => '\OpenAPI\Client\Model\Serve',
        'off_variation' => 'string',
        'prerequisites' => '\OpenAPI\Client\Model\Prerequisite[]',
        'variation_to_target_map' => '\OpenAPI\Client\Model\VariationMap[]',
        'version' => 'int'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'project' => null,
        'environment' => null,
        'feature' => null,
        'state' => null,
        'kind' => null,
        'variations' => null,
        'rules' => null,
        'default_serve' => null,
        'off_variation' => null,
        'prerequisites' => null,
        'variation_to_target_map' => null,
        'version' => 'int64'
    ];

    /**
     * Array of property to type mappings. Used for (de)serialization
     *
     * @return array
     */
    public static function openAPITypes()
    {
        return self::$openAPITypes;
    }

    /**
     * Array of property to format mappings. Used for (de)serialization
     *
     * @return array
     */
    public static function openAPIFormats()
    {
        return self::$openAPIFormats;
    }

    /**
     * Array of attributes where the key is the local name,
     * and the value is the original name
     *
     * @var string[]
     */
    protected static $attributeMap = [
        'project' => 'project',
        'environment' => 'environment',
        'feature' => 'feature',
        'state' => 'state',
        'kind' => 'kind',
        'variations' => 'variations',
        'rules' => 'rules',
        'default_serve' => 'defaultServe',
        'off_variation' => 'offVariation',
        'prerequisites' => 'prerequisites',
        'variation_to_target_map' => 'variationToTargetMap',
        'version' => 'version'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'project' => 'setProject',
        'environment' => 'setEnvironment',
        'feature' => 'setFeature',
        'state' => 'setState',
        'kind' => 'setKind',
        'variations' => 'setVariations',
        'rules' => 'setRules',
        'default_serve' => 'setDefaultServe',
        'off_variation' => 'setOffVariation',
        'prerequisites' => 'setPrerequisites',
        'variation_to_target_map' => 'setVariationToTargetMap',
        'version' => 'setVersion'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'project' => 'getProject',
        'environment' => 'getEnvironment',
        'feature' => 'getFeature',
        'state' => 'getState',
        'kind' => 'getKind',
        'variations' => 'getVariations',
        'rules' => 'getRules',
        'default_serve' => 'getDefaultServe',
        'off_variation' => 'getOffVariation',
        'prerequisites' => 'getPrerequisites',
        'variation_to_target_map' => 'getVariationToTargetMap',
        'version' => 'getVersion'
    ];

    /**
     * Array of attributes where the key is the local name,
     * and the value is the original name
     *
     * @return array
     */
    public static function attributeMap()
    {
        return self::$attributeMap;
    }

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @return array
     */
    public static function setters()
    {
        return self::$setters;
    }

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @return array
     */
    public static function getters()
    {
        return self::$getters;
    }

    /**
     * The original name of the model.
     *
     * @return string
     */
    public function getModelName()
    {
        return self::$openAPIModelName;
    }

    const KIND_BOOLEAN = 'boolean';
    const KIND_INT = 'int';
    const KIND_STRING = 'string';
    const KIND_JSON = 'json';

    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getKindAllowableValues()
    {
        return [
            self::KIND_BOOLEAN,
            self::KIND_INT,
            self::KIND_STRING,
            self::KIND_JSON,
        ];
    }

    /**
     * Associative array for storing property values
     *
     * @var mixed[]
     */
    protected $container = [];

    /**
     * Constructor
     *
     * @param mixed[] $data Associated array of property values
     *                      initializing the model
     */
    public function __construct(array $data = null)
    {
        $this->container['project'] = $data['project'] ?? null;
        $this->container['environment'] = $data['environment'] ?? null;
        $this->container['feature'] = $data['feature'] ?? null;
        $this->container['state'] = $data['state'] ?? null;
        $this->container['kind'] = $data['kind'] ?? null;
        $this->container['variations'] = $data['variations'] ?? null;
        $this->container['rules'] = $data['rules'] ?? null;
        $this->container['default_serve'] = $data['default_serve'] ?? null;
        $this->container['off_variation'] = $data['off_variation'] ?? null;
        $this->container['prerequisites'] = $data['prerequisites'] ?? null;
        $this->container['variation_to_target_map'] = $data['variation_to_target_map'] ?? null;
        $this->container['version'] = $data['version'] ?? null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        if ($this->container['project'] === null) {
            $invalidProperties[] = "'project' can't be null";
        }
        if ($this->container['environment'] === null) {
            $invalidProperties[] = "'environment' can't be null";
        }
        if ($this->container['feature'] === null) {
            $invalidProperties[] = "'feature' can't be null";
        }
        if ($this->container['state'] === null) {
            $invalidProperties[] = "'state' can't be null";
        }
        if ($this->container['kind'] === null) {
            $invalidProperties[] = "'kind' can't be null";
        }
        $allowedValues = $this->getKindAllowableValues();
        if (!is_null($this->container['kind']) && !in_array($this->container['kind'], $allowedValues, true)) {
            $invalidProperties[] = sprintf(
                "invalid value '%s' for 'kind', must be one of '%s'",
                $this->container['kind'],
                implode("', '", $allowedValues)
            );
        }

        if ($this->container['variations'] === null) {
            $invalidProperties[] = "'variations' can't be null";
        }
        if ((count($this->container['variations']) < 2)) {
            $invalidProperties[] = "invalid value for 'variations', number of items must be greater than or equal to 2.";
        }

        if ($this->container['default_serve'] === null) {
            $invalidProperties[] = "'default_serve' can't be null";
        }
        if ($this->container['off_variation'] === null) {
            $invalidProperties[] = "'off_variation' can't be null";
        }
        return $invalidProperties;
    }

    /**
     * Validate all the properties in the model
     * return true if all passed
     *
     * @return bool True if all properties are valid
     */
    public function valid()
    {
        return count($this->listInvalidProperties()) === 0;
    }


    /**
     * Gets project
     *
     * @return string
     */
    public function getProject()
    {
        return $this->container['project'];
    }

    /**
     * Sets project
     *
     * @param string $project project
     *
     * @return self
     */
    public function setProject($project)
    {
        $this->container['project'] = $project;

        return $this;
    }

    /**
     * Gets environment
     *
     * @return string
     */
    public function getEnvironment()
    {
        return $this->container['environment'];
    }

    /**
     * Sets environment
     *
     * @param string $environment environment
     *
     * @return self
     */
    public function setEnvironment($environment)
    {
        $this->container['environment'] = $environment;

        return $this;
    }

    /**
     * Gets feature
     *
     * @return string
     */
    public function getFeature()
    {
        return $this->container['feature'];
    }

    /**
     * Sets feature
     *
     * @param string $feature feature
     *
     * @return self
     */
    public function setFeature($feature)
    {
        $this->container['feature'] = $feature;

        return $this;
    }

    /**
     * Gets state
     *
     * @return \OpenAPI\Client\Model\FeatureState
     */
    public function getState()
    {
        return $this->container['state'];
    }

    /**
     * Sets state
     *
     * @param \OpenAPI\Client\Model\FeatureState $state state
     *
     * @return self
     */
    public function setState($state)
    {
        $this->container['state'] = $state;

        return $this;
    }

    /**
     * Gets kind
     *
     * @return string
     */
    public function getKind()
    {
        return $this->container['kind'];
    }

    /**
     * Sets kind
     *
     * @param string $kind kind
     *
     * @return self
     */
    public function setKind($kind)
    {
        $allowedValues = $this->getKindAllowableValues();
        if (!in_array($kind, $allowedValues, true)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value '%s' for 'kind', must be one of '%s'",
                    $kind,
                    implode("', '", $allowedValues)
                )
            );
        }
        $this->container['kind'] = $kind;

        return $this;
    }

    /**
     * Gets variations
     *
     * @return \OpenAPI\Client\Model\Variation[]
     */
    public function getVariations()
    {
        return $this->container['variations'];
    }

    /**
     * Sets variations
     *
     * @param \OpenAPI\Client\Model\Variation[] $variations variations
     *
     * @return self
     */
    public function setVariations($variations)
    {


        if ((count($variations) < 2)) {
            throw new \InvalidArgumentException('invalid length for $variations when calling FeatureConfig., number of items must be greater than or equal to 2.');
        }
        $this->container['variations'] = $variations;

        return $this;
    }

    /**
     * Gets rules
     *
     * @return \OpenAPI\Client\Model\ServingRule[]|null
     */
    public function getRules()
    {
        return $this->container['rules'];
    }

    /**
     * Sets rules
     *
     * @param \OpenAPI\Client\Model\ServingRule[]|null $rules rules
     *
     * @return self
     */
    public function setRules($rules)
    {
        $this->container['rules'] = $rules;

        return $this;
    }

    /**
     * Gets default_serve
     *
     * @return \OpenAPI\Client\Model\Serve
     */
    public function getDefaultServe()
    {
        return $this->container['default_serve'];
    }

    /**
     * Sets default_serve
     *
     * @param \OpenAPI\Client\Model\Serve $default_serve default_serve
     *
     * @return self
     */
    public function setDefaultServe($default_serve)
    {
        $this->container['default_serve'] = $default_serve;

        return $this;
    }

    /**
     * Gets off_variation
     *
     * @return string
     */
    public function getOffVariation()
    {
        return $this->container['off_variation'];
    }

    /**
     * Sets off_variation
     *
     * @param string $off_variation off_variation
     *
     * @return self
     */
    public function setOffVariation($off_variation)
    {
        $this->container['off_variation'] = $off_variation;

        return $this;
    }

    /**
     * Gets prerequisites
     *
     * @return \OpenAPI\Client\Model\Prerequisite[]|null
     */
    public function getPrerequisites()
    {
        return $this->container['prerequisites'];
    }

    /**
     * Sets prerequisites
     *
     * @param \OpenAPI\Client\Model\Prerequisite[]|null $prerequisites prerequisites
     *
     * @return self
     */
    public function setPrerequisites($prerequisites)
    {
        $this->container['prerequisites'] = $prerequisites;

        return $this;
    }

    /**
     * Gets variation_to_target_map
     *
     * @return \OpenAPI\Client\Model\VariationMap[]|null
     */
    public function getVariationToTargetMap()
    {
        return $this->container['variation_to_target_map'];
    }

    /**
     * Sets variation_to_target_map
     *
     * @param \OpenAPI\Client\Model\VariationMap[]|null $variation_to_target_map variation_to_target_map
     *
     * @return self
     */
    public function setVariationToTargetMap($variation_to_target_map)
    {
        $this->container['variation_to_target_map'] = $variation_to_target_map;

        return $this;
    }

    /**
     * Gets version
     *
     * @return int|null
     */
    public function getVersion()
    {
        return $this->container['version'];
    }

    /**
     * Sets version
     *
     * @param int|null $version version
     *
     * @return self
     */
    public function setVersion($version)
    {
        $this->container['version'] = $version;

        return $this;
    }
    /**
     * Returns true if offset exists. False otherwise.
     *
     * @param integer $offset Offset
     *
     * @return boolean
     */
    public function offsetExists($offset)
    {
        return isset($this->container[$offset]);
    }

    /**
     * Gets offset.
     *
     * @param integer $offset Offset
     *
     * @return mixed|null
     */
    public function offsetGet($offset)
    {
        return $this->container[$offset] ?? null;
    }

    /**
     * Sets value based on offset.
     *
     * @param int|null $offset Offset
     * @param mixed    $value  Value to be set
     *
     * @return void
     */
    public function offsetSet($offset, $value)
    {
        if (is_null($offset)) {
            $this->container[] = $value;
        } else {
            $this->container[$offset] = $value;
        }
    }

    /**
     * Unsets offset.
     *
     * @param integer $offset Offset
     *
     * @return void
     */
    public function offsetUnset($offset)
    {
        unset($this->container[$offset]);
    }

    /**
     * Serializes the object to a value that can be serialized natively by json_encode().
     * @link https://www.php.net/manual/en/jsonserializable.jsonserialize.php
     *
     * @return mixed Returns data which can be serialized by json_encode(), which is a value
     * of any type other than a resource.
     */
    public function jsonSerialize()
    {
       return ObjectSerializer::sanitizeForSerialization($this);
    }

    /**
     * Gets the string presentation of the object
     *
     * @return string
     */
    public function __toString()
    {
        return json_encode(
            ObjectSerializer::sanitizeForSerialization($this),
            JSON_PRETTY_PRINT
        );
    }

    /**
     * Gets a header-safe presentation of the object
     *
     * @return string
     */
    public function toHeaderValue()
    {
        return json_encode(ObjectSerializer::sanitizeForSerialization($this));
    }
}


