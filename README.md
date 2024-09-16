# EbayBrowseApi

The Browse API has the following resources:<ul><li><b>item_summary:</b><br>Allows shoppers to search for specific items by keyword, GTIN, category, charity, product, image, or item aspects and refine the results by using filters, such as aspects, compatibility, and fields values, or UI parameters.</li><li><b>item:</b><br>Allows shoppers to retrieve the details of a specific item or all items in an item group, which is an item with variations such as color and size and check if a product is compatible with the specified item, such as if a specific car is compatible with a specific part.<br><br>This resource also provides a bridge between the eBay legacy APIs, such as the <a href=\"/api-docs/user-guides/static/finding-user-guide-landing.html\" target=\"_blank\">Finding</b>, and the RESTful APIs, which use different formats for the item IDs.</li></ul>The <b>item_summary</b>, <b>search_by_image</b>, and <b>item</b> resource calls require an <a href=\"/api-docs/static/oauth-client-credentials-grant.html\" target=\"_blank\">Application access token</a>.


## Installation & Usage

### Requirements

PHP 7.4 and later.
Should also work with PHP 8.0.

### Composer

To install the bindings via [Composer](https://getcomposer.org/), add the following to `composer.json`:

```json
{
  "repositories": [
    {
      "type": "vcs",
      "url": "https://github.com/GIT_USER_ID/GIT_REPO_ID.git"
    }
  ],
  "require": {
    "GIT_USER_ID/GIT_REPO_ID": "*@dev"
  }
}
```

Then run `composer install`

### Manual Installation

Download the files and include `autoload.php`:

```php
<?php
require_once('/path/to/EbayBrowseApi/vendor/autoload.php');
```

## Getting Started

Please follow the [installation procedure](#installation--usage) and then run the following:

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

## API Endpoints

All URIs are relative to *https://api.ebay.com/buy/browse/v1*

Class | Method | HTTP request | Description
------------ | ------------- | ------------- | -------------
*ItemApi* | [**checkCompatibility**](docs/Api/ItemApi.md#checkcompatibility) | **POST** /item/{item_id}/check_compatibility | 
*ItemApi* | [**getItem**](docs/Api/ItemApi.md#getitem) | **GET** /item/{item_id} | 
*ItemApi* | [**getItemByLegacyId**](docs/Api/ItemApi.md#getitembylegacyid) | **GET** /item/get_item_by_legacy_id | 
*ItemApi* | [**getItems**](docs/Api/ItemApi.md#getitems) | **GET** /item/ | 
*ItemApi* | [**getItemsByItemGroup**](docs/Api/ItemApi.md#getitemsbyitemgroup) | **GET** /item/get_items_by_item_group | 
*ItemSummaryApi* | [**search**](docs/Api/ItemSummaryApi.md#search) | **GET** /item_summary/search | 
*ItemSummaryApi* | [**searchByImage**](docs/Api/ItemSummaryApi.md#searchbyimage) | **POST** /item_summary/search_by_image | 

## Models

- [AdditionalProductIdentity](docs/Model/AdditionalProductIdentity.md)
- [AddonService](docs/Model/AddonService.md)
- [Address](docs/Model/Address.md)
- [Amount](docs/Model/Amount.md)
- [Aspect](docs/Model/Aspect.md)
- [AspectDistribution](docs/Model/AspectDistribution.md)
- [AspectGroup](docs/Model/AspectGroup.md)
- [AspectValueDistribution](docs/Model/AspectValueDistribution.md)
- [AttributeNameValue](docs/Model/AttributeNameValue.md)
- [AuthenticityGuaranteeProgram](docs/Model/AuthenticityGuaranteeProgram.md)
- [AuthenticityVerificationProgram](docs/Model/AuthenticityVerificationProgram.md)
- [AutoCorrections](docs/Model/AutoCorrections.md)
- [AvailableCoupon](docs/Model/AvailableCoupon.md)
- [BuyingOptionDistribution](docs/Model/BuyingOptionDistribution.md)
- [Category](docs/Model/Category.md)
- [CategoryDistribution](docs/Model/CategoryDistribution.md)
- [CommonDescriptions](docs/Model/CommonDescriptions.md)
- [CompanyAddress](docs/Model/CompanyAddress.md)
- [CompatibilityPayload](docs/Model/CompatibilityPayload.md)
- [CompatibilityProperty](docs/Model/CompatibilityProperty.md)
- [CompatibilityResponse](docs/Model/CompatibilityResponse.md)
- [ConditionDescriptor](docs/Model/ConditionDescriptor.md)
- [ConditionDescriptorValue](docs/Model/ConditionDescriptorValue.md)
- [ConditionDistribution](docs/Model/ConditionDistribution.md)
- [ConvertedAmount](docs/Model/ConvertedAmount.md)
- [CoreItem](docs/Model/CoreItem.md)
- [CouponConstraint](docs/Model/CouponConstraint.md)
- [EconomicOperator](docs/Model/EconomicOperator.md)
- [Error](docs/Model/Error.md)
- [ErrorParameter](docs/Model/ErrorParameter.md)
- [EstimatedAvailability](docs/Model/EstimatedAvailability.md)
- [HazardPictogram](docs/Model/HazardPictogram.md)
- [HazardStatement](docs/Model/HazardStatement.md)
- [HazardousMaterialsLabels](docs/Model/HazardousMaterialsLabels.md)
- [Image](docs/Model/Image.md)
- [Item](docs/Model/Item.md)
- [ItemGroup](docs/Model/ItemGroup.md)
- [ItemGroupSummary](docs/Model/ItemGroupSummary.md)
- [ItemLocationImpl](docs/Model/ItemLocationImpl.md)
- [ItemReturnTerms](docs/Model/ItemReturnTerms.md)
- [ItemSummary](docs/Model/ItemSummary.md)
- [Items](docs/Model/Items.md)
- [LegalAddress](docs/Model/LegalAddress.md)
- [MarketingPrice](docs/Model/MarketingPrice.md)
- [PaymentMethod](docs/Model/PaymentMethod.md)
- [PaymentMethodBrand](docs/Model/PaymentMethodBrand.md)
- [PickupOptionSummary](docs/Model/PickupOptionSummary.md)
- [Product](docs/Model/Product.md)
- [ProductIdentity](docs/Model/ProductIdentity.md)
- [ProductSafetyLabelPictogram](docs/Model/ProductSafetyLabelPictogram.md)
- [ProductSafetyLabelStatement](docs/Model/ProductSafetyLabelStatement.md)
- [ProductSafetyLabels](docs/Model/ProductSafetyLabels.md)
- [RatingHistogram](docs/Model/RatingHistogram.md)
- [Refinement](docs/Model/Refinement.md)
- [Region](docs/Model/Region.md)
- [ResponsiblePerson](docs/Model/ResponsiblePerson.md)
- [ReviewRating](docs/Model/ReviewRating.md)
- [SearchByImageRequest](docs/Model/SearchByImageRequest.md)
- [SearchPagedCollection](docs/Model/SearchPagedCollection.md)
- [Seller](docs/Model/Seller.md)
- [SellerCustomPolicy](docs/Model/SellerCustomPolicy.md)
- [SellerDetail](docs/Model/SellerDetail.md)
- [SellerLegalInfo](docs/Model/SellerLegalInfo.md)
- [ShipToLocation](docs/Model/ShipToLocation.md)
- [ShipToLocations](docs/Model/ShipToLocations.md)
- [ShipToRegion](docs/Model/ShipToRegion.md)
- [ShippingOption](docs/Model/ShippingOption.md)
- [ShippingOptionSummary](docs/Model/ShippingOptionSummary.md)
- [TargetLocation](docs/Model/TargetLocation.md)
- [TaxJurisdiction](docs/Model/TaxJurisdiction.md)
- [Taxes](docs/Model/Taxes.md)
- [TimeDuration](docs/Model/TimeDuration.md)
- [TypedNameValue](docs/Model/TypedNameValue.md)
- [VatDetail](docs/Model/VatDetail.md)

## Authorization

Authentication schemes defined for the API:
### api_auth

- **Type**: `OAuth`
- **Flow**: `application`
- **Authorization URL**: ``
- **Scopes**: 
    - **https://api.ebay.com/oauth/api_scope/buy.item.bulk**: Retrieve eBay items in bulk.
    - **https://api.ebay.com/oauth/api_scope**: View public data from eBay

## Tests

To run the tests, use:

```bash
composer install
vendor/bin/phpunit
```

## Author



## About this package

This PHP package is automatically generated by the [OpenAPI Generator](https://openapi-generator.tech) project:

- API version: `v1.19.9`
    - Generator version: `7.8.0`
- Build package: `org.openapitools.codegen.languages.PhpClientCodegen`

```
openapi-generator generate -i buy_browse_v1_oas3.json -g php -o ebay_browse_api --additional-properties packageName=EbayBrowseApi --additional-properties invokerPackage=Modstore\\EbayBrowseApi
```
