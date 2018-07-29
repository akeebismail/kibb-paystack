<?php
/**
 * Created by PhpStorm.
 * User: kibb
 * Date: 7/29/18
 * Time: 2:25 AM
 */

namespace Kibb\Paystack\API;


class Customer extends Api
{

    /**
     * @param $parameters
     * @return array
     */
    public function create($parameters)
    {
        return $this->_post('customer', $parameters);
    }

    /**
     * Get merchant's customers
     * @return array
     */
    public function all()
    {
        return $this->_get('customer');
    }

    /**
     * Get a customer details
     * @param $id
     * @return array
     */
    public function find($id)
    {
        return $this->_get('customer/'.$id);
    }

    /**
     * Update a merchant's customer
     * @param $id
     * @param $parameters
     * @return array
     */
    public function update($id, $parameters)
    {
        return $this->_put('customer/'.$id,  $parameters);
    }

    /**
     * Whitelist a customer
     * @param $id
     * @return array
     */
    public function whitelist($id)
    {
        return $this->_post('customer/set_risk_action', ['customer'=>$id,'risk_action'=> 'allow']);
    }/**
     * Blacklist a customer
     * @param $id
     * @return array
     */
    public function blacklist($id)
    {
        return $this->_post('customer/set_risk_action', ['customer'=>$id,'risk_action'=> 'deny']);
    }

    /**
     * @param $auth_code
     * @return array
     */
    public function deactivate($auth_code)
    {
        return $this->_post('customer/deactivate_authorization',['authorization_code'=>$auth_code]);
    }
}