# # AvailableCoupon

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**constraint** | [**\Modstore\EbayBrowseApi\Model\CouponConstraint**](CouponConstraint.md) |  | [optional]
**discount_amount** | [**\Modstore\EbayBrowseApi\Model\Amount**](Amount.md) |  | [optional]
**discount_type** | **string** | The type of discount that the coupon applies. For implementation help, refer to &lt;a href&#x3D;&#39;https://developer.ebay.com/api-docs/buy/browse/types/gct:CouponDiscountType&#39;&gt;eBay API documentation&lt;/a&gt; | [optional]
**message** | **string** | A description of the coupon.&lt;br&gt;&lt;br&gt;&lt;span class&#x3D;\&quot;tablenote\&quot;&gt;&lt;b&gt;Note:&lt;/b&gt; The value returned in the &lt;code&gt;termsWebUrl&lt;/code&gt; field should appear for all experiences when displaying coupons. The value in the &lt;code&gt;availableCoupons.message&lt;/code&gt; field must also be included if returned in the API response.&lt;/span&gt; | [optional]
**redemption_code** | **string** | The coupon code. | [optional]
**terms_web_url** | **string** | The URL to the coupon terms of use.&lt;br&gt;&lt;br&gt;&lt;span class&#x3D;\&quot;tablenote\&quot;&gt;&lt;b&gt;Note:&lt;/b&gt; The value returned in the &lt;code&gt;termsWebUrl&lt;/code&gt; field should appear for all experiences when displaying coupons. The value in the &lt;code&gt;availableCoupons.message&lt;/code&gt; field must also be included if returned in the API response.&lt;/span&gt; | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
