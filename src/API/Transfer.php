<?php
/**
 * Created by PhpStorm.
 * User: kibb
 * Date: 7/29/18
 * Time: 2:40 AM
 */

namespace Kibb\Paystack\API;


class Transfer extends Api
{

    /**
     * @param $parameters
     * @return array
     */
    public function initiate($parameters)
    {
        return $this->_post('transfer', $parameters);
    }

    /**
     * @return array
     */
    public function all()
    {
        return $this->_get('transfer');
    }

    /**
     * @param $id
     * @return array
     */
    public function find($id)
    {
        return $this->_get('transfer/'.$id);
    }

    /**
     * @param $parameters
     * @return array
     */
    public function finalizeTransfer($parameters)
    {
        return $this->_post('transfer/finalize_transfer',$parameters);
    }

    public function bulkTransfer($parameters)
    {
        return $this->_post('transfer/bulk',$parameters);
    }


}