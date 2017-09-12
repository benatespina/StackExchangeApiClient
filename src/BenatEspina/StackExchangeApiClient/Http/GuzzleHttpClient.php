<?php

/*
 * This file is part of the Stack Exchange Api Client library.
 *
 * (c) Beñat Espiña <benatespina@gmail.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

declare(strict_types=1);

namespace BenatEspina\StackExchangeApiClient\Http;

use GuzzleHttp\Client;
use Psr\Http\Message\ResponseInterface;

/**
 * @author Beñat Espiña <benatespina@gmail.com>
 */
final class GuzzleHttpClient implements HttpClient
{
    private $client;

    public function __construct()
    {
        $this->client = new Client([
            'base_uri' => HttpClient::BASE_URL,
        ]);
    }

    public function get(string $url, array $parameters) : array
    {
        $response = $this->client->get($url, ['query' => $parameters]);
        if (!$response instanceof ResponseInterface) {
            throw new ResponseIsNotValidInstance();
        }

        return json_decode($response->getBody()->getContents(), true);
    }

    public function post(string $url, array $parameters) : array
    {
        return $this->internalPost($url, $parameters);
    }

    public function put(string $url, array $parameters) : array
    {
        return $this->internalPost($url, $parameters);
    }

    public function delete(string $url, array $parameters) : array
    {
        return $this->internalPost($url, $parameters);
    }

    private function internalPost(string $url, array $parameters)
    {
        $response = $this->client->post($url, ['form_params' => $parameters]);
        if (!$response instanceof ResponseInterface) {
            throw new ResponseIsNotValidInstance();
        }

        return json_decode($response->getBody()->getContents(), true);
    }
}
