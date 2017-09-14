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
 * http://api.stackexchange.com/docs/users-by-ids.
 *
 * @author Beñat Espiña <benatespina@gmail.com>
 */
class UsersByIds
{
    private const URL = '/users/{ids}';

    private $client;
    private $serializer;

    public function __construct(HttpClient $client, Serializer $serializer)
    {
        $this->client = $client;
        $this->serializer = $serializer;
    }

    public function __invoke($ids, array $parameters = UserApi::QUERY_PARAMS)
    {
        return $this->serializer->serialize(
            $this->client->get(
                $this->url($ids),
                $parameters
            )
        );
    }

    private function url($ids) : string
    {
        return str_replace('{ids}', is_array($ids) ? implode(';', $ids) : $ids, self::URL);
    }
}
