<?php

/*
 * This file is part of the Stack Exchange Api Client library.
 *
 * Copyright (c) 2014-2016 Beñat Espiña <benatespina@gmail.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace BenatEspina\StackExchangeApiClient\Http;

use GuzzleHttp\Client;
use Psr\Http\Message\ResponseInterface;

final class Http
{
    const FILTER_ALL = '!*KKtQAaxTFOmbVzM';

    /**
     * The instance itself.
     *
     * @var self|null
     */
    private static $instance;

    /**
     * The guzzle client.
     *
     * @var Client
     */
    private $client;

    /**
     * Constructor in a singleton way.
     *
     * @return self
     */
    public static function instance()
    {
        if (null === self::$instance) {
            self::$instance = new self();
        }

        return self::$instance;
    }

    /**
     * HTTP GET method.
     *
     * @param string $url    The url
     * @param array  $params Array which contains the query params
     *
     * @throws \Exception when response does not implement the ResponseInterface
     *
     * @return array
     */
    public function get($url, $params)
    {
        $response = $this->client->get($url, ['query' => $params]);
        if (!$response instanceof ResponseInterface) {
            throw new \Exception('The response must be implements the ResponseInterface');
        }

        return json_decode($response->getBody()->getContents(), true);
    }

    /**
     * HTTP POST method.
     *
     * @param string $url    The url
     * @param array  $params Array which contains the form params
     *
     * @throws \Exception when response does not implement the ResponseInterface
     *
     * @return array
     */
    public function post($url, $params)
    {
        return $this->internalPost($url, $params);
    }

    /**
     * HTTP PUT method.
     *
     * @param string $url    The url
     * @param array  $params Array which contains the form params
     *
     * @throws \Exception when response does not implement the ResponseInterface
     *
     * @return array
     */
    public function put($url, $params)
    {
        return $this->internalPost($url, $params);
    }

    /**
     * HTTP DELETE method.
     *
     * @param string $url    The url
     * @param array  $params Array which contains the form params
     *
     * @throws \Exception when response does not implement the ResponseInterface
     *
     * @return array
     */
    public function delete($url, $params)
    {
        return $this->internalPost($url, $params);
    }

    /**
     * Internally, StackExchange API only uses GET and POST requests.
     * So for add, update and delete resources it needs a POST request.
     *
     * @param string $url    The url
     * @param array  $params Array which contains the form params
     *
     * @throws \Exception when response does not implement the ResponseInterface
     *
     * @return array
     */
    private function internalPost($url, $params)
    {
        $response = $this->client->post($url, ['form_params' => $params]);
        if (!$response instanceof ResponseInterface) {
            throw new \Exception('The response must be implements the ResponseInterface');
        }

        return json_decode($response->getBody()->getContents(), true);
    }

    /**
     * Constructor. Avoids to use the "new"
     * statement to instantiate the class.
     */
    private function __construct()
    {
        $this->client = new Client([
            'base_uri' => 'https://api.stackexchange.com/2.2/',
        ]);
    }
}
