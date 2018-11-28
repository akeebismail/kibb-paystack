<?php
/**
 * Created by PhpStorm.
 * User: mac
 * Date: 11/28/18
 * Time: 2:09 AM
 */

namespace Kibb\Paystack\API;


class Subaccount extends Api
{
    public function create(array $paramters)
    {
        return $this->_post('subaccount',$paramters);
    }

    public function listSubaccount()
    {
        return $this->_get('subaccount');
    }

    public function find($id)
    {
        return $this->_get('subaccount/'.$id);
    }

    public function update($id,array $parameters)
    {
        return $this->_put('subaccount/'.$id,$parameters);
    }
}