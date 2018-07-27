<?php
/**
 * Created by PhpStorm.
 * User: kibb
 * Date: 7/27/18
 * Time: 3:46 PM
 */

class Pager
{
    protected $api;

    public function __construct($api)
    {
        $this->api = $api;
    }

    public function fetch(array $parameters =[])
    {

    }
}