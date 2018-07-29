<?php
/**
 * Created by PhpStorm.
 * User: kibb
 * Date: 7/29/18
 * Time: 2:55 AM
 */

namespace Kibb\Paystack\API;


class Charge extends Api
{

    /**
     * Create Charge
     * @param $parameters
     * @return array
     */
    public function create($parameters)
    {
        return $this->_post('charge', $parameters);
    }

    /**
     * @param $parameters
     * @return array
     */
    public function submitOTP($parameters)
    {
        return $this->_post('charge/submit_otp', $parameters);
    }

    /**
     * @param $parameters
     * @return array
     */
    public function submitPIN($parameters)
    {
        return $this->_post('change/submit_pin',$parameters);
    }

    /**
     * @param $parameters
     * @return array
     */
    public function submitPhone($parameters)
    {
        return $this->_post('charge/submit_phone', $parameters);
    }

    /**
     * @param $parameters
     * @return array
     */
    public function submitBirthday($parameters)
    {
        return $this->_post('charge/submit_birthday', $parameters);
    }

    /**
     * @param $reference
     * @return array
     */
    public function checkCharge($reference)
    {
        return $this->_get('charge/'.$reference);
    }

}