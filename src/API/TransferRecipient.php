<?php
/**
 * Created by PhpStorm.
 * User: kibb
 * Date: 7/29/18
 * Time: 2:49 AM
 */

namespace Kibb\Paystack\API;


class TransferRecipient extends Api
{
    /**
     * @param $parameters
     * @return array
     */
    public function create($parameters)
    {
        return $this->_post('transferrecipient',$parameters);
    }

    /**
     * @return array
     */
    public function get()
    {
        return $this->_get('transferrecipient');
    }


}