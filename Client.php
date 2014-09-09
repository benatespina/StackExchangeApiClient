<?php

/**
 * This file is part of the StackExchangeApiClient library.
 *
 * @author  benatespina <benatespina@gmail.com>
 *
 * @license MIT
 */

namespace BenatEspina\StackExchangeApiClient;

use Buzz\Browser;
use Buzz\Client\Curl;
use BenatEspina\StackExchangeApiClient\Exception\RequestException;

/**
 * Class Client.
 *
 * @package BenatEspina\StackExchangeApiClient
 */
class Client
{
    /**
     * API's base URL.
     *
     * @var string
     */
    protected $baseUrl = 'https://api.stackexchange.com';

    /**
     * API's version number.
     *
     * @var string
     */
    protected $version = '2.2';

    /**
     * Scaffold for GET api requests.
     *
     * @param string $method The api method
     * @param array  $query  QueryString that filters the response
     *
     * @throws Exception\RequestException when the status code is higher than 226. According to the Wikipedia:
     *                                    http://en.wikipedia.org/wiki/List_of_HTTP_status_codes#2xx_Success
     * @return mixed Decoded array containing response
     */
    public function get($method, $query = array())
    {
        return $this->baseRequest('get', $method, $query);
    }

    /**
     * Scaffold for POST api requests.
     *
     * @param string $method The api method
     * @param array  $query  QueryString that filters the response
     *
     * @return mixed Decoded array containing response
     */
    public function post($method, $query = array())
    {
        return $this->baseRequest('post', $method, $query);
    }

    /**
     * Base method for the api requests of library.
     *
     * @param string $request The request that can be 'get', 'post', 'put', 'patch' and 'delete'
     * @param string $method  The api method
     * @param array  $query   QueryString that filters the response
     *
     * @throws Exception\RequestException when the status code is higher than 226. According to the Wikipedia:
     *                                    http://en.wikipedia.org/wiki/List_of_HTTP_status_codes#2xx_Success
     * @return mixed Decoded array containing response
     */
    private function baseRequest($request, $method, $query = array())
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

        $response = $browser->$request($url);

        if ($browser->getLastResponse()->getStatusCode() > 226) {
            throw new RequestException(json_decode(gzdecode($browser->getLastResponse()->getContent()), true));
        }

        return json_decode(gzdecode($response->getContent()), true);
    }
}
