<?php
/**
 * Created by PhpStorm.
 * User: kibb
 * Date: 7/27/18
 * Time: 3:46 PM
 */
namespace Kibb\Paystack;
use Kibb\Paystack\API\ApiInterface;

class Pager
{
    protected $api;

    /**
     * Pager constructor.
     * @param ApiInterface $api
     */
    public function __construct(ApiInterface $api)
    {
        $this->api = $api;
    }

    public function fetch(array $parameters =[])
    {
        $this->api->setPerPage(100);
        $results = $this->processRequest($parameters);

        return $results;

    }


    public function processRequest(array $parameters = [])
    {
        $result = call_user_func_array([$this->api,'all'], $parameters);
        return $result;
    }
}