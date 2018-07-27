<?php
/**
 * Created by PhpStorm.
 * User: kibb
 * Date: 7/27/18
 * Time: 12:35 PM
 */

namespace Kibb\Paystack;


class Config implements ConfigInterface
{

    /**
     * The current package version.
     *
     * @var string
     */
    protected $version;

    /**
     * The Paystack API key.
     *
     * @var string
     */
    protected $apiKey;

    /**
     * The Paystack API version.
     *
     * @var string
     */
    protected $apiVersion;

    /**
     * The idempotency key.
     *
     * @var string
     */
    protected $idempotencyKey;

    /**
     * The managed account id.
     *
     * @var string
     */
    protected $accountId;

    /**
     * Constructor.
     *
     * @param  string  $version
     * @param  string  $apiKey
     * @param  string  $apiVersion
     * @return void
     * @throws \RuntimeException
     */

    public function __construct($version, $apiKey,$apiVersion)
    {
        $this->setVersion($version);
        $this->setApiKey($apiKey ?  : getenv('PAYSTACK_API_KEY'));
        $this->setApiVersion($apiVersion);
        if (!$this->apiKey){
            throw new \RuntimeException('The Paystack API key is not defined');
        }
    }


    /**
     * Returns the current package version.
     *
     * @return string
     */
    public function getVersion()
    {
        return $this->version;
    }

    /**
     * Sets the current package version.
     *
     * @param  string $version
     * @return $this
     */
    public function setVersion($version)
    {
        $this->version = $version;
        return $this;
    }

    /**
     * Returns the Paystack API key.
     *
     * @return string
     */
    public function getApiKey()
    {
        return $this->apiKey;
    }

    /**
     * Sets the Paystack API key.
     *
     * @param  string $apiKey
     * @return $this
     */
    public function setApiKey($apiKey)
    {
        $this->apiKey = $apiKey;
        return $this;
    }

    /**
     * Returns the Paystack API version.
     *
     * @return string
     */
    public function getApiVersion()
    {
        return $this->apiVersion;
    }

    /**
     * Sets the Paystack API version.
     *
     * @param  string $apiVersion
     * @return $this
     */
    public function setApiVersion($apiVersion)
    {
        $this->apiVersion = $apiVersion;
        return $this;
    }


    /**
     * Returns the managed account id.
     *
     * @return string
     */
    public function getAccountId()
    {
        return $this->accountId;
    }

    /**
     * Sets the managed account id.
     *
     * @param  string  $accountId
     * @return $this
     */
    public function setAccountId($accountId)
    {
        $this->accountId = $accountId;

        return $this;
    }
}