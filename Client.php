<?php

/**
 * This file is part of the StackExchangeApiClient library.
 *
 * @author  benatespina <benatespina@gmail.com>
 *
 * @license MIT
 */

namespace BenatEspina\StackExchangeApiClient;

use BenatEspina\StackExchangeApiClient\Authentication\AuthenticationInterface;
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
     * The authentication object.
     *
     * @var \BenatEspina\StackExchangeApiClient\Authentication\AuthenticationInterface
     */
    protected $authentication;

    /**
     * Array that contains the headers of a request.
     *
     * @var string[]
     */
    protected $headers = array('Content-Type' => 'application/json');

    /**
     * Constructor.
     *
     * @param \BenatEspina\StackExchangeApiClient\Authentication\AuthenticationInterface|null $authentication The auth
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
    public function get($method, $query = array())
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
    public function post($method, $query = array(), $content = array())
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
     * @throws Exception\RequestException when the status code is higher than 226. According to the Wikipedia:
     *                                    http://en.wikipedia.org/wiki/List_of_HTTP_status_codes#2xx_Success
     *
     * @return mixed Decoded array containing response
     */
    private function baseRequest($request, $method, $query = array(), $content = array())
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
            throw new RequestException(json_decode(gzdecode($browser->getLastResponse()->getContent()), true));
        }

        return json_decode(gzdecode($response->getContent()), true);
    }
}
