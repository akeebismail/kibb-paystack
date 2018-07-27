<?php
/**
 * Created by PhpStorm.
 * User: kibb
 * Date: 7/27/18
 * Time: 12:34 PM
 */

namespace Kibb\Paystack;


class Paystack
{

    const VERSION = '0.0.0';

    protected $config;

    protected static $amountConverter ;

    /**
     * Paystack constructor.
     * @param null $apiKey
     * @param $apiVersion
     */
    public function __construct($apiKey = null, $apiVersion)
    {
        $this->config = new Config(self::VERSION,$apiKey, $apiVersion);
    }

    public static function make($apiKey = null, $apiVersion = null)
    {
        return new static($apiKey, $apiVersion);
    }

    /**
     * @param $config
     * @return $this
     */
    public function setConfig(ConfigInterface $config)
    {
        $this->config = $config;
        return $this;
    }

    /**
     * @return Config
     */
    public function getConfig(){
        return $this->config;
    }

    /**
     * @return string
     */
    public function getApiKey(){
        return $this->config->getApiKey();
    }

    /**
     * @return mixed
     */
    public static function getAmountConverter()
    {
        return static::$amountConverter;
    }

    /**
     * @param $amountConverter
     */
    public static function setAmountConverter($amountConverter)
    {
        static::$amountConverter = $amountConverter;
    }

    /**
     *
     */
    public static function  disableAmountConverter()
    {
        static::setAmountConverter(null);
    }

    /**
     * Sets the default amount converter;
     *
     * @return void
     */
    public static function setDefaultAmountConverter()
    {
        static::setAmountConverter(
            static::getDefaultAmountConverter()
        );
    }
    /**
     * Returns the default amount converter.
     *
     * @return string
     */
    public static function getDefaultAmountConverter()
    {
        return '\\Kibb\\Paystack\\AmountConverter::convert';
    }

    public function __call($method, array $parameters)
    {
        return $this;
    }

    public function getApiInstance($method)
    {
        $class = "\\Kibb\\Paystack\\API\\".ucwords($method);

        if (class_exists($class) && ! (new \ReflectionClass($class))->isAbstract()){
            return new $class($this->config);
        }

        throw new \BadMethodCallException( "Undefined method [{$method}] called.");
    }
}