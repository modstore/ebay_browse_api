<?php
/**
 * ShippingOptionSummary
 *
 * PHP version 7.4
 *
 * @category Class
 * @package  Modstore\EbayBrowseApi
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */

/**
 * Browse API
 *
 * The Browse API has the following resources:<ul><li><b>item_summary:</b><br>Allows shoppers to search for specific items by keyword, GTIN, category, charity, product, image, or item aspects and refine the results by using filters, such as aspects, compatibility, and fields values, or UI parameters.</li><li><b>item:</b><br>Allows shoppers to retrieve the details of a specific item or all items in an item group, which is an item with variations such as color and size and check if a product is compatible with the specified item, such as if a specific car is compatible with a specific part.<br><br>This resource also provides a bridge between the eBay legacy APIs, such as the <a href=\"/api-docs/user-guides/static/finding-user-guide-landing.html\" target=\"_blank\">Finding</b>, and the RESTful APIs, which use different formats for the item IDs.</li></ul>The <b>item_summary</b>, <b>search_by_image</b>, and <b>item</b> resource calls require an <a href=\"/api-docs/static/oauth-client-credentials-grant.html\" target=\"_blank\">Application access token</a>.
 *
 * The version of the OpenAPI document: v1.19.9
 * Generated by: https://openapi-generator.tech
 * Generator version: 7.8.0
 */

/**
 * NOTE: This class is auto generated by OpenAPI Generator (https://openapi-generator.tech).
 * https://openapi-generator.tech
 * Do not edit the class manually.
 */

namespace Modstore\EbayBrowseApi\Model;

use \ArrayAccess;
use \Modstore\EbayBrowseApi\ObjectSerializer;

/**
 * ShippingOptionSummary Class Doc Comment
 *
 * @category Class
 * @description The type that defines the fields for the shipping information.
 * @package  Modstore\EbayBrowseApi
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<string, mixed>
 */
class ShippingOptionSummary implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'ShippingOptionSummary';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'guaranteed_delivery' => 'bool',
        'max_estimated_delivery_date' => 'string',
        'min_estimated_delivery_date' => 'string',
        'shipping_cost' => '\Modstore\EbayBrowseApi\Model\ConvertedAmount',
        'shipping_cost_type' => 'string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'guaranteed_delivery' => null,
        'max_estimated_delivery_date' => null,
        'min_estimated_delivery_date' => null,
        'shipping_cost' => null,
        'shipping_cost_type' => null
    ];

    /**
      * Array of nullable properties. Used for (de)serialization
      *
      * @var boolean[]
      */
    protected static array $openAPINullables = [
        'guaranteed_delivery' => false,
        'max_estimated_delivery_date' => false,
        'min_estimated_delivery_date' => false,
        'shipping_cost' => false,
        'shipping_cost_type' => false
    ];

    /**
      * If a nullable field gets set to null, insert it here
      *
      * @var boolean[]
      */
    protected array $openAPINullablesSetToNull = [];

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
     * Array of nullable properties
     *
     * @return array
     */
    protected static function openAPINullables(): array
    {
        return self::$openAPINullables;
    }

    /**
     * Array of nullable field names deliberately set to null
     *
     * @return boolean[]
     */
    private function getOpenAPINullablesSetToNull(): array
    {
        return $this->openAPINullablesSetToNull;
    }

    /**
     * Setter - Array of nullable field names deliberately set to null
     *
     * @param boolean[] $openAPINullablesSetToNull
     */
    private function setOpenAPINullablesSetToNull(array $openAPINullablesSetToNull): void
    {
        $this->openAPINullablesSetToNull = $openAPINullablesSetToNull;
    }

    /**
     * Checks if a property is nullable
     *
     * @param string $property
     * @return bool
     */
    public static function isNullable(string $property): bool
    {
        return self::openAPINullables()[$property] ?? false;
    }

    /**
     * Checks if a nullable property is set to null.
     *
     * @param string $property
     * @return bool
     */
    public function isNullableSetToNull(string $property): bool
    {
        return in_array($property, $this->getOpenAPINullablesSetToNull(), true);
    }

    /**
     * Array of attributes where the key is the local name,
     * and the value is the original name
     *
     * @var string[]
     */
    protected static $attributeMap = [
        'guaranteed_delivery' => 'guaranteedDelivery',
        'max_estimated_delivery_date' => 'maxEstimatedDeliveryDate',
        'min_estimated_delivery_date' => 'minEstimatedDeliveryDate',
        'shipping_cost' => 'shippingCost',
        'shipping_cost_type' => 'shippingCostType'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'guaranteed_delivery' => 'setGuaranteedDelivery',
        'max_estimated_delivery_date' => 'setMaxEstimatedDeliveryDate',
        'min_estimated_delivery_date' => 'setMinEstimatedDeliveryDate',
        'shipping_cost' => 'setShippingCost',
        'shipping_cost_type' => 'setShippingCostType'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'guaranteed_delivery' => 'getGuaranteedDelivery',
        'max_estimated_delivery_date' => 'getMaxEstimatedDeliveryDate',
        'min_estimated_delivery_date' => 'getMinEstimatedDeliveryDate',
        'shipping_cost' => 'getShippingCost',
        'shipping_cost_type' => 'getShippingCostType'
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
        $this->setIfExists('guaranteed_delivery', $data ?? [], null);
        $this->setIfExists('max_estimated_delivery_date', $data ?? [], null);
        $this->setIfExists('min_estimated_delivery_date', $data ?? [], null);
        $this->setIfExists('shipping_cost', $data ?? [], null);
        $this->setIfExists('shipping_cost_type', $data ?? [], null);
    }

    /**
    * Sets $this->container[$variableName] to the given data or to the given default Value; if $variableName
    * is nullable and its value is set to null in the $fields array, then mark it as "set to null" in the
    * $this->openAPINullablesSetToNull array
    *
    * @param string $variableName
    * @param array  $fields
    * @param mixed  $defaultValue
    */
    private function setIfExists(string $variableName, array $fields, $defaultValue): void
    {
        if (self::isNullable($variableName) && array_key_exists($variableName, $fields) && is_null($fields[$variableName])) {
            $this->openAPINullablesSetToNull[] = $variableName;
        }

        $this->container[$variableName] = $fields[$variableName] ?? $defaultValue;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

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
     * Gets guaranteed_delivery
     *
     * @return bool|null
     */
    public function getGuaranteedDelivery()
    {
        return $this->container['guaranteed_delivery'];
    }

    /**
     * Sets guaranteed_delivery
     *
     * @param bool|null $guaranteed_delivery Although this field is still returned, it can be ignored since eBay Guaranteed Delivery is no longer a supported feature on any marketplace. This field may get removed from the schema in the future.
     *
     * @return self
     */
    public function setGuaranteedDelivery($guaranteed_delivery)
    {
        if (is_null($guaranteed_delivery)) {
            throw new \InvalidArgumentException('non-nullable guaranteed_delivery cannot be null');
        }
        $this->container['guaranteed_delivery'] = $guaranteed_delivery;

        return $this;
    }

    /**
     * Gets max_estimated_delivery_date
     *
     * @return string|null
     */
    public function getMaxEstimatedDeliveryDate()
    {
        return $this->container['max_estimated_delivery_date'];
    }

    /**
     * Sets max_estimated_delivery_date
     *
     * @param string|null $max_estimated_delivery_date The end date of the delivery window (latest projected delivery date). This value is returned in UTC format (yyyy-MM-ddThh:mm:ss.sssZ), which you can convert into the local time of the buyer.<br><br><span class=\"tablenote\"> <b>Note: </b> For the best accuracy, always include the <code>contextualLocation</code> values in the <a href=\"/api-docs/buy/static/api-browse.html#Headers\" target=\"_blank\"><code>X-EBAY-C-ENDUSERCTX</code></a> request header.</span>
     *
     * @return self
     */
    public function setMaxEstimatedDeliveryDate($max_estimated_delivery_date)
    {
        if (is_null($max_estimated_delivery_date)) {
            throw new \InvalidArgumentException('non-nullable max_estimated_delivery_date cannot be null');
        }
        $this->container['max_estimated_delivery_date'] = $max_estimated_delivery_date;

        return $this;
    }

    /**
     * Gets min_estimated_delivery_date
     *
     * @return string|null
     */
    public function getMinEstimatedDeliveryDate()
    {
        return $this->container['min_estimated_delivery_date'];
    }

    /**
     * Sets min_estimated_delivery_date
     *
     * @param string|null $min_estimated_delivery_date The start date of the delivery window (earliest projected delivery date). This value is returned in UTC format (yyyy-MM-ddThh:mm:ss.sssZ), which you can convert into the local time of the buyer.<br><br><span class=\"tablenote\"><b>Note:</b> For the best accuracy, always include the <code>contextualLocation</code> values in the <a href=\"/api-docs/buy/static/api-browse.html#Headers\" target=\"_blank\"><code>X-EBAY-C-ENDUSERCTX</code></a> request header.</span>
     *
     * @return self
     */
    public function setMinEstimatedDeliveryDate($min_estimated_delivery_date)
    {
        if (is_null($min_estimated_delivery_date)) {
            throw new \InvalidArgumentException('non-nullable min_estimated_delivery_date cannot be null');
        }
        $this->container['min_estimated_delivery_date'] = $min_estimated_delivery_date;

        return $this;
    }

    /**
     * Gets shipping_cost
     *
     * @return \Modstore\EbayBrowseApi\Model\ConvertedAmount|null
     */
    public function getShippingCost()
    {
        return $this->container['shipping_cost'];
    }

    /**
     * Sets shipping_cost
     *
     * @param \Modstore\EbayBrowseApi\Model\ConvertedAmount|null $shipping_cost shipping_cost
     *
     * @return self
     */
    public function setShippingCost($shipping_cost)
    {
        if (is_null($shipping_cost)) {
            throw new \InvalidArgumentException('non-nullable shipping_cost cannot be null');
        }
        $this->container['shipping_cost'] = $shipping_cost;

        return $this;
    }

    /**
     * Gets shipping_cost_type
     *
     * @return string|null
     */
    public function getShippingCostType()
    {
        return $this->container['shipping_cost_type'];
    }

    /**
     * Sets shipping_cost_type
     *
     * @param string|null $shipping_cost_type Indicates the type of shipping used to ship the item. Possible values are <code>FIXED</code> (flat-rate shipping) and <code>CALCULATED</code> (shipping cost calculated based on item and buyer location).
     *
     * @return self
     */
    public function setShippingCostType($shipping_cost_type)
    {
        if (is_null($shipping_cost_type)) {
            throw new \InvalidArgumentException('non-nullable shipping_cost_type cannot be null');
        }
        $this->container['shipping_cost_type'] = $shipping_cost_type;

        return $this;
    }
    /**
     * Returns true if offset exists. False otherwise.
     *
     * @param integer $offset Offset
     *
     * @return boolean
     */
    public function offsetExists($offset): bool
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
    #[\ReturnTypeWillChange]
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
    public function offsetSet($offset, $value): void
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
    public function offsetUnset($offset): void
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
    #[\ReturnTypeWillChange]
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


