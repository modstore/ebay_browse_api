# Modstore\EbayBrowseApi\ItemApi

All URIs are relative to https://api.ebay.com/buy/browse/v1, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**checkCompatibility()**](ItemApi.md#checkCompatibility) | **POST** /item/{item_id}/check_compatibility |  |
| [**getItem()**](ItemApi.md#getItem) | **GET** /item/{item_id} |  |
| [**getItemByLegacyId()**](ItemApi.md#getItemByLegacyId) | **GET** /item/get_item_by_legacy_id |  |
| [**getItems()**](ItemApi.md#getItems) | **GET** /item/ |  |
| [**getItemsByItemGroup()**](ItemApi.md#getItemsByItemGroup) | **GET** /item/get_items_by_item_group |  |


## `checkCompatibility()`

```php
checkCompatibility($item_id, $content_type, $x_ebay_c_marketplace_id, $accept_language, $compatibility_payload): \Modstore\EbayBrowseApi\Model\CompatibilityResponse
```



This method checks if a product is compatible with the specified item. You can use this method to check the compatibility of cars, trucks, and motorcycles with a specific part listed on eBay.<br><br>For example, to check the compatibility of a part, you pass in the <b>item_id</b> of the part as a URI parameter and specify all the attributes used to define a specific car within the <b>compatibilityProperties</b> container. If the call is successful, the response will be <code>COMPATIBLE</code>, <code>NOT_COMPATIBLE</code>, or <code>UNDETERMINED</code>. Refer to <a href=\"/api-docs/buy/browse/resources/item/methods/checkCompatibility#response.compatibilityStatus\">compatibilityStatus</a> for details.   <br><br><span class=\"tablenote\"><b>Note:</b> The only products supported are cars, trucks, and motorcycles.</span><br>To find the attributes and values for a specific marketplace, you can use the compatibility methods in the <a href=\"/api-docs/commerce/taxonomy/resources/methods\" target=\"_blank\">Taxonomy API</a>. You can use this data to create menus to help buyers specify the product, such as their car.<br><br>For more information and a list of required attributes for the US marketplace that describe motor vehicles, refer to <a href=\"/api-docs/buy/static/api-browse.html#Check\" target=\"_blank\">Check compatibility</a> in the <i>Buying Integration Guide</i>.<br><br>For an example, refer to the <a href=\"/api-docs/buy/browse/resources/item/methods/checkCompatibility#h2-samples\">Samples</a> section.<br><br><span class=\"tablenote\"><b>Note:</b> This method is supported in Sandbox but <i>only</i> when passing in the specified <code>item_id</code> and compatibility name-value pairs listed in <a href=\"/api-docs/buy/browse/resources/item/methods/checkCompatibility#s0-1-22-6-7-7-6-SandboxSample-1\">Sample 2: Sandbox Sample</a>.</span><h3>Restrictions</h3>For a list of supported sites and other restrictions, refer to <a href=\"/api-docs/buy/browse/overview.html#API\">API Restrictions</a>.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: api_auth
$config = Modstore\EbayBrowseApi\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Modstore\EbayBrowseApi\Api\ItemApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$item_id = 'item_id_example'; // string | This path parameter specifies the unique RESTful identifier of an item (such as the park you want to check).<br><br><b>RESTful Item ID Format: </b><code>v1</code>|<code><i>#</i></code>|<code><i>#</i></code><br><br>For a single SKU listing, pass in the item ID: <pre>v1|2**********2|0</pre>For a multi-SKU listing, pass in the identifier of the variation:<pre>v1|1**********2|4**********2</pre><br>For more information about item IDs for RESTful APIs, refer to <a href=\"/api-docs/buy/static/api-browse.html#Legacy\" target=\"_blank\">Item ID legacy API compatibility overview</a> in the <a href=\"/api-docs/buy/static/buying-ig-landing.html\" target=\"_blank\">Buying Integration Guide</a>.
$content_type = 'content_type_example'; // string | This header indicates the format of the request body provided by the client.<br><br>Its value should be set to <code>application/json</code>.<br><br>For more information, refer to <a href=\"/api-docs/static/rest-request-components.html#HTTP\" target=\"_blank \">HTTP request headers</a> in the <a href=\"/api-docs/static/ebay-rest-landing.html\" target=\"_blank\">Using eBay RESTful APIs</a> guide.
$x_ebay_c_marketplace_id = 'x_ebay_c_marketplace_id_example'; // string | This header identifies the seller's eBay marketplace. It is required for all marketplaces outside of the US.<br><br><span class=\"tablenote\"><b>Note:</b> If a marketplace ID value is not provided, the default value of <code>EBAY_US</code> is used.</span><br>See <a href=\"/api-docs/buy/browse/types/ba:MarketplaceIdEnum\" target=\"_blank\">MarketplaceIdEnum</a> for supported values.
$accept_language = 'accept_language_example'; // string | This header is used to indicate the natural language and locale preferred by the user for the response.<br><br>This header is required when targeting a specific locale of a marketplace that supports multiple locales. For example:<ul><li>When targeting the French locale of the Belgium marketplace, it is required to pass in <code>fr-BE</code> to specify this. If this locale is not specified, the language will default to Dutch.</li><li>When targeting the French locale of the Canadian marketplace, it is required to pass in <code>fr-CA</code> to specify this. If this locale is not specified, the language will default to English.</li></ul>
$compatibility_payload = new \Modstore\EbayBrowseApi\Model\CompatibilityPayload(); // \Modstore\EbayBrowseApi\Model\CompatibilityPayload

try {
    $result = $apiInstance->checkCompatibility($item_id, $content_type, $x_ebay_c_marketplace_id, $accept_language, $compatibility_payload);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ItemApi->checkCompatibility: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **item_id** | **string**| This path parameter specifies the unique RESTful identifier of an item (such as the park you want to check).&lt;br&gt;&lt;br&gt;&lt;b&gt;RESTful Item ID Format: &lt;/b&gt;&lt;code&gt;v1&lt;/code&gt;|&lt;code&gt;&lt;i&gt;#&lt;/i&gt;&lt;/code&gt;|&lt;code&gt;&lt;i&gt;#&lt;/i&gt;&lt;/code&gt;&lt;br&gt;&lt;br&gt;For a single SKU listing, pass in the item ID: &lt;pre&gt;v1|2**********2|0&lt;/pre&gt;For a multi-SKU listing, pass in the identifier of the variation:&lt;pre&gt;v1|1**********2|4**********2&lt;/pre&gt;&lt;br&gt;For more information about item IDs for RESTful APIs, refer to &lt;a href&#x3D;\&quot;/api-docs/buy/static/api-browse.html#Legacy\&quot; target&#x3D;\&quot;_blank\&quot;&gt;Item ID legacy API compatibility overview&lt;/a&gt; in the &lt;a href&#x3D;\&quot;/api-docs/buy/static/buying-ig-landing.html\&quot; target&#x3D;\&quot;_blank\&quot;&gt;Buying Integration Guide&lt;/a&gt;. | |
| **content_type** | **string**| This header indicates the format of the request body provided by the client.&lt;br&gt;&lt;br&gt;Its value should be set to &lt;code&gt;application/json&lt;/code&gt;.&lt;br&gt;&lt;br&gt;For more information, refer to &lt;a href&#x3D;\&quot;/api-docs/static/rest-request-components.html#HTTP\&quot; target&#x3D;\&quot;_blank \&quot;&gt;HTTP request headers&lt;/a&gt; in the &lt;a href&#x3D;\&quot;/api-docs/static/ebay-rest-landing.html\&quot; target&#x3D;\&quot;_blank\&quot;&gt;Using eBay RESTful APIs&lt;/a&gt; guide. | |
| **x_ebay_c_marketplace_id** | **string**| This header identifies the seller&#39;s eBay marketplace. It is required for all marketplaces outside of the US.&lt;br&gt;&lt;br&gt;&lt;span class&#x3D;\&quot;tablenote\&quot;&gt;&lt;b&gt;Note:&lt;/b&gt; If a marketplace ID value is not provided, the default value of &lt;code&gt;EBAY_US&lt;/code&gt; is used.&lt;/span&gt;&lt;br&gt;See &lt;a href&#x3D;\&quot;/api-docs/buy/browse/types/ba:MarketplaceIdEnum\&quot; target&#x3D;\&quot;_blank\&quot;&gt;MarketplaceIdEnum&lt;/a&gt; for supported values. | [optional] |
| **accept_language** | **string**| This header is used to indicate the natural language and locale preferred by the user for the response.&lt;br&gt;&lt;br&gt;This header is required when targeting a specific locale of a marketplace that supports multiple locales. For example:&lt;ul&gt;&lt;li&gt;When targeting the French locale of the Belgium marketplace, it is required to pass in &lt;code&gt;fr-BE&lt;/code&gt; to specify this. If this locale is not specified, the language will default to Dutch.&lt;/li&gt;&lt;li&gt;When targeting the French locale of the Canadian marketplace, it is required to pass in &lt;code&gt;fr-CA&lt;/code&gt; to specify this. If this locale is not specified, the language will default to English.&lt;/li&gt;&lt;/ul&gt; | [optional] |
| **compatibility_payload** | [**\Modstore\EbayBrowseApi\Model\CompatibilityPayload**](../Model/CompatibilityPayload.md)|  | [optional] |

### Return type

[**\Modstore\EbayBrowseApi\Model\CompatibilityResponse**](../Model/CompatibilityResponse.md)

### Authorization

[api_auth](../../README.md#api_auth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getItem()`

```php
getItem($item_id, $fieldgroups, $x_ebay_c_enduserctx, $x_ebay_c_marketplace_id, $accept_language): \Modstore\EbayBrowseApi\Model\Item
```



This method retrieves the details of a specific item, such as description, price, category, all item aspects, condition, return policies, seller feedback and score, shipping options, shipping costs, estimated delivery, and other information the buyer needs to make a purchasing decision.<br><br>The Buy APIs are designed to let you create an eBay shopping experience in your app or website. This means you will need to know when something, such as the availability, quantity, etc., has changed in any eBay item you are offering. This is easily achieved by setting the <b>fieldgroups</b> URI parameter to one of the following values:<ul><li><code>COMPACT</code><br>Reduces the response to only those fields necessary in order to determine if any item detail has changed. This field group <b>must</b> be used alone.</li><li><code>PRODUCT</code><br>Adds fields to the default response that return information about the product/item. This field group may also be used in conjunction with <code>ADDITIONAL_SELLER_DETAILS</code>.</li><li><code>ADDITIONAL_SELLER_DETAILS</code><br>Adds an additional field to the response that returns the seller's user ID. This field group may also be used in conjunction with <code>PRODUCT</code>.</li></ul>For additional information, refer to <a href=\"/api-docs/buy/browse/resources/item/methods/getItem#uri.fieldgroups\">fieldgroups</a>.<h3>Restrictions</h3>For a list of supported sites and other restrictions, refer to <a href=\"/api-docs/buy/browse/overview.html#API\">API Restrictions</a>.<br><br><span class=\"tablenote\"><b>eBay Partner Network:</b> In order to be commissioned for your sales, you must use the URL returned in the <code>itemAffiliateWebUrl</code> field to forward your buyer to the ebay.com site.</span>

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: api_auth
$config = Modstore\EbayBrowseApi\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Modstore\EbayBrowseApi\Api\ItemApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$item_id = 'item_id_example'; // string | This path parameter specifies the unique RESTful identifier of the item being retrieved. <br><br><b>RESTful Item ID Format: </b><code>v1</code>|<code><i>#</i></code>|<code><i>#</i></code><br><br>For a single SKU listing, pass in the item ID: <pre>v1|2**********2|0</pre>For a multi-SKU listing, pass in the identifier of the variation:<pre>v1|1**********2|4**********2</pre><br>For more information about item IDs for RESTful APIs, refer to <a href=\"/api-docs/buy/static/api-browse.html#Legacy\" target=\"_blank\">Item ID legacy API compatibility overview</a> in the <a href=\"/api-docs/buy/static/buying-ig-landing.html\" target=\"_blank\">Buying Integration Guide</a>.
$fieldgroups = 'fieldgroups_example'; // string | This parameter controls what is returned in the response. If this field is not set, the method returns all the details of the item.<br><br><span class=\"tablenote\"><b>Note:</b> Multiple <b>fieldgroups</b> can be set and applied simultaneously. However, <b>COMPACT</b> <b>must</b> be used alone. Otherwise, an error will occur.</span><br><b>Valid Values:</b><ul><li><b>PRODUCT</b><br>This field group adds the <a href=\"/api-docs/buy/browse/resources/item/methods/getItem#response.product\">product</a> container to the response.</li><li><b>COMPACT</b></br>This field group returns only the following fields which let you quickly check if the availability or price of the item has changed, if the item has been revised by the seller, or if an item's top-rated plus status has changed for items you have stored.<ul><li><b>itemId</b></li><li><b>bidCount</b></li><li><b>currentBidPrice</b></li><li><b>eligibleForInlineCheckout</b></li><li><b>estimatedAvailabilities</b></li><li><b>gtin</b></li><li><b>itemAffiliateWebURL</b></li><li><b>itemCreationDate</b></li><li><b>ItemWebURL</b></li><li><b>legacyItemId</b></li><li><b>minimumPriceToBid</b></li><li><b>price</b></li><li><b>priorityListing</b></li><li><b>reservePriceMet</b></li><li><b>sellerItemRevision</b></li><li><b>shippingOptions</b></li><li><b>taxes</b></li><li><b>topRatedBuyingExperience</b></li><li><b>uniqueBidderCount</b></li></ul>For Example:<br>To determine if a stored item's information is current, perform the following:<ol><li>Pass in the item ID and set <code>fieldgroups</code> to <code>COMPACT</code>.<pre>item/v1|4**********8|0?fieldgroups=COMPACT</pre></li><li>Do one of the following:<ul><li>If <b>sellerItemRevision</b> is returned and a revision number for this item <i>has not</i> been stored, record the number and pass in the item ID in the <b>getItem</b> method to retrieve the most recent information.</li><li>If the revision number is different from the value you have stored, update the value and pass in the item ID in the <b>getItem</b> method to retrieve the most recent information.</li><li>If <code>sellerItemRevision</code> is <i>not</i> returned or has not changed, where needed, update the item information with the information returned in the response.</li></ul></li></ol></li><li><b>ADDITIONAL_SELLER_DETAILS</b><br>This adds the <a href=\"/api-docs/buy/browse/resources/item/methods/getItem#response.seller.userId\">userId</a> field to the response.</li></ul>
$x_ebay_c_enduserctx = 'x_ebay_c_enduserctx_example'; // string | This header is required to support revenue sharing for eBay Partner Network and to improve the accuracy of shipping and delivery time estimations.<br><br>For additional information, refer to <a href=\"/api-docs/buy/static/api-browse.html#Headers\" target=\"_blank \">Use request headers</a> in the <a href=\"/api-docs/buy/static/buying-ig-landing.html\" target=\"_blank\">Buying Integration Guide</a>.
$x_ebay_c_marketplace_id = 'x_ebay_c_marketplace_id_example'; // string | This header identifies the seller's eBay marketplace. It is required for all marketplaces outside of the US.<br><br><span class=\"tablenote\"><b>Note:</b> If a marketplace ID value is not provided, the default value of <code>EBAY_US</code> is used.</span><br>See <a href=\"/api-docs/buy/browse/types/ba:MarketplaceIdEnum\" target=\"_blank\">MarketplaceIdEnum</a> for a list of supported marketplaces.
$accept_language = 'accept_language_example'; // string | This header is used to indicate the natural language and locale preferred by the user for the response.<br><br>This header is required when targeting a specific locale of a marketplace that supports multiple locales. For example:<ul><li>When targeting the French locale of the Belgium marketplace, it is required to pass in <code>fr-BE</code> to specify this. If this locale is not specified, the language will default to Dutch.</li><li>When targeting the French locale of the Canadian marketplace, it is required to pass in <code>fr-CA</code> to specify this. If this locale is not specified, the language will default to English.</li></ul>

try {
    $result = $apiInstance->getItem($item_id, $fieldgroups, $x_ebay_c_enduserctx, $x_ebay_c_marketplace_id, $accept_language);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ItemApi->getItem: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **item_id** | **string**| This path parameter specifies the unique RESTful identifier of the item being retrieved. &lt;br&gt;&lt;br&gt;&lt;b&gt;RESTful Item ID Format: &lt;/b&gt;&lt;code&gt;v1&lt;/code&gt;|&lt;code&gt;&lt;i&gt;#&lt;/i&gt;&lt;/code&gt;|&lt;code&gt;&lt;i&gt;#&lt;/i&gt;&lt;/code&gt;&lt;br&gt;&lt;br&gt;For a single SKU listing, pass in the item ID: &lt;pre&gt;v1|2**********2|0&lt;/pre&gt;For a multi-SKU listing, pass in the identifier of the variation:&lt;pre&gt;v1|1**********2|4**********2&lt;/pre&gt;&lt;br&gt;For more information about item IDs for RESTful APIs, refer to &lt;a href&#x3D;\&quot;/api-docs/buy/static/api-browse.html#Legacy\&quot; target&#x3D;\&quot;_blank\&quot;&gt;Item ID legacy API compatibility overview&lt;/a&gt; in the &lt;a href&#x3D;\&quot;/api-docs/buy/static/buying-ig-landing.html\&quot; target&#x3D;\&quot;_blank\&quot;&gt;Buying Integration Guide&lt;/a&gt;. | |
| **fieldgroups** | **string**| This parameter controls what is returned in the response. If this field is not set, the method returns all the details of the item.&lt;br&gt;&lt;br&gt;&lt;span class&#x3D;\&quot;tablenote\&quot;&gt;&lt;b&gt;Note:&lt;/b&gt; Multiple &lt;b&gt;fieldgroups&lt;/b&gt; can be set and applied simultaneously. However, &lt;b&gt;COMPACT&lt;/b&gt; &lt;b&gt;must&lt;/b&gt; be used alone. Otherwise, an error will occur.&lt;/span&gt;&lt;br&gt;&lt;b&gt;Valid Values:&lt;/b&gt;&lt;ul&gt;&lt;li&gt;&lt;b&gt;PRODUCT&lt;/b&gt;&lt;br&gt;This field group adds the &lt;a href&#x3D;\&quot;/api-docs/buy/browse/resources/item/methods/getItem#response.product\&quot;&gt;product&lt;/a&gt; container to the response.&lt;/li&gt;&lt;li&gt;&lt;b&gt;COMPACT&lt;/b&gt;&lt;/br&gt;This field group returns only the following fields which let you quickly check if the availability or price of the item has changed, if the item has been revised by the seller, or if an item&#39;s top-rated plus status has changed for items you have stored.&lt;ul&gt;&lt;li&gt;&lt;b&gt;itemId&lt;/b&gt;&lt;/li&gt;&lt;li&gt;&lt;b&gt;bidCount&lt;/b&gt;&lt;/li&gt;&lt;li&gt;&lt;b&gt;currentBidPrice&lt;/b&gt;&lt;/li&gt;&lt;li&gt;&lt;b&gt;eligibleForInlineCheckout&lt;/b&gt;&lt;/li&gt;&lt;li&gt;&lt;b&gt;estimatedAvailabilities&lt;/b&gt;&lt;/li&gt;&lt;li&gt;&lt;b&gt;gtin&lt;/b&gt;&lt;/li&gt;&lt;li&gt;&lt;b&gt;itemAffiliateWebURL&lt;/b&gt;&lt;/li&gt;&lt;li&gt;&lt;b&gt;itemCreationDate&lt;/b&gt;&lt;/li&gt;&lt;li&gt;&lt;b&gt;ItemWebURL&lt;/b&gt;&lt;/li&gt;&lt;li&gt;&lt;b&gt;legacyItemId&lt;/b&gt;&lt;/li&gt;&lt;li&gt;&lt;b&gt;minimumPriceToBid&lt;/b&gt;&lt;/li&gt;&lt;li&gt;&lt;b&gt;price&lt;/b&gt;&lt;/li&gt;&lt;li&gt;&lt;b&gt;priorityListing&lt;/b&gt;&lt;/li&gt;&lt;li&gt;&lt;b&gt;reservePriceMet&lt;/b&gt;&lt;/li&gt;&lt;li&gt;&lt;b&gt;sellerItemRevision&lt;/b&gt;&lt;/li&gt;&lt;li&gt;&lt;b&gt;shippingOptions&lt;/b&gt;&lt;/li&gt;&lt;li&gt;&lt;b&gt;taxes&lt;/b&gt;&lt;/li&gt;&lt;li&gt;&lt;b&gt;topRatedBuyingExperience&lt;/b&gt;&lt;/li&gt;&lt;li&gt;&lt;b&gt;uniqueBidderCount&lt;/b&gt;&lt;/li&gt;&lt;/ul&gt;For Example:&lt;br&gt;To determine if a stored item&#39;s information is current, perform the following:&lt;ol&gt;&lt;li&gt;Pass in the item ID and set &lt;code&gt;fieldgroups&lt;/code&gt; to &lt;code&gt;COMPACT&lt;/code&gt;.&lt;pre&gt;item/v1|4**********8|0?fieldgroups&#x3D;COMPACT&lt;/pre&gt;&lt;/li&gt;&lt;li&gt;Do one of the following:&lt;ul&gt;&lt;li&gt;If &lt;b&gt;sellerItemRevision&lt;/b&gt; is returned and a revision number for this item &lt;i&gt;has not&lt;/i&gt; been stored, record the number and pass in the item ID in the &lt;b&gt;getItem&lt;/b&gt; method to retrieve the most recent information.&lt;/li&gt;&lt;li&gt;If the revision number is different from the value you have stored, update the value and pass in the item ID in the &lt;b&gt;getItem&lt;/b&gt; method to retrieve the most recent information.&lt;/li&gt;&lt;li&gt;If &lt;code&gt;sellerItemRevision&lt;/code&gt; is &lt;i&gt;not&lt;/i&gt; returned or has not changed, where needed, update the item information with the information returned in the response.&lt;/li&gt;&lt;/ul&gt;&lt;/li&gt;&lt;/ol&gt;&lt;/li&gt;&lt;li&gt;&lt;b&gt;ADDITIONAL_SELLER_DETAILS&lt;/b&gt;&lt;br&gt;This adds the &lt;a href&#x3D;\&quot;/api-docs/buy/browse/resources/item/methods/getItem#response.seller.userId\&quot;&gt;userId&lt;/a&gt; field to the response.&lt;/li&gt;&lt;/ul&gt; | [optional] |
| **x_ebay_c_enduserctx** | **string**| This header is required to support revenue sharing for eBay Partner Network and to improve the accuracy of shipping and delivery time estimations.&lt;br&gt;&lt;br&gt;For additional information, refer to &lt;a href&#x3D;\&quot;/api-docs/buy/static/api-browse.html#Headers\&quot; target&#x3D;\&quot;_blank \&quot;&gt;Use request headers&lt;/a&gt; in the &lt;a href&#x3D;\&quot;/api-docs/buy/static/buying-ig-landing.html\&quot; target&#x3D;\&quot;_blank\&quot;&gt;Buying Integration Guide&lt;/a&gt;. | [optional] |
| **x_ebay_c_marketplace_id** | **string**| This header identifies the seller&#39;s eBay marketplace. It is required for all marketplaces outside of the US.&lt;br&gt;&lt;br&gt;&lt;span class&#x3D;\&quot;tablenote\&quot;&gt;&lt;b&gt;Note:&lt;/b&gt; If a marketplace ID value is not provided, the default value of &lt;code&gt;EBAY_US&lt;/code&gt; is used.&lt;/span&gt;&lt;br&gt;See &lt;a href&#x3D;\&quot;/api-docs/buy/browse/types/ba:MarketplaceIdEnum\&quot; target&#x3D;\&quot;_blank\&quot;&gt;MarketplaceIdEnum&lt;/a&gt; for a list of supported marketplaces. | [optional] |
| **accept_language** | **string**| This header is used to indicate the natural language and locale preferred by the user for the response.&lt;br&gt;&lt;br&gt;This header is required when targeting a specific locale of a marketplace that supports multiple locales. For example:&lt;ul&gt;&lt;li&gt;When targeting the French locale of the Belgium marketplace, it is required to pass in &lt;code&gt;fr-BE&lt;/code&gt; to specify this. If this locale is not specified, the language will default to Dutch.&lt;/li&gt;&lt;li&gt;When targeting the French locale of the Canadian marketplace, it is required to pass in &lt;code&gt;fr-CA&lt;/code&gt; to specify this. If this locale is not specified, the language will default to English.&lt;/li&gt;&lt;/ul&gt; | [optional] |

### Return type

[**\Modstore\EbayBrowseApi\Model\Item**](../Model/Item.md)

### Authorization

[api_auth](../../README.md#api_auth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getItemByLegacyId()`

```php
getItemByLegacyId($legacy_item_id, $fieldgroups, $legacy_variation_id, $legacy_variation_sku, $x_ebay_c_enduserctx, $x_ebay_c_marketplace_id, $accept_language): \Modstore\EbayBrowseApi\Model\Item
```



This method is a bridge between the eBay legacy APIs, such as <b>Shopping</b> and <b>Finding</b>, and the eBay Buy APIs. There are differences between how legacy APIs and RESTful APIs return the identifier of an \"item\" and what the item ID represents. This method lets you use the legacy item ids retrieve the details of a specific item, such as description, price, and other information the buyer needs to make a purchasing decision. It also returns the RESTful <b>item_id</b>, which you can use with all the Buy API  methods.<br><br>For additional information about how to use legacy ids with the Buy APIs, refer to <a href=\"/api-docs/buy/static/api-browse.html#Legacy\" target=\"_blank\">Item ID legacy API compatibility overview</a> in the Buying Integration guide.</br><br>This method returns the item details and requires you to pass in either the <b>item_id</b> of a non-variation item or the <b>item_id</b> values for both the parent and child of an item group.<br><br><span class=\"tablenote\"><b>Note:</b> An item group is an item that has various aspect differences, such as color, size, storage capacity, etc.</span></br>When an item group is created, one of the item variations, such as the red shirt size L, is chosen as the \"parent\". All other items in the group are the children, such as the blue shirt size L, red shirt size M, etc.<br><br>The <b>fieldgroups</b> URI parameter lets you control what is returned in the response:<ul><li>Setting <b>fieldgroups</b> to <code>PRODUCT</code> adds additional fields to the default response that return information about the product of the item.</li><li>Setting the <b>fieldgroups</b> to <code>ADDITIONAL_SELLER_DETAILS</code> adds an additional field to the response that returns the seller's user ID.</li></ul>These <b>fieldgroups</b> can be used independently or at the same time. For additional information, refer to <a href=\"/api-docs/buy/browse/resources/item/methods/getItemByLegacyId#uri.fieldgroups\">fieldgroups</a>.<h3>Restrictions</h3>For a list of supported sites and other restrictions, refer to <a href=\"/api-docs/buy/browse/overview.html#API\">API Restrictions</a>.<br><br><span class=\"tablenote\"><b>eBay Partner Network:</b> In order to be commissioned for your sales, you must use the URL returned in the <code>itemAffiliateWebUrl</code> field to forward your buyer to the ebay.com site.</span>

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: api_auth
$config = Modstore\EbayBrowseApi\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Modstore\EbayBrowseApi\Api\ItemApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$legacy_item_id = 'legacy_item_id_example'; // string | This query parameter is the unique identifier that specifies the item being retrieved.<br><br><span class=\"tablenote\"><b> Note:</b> When passing in the ID for a multi-variation listing, you must also use the <code>legacy_variation_id</code> field and pass in the ID of the specific item variation. If not, all variation within the multi-SKU listing will be retrieved.</span></li></ul><br>The following is an example of using the value of the <b>ItemID</b> field for a specific item to get the RESTful <code>itemId</code> value.<pre><code>browse/v1/item/get_item_by_legacy_id?legacy_item_id=1**********9</code></pre>
$fieldgroups = 'fieldgroups_example'; // string | This field controls what is returned in the response. If this field is not set, the method returns all details about the item. Multiple <code>fieldgroups</code> can be set.<br><br><b>Valid Values:</b><ul><li> <b>PRODUCT</b><br>This field group adds the <a href=\"/api-docs/buy/browse/resources/item/methods/getItemByLegacyId#response.product\">product</a> container to the response. </li><li><b>ADDITIONAL_SELLER_DETAILS</b><br>This field group adds the <a href=\"/api-docs/buy/browse/resources/item/methods/getItemByLegacyId#response.seller.userId\">userId</a> field to the response.</li></ul>
$legacy_variation_id = 'legacy_variation_id_example'; // string | This query parameter specifies the legacy item ID of a specific item in a multi-variation listing, such as that for the <i>red shirt size L</i> item.<br><br><div class=\"msgbox_important\"><p class=\"msgbox_importantInDiv\" data-mc-autonum=\"&lt;b&gt;&lt;span style=&quot;color: #dd1e31;&quot; class=&quot;mcFormatColor&quot;&gt;Important! &lt;/span&gt;&lt;/b&gt;\"><span class=\"autonumber\"><span><b><span style=\"color: #dd1e31;\" class=\"mcFormatColor\">Important!</span></b></span></span> A <code>legacy_item_id</code> value must always be passed in when specifying a <code>legacy_variation_id</code> value.</p></div>
$legacy_variation_sku = 'legacy_variation_sku_example'; // string | This query parameter specifies the legacy SKU of an item. SKUs are the unique identifiers of an item created by the seller.<br><br>The following is an example of using the value of the <code>ItemID</code> and <code>SKU</code> fields to get the RESTful <code>itemId</code> value.<pre><code>browse/v1/item/get_item_by_legacy_id?legacy_item_id=1**********9&amp;legacy_variation_sku=V**********M</code></pre><div class=\"msgbox_important\"><p class=\"msgbox_importantInDiv\" data-mc-autonum=\"&lt;b&gt;&lt;span style=&quot;color: #dd1e31;&quot; class=&quot;mcFormatColor&quot;&gt;Important! &lt;/span&gt;&lt;/b&gt;\"><span class=\"autonumber\"><span><b><span style=\"color: #dd1e31;\" class=\"mcFormatColor\">Important!</span></b></span></span> A <code>legacy_item_id</code> value must always be passed in when specifying a <code>legacy_variation_sku</code> value.</p></div>
$x_ebay_c_enduserctx = 'x_ebay_c_enduserctx_example'; // string | This header is required to support revenue sharing for eBay Partner Network and to improve the accuracy of shipping and delivery time estimations.<br><br>For additional information, refer to <a href=\"/api-docs/buy/static/api-browse.html#Headers\" target=\"_blank \">Use request headers</a> in the <a href=\"/api-docs/buy/static/buying-ig-landing.html\" target=\"_blank\">Buying Integration Guide</a>.
$x_ebay_c_marketplace_id = 'x_ebay_c_marketplace_id_example'; // string | This header identifies the seller's eBay marketplace. It is required for all marketplaces outside of the US.<br><br><span class=\"tablenote\"><b>Note:</b> If a marketplace ID value is not provided, the default value of <code>EBAY_US</code> is used.</span><br>See <a href=\"/api-docs/buy/browse/types/ba:MarketplaceIdEnum\" target=\"_blank\">MarketplaceIdEnum</a> for a list of supported marketplaces.
$accept_language = 'accept_language_example'; // string | This header is used to indicate the natural language and locale preferred by the user for the response.<br><br>This header is required when targeting a specific locale of a marketplace that supports multiple locales. For example:<ul><li>When targeting the French locale of the Belgium marketplace, it is required to pass in <code>fr-BE</code> to specify this. If this locale is not specified, the language will default to Dutch.</li><li>When targeting the French locale of the Canadian marketplace, it is required to pass in <code>fr-CA</code> to specify this. If this locale is not specified, the language will default to English.</li></ul>

try {
    $result = $apiInstance->getItemByLegacyId($legacy_item_id, $fieldgroups, $legacy_variation_id, $legacy_variation_sku, $x_ebay_c_enduserctx, $x_ebay_c_marketplace_id, $accept_language);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ItemApi->getItemByLegacyId: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **legacy_item_id** | **string**| This query parameter is the unique identifier that specifies the item being retrieved.&lt;br&gt;&lt;br&gt;&lt;span class&#x3D;\&quot;tablenote\&quot;&gt;&lt;b&gt; Note:&lt;/b&gt; When passing in the ID for a multi-variation listing, you must also use the &lt;code&gt;legacy_variation_id&lt;/code&gt; field and pass in the ID of the specific item variation. If not, all variation within the multi-SKU listing will be retrieved.&lt;/span&gt;&lt;/li&gt;&lt;/ul&gt;&lt;br&gt;The following is an example of using the value of the &lt;b&gt;ItemID&lt;/b&gt; field for a specific item to get the RESTful &lt;code&gt;itemId&lt;/code&gt; value.&lt;pre&gt;&lt;code&gt;browse/v1/item/get_item_by_legacy_id?legacy_item_id&#x3D;1**********9&lt;/code&gt;&lt;/pre&gt; | |
| **fieldgroups** | **string**| This field controls what is returned in the response. If this field is not set, the method returns all details about the item. Multiple &lt;code&gt;fieldgroups&lt;/code&gt; can be set.&lt;br&gt;&lt;br&gt;&lt;b&gt;Valid Values:&lt;/b&gt;&lt;ul&gt;&lt;li&gt; &lt;b&gt;PRODUCT&lt;/b&gt;&lt;br&gt;This field group adds the &lt;a href&#x3D;\&quot;/api-docs/buy/browse/resources/item/methods/getItemByLegacyId#response.product\&quot;&gt;product&lt;/a&gt; container to the response. &lt;/li&gt;&lt;li&gt;&lt;b&gt;ADDITIONAL_SELLER_DETAILS&lt;/b&gt;&lt;br&gt;This field group adds the &lt;a href&#x3D;\&quot;/api-docs/buy/browse/resources/item/methods/getItemByLegacyId#response.seller.userId\&quot;&gt;userId&lt;/a&gt; field to the response.&lt;/li&gt;&lt;/ul&gt; | [optional] |
| **legacy_variation_id** | **string**| This query parameter specifies the legacy item ID of a specific item in a multi-variation listing, such as that for the &lt;i&gt;red shirt size L&lt;/i&gt; item.&lt;br&gt;&lt;br&gt;&lt;div class&#x3D;\&quot;msgbox_important\&quot;&gt;&lt;p class&#x3D;\&quot;msgbox_importantInDiv\&quot; data-mc-autonum&#x3D;\&quot;&amp;lt;b&amp;gt;&amp;lt;span style&#x3D;&amp;quot;color: #dd1e31;&amp;quot; class&#x3D;&amp;quot;mcFormatColor&amp;quot;&amp;gt;Important! &amp;lt;/span&amp;gt;&amp;lt;/b&amp;gt;\&quot;&gt;&lt;span class&#x3D;\&quot;autonumber\&quot;&gt;&lt;span&gt;&lt;b&gt;&lt;span style&#x3D;\&quot;color: #dd1e31;\&quot; class&#x3D;\&quot;mcFormatColor\&quot;&gt;Important!&lt;/span&gt;&lt;/b&gt;&lt;/span&gt;&lt;/span&gt; A &lt;code&gt;legacy_item_id&lt;/code&gt; value must always be passed in when specifying a &lt;code&gt;legacy_variation_id&lt;/code&gt; value.&lt;/p&gt;&lt;/div&gt; | [optional] |
| **legacy_variation_sku** | **string**| This query parameter specifies the legacy SKU of an item. SKUs are the unique identifiers of an item created by the seller.&lt;br&gt;&lt;br&gt;The following is an example of using the value of the &lt;code&gt;ItemID&lt;/code&gt; and &lt;code&gt;SKU&lt;/code&gt; fields to get the RESTful &lt;code&gt;itemId&lt;/code&gt; value.&lt;pre&gt;&lt;code&gt;browse/v1/item/get_item_by_legacy_id?legacy_item_id&#x3D;1**********9&amp;amp;legacy_variation_sku&#x3D;V**********M&lt;/code&gt;&lt;/pre&gt;&lt;div class&#x3D;\&quot;msgbox_important\&quot;&gt;&lt;p class&#x3D;\&quot;msgbox_importantInDiv\&quot; data-mc-autonum&#x3D;\&quot;&amp;lt;b&amp;gt;&amp;lt;span style&#x3D;&amp;quot;color: #dd1e31;&amp;quot; class&#x3D;&amp;quot;mcFormatColor&amp;quot;&amp;gt;Important! &amp;lt;/span&amp;gt;&amp;lt;/b&amp;gt;\&quot;&gt;&lt;span class&#x3D;\&quot;autonumber\&quot;&gt;&lt;span&gt;&lt;b&gt;&lt;span style&#x3D;\&quot;color: #dd1e31;\&quot; class&#x3D;\&quot;mcFormatColor\&quot;&gt;Important!&lt;/span&gt;&lt;/b&gt;&lt;/span&gt;&lt;/span&gt; A &lt;code&gt;legacy_item_id&lt;/code&gt; value must always be passed in when specifying a &lt;code&gt;legacy_variation_sku&lt;/code&gt; value.&lt;/p&gt;&lt;/div&gt; | [optional] |
| **x_ebay_c_enduserctx** | **string**| This header is required to support revenue sharing for eBay Partner Network and to improve the accuracy of shipping and delivery time estimations.&lt;br&gt;&lt;br&gt;For additional information, refer to &lt;a href&#x3D;\&quot;/api-docs/buy/static/api-browse.html#Headers\&quot; target&#x3D;\&quot;_blank \&quot;&gt;Use request headers&lt;/a&gt; in the &lt;a href&#x3D;\&quot;/api-docs/buy/static/buying-ig-landing.html\&quot; target&#x3D;\&quot;_blank\&quot;&gt;Buying Integration Guide&lt;/a&gt;. | [optional] |
| **x_ebay_c_marketplace_id** | **string**| This header identifies the seller&#39;s eBay marketplace. It is required for all marketplaces outside of the US.&lt;br&gt;&lt;br&gt;&lt;span class&#x3D;\&quot;tablenote\&quot;&gt;&lt;b&gt;Note:&lt;/b&gt; If a marketplace ID value is not provided, the default value of &lt;code&gt;EBAY_US&lt;/code&gt; is used.&lt;/span&gt;&lt;br&gt;See &lt;a href&#x3D;\&quot;/api-docs/buy/browse/types/ba:MarketplaceIdEnum\&quot; target&#x3D;\&quot;_blank\&quot;&gt;MarketplaceIdEnum&lt;/a&gt; for a list of supported marketplaces. | [optional] |
| **accept_language** | **string**| This header is used to indicate the natural language and locale preferred by the user for the response.&lt;br&gt;&lt;br&gt;This header is required when targeting a specific locale of a marketplace that supports multiple locales. For example:&lt;ul&gt;&lt;li&gt;When targeting the French locale of the Belgium marketplace, it is required to pass in &lt;code&gt;fr-BE&lt;/code&gt; to specify this. If this locale is not specified, the language will default to Dutch.&lt;/li&gt;&lt;li&gt;When targeting the French locale of the Canadian marketplace, it is required to pass in &lt;code&gt;fr-CA&lt;/code&gt; to specify this. If this locale is not specified, the language will default to English.&lt;/li&gt;&lt;/ul&gt; | [optional] |

### Return type

[**\Modstore\EbayBrowseApi\Model\Item**](../Model/Item.md)

### Authorization

[api_auth](../../README.md#api_auth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getItems()`

```php
getItems($item_ids, $item_group_ids, $x_ebay_c_enduserctx, $x_ebay_c_marketplace_id, $accept_language): \Modstore\EbayBrowseApi\Model\Items
```



This method retrieves the details about specific items that buyers need to make a purchasing decision.<br><br><span class=\"tablenote\"><b>Note:</b> This is a <a href=\"/api-docs/static/versioning.html#limited \" target=\"_blank\"><img src=\"/cms/img/docs/partners-api.svg\" class=\"legend-icon partners-icon\" title=\"Limited Release\"  alt=\"Limited Release\" />(Limited Release)</a> available only to select Partners.<br><br>For this method, only the following fields are returned: <code>bidCount</code>, <code>currentBidPrice</code>, <code>eligibleForInlineCheckout</code>, <code>enabledForGuestCheckout</code>, <code>estimatedAvailabilities</code>, <code>gtin</code>, <code>itemAffiliateWebUrl</code>, <code>itemCreationDate</code>, <code>itemId</code>, <code>itemWebUrl</code>, <code>legacyItemId</code>, <code>minimumPriceToBid</code>, <code>price</code>, <code>priorityListing</code>, <code>reservePriceMet</code>, <code>sellerItemRevision</code>, <code>taxes</code>, <code>topRatedBuyingExperience</code>, and <code>uniqueBidderCount</code>.<br><br>The array <code>shippingOptions</code>, which comprises multiple fields, is also returned.</span><h3>Restrictions</h3>For a list of supported sites and other restrictions, refer to <a href=\"/api-docs/buy/browse/overview.html#API\">API Restrictions</a>.<br><br><span class=\"tablenote\"><b>eBay Partner Network:</b> In order to be commissioned for your sales, you must use the URL returned in the itemAffiliateWebUrl field to forward your buyer to the ebay.com site.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: api_auth
$config = Modstore\EbayBrowseApi\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Modstore\EbayBrowseApi\Api\ItemApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$item_ids = 'item_ids_example'; // string | A comma separated list of the unique identifiers of the items to retrieve (maximum 20).<br><br><span class=\"tablenote\"><b>Note:</b> In any given request, either <code>item_ids</code> <b>or</b> <code>item_group_ids</code> can be retrieved. Attempting to retrieve both will result in an error.</span><br><b>RESTful Item ID Format: </b><code>v1</code>|<code><i>#</i></code>|<code><i>#</i></code><br><br>For a single SKU listing, pass in the item ID: <pre>v1|2**********2|0</pre>For a multi-SKU listing, pass in the identifier of the variation:<pre>v1|1**********2|4**********2</pre><br>For more information about item IDs for RESTful APIs, refer to <a href=\"/api-docs/buy/static/api-browse.html#Legacy\" target=\"_blank\">Item ID legacy API compatibility overview</a> in the <a href=\"/api-docs/buy/static/buying-ig-landing.html\" target=\"_blank\">Buying Integration Guide</a>.
$item_group_ids = 'item_group_ids_example'; // string | A comma separated list of the unique identifiers of the item groups being retrieved (maximum 10).<br><br><span class=\"tablenote\"><b>Note:</b> In any given request, either <code>item_ids</code> <b>or</b> <code>item_group_ids</code> can be retrieved. Attempting to retrieve both will result in an error.</span><br><b>RESTful Group Item ID Format:</b> <code>############</code><br><br>For example:<pre>3**********9</pre>
$x_ebay_c_enduserctx = 'x_ebay_c_enduserctx_example'; // string | This header is required to support revenue sharing for eBay Partner Network and to improve the accuracy of shipping and delivery time estimations.<br><br>For additional information, refer to <a href=\"/api-docs/buy/static/api-browse.html#Headers\" target=\"_blank \">Use request headers</a> in the <a href=\"/api-docs/buy/static/buying-ig-landing.html\" target=\"_blank\">Buying Integration Guide</a>.
$x_ebay_c_marketplace_id = 'x_ebay_c_marketplace_id_example'; // string | This header identifies the seller's eBay marketplace. It is required for all marketplaces outside of the US.<br><br><span class=\"tablenote\"><b>Note:</b> If a marketplace ID value is not provided, the default value of <code>EBAY_US</code> is used.</span><br>See <a href=\"/api-docs/buy/browse/types/ba:MarketplaceIdEnum\" target=\"_blank\">MarketplaceIdEnum</a> for a list of supported marketplaces.
$accept_language = 'accept_language_example'; // string | This header is used to indicate the natural language and locale preferred by the user for the response.<br><br>This header is required when targeting a specific locale of a marketplace that supports multiple locales. For example:<ul><li>When targeting the French locale of the Belgium marketplace, it is required to pass in <code>fr-BE</code> to specify this. If this locale is not specified, the language will default to Dutch.</li><li>When targeting the French locale of the Canadian marketplace, it is required to pass in <code>fr-CA</code> to specify this. If this locale is not specified, the language will default to English.</li></ul>

try {
    $result = $apiInstance->getItems($item_ids, $item_group_ids, $x_ebay_c_enduserctx, $x_ebay_c_marketplace_id, $accept_language);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ItemApi->getItems: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **item_ids** | **string**| A comma separated list of the unique identifiers of the items to retrieve (maximum 20).&lt;br&gt;&lt;br&gt;&lt;span class&#x3D;\&quot;tablenote\&quot;&gt;&lt;b&gt;Note:&lt;/b&gt; In any given request, either &lt;code&gt;item_ids&lt;/code&gt; &lt;b&gt;or&lt;/b&gt; &lt;code&gt;item_group_ids&lt;/code&gt; can be retrieved. Attempting to retrieve both will result in an error.&lt;/span&gt;&lt;br&gt;&lt;b&gt;RESTful Item ID Format: &lt;/b&gt;&lt;code&gt;v1&lt;/code&gt;|&lt;code&gt;&lt;i&gt;#&lt;/i&gt;&lt;/code&gt;|&lt;code&gt;&lt;i&gt;#&lt;/i&gt;&lt;/code&gt;&lt;br&gt;&lt;br&gt;For a single SKU listing, pass in the item ID: &lt;pre&gt;v1|2**********2|0&lt;/pre&gt;For a multi-SKU listing, pass in the identifier of the variation:&lt;pre&gt;v1|1**********2|4**********2&lt;/pre&gt;&lt;br&gt;For more information about item IDs for RESTful APIs, refer to &lt;a href&#x3D;\&quot;/api-docs/buy/static/api-browse.html#Legacy\&quot; target&#x3D;\&quot;_blank\&quot;&gt;Item ID legacy API compatibility overview&lt;/a&gt; in the &lt;a href&#x3D;\&quot;/api-docs/buy/static/buying-ig-landing.html\&quot; target&#x3D;\&quot;_blank\&quot;&gt;Buying Integration Guide&lt;/a&gt;. | [optional] |
| **item_group_ids** | **string**| A comma separated list of the unique identifiers of the item groups being retrieved (maximum 10).&lt;br&gt;&lt;br&gt;&lt;span class&#x3D;\&quot;tablenote\&quot;&gt;&lt;b&gt;Note:&lt;/b&gt; In any given request, either &lt;code&gt;item_ids&lt;/code&gt; &lt;b&gt;or&lt;/b&gt; &lt;code&gt;item_group_ids&lt;/code&gt; can be retrieved. Attempting to retrieve both will result in an error.&lt;/span&gt;&lt;br&gt;&lt;b&gt;RESTful Group Item ID Format:&lt;/b&gt; &lt;code&gt;############&lt;/code&gt;&lt;br&gt;&lt;br&gt;For example:&lt;pre&gt;3**********9&lt;/pre&gt; | [optional] |
| **x_ebay_c_enduserctx** | **string**| This header is required to support revenue sharing for eBay Partner Network and to improve the accuracy of shipping and delivery time estimations.&lt;br&gt;&lt;br&gt;For additional information, refer to &lt;a href&#x3D;\&quot;/api-docs/buy/static/api-browse.html#Headers\&quot; target&#x3D;\&quot;_blank \&quot;&gt;Use request headers&lt;/a&gt; in the &lt;a href&#x3D;\&quot;/api-docs/buy/static/buying-ig-landing.html\&quot; target&#x3D;\&quot;_blank\&quot;&gt;Buying Integration Guide&lt;/a&gt;. | [optional] |
| **x_ebay_c_marketplace_id** | **string**| This header identifies the seller&#39;s eBay marketplace. It is required for all marketplaces outside of the US.&lt;br&gt;&lt;br&gt;&lt;span class&#x3D;\&quot;tablenote\&quot;&gt;&lt;b&gt;Note:&lt;/b&gt; If a marketplace ID value is not provided, the default value of &lt;code&gt;EBAY_US&lt;/code&gt; is used.&lt;/span&gt;&lt;br&gt;See &lt;a href&#x3D;\&quot;/api-docs/buy/browse/types/ba:MarketplaceIdEnum\&quot; target&#x3D;\&quot;_blank\&quot;&gt;MarketplaceIdEnum&lt;/a&gt; for a list of supported marketplaces. | [optional] |
| **accept_language** | **string**| This header is used to indicate the natural language and locale preferred by the user for the response.&lt;br&gt;&lt;br&gt;This header is required when targeting a specific locale of a marketplace that supports multiple locales. For example:&lt;ul&gt;&lt;li&gt;When targeting the French locale of the Belgium marketplace, it is required to pass in &lt;code&gt;fr-BE&lt;/code&gt; to specify this. If this locale is not specified, the language will default to Dutch.&lt;/li&gt;&lt;li&gt;When targeting the French locale of the Canadian marketplace, it is required to pass in &lt;code&gt;fr-CA&lt;/code&gt; to specify this. If this locale is not specified, the language will default to English.&lt;/li&gt;&lt;/ul&gt; | [optional] |

### Return type

[**\Modstore\EbayBrowseApi\Model\Items**](../Model/Items.md)

### Authorization

[api_auth](../../README.md#api_auth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getItemsByItemGroup()`

```php
getItemsByItemGroup($item_group_id, $fieldgroups, $x_ebay_c_enduserctx, $x_ebay_c_marketplace_id, $accept_language): \Modstore\EbayBrowseApi\Model\ItemGroup
```



This method retrieves details about individual items in an item group. An item group is an item that has various aspect differences, such as color, size, storage capacity, etc.<br><br>You pass in the <b>item_group_id</b> as a URI parameter.<br><br>This method returns two main containers:<ul><li><b>items</b><br>This container has an array of containers with the details about each item in the group.</li><li><b>commonDescriptions</b><br>This container has an array of containers for a description and the <code>item_ids</code> for all items that have this exact description. Because items within an item group often have the same description, this decreases the size of the response.</li></ul>Setting the <b>fieldgroup</b> to <code>ADDITIONAL_SELLER_DETAILS</code> adds an additional field to the response that returns the seller's user ID. For more information, refer to <a href=\"/api-docs/buy/browse/resources/item/methods/getItemsByItemGroup#uri.fieldgroups\">fieldgroups</a>.<h3>Restrictions</h3>For a list of supported sites and other restrictions, refer to <a href=\"/api-docs/buy/browse/overview.html#API\">API Restrictions</a>.<br><br><span class=\"tablenote\"><b>eBay Partner Network: </b> In order to be commissioned for your sales, you must use the URL returned in the <code>itemAffiliateWebUrl</code> field to forward your buyer to the ebay.com site.</span>

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: api_auth
$config = Modstore\EbayBrowseApi\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Modstore\EbayBrowseApi\Api\ItemApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$item_group_id = 'item_group_id_example'; // string | This query parameter specifies the unique identifier of an item group for which information is to be returned. An item group is an item that has various aspect differences, such as color, size, storage capacity, etc.<br><br>This ID is returned in the <b>itemGroupHref</b> field of the <a href=\"/api-docs/buy/browse/resources/item_summary/methods/search\">search</a> and <a href=\"/api-docs/buy/browse/resources/item/methods/getItem\">getItem</a> methods.<br><br><b>For Example:</b><pre>https://api.ebay.com/buy/browse/v1/item/get_items_by_item_group?item_group_id=3**********6</pre>
$fieldgroups = 'fieldgroups_example'; // string | This field controls what is returned in the response. If this field is not set, the method returns all details about the item.<br><br><b>Valid Values:</b><br><br><b>ADDITIONAL_SELLER_DETAILS</b> - This field group adds the <a href=\"/api-docs/buy/browse/resources/item/methods/getItemsByItemGroup#response.items.seller.userId\">userId</a> field to the response.
$x_ebay_c_enduserctx = 'x_ebay_c_enduserctx_example'; // string | This header is required to support revenue sharing for eBay Partner Network and to improve the accuracy of shipping and delivery time estimations.<br><br>For additional information, refer to <a href=\"/api-docs/buy/static/api-browse.html#Headers\" target=\"_blank \">Use request headers</a> in the <a href=\"/api-docs/buy/static/buying-ig-landing.html\" target=\"_blank\">Buying Integration Guide</a>.
$x_ebay_c_marketplace_id = 'x_ebay_c_marketplace_id_example'; // string | This header identifies the seller's eBay marketplace. It is required for all marketplaces outside of the US.<br><br><span class=\"tablenote\"><b>Note:</b> If a marketplace ID value is not provided, the default value of <code>EBAY_US</code> is used.</span><br>See <a href=\"/api-docs/buy/browse/types/ba:MarketplaceIdEnum\" target=\"_blank\">MarketplaceIdEnum</a> for a list of supported marketplaces.
$accept_language = 'accept_language_example'; // string | This header is used to indicate the natural language and locale preferred by the user for the response.<br><br>This header is required when targeting a specific locale of a marketplace that supports multiple locales. For example:<ul><li>When targeting the French locale of the Belgium marketplace, it is required to pass in <code>fr-BE</code> to specify this. If this locale is not specified, the language will default to Dutch.</li><li>When targeting the French locale of the Canadian marketplace, it is required to pass in <code>fr-CA</code> to specify this. If this locale is not specified, the language will default to English.</li></ul>

try {
    $result = $apiInstance->getItemsByItemGroup($item_group_id, $fieldgroups, $x_ebay_c_enduserctx, $x_ebay_c_marketplace_id, $accept_language);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ItemApi->getItemsByItemGroup: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **item_group_id** | **string**| This query parameter specifies the unique identifier of an item group for which information is to be returned. An item group is an item that has various aspect differences, such as color, size, storage capacity, etc.&lt;br&gt;&lt;br&gt;This ID is returned in the &lt;b&gt;itemGroupHref&lt;/b&gt; field of the &lt;a href&#x3D;\&quot;/api-docs/buy/browse/resources/item_summary/methods/search\&quot;&gt;search&lt;/a&gt; and &lt;a href&#x3D;\&quot;/api-docs/buy/browse/resources/item/methods/getItem\&quot;&gt;getItem&lt;/a&gt; methods.&lt;br&gt;&lt;br&gt;&lt;b&gt;For Example:&lt;/b&gt;&lt;pre&gt;https://api.ebay.com/buy/browse/v1/item/get_items_by_item_group?item_group_id&#x3D;3**********6&lt;/pre&gt; | |
| **fieldgroups** | **string**| This field controls what is returned in the response. If this field is not set, the method returns all details about the item.&lt;br&gt;&lt;br&gt;&lt;b&gt;Valid Values:&lt;/b&gt;&lt;br&gt;&lt;br&gt;&lt;b&gt;ADDITIONAL_SELLER_DETAILS&lt;/b&gt; - This field group adds the &lt;a href&#x3D;\&quot;/api-docs/buy/browse/resources/item/methods/getItemsByItemGroup#response.items.seller.userId\&quot;&gt;userId&lt;/a&gt; field to the response. | [optional] |
| **x_ebay_c_enduserctx** | **string**| This header is required to support revenue sharing for eBay Partner Network and to improve the accuracy of shipping and delivery time estimations.&lt;br&gt;&lt;br&gt;For additional information, refer to &lt;a href&#x3D;\&quot;/api-docs/buy/static/api-browse.html#Headers\&quot; target&#x3D;\&quot;_blank \&quot;&gt;Use request headers&lt;/a&gt; in the &lt;a href&#x3D;\&quot;/api-docs/buy/static/buying-ig-landing.html\&quot; target&#x3D;\&quot;_blank\&quot;&gt;Buying Integration Guide&lt;/a&gt;. | [optional] |
| **x_ebay_c_marketplace_id** | **string**| This header identifies the seller&#39;s eBay marketplace. It is required for all marketplaces outside of the US.&lt;br&gt;&lt;br&gt;&lt;span class&#x3D;\&quot;tablenote\&quot;&gt;&lt;b&gt;Note:&lt;/b&gt; If a marketplace ID value is not provided, the default value of &lt;code&gt;EBAY_US&lt;/code&gt; is used.&lt;/span&gt;&lt;br&gt;See &lt;a href&#x3D;\&quot;/api-docs/buy/browse/types/ba:MarketplaceIdEnum\&quot; target&#x3D;\&quot;_blank\&quot;&gt;MarketplaceIdEnum&lt;/a&gt; for a list of supported marketplaces. | [optional] |
| **accept_language** | **string**| This header is used to indicate the natural language and locale preferred by the user for the response.&lt;br&gt;&lt;br&gt;This header is required when targeting a specific locale of a marketplace that supports multiple locales. For example:&lt;ul&gt;&lt;li&gt;When targeting the French locale of the Belgium marketplace, it is required to pass in &lt;code&gt;fr-BE&lt;/code&gt; to specify this. If this locale is not specified, the language will default to Dutch.&lt;/li&gt;&lt;li&gt;When targeting the French locale of the Canadian marketplace, it is required to pass in &lt;code&gt;fr-CA&lt;/code&gt; to specify this. If this locale is not specified, the language will default to English.&lt;/li&gt;&lt;/ul&gt; | [optional] |

### Return type

[**\Modstore\EbayBrowseApi\Model\ItemGroup**](../Model/ItemGroup.md)

### Authorization

[api_auth](../../README.md#api_auth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
