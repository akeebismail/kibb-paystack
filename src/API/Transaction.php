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

    public function initialise($data = [])
    {
        return $this->_post('transaction/initialize', $data);
    }

    public function verify($reference)
    {
        return $this->_get('transaction/verify/'.$reference);
    }

    public function transactions(){
        return $this->_get('transaction');
    }

    public function getTransaction($transaction_id)
    {
        return $this->_get('transaction/'.$transaction_id);
    }

    public function chargeAuthorization($data){
        return $this->_post('transaction/charge_authorization', $data);
    }
}