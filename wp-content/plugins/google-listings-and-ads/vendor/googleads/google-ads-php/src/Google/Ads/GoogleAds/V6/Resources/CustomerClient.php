<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/ads/googleads/v6/resources/customer_client.proto

namespace Google\Ads\GoogleAds\V6\Resources;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * A link between the given customer and a client customer. CustomerClients only
 * exist for manager customers. All direct and indirect client customers are
 * included, as well as the manager itself.
 *
 * Generated from protobuf message <code>google.ads.googleads.v6.resources.CustomerClient</code>
 */
class CustomerClient extends \Google\Protobuf\Internal\Message
{
    /**
     * Output only. The resource name of the customer client.
     * CustomerClient resource names have the form:
     * `customers/{customer_id}/customerClients/{client_customer_id}`
     *
     * Generated from protobuf field <code>string resource_name = 1 [(.google.api.field_behavior) = OUTPUT_ONLY, (.google.api.resource_reference) = {</code>
     */
    protected $resource_name = '';
    /**
     * Output only. The resource name of the client-customer which is linked to
     * the given customer. Read only.
     *
     * Generated from protobuf field <code>string client_customer = 12 [(.google.api.field_behavior) = OUTPUT_ONLY, (.google.api.resource_reference) = {</code>
     */
    protected $client_customer = null;
    /**
     * Output only. Specifies whether this is a
     * [hidden account](https://support.google.com/google-ads/answer/7519830).
     * Read only.
     *
     * Generated from protobuf field <code>bool hidden = 13 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     */
    protected $hidden = null;
    /**
     * Output only. Distance between given customer and client. For self link, the level value
     * will be 0. Read only.
     *
     * Generated from protobuf field <code>int64 level = 14 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     */
    protected $level = null;
    /**
     * Output only. Common Locale Data Repository (CLDR) string representation of the
     * time zone of the client, e.g. America/Los_Angeles. Read only.
     *
     * Generated from protobuf field <code>string time_zone = 15 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     */
    protected $time_zone = null;
    /**
     * Output only. Identifies if the client is a test account. Read only.
     *
     * Generated from protobuf field <code>bool test_account = 16 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     */
    protected $test_account = null;
    /**
     * Output only. Identifies if the client is a manager. Read only.
     *
     * Generated from protobuf field <code>bool manager = 17 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     */
    protected $manager = null;
    /**
     * Output only. Descriptive name for the client. Read only.
     *
     * Generated from protobuf field <code>string descriptive_name = 18 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     */
    protected $descriptive_name = null;
    /**
     * Output only. Currency code (e.g. 'USD', 'EUR') for the client. Read only.
     *
     * Generated from protobuf field <code>string currency_code = 19 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     */
    protected $currency_code = null;
    /**
     * Output only. The ID of the client customer. Read only.
     *
     * Generated from protobuf field <code>int64 id = 20 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     */
    protected $id = null;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $resource_name
     *           Output only. The resource name of the customer client.
     *           CustomerClient resource names have the form:
     *           `customers/{customer_id}/customerClients/{client_customer_id}`
     *     @type string $client_customer
     *           Output only. The resource name of the client-customer which is linked to
     *           the given customer. Read only.
     *     @type bool $hidden
     *           Output only. Specifies whether this is a
     *           [hidden account](https://support.google.com/google-ads/answer/7519830).
     *           Read only.
     *     @type int|string $level
     *           Output only. Distance between given customer and client. For self link, the level value
     *           will be 0. Read only.
     *     @type string $time_zone
     *           Output only. Common Locale Data Repository (CLDR) string representation of the
     *           time zone of the client, e.g. America/Los_Angeles. Read only.
     *     @type bool $test_account
     *           Output only. Identifies if the client is a test account. Read only.
     *     @type bool $manager
     *           Output only. Identifies if the client is a manager. Read only.
     *     @type string $descriptive_name
     *           Output only. Descriptive name for the client. Read only.
     *     @type string $currency_code
     *           Output only. Currency code (e.g. 'USD', 'EUR') for the client. Read only.
     *     @type int|string $id
     *           Output only. The ID of the client customer. Read only.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Ads\GoogleAds\V6\Resources\CustomerClient::initOnce();
        parent::__construct($data);
    }

    /**
     * Output only. The resource name of the customer client.
     * CustomerClient resource names have the form:
     * `customers/{customer_id}/customerClients/{client_customer_id}`
     *
     * Generated from protobuf field <code>string resource_name = 1 [(.google.api.field_behavior) = OUTPUT_ONLY, (.google.api.resource_reference) = {</code>
     * @return string
     */
    public function getResourceName()
    {
        return $this->resource_name;
    }

    /**
     * Output only. The resource name of the customer client.
     * CustomerClient resource names have the form:
     * `customers/{customer_id}/customerClients/{client_customer_id}`
     *
     * Generated from protobuf field <code>string resource_name = 1 [(.google.api.field_behavior) = OUTPUT_ONLY, (.google.api.resource_reference) = {</code>
     * @param string $var
     * @return $this
     */
    public function setResourceName($var)
    {
        GPBUtil::checkString($var, True);
        $this->resource_name = $var;

        return $this;
    }

    /**
     * Output only. The resource name of the client-customer which is linked to
     * the given customer. Read only.
     *
     * Generated from protobuf field <code>string client_customer = 12 [(.google.api.field_behavior) = OUTPUT_ONLY, (.google.api.resource_reference) = {</code>
     * @return string
     */
    public function getClientCustomer()
    {
        return isset($this->client_customer) ? $this->client_customer : '';
    }

    public function hasClientCustomer()
    {
        return isset($this->client_customer);
    }

    public function clearClientCustomer()
    {
        unset($this->client_customer);
    }

    /**
     * Output only. The resource name of the client-customer which is linked to
     * the given customer. Read only.
     *
     * Generated from protobuf field <code>string client_customer = 12 [(.google.api.field_behavior) = OUTPUT_ONLY, (.google.api.resource_reference) = {</code>
     * @param string $var
     * @return $this
     */
    public function setClientCustomer($var)
    {
        GPBUtil::checkString($var, True);
        $this->client_customer = $var;

        return $this;
    }

    /**
     * Output only. Specifies whether this is a
     * [hidden account](https://support.google.com/google-ads/answer/7519830).
     * Read only.
     *
     * Generated from protobuf field <code>bool hidden = 13 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @return bool
     */
    public function getHidden()
    {
        return isset($this->hidden) ? $this->hidden : false;
    }

    public function hasHidden()
    {
        return isset($this->hidden);
    }

    public function clearHidden()
    {
        unset($this->hidden);
    }

    /**
     * Output only. Specifies whether this is a
     * [hidden account](https://support.google.com/google-ads/answer/7519830).
     * Read only.
     *
     * Generated from protobuf field <code>bool hidden = 13 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @param bool $var
     * @return $this
     */
    public function setHidden($var)
    {
        GPBUtil::checkBool($var);
        $this->hidden = $var;

        return $this;
    }

    /**
     * Output only. Distance between given customer and client. For self link, the level value
     * will be 0. Read only.
     *
     * Generated from protobuf field <code>int64 level = 14 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @return int|string
     */
    public function getLevel()
    {
        return isset($this->level) ? $this->level : 0;
    }

    public function hasLevel()
    {
        return isset($this->level);
    }

    public function clearLevel()
    {
        unset($this->level);
    }

    /**
     * Output only. Distance between given customer and client. For self link, the level value
     * will be 0. Read only.
     *
     * Generated from protobuf field <code>int64 level = 14 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @param int|string $var
     * @return $this
     */
    public function setLevel($var)
    {
        GPBUtil::checkInt64($var);
        $this->level = $var;

        return $this;
    }

    /**
     * Output only. Common Locale Data Repository (CLDR) string representation of the
     * time zone of the client, e.g. America/Los_Angeles. Read only.
     *
     * Generated from protobuf field <code>string time_zone = 15 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @return string
     */
    public function getTimeZone()
    {
        return isset($this->time_zone) ? $this->time_zone : '';
    }

    public function hasTimeZone()
    {
        return isset($this->time_zone);
    }

    public function clearTimeZone()
    {
        unset($this->time_zone);
    }

    /**
     * Output only. Common Locale Data Repository (CLDR) string representation of the
     * time zone of the client, e.g. America/Los_Angeles. Read only.
     *
     * Generated from protobuf field <code>string time_zone = 15 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @param string $var
     * @return $this
     */
    public function setTimeZone($var)
    {
        GPBUtil::checkString($var, True);
        $this->time_zone = $var;

        return $this;
    }

    /**
     * Output only. Identifies if the client is a test account. Read only.
     *
     * Generated from protobuf field <code>bool test_account = 16 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @return bool
     */
    public function getTestAccount()
    {
        return isset($this->test_account) ? $this->test_account : false;
    }

    public function hasTestAccount()
    {
        return isset($this->test_account);
    }

    public function clearTestAccount()
    {
        unset($this->test_account);
    }

    /**
     * Output only. Identifies if the client is a test account. Read only.
     *
     * Generated from protobuf field <code>bool test_account = 16 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @param bool $var
     * @return $this
     */
    public function setTestAccount($var)
    {
        GPBUtil::checkBool($var);
        $this->test_account = $var;

        return $this;
    }

    /**
     * Output only. Identifies if the client is a manager. Read only.
     *
     * Generated from protobuf field <code>bool manager = 17 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @return bool
     */
    public function getManager()
    {
        return isset($this->manager) ? $this->manager : false;
    }

    public function hasManager()
    {
        return isset($this->manager);
    }

    public function clearManager()
    {
        unset($this->manager);
    }

    /**
     * Output only. Identifies if the client is a manager. Read only.
     *
     * Generated from protobuf field <code>bool manager = 17 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @param bool $var
     * @return $this
     */
    public function setManager($var)
    {
        GPBUtil::checkBool($var);
        $this->manager = $var;

        return $this;
    }

    /**
     * Output only. Descriptive name for the client. Read only.
     *
     * Generated from protobuf field <code>string descriptive_name = 18 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @return string
     */
    public function getDescriptiveName()
    {
        return isset($this->descriptive_name) ? $this->descriptive_name : '';
    }

    public function hasDescriptiveName()
    {
        return isset($this->descriptive_name);
    }

    public function clearDescriptiveName()
    {
        unset($this->descriptive_name);
    }

    /**
     * Output only. Descriptive name for the client. Read only.
     *
     * Generated from protobuf field <code>string descriptive_name = 18 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @param string $var
     * @return $this
     */
    public function setDescriptiveName($var)
    {
        GPBUtil::checkString($var, True);
        $this->descriptive_name = $var;

        return $this;
    }

    /**
     * Output only. Currency code (e.g. 'USD', 'EUR') for the client. Read only.
     *
     * Generated from protobuf field <code>string currency_code = 19 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @return string
     */
    public function getCurrencyCode()
    {
        return isset($this->currency_code) ? $this->currency_code : '';
    }

    public function hasCurrencyCode()
    {
        return isset($this->currency_code);
    }

    public function clearCurrencyCode()
    {
        unset($this->currency_code);
    }

    /**
     * Output only. Currency code (e.g. 'USD', 'EUR') for the client. Read only.
     *
     * Generated from protobuf field <code>string currency_code = 19 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @param string $var
     * @return $this
     */
    public function setCurrencyCode($var)
    {
        GPBUtil::checkString($var, True);
        $this->currency_code = $var;

        return $this;
    }

    /**
     * Output only. The ID of the client customer. Read only.
     *
     * Generated from protobuf field <code>int64 id = 20 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @return int|string
     */
    public function getId()
    {
        return isset($this->id) ? $this->id : 0;
    }

    public function hasId()
    {
        return isset($this->id);
    }

    public function clearId()
    {
        unset($this->id);
    }

    /**
     * Output only. The ID of the client customer. Read only.
     *
     * Generated from protobuf field <code>int64 id = 20 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @param int|string $var
     * @return $this
     */
    public function setId($var)
    {
        GPBUtil::checkInt64($var);
        $this->id = $var;

        return $this;
    }

}

