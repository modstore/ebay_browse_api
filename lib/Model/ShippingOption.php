<?php
/**
 * ShippingOption
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
 * ShippingOption Class Doc Comment
 *
 * @category Class
 * @description The type that defines the fields for the details of a shipping provider.
 * @package  Modstore\EbayBrowseApi
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<string, mixed>
 */
class ShippingOption implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'ShippingOption';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'additional_shipping_cost_per_unit' => '\Modstore\EbayBrowseApi\Model\ConvertedAmount',
        'cut_off_date_used_for_estimate' => 'string',
        'fulfilled_through' => 'string',
        'guaranteed_delivery' => 'bool',
        'import_charges' => '\Modstore\EbayBrowseApi\Model\ConvertedAmount',
        'max_estimated_delivery_date' => 'string',
        'min_estimated_delivery_date' => 'string',
        'quantity_used_for_estimate' => 'int',
        'shipping_carrier_code' => 'string',
        'shipping_cost' => '\Modstore\EbayBrowseApi\Model\ConvertedAmount',
        'shipping_cost_type' => 'string',
        'shipping_service_code' => 'string',
        'ship_to_location_used_for_estimate' => '\Modstore\EbayBrowseApi\Model\ShipToLocation',
        'trademark_symbol' => 'string',
        'type' => 'string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'additional_shipping_cost_per_unit' => null,
        'cut_off_date_used_for_estimate' => null,
        'fulfilled_through' => null,
        'guaranteed_delivery' => null,
        'import_charges' => null,
        'max_estimated_delivery_date' => null,
        'min_estimated_delivery_date' => null,
        'quantity_used_for_estimate' => 'int32',
        'shipping_carrier_code' => null,
        'shipping_cost' => null,
        'shipping_cost_type' => null,
        'shipping_service_code' => null,
        'ship_to_location_used_for_estimate' => null,
        'trademark_symbol' => null,
        'type' => null
    ];

    /**
      * Array of nullable properties. Used for (de)serialization
      *
      * @var boolean[]
      */
    protected static array $openAPINullables = [
        'additional_shipping_cost_per_unit' => false,
        'cut_off_date_used_for_estimate' => false,
        'fulfilled_through' => false,
        'guaranteed_delivery' => false,
        'import_charges' => false,
        'max_estimated_delivery_date' => false,
        'min_estimated_delivery_date' => false,
        'quantity_used_for_estimate' => false,
        'shipping_carrier_code' => false,
        'shipping_cost' => false,
        'shipping_cost_type' => false,
        'shipping_service_code' => false,
        'ship_to_location_used_for_estimate' => false,
        'trademark_symbol' => false,
        'type' => false
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
        'additional_shipping_cost_per_unit' => 'additionalShippingCostPerUnit',
        'cut_off_date_used_for_estimate' => 'cutOffDateUsedForEstimate',
        'fulfilled_through' => 'fulfilledThrough',
        'guaranteed_delivery' => 'guaranteedDelivery',
        'import_charges' => 'importCharges',
        'max_estimated_delivery_date' => 'maxEstimatedDeliveryDate',
        'min_estimated_delivery_date' => 'minEstimatedDeliveryDate',
        'quantity_used_for_estimate' => 'quantityUsedForEstimate',
        'shipping_carrier_code' => 'shippingCarrierCode',
        'shipping_cost' => 'shippingCost',
        'shipping_cost_type' => 'shippingCostType',
        'shipping_service_code' => 'shippingServiceCode',
        'ship_to_location_used_for_estimate' => 'shipToLocationUsedForEstimate',
        'trademark_symbol' => 'trademarkSymbol',
        'type' => 'type'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'additional_shipping_cost_per_unit' => 'setAdditionalShippingCostPerUnit',
        'cut_off_date_used_for_estimate' => 'setCutOffDateUsedForEstimate',
        'fulfilled_through' => 'setFulfilledThrough',
        'guaranteed_delivery' => 'setGuaranteedDelivery',
        'import_charges' => 'setImportCharges',
        'max_estimated_delivery_date' => 'setMaxEstimatedDeliveryDate',
        'min_estimated_delivery_date' => 'setMinEstimatedDeliveryDate',
        'quantity_used_for_estimate' => 'setQuantityUsedForEstimate',
        'shipping_carrier_code' => 'setShippingCarrierCode',
        'shipping_cost' => 'setShippingCost',
        'shipping_cost_type' => 'setShippingCostType',
        'shipping_service_code' => 'setShippingServiceCode',
        'ship_to_location_used_for_estimate' => 'setShipToLocationUsedForEstimate',
        'trademark_symbol' => 'setTrademarkSymbol',
        'type' => 'setType'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'additional_shipping_cost_per_unit' => 'getAdditionalShippingCostPerUnit',
        'cut_off_date_used_for_estimate' => 'getCutOffDateUsedForEstimate',
        'fulfilled_through' => 'getFulfilledThrough',
        'guaranteed_delivery' => 'getGuaranteedDelivery',
        'import_charges' => 'getImportCharges',
        'max_estimated_delivery_date' => 'getMaxEstimatedDeliveryDate',
        'min_estimated_delivery_date' => 'getMinEstimatedDeliveryDate',
        'quantity_used_for_estimate' => 'getQuantityUsedForEstimate',
        'shipping_carrier_code' => 'getShippingCarrierCode',
        'shipping_cost' => 'getShippingCost',
        'shipping_cost_type' => 'getShippingCostType',
        'shipping_service_code' => 'getShippingServiceCode',
        'ship_to_location_used_for_estimate' => 'getShipToLocationUsedForEstimate',
        'trademark_symbol' => 'getTrademarkSymbol',
        'type' => 'getType'
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
        $this->setIfExists('additional_shipping_cost_per_unit', $data ?? [], null);
        $this->setIfExists('cut_off_date_used_for_estimate', $data ?? [], null);
        $this->setIfExists('fulfilled_through', $data ?? [], null);
        $this->setIfExists('guaranteed_delivery', $data ?? [], null);
        $this->setIfExists('import_charges', $data ?? [], null);
        $this->setIfExists('max_estimated_delivery_date', $data ?? [], null);
        $this->setIfExists('min_estimated_delivery_date', $data ?? [], null);
        $this->setIfExists('quantity_used_for_estimate', $data ?? [], null);
        $this->setIfExists('shipping_carrier_code', $data ?? [], null);
        $this->setIfExists('shipping_cost', $data ?? [], null);
        $this->setIfExists('shipping_cost_type', $data ?? [], null);
        $this->setIfExists('shipping_service_code', $data ?? [], null);
        $this->setIfExists('ship_to_location_used_for_estimate', $data ?? [], null);
        $this->setIfExists('trademark_symbol', $data ?? [], null);
        $this->setIfExists('type', $data ?? [], null);
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
     * Gets additional_shipping_cost_per_unit
     *
     * @return \Modstore\EbayBrowseApi\Model\ConvertedAmount|null
     */
    public function getAdditionalShippingCostPerUnit()
    {
        return $this->container['additional_shipping_cost_per_unit'];
    }

    /**
     * Sets additional_shipping_cost_per_unit
     *
     * @param \Modstore\EbayBrowseApi\Model\ConvertedAmount|null $additional_shipping_cost_per_unit additional_shipping_cost_per_unit
     *
     * @return self
     */
    public function setAdditionalShippingCostPerUnit($additional_shipping_cost_per_unit)
    {
        if (is_null($additional_shipping_cost_per_unit)) {
            throw new \InvalidArgumentException('non-nullable additional_shipping_cost_per_unit cannot be null');
        }
        $this->container['additional_shipping_cost_per_unit'] = $additional_shipping_cost_per_unit;

        return $this;
    }

    /**
     * Gets cut_off_date_used_for_estimate
     *
     * @return string|null
     */
    public function getCutOffDateUsedForEstimate()
    {
        return $this->container['cut_off_date_used_for_estimate'];
    }

    /**
     * Sets cut_off_date_used_for_estimate
     *
     * @param string|null $cut_off_date_used_for_estimate The deadline date that the item must be purchased by in order to be received by the buyer within the delivery window (<b> maxEstimatedDeliveryDate</b> and  <b> minEstimatedDeliveryDate</b> fields). This field is returned only for items that are eligible for 'Same Day Handling'. For these items, the value of this field is what is displayed in the <b> Delivery</b> line on the View Item page.  <br><br>This value is returned in UTC format (yyyy-MM-ddThh:mm:ss.sssZ), which you can convert into the local time of the buyer.
     *
     * @return self
     */
    public function setCutOffDateUsedForEstimate($cut_off_date_used_for_estimate)
    {
        if (is_null($cut_off_date_used_for_estimate)) {
            throw new \InvalidArgumentException('non-nullable cut_off_date_used_for_estimate cannot be null');
        }
        $this->container['cut_off_date_used_for_estimate'] = $cut_off_date_used_for_estimate;

        return $this;
    }

    /**
     * Gets fulfilled_through
     *
     * @return string|null
     */
    public function getFulfilledThrough()
    {
        return $this->container['fulfilled_through'];
    }

    /**
     * Sets fulfilled_through
     *
     * @param string|null $fulfilled_through If the item is being shipped by the eBay <a href=\"https://pages.ebay.com/seller-center/shipping/global-shipping-program.html \">Global Shipping program</a>, this field returns <code>GLOBAL_SHIPPING</code>.<br><br>If the item is being shipped using the eBay International Shipping program, this field returns <code>INTERNATIONAL_SHIPPING</code>. <br><br>Otherwise, this field is null. For implementation help, refer to <a href='https://developer.ebay.com/api-docs/buy/browse/types/gct:FulfilledThroughEnum'>eBay API documentation</a>
     *
     * @return self
     */
    public function setFulfilledThrough($fulfilled_through)
    {
        if (is_null($fulfilled_through)) {
            throw new \InvalidArgumentException('non-nullable fulfilled_through cannot be null');
        }
        $this->container['fulfilled_through'] = $fulfilled_through;

        return $this;
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
     * Gets import_charges
     *
     * @return \Modstore\EbayBrowseApi\Model\ConvertedAmount|null
     */
    public function getImportCharges()
    {
        return $this->container['import_charges'];
    }

    /**
     * Sets import_charges
     *
     * @param \Modstore\EbayBrowseApi\Model\ConvertedAmount|null $import_charges import_charges
     *
     * @return self
     */
    public function setImportCharges($import_charges)
    {
        if (is_null($import_charges)) {
            throw new \InvalidArgumentException('non-nullable import_charges cannot be null');
        }
        $this->container['import_charges'] = $import_charges;

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
     * @param string|null $max_estimated_delivery_date The end date of the delivery window (latest projected delivery date).  This value is returned in UTC format (yyyy-MM-ddThh:mm:ss.sssZ), which you can convert into the local time of the buyer. <br> <br> <span class=\"tablenote\"> <b> Note: </b> For the best accuracy, always include the location of where the item is be shipped in the <code> contextualLocation</code> values of the <a href=\"/api-docs/buy/static/api-browse.html#Headers\"> <code>X-EBAY-C-ENDUSERCTX</code></a> request header.</span>
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
     * @param string|null $min_estimated_delivery_date The start date of the delivery window (earliest projected delivery date). This value is returned in UTC format (yyyy-MM-ddThh:mm:ss.sssZ), which you can convert into the local time of the buyer. <br> <br><span class=\"tablenote\"> <b> Note: </b> For the best accuracy, always include the location of where the item is be shipped in the <code> contextualLocation</code> values of the <a href=\"/api-docs/buy/static/api-browse.html#Headers\"> <code>X-EBAY-C-ENDUSERCTX</code></a> request header.</span>
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
     * Gets quantity_used_for_estimate
     *
     * @return int|null
     */
    public function getQuantityUsedForEstimate()
    {
        return $this->container['quantity_used_for_estimate'];
    }

    /**
     * Sets quantity_used_for_estimate
     *
     * @param int|null $quantity_used_for_estimate The number of items used when calculating the estimation information.
     *
     * @return self
     */
    public function setQuantityUsedForEstimate($quantity_used_for_estimate)
    {
        if (is_null($quantity_used_for_estimate)) {
            throw new \InvalidArgumentException('non-nullable quantity_used_for_estimate cannot be null');
        }
        $this->container['quantity_used_for_estimate'] = $quantity_used_for_estimate;

        return $this;
    }

    /**
     * Gets shipping_carrier_code
     *
     * @return string|null
     */
    public function getShippingCarrierCode()
    {
        return $this->container['shipping_carrier_code'];
    }

    /**
     * Sets shipping_carrier_code
     *
     * @param string|null $shipping_carrier_code The name of the shipping provider, such as FedEx, or USPS.
     *
     * @return self
     */
    public function setShippingCarrierCode($shipping_carrier_code)
    {
        if (is_null($shipping_carrier_code)) {
            throw new \InvalidArgumentException('non-nullable shipping_carrier_code cannot be null');
        }
        $this->container['shipping_carrier_code'] = $shipping_carrier_code;

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
     * @param string|null $shipping_cost_type Indicates the class of the shipping cost. <br><br><b> Valid Values: </b> FIXED or CALCULATED <br><br>Code so that your app gracefully handles any future changes to this list.
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
     * Gets shipping_service_code
     *
     * @return string|null
     */
    public function getShippingServiceCode()
    {
        return $this->container['shipping_service_code'];
    }

    /**
     * Sets shipping_service_code
     *
     * @param string|null $shipping_service_code The type of shipping service. For example, USPS First Class.
     *
     * @return self
     */
    public function setShippingServiceCode($shipping_service_code)
    {
        if (is_null($shipping_service_code)) {
            throw new \InvalidArgumentException('non-nullable shipping_service_code cannot be null');
        }
        $this->container['shipping_service_code'] = $shipping_service_code;

        return $this;
    }

    /**
     * Gets ship_to_location_used_for_estimate
     *
     * @return \Modstore\EbayBrowseApi\Model\ShipToLocation|null
     */
    public function getShipToLocationUsedForEstimate()
    {
        return $this->container['ship_to_location_used_for_estimate'];
    }

    /**
     * Sets ship_to_location_used_for_estimate
     *
     * @param \Modstore\EbayBrowseApi\Model\ShipToLocation|null $ship_to_location_used_for_estimate ship_to_location_used_for_estimate
     *
     * @return self
     */
    public function setShipToLocationUsedForEstimate($ship_to_location_used_for_estimate)
    {
        if (is_null($ship_to_location_used_for_estimate)) {
            throw new \InvalidArgumentException('non-nullable ship_to_location_used_for_estimate cannot be null');
        }
        $this->container['ship_to_location_used_for_estimate'] = $ship_to_location_used_for_estimate;

        return $this;
    }

    /**
     * Gets trademark_symbol
     *
     * @return string|null
     */
    public function getTrademarkSymbol()
    {
        return $this->container['trademark_symbol'];
    }

    /**
     * Sets trademark_symbol
     *
     * @param string|null $trademark_symbol Any trademark symbol, such as &#8482; or &reg;, that needs to be shown in superscript next to the shipping service name.
     *
     * @return self
     */
    public function setTrademarkSymbol($trademark_symbol)
    {
        if (is_null($trademark_symbol)) {
            throw new \InvalidArgumentException('non-nullable trademark_symbol cannot be null');
        }
        $this->container['trademark_symbol'] = $trademark_symbol;

        return $this;
    }

    /**
     * Gets type
     *
     * @return string|null
     */
    public function getType()
    {
        return $this->container['type'];
    }

    /**
     * Sets type
     *
     * @param string|null $type The type of a shipping option, such as EXPEDITED, ONE_DAY, STANDARD, ECONOMY, PICKUP, etc.
     *
     * @return self
     */
    public function setType($type)
    {
        if (is_null($type)) {
            throw new \InvalidArgumentException('non-nullable type cannot be null');
        }
        $this->container['type'] = $type;

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


