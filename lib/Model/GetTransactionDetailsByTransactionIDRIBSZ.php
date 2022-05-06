<?php
/**
 * GetTransactionDetailsByTransactionIDRIBSZ
 *
 * PHP version 7.3
 *
 * @category Class
 * @package  CryptoAPIs
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */

/**
 * CryptoAPIs
 *
 * Crypto APIs 2.0 is a complex and innovative infrastructure layer that radically simplifies the development of any Blockchain and Crypto related applications. Organized around REST, Crypto APIs 2.0 can assist both novice Bitcoin/Ethereum enthusiasts and crypto experts with the development of their blockchain applications. Crypto APIs 2.0 provides unified endpoints and data, raw data, automatic tokens and coins forwardings, callback functionalities, and much more.
 *
 * The version of the OpenAPI document: 2.0.0
 * Contact: developers@cryptoapis.io
 * Generated by: https://openapi-generator.tech
 * OpenAPI Generator version: 5.2.1
 */

/**
 * NOTE: This class is auto generated by OpenAPI Generator (https://openapi-generator.tech).
 * https://openapi-generator.tech
 * Do not edit the class manually.
 */

namespace CryptoAPIs\Model;

use \ArrayAccess;
use \CryptoAPIs\ObjectSerializer;

/**
 * GetTransactionDetailsByTransactionIDRIBSZ Class Doc Comment
 *
 * @category Class
 * @description Zcash
 * @package  CryptoAPIs
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<TKey, TValue>
 * @template TKey int|null
 * @template TValue mixed|null
 */
class GetTransactionDetailsByTransactionIDRIBSZ implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'GetTransactionDetailsByTransactionIDRIBSZ';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'binding_sig' => 'string',
        'expiry_height' => 'int',
        'fee' => '\CryptoAPIs\Model\GetTransactionDetailsByTransactionIDRIBSZFee',
        'join_split_pub_key' => 'string',
        'join_split_sig' => 'string',
        'locktime' => 'int',
        'overwintered' => 'bool',
        'size' => 'int',
        'v_join_split' => '\CryptoAPIs\Model\GetTransactionDetailsByTransactionIDRIBSZVJoinSplit[]',
        'v_shielded_output' => '\CryptoAPIs\Model\GetTransactionDetailsByTransactionIDRIBSZVShieldedOutput[]',
        'v_shielded_spend' => '\CryptoAPIs\Model\GetTransactionDetailsByTransactionIDRIBSZVShieldedSpend[]',
        'value_balance' => 'string',
        'version' => 'int',
        'version_group_id' => 'string',
        'vin' => '\CryptoAPIs\Model\GetTransactionDetailsByTransactionIDRIBSZVin[]',
        'vout' => '\CryptoAPIs\Model\GetTransactionDetailsByTransactionIDRIBSZVout[]'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'binding_sig' => null,
        'expiry_height' => null,
        'fee' => null,
        'join_split_pub_key' => null,
        'join_split_sig' => null,
        'locktime' => null,
        'overwintered' => null,
        'size' => null,
        'v_join_split' => null,
        'v_shielded_output' => null,
        'v_shielded_spend' => null,
        'value_balance' => null,
        'version' => null,
        'version_group_id' => null,
        'vin' => null,
        'vout' => null
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
        'binding_sig' => 'bindingSig',
        'expiry_height' => 'expiryHeight',
        'fee' => 'fee',
        'join_split_pub_key' => 'joinSplitPubKey',
        'join_split_sig' => 'joinSplitSig',
        'locktime' => 'locktime',
        'overwintered' => 'overwintered',
        'size' => 'size',
        'v_join_split' => 'vJoinSplit',
        'v_shielded_output' => 'vShieldedOutput',
        'v_shielded_spend' => 'vShieldedSpend',
        'value_balance' => 'valueBalance',
        'version' => 'version',
        'version_group_id' => 'versionGroupId',
        'vin' => 'vin',
        'vout' => 'vout'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'binding_sig' => 'setBindingSig',
        'expiry_height' => 'setExpiryHeight',
        'fee' => 'setFee',
        'join_split_pub_key' => 'setJoinSplitPubKey',
        'join_split_sig' => 'setJoinSplitSig',
        'locktime' => 'setLocktime',
        'overwintered' => 'setOverwintered',
        'size' => 'setSize',
        'v_join_split' => 'setVJoinSplit',
        'v_shielded_output' => 'setVShieldedOutput',
        'v_shielded_spend' => 'setVShieldedSpend',
        'value_balance' => 'setValueBalance',
        'version' => 'setVersion',
        'version_group_id' => 'setVersionGroupId',
        'vin' => 'setVin',
        'vout' => 'setVout'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'binding_sig' => 'getBindingSig',
        'expiry_height' => 'getExpiryHeight',
        'fee' => 'getFee',
        'join_split_pub_key' => 'getJoinSplitPubKey',
        'join_split_sig' => 'getJoinSplitSig',
        'locktime' => 'getLocktime',
        'overwintered' => 'getOverwintered',
        'size' => 'getSize',
        'v_join_split' => 'getVJoinSplit',
        'v_shielded_output' => 'getVShieldedOutput',
        'v_shielded_spend' => 'getVShieldedSpend',
        'value_balance' => 'getValueBalance',
        'version' => 'getVersion',
        'version_group_id' => 'getVersionGroupId',
        'vin' => 'getVin',
        'vout' => 'getVout'
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
        $this->container['binding_sig'] = $data['binding_sig'] ?? null;
        $this->container['expiry_height'] = $data['expiry_height'] ?? null;
        $this->container['fee'] = $data['fee'] ?? null;
        $this->container['join_split_pub_key'] = $data['join_split_pub_key'] ?? null;
        $this->container['join_split_sig'] = $data['join_split_sig'] ?? null;
        $this->container['locktime'] = $data['locktime'] ?? null;
        $this->container['overwintered'] = $data['overwintered'] ?? null;
        $this->container['size'] = $data['size'] ?? null;
        $this->container['v_join_split'] = $data['v_join_split'] ?? null;
        $this->container['v_shielded_output'] = $data['v_shielded_output'] ?? null;
        $this->container['v_shielded_spend'] = $data['v_shielded_spend'] ?? null;
        $this->container['value_balance'] = $data['value_balance'] ?? null;
        $this->container['version'] = $data['version'] ?? null;
        $this->container['version_group_id'] = $data['version_group_id'] ?? null;
        $this->container['vin'] = $data['vin'] ?? null;
        $this->container['vout'] = $data['vout'] ?? null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        if ($this->container['binding_sig'] === null) {
            $invalidProperties[] = "'binding_sig' can't be null";
        }
        if ($this->container['expiry_height'] === null) {
            $invalidProperties[] = "'expiry_height' can't be null";
        }
        if ($this->container['fee'] === null) {
            $invalidProperties[] = "'fee' can't be null";
        }
        if ($this->container['join_split_pub_key'] === null) {
            $invalidProperties[] = "'join_split_pub_key' can't be null";
        }
        if ($this->container['join_split_sig'] === null) {
            $invalidProperties[] = "'join_split_sig' can't be null";
        }
        if ($this->container['locktime'] === null) {
            $invalidProperties[] = "'locktime' can't be null";
        }
        if ($this->container['overwintered'] === null) {
            $invalidProperties[] = "'overwintered' can't be null";
        }
        if ($this->container['size'] === null) {
            $invalidProperties[] = "'size' can't be null";
        }
        if ($this->container['v_join_split'] === null) {
            $invalidProperties[] = "'v_join_split' can't be null";
        }
        if ($this->container['v_shielded_output'] === null) {
            $invalidProperties[] = "'v_shielded_output' can't be null";
        }
        if ($this->container['v_shielded_spend'] === null) {
            $invalidProperties[] = "'v_shielded_spend' can't be null";
        }
        if ($this->container['value_balance'] === null) {
            $invalidProperties[] = "'value_balance' can't be null";
        }
        if ($this->container['version'] === null) {
            $invalidProperties[] = "'version' can't be null";
        }
        if ($this->container['version_group_id'] === null) {
            $invalidProperties[] = "'version_group_id' can't be null";
        }
        if ($this->container['vin'] === null) {
            $invalidProperties[] = "'vin' can't be null";
        }
        if ($this->container['vout'] === null) {
            $invalidProperties[] = "'vout' can't be null";
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
     * Gets binding_sig
     *
     * @return string
     */
    public function getBindingSig()
    {
        return $this->container['binding_sig'];
    }

    /**
     * Sets binding_sig
     *
     * @param string $binding_sig It is used to enforce balance of Spend and Output transfers, in order to prevent their replay across transactions.
     *
     * @return self
     */
    public function setBindingSig($binding_sig)
    {
        $this->container['binding_sig'] = $binding_sig;

        return $this;
    }

    /**
     * Gets expiry_height
     *
     * @return int
     */
    public function getExpiryHeight()
    {
        return $this->container['expiry_height'];
    }

    /**
     * Sets expiry_height
     *
     * @param int $expiry_height Represents a block height after which the transaction will expire.
     *
     * @return self
     */
    public function setExpiryHeight($expiry_height)
    {
        $this->container['expiry_height'] = $expiry_height;

        return $this;
    }

    /**
     * Gets fee
     *
     * @return \CryptoAPIs\Model\GetTransactionDetailsByTransactionIDRIBSZFee
     */
    public function getFee()
    {
        return $this->container['fee'];
    }

    /**
     * Sets fee
     *
     * @param \CryptoAPIs\Model\GetTransactionDetailsByTransactionIDRIBSZFee $fee fee
     *
     * @return self
     */
    public function setFee($fee)
    {
        $this->container['fee'] = $fee;

        return $this;
    }

    /**
     * Gets join_split_pub_key
     *
     * @return string
     */
    public function getJoinSplitPubKey()
    {
        return $this->container['join_split_pub_key'];
    }

    /**
     * Sets join_split_pub_key
     *
     * @param string $join_split_pub_key Represents an encoding of a JoinSplitSig public validating key.
     *
     * @return self
     */
    public function setJoinSplitPubKey($join_split_pub_key)
    {
        $this->container['join_split_pub_key'] = $join_split_pub_key;

        return $this;
    }

    /**
     * Gets join_split_sig
     *
     * @return string
     */
    public function getJoinSplitSig()
    {
        return $this->container['join_split_sig'];
    }

    /**
     * Sets join_split_sig
     *
     * @param string $join_split_sig Is used to sign transactions that contain at least one JoinSplit description.
     *
     * @return self
     */
    public function setJoinSplitSig($join_split_sig)
    {
        $this->container['join_split_sig'] = $join_split_sig;

        return $this;
    }

    /**
     * Gets locktime
     *
     * @return int
     */
    public function getLocktime()
    {
        return $this->container['locktime'];
    }

    /**
     * Sets locktime
     *
     * @param int $locktime Represents the locktime on the transaction on the specific blockchain, i.e. the blockheight at which the transaction is valid.
     *
     * @return self
     */
    public function setLocktime($locktime)
    {
        $this->container['locktime'] = $locktime;

        return $this;
    }

    /**
     * Gets overwintered
     *
     * @return bool
     */
    public function getOverwintered()
    {
        return $this->container['overwintered'];
    }

    /**
     * Sets overwintered
     *
     * @param bool $overwintered \"Overwinter\" is the network upgrade for the Zcash blockchain.
     *
     * @return self
     */
    public function setOverwintered($overwintered)
    {
        $this->container['overwintered'] = $overwintered;

        return $this;
    }

    /**
     * Gets size
     *
     * @return int
     */
    public function getSize()
    {
        return $this->container['size'];
    }

    /**
     * Sets size
     *
     * @param int $size Represents the total size of this transaction.
     *
     * @return self
     */
    public function setSize($size)
    {
        $this->container['size'] = $size;

        return $this;
    }

    /**
     * Gets v_join_split
     *
     * @return \CryptoAPIs\Model\GetTransactionDetailsByTransactionIDRIBSZVJoinSplit[]
     */
    public function getVJoinSplit()
    {
        return $this->container['v_join_split'];
    }

    /**
     * Sets v_join_split
     *
     * @param \CryptoAPIs\Model\GetTransactionDetailsByTransactionIDRIBSZVJoinSplit[] $v_join_split Represents a sequence of JoinSplit descriptions using BCTV14 proofs.
     *
     * @return self
     */
    public function setVJoinSplit($v_join_split)
    {
        $this->container['v_join_split'] = $v_join_split;

        return $this;
    }

    /**
     * Gets v_shielded_output
     *
     * @return \CryptoAPIs\Model\GetTransactionDetailsByTransactionIDRIBSZVShieldedOutput[]
     */
    public function getVShieldedOutput()
    {
        return $this->container['v_shielded_output'];
    }

    /**
     * Sets v_shielded_output
     *
     * @param \CryptoAPIs\Model\GetTransactionDetailsByTransactionIDRIBSZVShieldedOutput[] $v_shielded_output Object Array representation of transaction output descriptions
     *
     * @return self
     */
    public function setVShieldedOutput($v_shielded_output)
    {
        $this->container['v_shielded_output'] = $v_shielded_output;

        return $this;
    }

    /**
     * Gets v_shielded_spend
     *
     * @return \CryptoAPIs\Model\GetTransactionDetailsByTransactionIDRIBSZVShieldedSpend[]
     */
    public function getVShieldedSpend()
    {
        return $this->container['v_shielded_spend'];
    }

    /**
     * Sets v_shielded_spend
     *
     * @param \CryptoAPIs\Model\GetTransactionDetailsByTransactionIDRIBSZVShieldedSpend[] $v_shielded_spend Object Array representation of transaction spend descriptions
     *
     * @return self
     */
    public function setVShieldedSpend($v_shielded_spend)
    {
        $this->container['v_shielded_spend'] = $v_shielded_spend;

        return $this;
    }

    /**
     * Gets value_balance
     *
     * @return string
     */
    public function getValueBalance()
    {
        return $this->container['value_balance'];
    }

    /**
     * Sets value_balance
     *
     * @param string $value_balance String representation of the transaction value balance
     *
     * @return self
     */
    public function setValueBalance($value_balance)
    {
        $this->container['value_balance'] = $value_balance;

        return $this;
    }

    /**
     * Gets version
     *
     * @return int
     */
    public function getVersion()
    {
        return $this->container['version'];
    }

    /**
     * Sets version
     *
     * @param int $version Defines the version of the transaction.
     *
     * @return self
     */
    public function setVersion($version)
    {
        $this->container['version'] = $version;

        return $this;
    }

    /**
     * Gets version_group_id
     *
     * @return string
     */
    public function getVersionGroupId()
    {
        return $this->container['version_group_id'];
    }

    /**
     * Sets version_group_id
     *
     * @param string $version_group_id Represents the transaction version group ID.
     *
     * @return self
     */
    public function setVersionGroupId($version_group_id)
    {
        $this->container['version_group_id'] = $version_group_id;

        return $this;
    }

    /**
     * Gets vin
     *
     * @return \CryptoAPIs\Model\GetTransactionDetailsByTransactionIDRIBSZVin[]
     */
    public function getVin()
    {
        return $this->container['vin'];
    }

    /**
     * Sets vin
     *
     * @param \CryptoAPIs\Model\GetTransactionDetailsByTransactionIDRIBSZVin[] $vin Object Array representation of transaction inputs
     *
     * @return self
     */
    public function setVin($vin)
    {
        $this->container['vin'] = $vin;

        return $this;
    }

    /**
     * Gets vout
     *
     * @return \CryptoAPIs\Model\GetTransactionDetailsByTransactionIDRIBSZVout[]
     */
    public function getVout()
    {
        return $this->container['vout'];
    }

    /**
     * Sets vout
     *
     * @param \CryptoAPIs\Model\GetTransactionDetailsByTransactionIDRIBSZVout[] $vout Object Array representation of transaction outputs
     *
     * @return self
     */
    public function setVout($vout)
    {
        $this->container['vout'] = $vout;

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


