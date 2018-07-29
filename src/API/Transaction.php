<?php
/**
 * Created by PhpStorm.
 * User: kibb
 * Date: 7/27/18
 * Time: 5:16 PM
 */

namespace Kibb\Paystack\API;


class Transaction extends Api
{

    /**
     * Paystack initialize transaction
     * @param array $data
     * @return array
     */
    public function initialise($data = [])
    {
        return $this->_post('transaction/initialize', $data);
    }

    /**
     * Verify an ongoing transaction status
     * @param $reference
     * @return array
     */
    public function verify($reference)
    {
        return $this->_get('transaction/verify/'.$reference);
    }

    /**
     * Get a list of merchant's transaction
     *
     * @return array
     */
    public function transactions(){
        return $this->_get('transaction');
    }

    /**
     * Get a particular transaction
     * @param $transaction_id
     * @return array
     */
    public function getTransaction($transaction_id)
    {
        return $this->_get('transaction/'.$transaction_id);
    }

    /**
     * Charge authorization
     * @param $data
     * @return array
     */
    public function chargeAuthorization($data){
        return $this->_post('transaction/charge_authorization', $data);
    }

    /**
     * @param $refence
     * @return array
     */
    public function transactionTimeline($refence)
    {
        return $this->_get('transaction/timeline'.$refence);
    }


    /**
     * Merchant's total amount received on your account
     * @return array
     */
    public function totals()
    {
        return $this->_get('transaction/totals');
    }

    /**
     * @return array
     */
    public function export()
    {
        return $this->_get('transaction/export');
    }


    /**
     * @param $parameters
     * @return array
     */
    public function reauthorization($parameters)
    {
        return $this->_post('transaction/request_reauthorization',$parameters);
    }


}