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

namespace BenatEspina\StackExchangeApiClient\Api\User;

use BenatEspina\StackExchangeApiClient\Api\UserApi;
use BenatEspina\StackExchangeApiClient\Http\HttpClient;
use BenatEspina\StackExchangeApiClient\Serializer\Serializer;

/**
 * https://api.stackexchange.com/docs/users.
 *
 * @author Beñat Espiña <benatespina@gmail.com>
 */
class Users
{
    private const URL = '/users';

    private $client;
    private $serializer;

    public function __construct(HttpClient $client, Serializer $serializer)
    {
        $this->client = $client;
        $this->serializer = $serializer;
    }

    public function __invoke(array $parameters = UserApi::QUERY_PARAMS)
    {
        return $this->serializer->serialize(
            $this->client->get(
                self::URL,
                $parameters
            )
        );
    }
}
