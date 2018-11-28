<?php
/**
 * Created by PhpStorm.
 * User: kibb
 * Date: 7/27/18
 * Time: 4:41 PM
 */

namespace Kibb\Paystack\API;


use GuzzleHttp\Client;
use GuzzleHttp\Exception\ClientException;
use GuzzleHttp\Exception\ConnectException;
use GuzzleHttp\Exception\TransferException;
use GuzzleHttp\HandlerStack;
use GuzzleHttp\Middleware;
use Kibb\Paystack\ConfigInterface;
use Psr\Http\Message\RequestInterface;
use Psr\Http\Message\ResponseInterface;

abstract class Api implements ApiInterface
{
    protected $config ;

    protected $perPage;

    public function __construct(ConfigInterface $config)
    {
        $this->config = $config;
    }

    public function baseUrl()
    {
        return 'https://api.paystack.co/';
    }

    /**
     *
     * @return  int
     */
    public function getPerPage()
    {
        return $this->perPage;
    }

    public function setPerPage($perPage)
    {
        $this->perPage = (int) $perPage;
        return $this;
    }
    public function _get($url = null, $parameter = [])
    {
        if ($perPage = $this->getPerPage()){
            $parameter['limit'] = $perPage;
        }

        return $this->execute('get',$url, $parameter);
    }

    public function _head($url = null, array $parameter = [])
    {
        return $this->execute('head',$url, $parameter);
    }
    public function _delete($url = null, array $parameter = [])
    {
        return $this->execute('delete', $url, $parameter);
    }

    public function _put($url = null, array $parameter = [])
    {
        return $this->execute('put',$url, $parameter);
    }

    public function _patch($url = null, array $parameter = [])
    {
        return $this->execute('patch', $url, $parameter);
    }

    public function _post($url = null, array $parameter = [])
    {
        return $this->execute('post', $url, $parameter);
    }

    public function _options($url = null, array $parameter = [])
    {
        return $this->execute('options', $url, $parameter);
    }

    /**
     * @param string $httpMethod
     * @param $url
     * @param array $parameters
     * @return array
     */
    public function execute($httpMethod, $url, array $parameters = [])
    {
        try{
            $results = $this->getClient()->{$httpMethod}($url,  ['json'=>$parameters]);
            return json_decode((string)$results->getBody(), true);
        }catch (ClientException $exception){
            return $exception->getMessage();
        }
    }

    /**
     * Returns a Http Client instance.
     *
     * @return Client
     */
    public function getClient(){
        return new Client([
           'base_uri' => $this->baseUrl(), 'handler' => $this->createHandler()
        ]);
    }

    /**
     * Create the Client Handler
     * @return HandlerStack
     */
    public function createHandler()
    {
        $stack  = HandlerStack::create();
        $stack->push(Middleware::mapRequest(function (RequestInterface $request){
            $config = $this->config;
            $request = $request->withHeader('Authorization', 'Bearer '.$config->getApiKey());
            $request= $request->withHeader('Content-Type', 'application/json');
            $request = $request->withHeader('User-Agent','Paystack/v1 PhpBindings/'.$config->getVersion());
            return $request;
        }));

        $stack->push(Middleware::retry(function ($retries, RequestInterface $request, ResponseInterface $response = null, TransferException $exception = null){
            return $retries < 3 && ($exception instanceof ConnectException || ($response && $response->getStatusCode() >= 500));
        },function ($retries){
            return (int) pow(2, $retries) * 1000;
        }));

        return $stack;
    }



}