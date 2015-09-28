<?php

/*
 * This file is part of the Stack Exchange Api Client library.
 *
 * Copyright (c) 2015 Beñat Espiña <benatespina@gmail.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace BenatEspina\StackExchangeApiClient;

use BenatEspina\StackExchangeApiClient\Authentication\AuthenticationInterface;
use BenatEspina\StackExchangeApiClient\Model\Error;
use Buzz\Browser;
use Buzz\Client\Curl;

/**
 * Class Client.
 *
 * @author Beñat Espiña <benatespina@gmail.com>
 */
class Client
{
    /**
     * API's base URL.
     *
     * @var string
     */
    private $baseUrl = 'https://api.stackexchange.com';

    /**
     * API's version number.
     *
     * @var string
     */
    private $version = '2.2';

    /**
     * The authentication object.
     *
     * @var AuthenticationInterface
     */
    private $authentication;

    /**
     * Array that contains the headers of a request.
     *
     * @var string[]
     */
    private $headers = ['Content-Type' => 'application/json'];

    /**
     * Constructor.
     *
     * @param AuthenticationInterface|null $authentication The auth
     */
    public function __construct(AuthenticationInterface $authentication = null)
    {
        $this->authentication = $authentication;
    }

    /**
     * Scaffold for GET api requests.
     *
     * @param string $method The api method
     * @param array  $query  QueryString that filters the response
     *
     * @return mixed Decoded array containing response
     */
    public function get($method, $query = [])
    {
        return $this->baseRequest('get', $method, $query);
    }

    /**
     * Scaffold for POST api requests.
     *
     * @param string   $method  The api method
     * @param array    $query   QueryString that filters the response
     * @param string[] $content The content that contains the payload of the the request
     *
     * @return mixed Decoded array containing response
     */
    public function post($method, $query = [], $content = [])
    {
        return $this->basePostRequest($method, $content, $query);
    }

    /**
     * Scaffold for PUT api requests.
     *
     * @param string   $method  The api method
     * @param string[] $content The content that contains the payload of the the request
     *
     * @return mixed Decoded array containing response
     */
    public function put($method, $content = [])
    {
        return $this->basePostRequest($method, $content);
    }

    /**
     * Scaffold for DELETE api requests.
     *
     * @param string   $method  The api method
     * @param string[] $content The content that contains the payload of the the request
     *
     * @return mixed Decoded array containing response
     */
    public function delete($method, $content = [])
    {
        return $this->basePostRequest($method, $content);
    }

    /**
     * Base for POST api requests. This method exists because internally, StackExchange API
     * only uses GET and POST requests. So for add, update and delete resources uses a POST request.
     *
     * @param string   $method  The api method
     * @param string[] $content The content that contains the payload of the the request
     * @param array    $query   QueryString that filters the response
     *
     * @return mixed Decoded array containing response
     */
    private function basePostRequest($method, $content = [], $query = [])
    {
        return $this->baseRequest('post', $method, $query, $content);
    }

    /**
     * Base method for the api requests of library.
     *
     * @param string   $request The request that can be 'get', 'post', 'put', 'patch' and 'delete'
     * @param string   $method  The api method
     * @param array    $query   QueryString that filters the response
     * @param string[] $content The content that contains the payload of the the request
     *
     * @throws Error when the status code is higher than 226. According to the Wikipedia:
     *               http://en.wikipedia.org/wiki/List_of_HTTP_status_codes#2xx_Success
     *
     * @return mixed Decoded array containing response
     */
    private function baseRequest($request, $method, $query = [], $content = [])
    {
        $curl = new Curl();
        $browser = new Browser($curl);

        $url = $this->baseUrl . '/' . $this->version . $method;
        if (count($query) > 0) {
            $url .= '?';
        }

        foreach ($query as $key => $value) {
            $url .= $key . '=' . $value . '&';
        }

        if ($this->authentication === null) {
            $response = $browser->$request($url, $this->headers);
        } elseif (count($content) === 0) {
            $response = $browser->$request($url . $this->authentication->getAuthAsString());
        } else {
            $response = $browser->$request(
                $url, $this->headers, array_merge($content, $this->authentication->getAuth())
            );
        }

        if ($browser->getLastResponse()->getStatusCode() > 226) {
            throw new Error(json_decode(gzdecode($browser->getLastResponse()->getContent()), true));
        }

        return json_decode(gzdecode($response->getContent()), true);
    }
}
