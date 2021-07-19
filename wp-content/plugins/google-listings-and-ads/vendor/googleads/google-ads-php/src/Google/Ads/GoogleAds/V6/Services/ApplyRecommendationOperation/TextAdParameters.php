<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/ads/googleads/v6/services/recommendation_service.proto

namespace Google\Ads\GoogleAds\V6\Services\ApplyRecommendationOperation;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Parameters to use when applying a text ad recommendation.
 *
 * Generated from protobuf message <code>google.ads.googleads.v6.services.ApplyRecommendationOperation.TextAdParameters</code>
 */
class TextAdParameters extends \Google\Protobuf\Internal\Message
{
    /**
     * New ad to add to recommended ad group. All necessary fields need to be
     * set in this message. This is a required field.
     *
     * Generated from protobuf field <code>.google.ads.googleads.v6.resources.Ad ad = 1;</code>
     */
    protected $ad = null;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type \Google\Ads\GoogleAds\V6\Resources\Ad $ad
     *           New ad to add to recommended ad group. All necessary fields need to be
     *           set in this message. This is a required field.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Ads\GoogleAds\V6\Services\RecommendationService::initOnce();
        parent::__construct($data);
    }

    /**
     * New ad to add to recommended ad group. All necessary fields need to be
     * set in this message. This is a required field.
     *
     * Generated from protobuf field <code>.google.ads.googleads.v6.resources.Ad ad = 1;</code>
     * @return \Google\Ads\GoogleAds\V6\Resources\Ad
     */
    public function getAd()
    {
        return isset($this->ad) ? $this->ad : null;
    }

    public function hasAd()
    {
        return isset($this->ad);
    }

    public function clearAd()
    {
        unset($this->ad);
    }

    /**
     * New ad to add to recommended ad group. All necessary fields need to be
     * set in this message. This is a required field.
     *
     * Generated from protobuf field <code>.google.ads.googleads.v6.resources.Ad ad = 1;</code>
     * @param \Google\Ads\GoogleAds\V6\Resources\Ad $var
     * @return $this
     */
    public function setAd($var)
    {
        GPBUtil::checkMessage($var, \Google\Ads\GoogleAds\V6\Resources\Ad::class);
        $this->ad = $var;

        return $this;
    }

}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(TextAdParameters::class, \Google\Ads\GoogleAds\V6\Services\ApplyRecommendationOperation_TextAdParameters::class);

