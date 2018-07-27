<?php
/**
 * Created by PhpStorm.
 * User: kibb
 * Date: 7/27/18
 * Time: 3:48 PM
 */

namespace Kibb\Paystack\API;


interface ApiInterface
{

    /**
     * Returns API base URL
     * @return string
     */
    public function baseUrl();

    /**
     * Returns the number of items to return per page
     * @return void
     */
    public function getPerPage();

    /**
     * Set the number of items  to return per page
     * @param  int $perPage
     * @return $this
     */
    public function setPerPage($perPage);

    /**
     * Send a GET request
     * @param string $url
     * @param array $parameter
     * @return array
     */
    public function _get($url = null, $parameter =[]);

    /**
     * Send a header request
     * @param string $url
     * @param array $parameter
     * @return array
     */
    public function _head($url = null, array $parameter = []);

    /**
     * Send a Delete Request
     * @param null $url
     * @param array $parameter
     * @return mixed
     */
    public function _delete($url = null, array $parameter =[]);

    /**
     * Send a PUT  request
     * @param string $url
     * @param array $parameter
     * @return array
     */
    public function _put($url = null, array  $parameter = []);

    /**
     * Send a PATCH request
     * @param string $url
     * @param array $parameter
     * @return array
     */
    public function _patch($url = null, array  $parameter = []);

    /**
     * Send a POST request
     * @param string $url
     * @param array $parameter
     * @return array
     */
    public function _post($url = null, array $parameter =[]);

    /**Send an OPTION request
     * @param string $url
     * @param array $parameter
     * @return array
     */
    public function _options($url = null, array $parameter =[]);


    /**
     * executes the HTTP request.
     * @param string $httpMethod
     * @param string url
     * @param array $parameters
     * @return array
     */
    public function execute($httpMethod, $url, array $parameters = []);





}