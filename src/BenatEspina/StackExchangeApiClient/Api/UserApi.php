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

namespace BenatEspina\StackExchangeApiClient\Api;

use BenatEspina\StackExchangeApiClient\Api\User\ElectedModerators;
use BenatEspina\StackExchangeApiClient\Api\User\Me;
use BenatEspina\StackExchangeApiClient\Api\User\Moderators;
use BenatEspina\StackExchangeApiClient\Api\User\Users;
use BenatEspina\StackExchangeApiClient\Api\User\UsersByIds;
use BenatEspina\StackExchangeApiClient\Authentication\Authentication;
use BenatEspina\StackExchangeApiClient\Authentication\AuthenticationIsRequired;
use BenatEspina\StackExchangeApiClient\Http\HttpClient;
use BenatEspina\StackExchangeApiClient\Serializer\Serializer;

/**
 * @author Beñat Espiña <benatespina@gmail.com>
 */
final class UserApi
{
    public const QUERY_PARAMS = [
        'order'  => 'desc',
        'sort'   => 'reputation',
        'site'   => 'stackoverflow',
        'filter' => HttpClient::FILTER_ALL,
    ];

    private $client;
    private $serializer;
    private $authentication;

    public function __construct(HttpClient $client, Serializer $serializer, Authentication $authentication = null)
    {
        $this->client = $client;
        $this->serializer = $serializer;
        $this->authentication = $authentication;
    }

    public function electedModerators(array $parameters = self::QUERY_PARAMS)
    {
        return (new ElectedModerators(
            $this->client,
            $this->serializer
        ))->__invoke($parameters);
    }

    public function me(array $parameters = self::QUERY_PARAMS)
    {
        $this->checkAuthenticationIsEnabled();

        return (new Me(
            $this->client,
            $this->serializer,
            $this->authentication
        ))->__invoke($parameters);
    }

    public function moderators(array $parameters = self::QUERY_PARAMS)
    {
        return (new Moderators(
            $this->client,
            $this->serializer
        ))->__invoke($parameters);
    }

    public function users(array $parameters = self::QUERY_PARAMS)
    {
        return (new Users(
            $this->client,
            $this->serializer
        ))->__invoke($parameters);
    }

    public function usersByIds($ids, array $parameters = self::QUERY_PARAMS)
    {
        return (new UsersByIds(
            $this->client,
            $this->serializer
        ))->__invoke($ids, $parameters);
    }

    private function checkAuthenticationIsEnabled() : void
    {
        if (!$this->authentication instanceof Authentication) {
            throw new AuthenticationIsRequired();
        }
    }
}
