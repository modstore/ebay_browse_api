<?php
/**
 * AvailableCoupon
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
 * AvailableCoupon Class Doc Comment
 *
 * @category Class
 * @package  Modstore\EbayBrowseApi
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<string, mixed>
 */
class AvailableCoupon implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'AvailableCoupon';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'constraint' => '\Modstore\EbayBrowseApi\Model\CouponConstraint',
        'discount_amount' => '\Modstore\EbayBrowseApi\Model\Amount',
        'discount_type' => 'string',
        'message' => 'string',
        'redemption_code' => 'string',
        'terms_web_url' => 'string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'constraint' => null,
        'discount_amount' => null,
        'discount_type' => null,
        'message' => null,
        'redemption_code' => null,
        'terms_web_url' => null
    ];

    /**
      * Array of nullable properties. Used for (de)serialization
      *
      * @var boolean[]
      */
    protected static array $openAPINullables = [
        'constraint' => false,
        'discount_amount' => false,
        'discount_type' => false,
        'message' => false,
        'redemption_code' => false,
        'terms_web_url' => false
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
        'constraint' => 'constraint',
        'discount_amount' => 'discountAmount',
        'discount_type' => 'discountType',
        'message' => 'message',
        'redemption_code' => 'redemptionCode',
        'terms_web_url' => 'termsWebUrl'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'constraint' => 'setConstraint',
        'discount_amount' => 'setDiscountAmount',
        'discount_type' => 'setDiscountType',
        'message' => 'setMessage',
        'redemption_code' => 'setRedemptionCode',
        'terms_web_url' => 'setTermsWebUrl'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'constraint' => 'getConstraint',
        'discount_amount' => 'getDiscountAmount',
        'discount_type' => 'getDiscountType',
        'message' => 'getMessage',
        'redemption_code' => 'getRedemptionCode',
        'terms_web_url' => 'getTermsWebUrl'
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
        $this->setIfExists('constraint', $data ?? [], null);
        $this->setIfExists('discount_amount', $data ?? [], null);
        $this->setIfExists('discount_type', $data ?? [], null);
        $this->setIfExists('message', $data ?? [], null);
        $this->setIfExists('redemption_code', $data ?? [], null);
        $this->setIfExists('terms_web_url', $data ?? [], null);
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
     * Gets constraint
     *
     * @return \Modstore\EbayBrowseApi\Model\CouponConstraint|null
     */
    public function getConstraint()
    {
        return $this->container['constraint'];
    }

    /**
     * Sets constraint
     *
     * @param \Modstore\EbayBrowseApi\Model\CouponConstraint|null $constraint constraint
     *
     * @return self
     */
    public function setConstraint($constraint)
    {
        if (is_null($constraint)) {
            throw new \InvalidArgumentException('non-nullable constraint cannot be null');
        }
        $this->container['constraint'] = $constraint;

        return $this;
    }

    /**
     * Gets discount_amount
     *
     * @return \Modstore\EbayBrowseApi\Model\Amount|null
     */
    public function getDiscountAmount()
    {
        return $this->container['discount_amount'];
    }

    /**
     * Sets discount_amount
     *
     * @param \Modstore\EbayBrowseApi\Model\Amount|null $discount_amount discount_amount
     *
     * @return self
     */
    public function setDiscountAmount($discount_amount)
    {
        if (is_null($discount_amount)) {
            throw new \InvalidArgumentException('non-nullable discount_amount cannot be null');
        }
        $this->container['discount_amount'] = $discount_amount;

        return $this;
    }

    /**
     * Gets discount_type
     *
     * @return string|null
     */
    public function getDiscountType()
    {
        return $this->container['discount_type'];
    }

    /**
     * Sets discount_type
     *
     * @param string|null $discount_type The type of discount that the coupon applies. For implementation help, refer to <a href='https://developer.ebay.com/api-docs/buy/browse/types/gct:CouponDiscountType'>eBay API documentation</a>
     *
     * @return self
     */
    public function setDiscountType($discount_type)
    {
        if (is_null($discount_type)) {
            throw new \InvalidArgumentException('non-nullable discount_type cannot be null');
        }
        $this->container['discount_type'] = $discount_type;

        return $this;
    }

    /**
     * Gets message
     *
     * @return string|null
     */
    public function getMessage()
    {
        return $this->container['message'];
    }

    /**
     * Sets message
     *
     * @param string|null $message A description of the coupon.<br><br><span class=\"tablenote\"><b>Note:</b> The value returned in the <code>termsWebUrl</code> field should appear for all experiences when displaying coupons. The value in the <code>availableCoupons.message</code> field must also be included if returned in the API response.</span>
     *
     * @return self
     */
    public function setMessage($message)
    {
        if (is_null($message)) {
            throw new \InvalidArgumentException('non-nullable message cannot be null');
        }
        $this->container['message'] = $message;

        return $this;
    }

    /**
     * Gets redemption_code
     *
     * @return string|null
     */
    public function getRedemptionCode()
    {
        return $this->container['redemption_code'];
    }

    /**
     * Sets redemption_code
     *
     * @param string|null $redemption_code The coupon code.
     *
     * @return self
     */
    public function setRedemptionCode($redemption_code)
    {
        if (is_null($redemption_code)) {
            throw new \InvalidArgumentException('non-nullable redemption_code cannot be null');
        }
        $this->container['redemption_code'] = $redemption_code;

        return $this;
    }

    /**
     * Gets terms_web_url
     *
     * @return string|null
     */
    public function getTermsWebUrl()
    {
        return $this->container['terms_web_url'];
    }

    /**
     * Sets terms_web_url
     *
     * @param string|null $terms_web_url The URL to the coupon terms of use.<br><br><span class=\"tablenote\"><b>Note:</b> The value returned in the <code>termsWebUrl</code> field should appear for all experiences when displaying coupons. The value in the <code>availableCoupons.message</code> field must also be included if returned in the API response.</span>
     *
     * @return self
     */
    public function setTermsWebUrl($terms_web_url)
    {
        if (is_null($terms_web_url)) {
            throw new \InvalidArgumentException('non-nullable terms_web_url cannot be null');
        }
        $this->container['terms_web_url'] = $terms_web_url;

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


