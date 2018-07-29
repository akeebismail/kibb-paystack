<?php
/**
 * Created by PhpStorm.
 * User: kibb
 * Date: 7/27/18
 * Time: 12:33 PM
 */

namespace Kibb\Paystack;


interface ConfigInterface
{
    /**
     * Returns the current package version.
     *
     * @return string
     */
    public function getVersion();

    /**
     * Sets the current package version.
     *
     * @param  string  $version
     * @return $this
     */
    public function setVersion($version);

    /**
     * Returns the Paystack API key.
     *
     * @return string
     */
    public function getApiKey();

    /**
     * Sets the Paystack API key.
     *
     * @param  string  $apiKey
     * @return $this
     */
    public function setApiKey($apiKey);
    
}