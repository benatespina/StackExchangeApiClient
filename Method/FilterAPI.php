<?php

/**
 * This file is part of the StackExchangeApiClient library.
 *
 * @author  benatespina <benatespina@gmail.com>
 *
 * @license MIT
 */

namespace BenatEspina\StackExchangeApiClient\Method;

use BenatEspina\StackExchangeApiClient\Client;
use BenatEspina\StackExchangeApiClient\Model\Filter;

/**
 * Class FilterAPI.
 *
 * @package BenatEspina\StackExchangeApiClient\Method
 */
class FilterAPI
{
    /**
     * Client instance.
     *
     * @var \BenatEspina\StackExchangeApiClient\Client
     */
    protected $client;

    /**
     * The prefix of filters API requests.
     *
     * @var string
     */
    protected $prefix = '/filters';

    /**
     * Constructor.
     *
     * @param \BenatEspina\StackExchangeApiClient\Client $client that will be used to connect the server
     */
    public function __construct(Client $client)
    {
        $this->client = $client;
    }

    /**
     * Creates a new filter given a list of includes, excludes, a base
     * filter, and whether or not this filter should be "unsafe".
     *
     * More info: https://api.stackexchange.com/docs/create-filter
     *
     * @param string[] $params QueryString parameter(s), it admits include, exclude and unsafe
     *
     * @return \BenatEspina\StackExchangeApiClient\Model\Interfaces\FilterInterface
     */
    public function postFilter($params = array())
    {
        $response = $this->client->post($this->prefix . '/create', $params);

        return new Filter($response['items'][0]);
    }

    /**
     * Returns the fields included by the given filters, and the "safeness" of those filters.
     *
     * More info: https://api.stackexchange.com/docs/read-filter
     *
     * @param string[] $filters The array which contains the filters delimited by semicolon
     *
     * @return array<BenatEspina\StackExchangeApiClient\Model\Interfaces\FilterInterface>
     */
    public function getFilters($filters)
    {
        return $this->responseToFilter($this->client->get($this->prefix . '/' . implode(';', $filters)));
    }

    /**
     * Transforms the json decodes array to filter objects array.
     *
     * @param mixed $response Decoded array containing response
     *
     * @return array<BenatEspina\StackExchangeApiClient\Model\FilterInterface>
     */
    private function responseToFilter($response)
    {
        $filters = array();
        foreach ($response['items'] as $response) {
            $filters[] = new Filter($response);
        }

        return $filters;
    }
}
