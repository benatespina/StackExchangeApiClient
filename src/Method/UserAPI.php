<?php

/*
 * This file is part of the Stack Exchange Api Client library.
 *
 * Copyright (c) 2015 Beñat Espiña <benatespina@gmail.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace BenatEspina\StackExchangeApiClient\Method;

use BenatEspina\StackExchangeApiClient\Client;

/**
 * Class UserAPI.
 *
 * @author Beñat Espiña <benatespina@gmail.com>
 */
class UserAPI
{
    /**
     * Client instance.
     *
     * @var \BenatEspina\StackExchangeApiClient\Client
     */
    protected $client;

    /**
     * The prefix of users API requests.
     *
     * @var string
     */
    protected $prefix = '/users';

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
     * Get all users, in alphabetical order.
     *
     * More info: https://api.stackexchange.com/docs/users
     *
     * @param string[] $params QueryString parameter(s), by default, the basic to work:
     *                         array('site' => 'stackoverflow', 'sort' => 'name', 'order' => 'desc')
     *
     * @return array<BenatEspina\StackExchangeApiClient\Model\Interfaces\UserInterface>
     */
    public function getByIds($ids,
                             $params = ['site' => 'stackoverflow', 'sort' => 'name', 'order' => 'desc'])
    {
        return $this->client->get($this->prefix.'/'.implode(';', $ids), $params)['items'];
    }
}
