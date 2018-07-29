<?php
/**
 * Created by PhpStorm.
 * User: kibb
 * Date: 7/29/18
 * Time: 1:59 AM
 */

namespace Kibb\Paystack\API\Exception;

use Exception;
class PaystackException extends Exception
{

    /**
     * The error code returned by Paystack.
     *
     * @var string
     */
    protected $errorCode;

    /**
     * The error type returned by Paystack.
     *
     * @var string
     */
    protected $errorType;

    /**
     * The missing parameter returned by Paystack with the error.
     *
     * @var string
     */
    protected $missingParameter;

    /**
     * The raw output returned by Paystack in case of exception.
     *
     * @var string
     */
    protected $rawOutput;

    /**
     * Returns the error type returned by Paystack.
     *
     * @return string
     */
    public function getErrorCode()
    {
        return $this->errorCode;
    }

    /**
     * Sets the error type returned by Paystack.
     *
     * @param  string  $errorCode
     * @return $this
     */
    public function setErrorCode($errorCode)
    {
        $this->errorCode = $errorCode;

        return $this;
    }

    /**
     * Returns the error type returned by Paystack.
     *
     * @return string
     */
    public function getErrorType()
    {
        return $this->errorType;
    }

    /**
     * Sets the error type returned by Paystack.
     *
     * @param  string  $errorType
     * @return $this
     */
    public function setErrorType($errorType)
    {
        $this->errorType = $errorType;

        return $this;
    }

    /**
     * Returns missing parameter returned by Paystack with the error.
     *
     * @return string
     */
    public function getMissingParameter()
    {
        return $this->missingParameter;
    }

    /**
     * Sets the missing parameter returned by Paystack with the error.
     *
     * @param  string  $missingParameter
     * @return $this
     */
    public function setMissingParameter($missingParameter)
    {
        $this->missingParameter = $missingParameter;

        return $this;
    }

    /**
     * Returns raw output returned by Paystack in case of exception.
     *
     * @return string
     */
    public function getRawOutput()
    {
        return $this->rawOutput;
    }

    /**
     * Sets the raw output parameter returned by Paystack in case of exception.
     *
     * @param  string  $rawOutput
     * @return $this
     */
    public function setRawOutput($rawOutput)
    {
        $this->rawOutput = $rawOutput;

        return $this;
    }

}