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

use BenatEspina\StackExchangeApiClient\Api\AccessToken\ApplicationDeAuthenticate;
use BenatEspina\StackExchangeApiClient\Api\AccessToken\Invalidate;
use BenatEspina\StackExchangeApiClient\Api\AccessToken\Read;
use BenatEspina\StackExchangeApiClient\Http\HttpClient;
use BenatEspina\StackExchangeApiClient\Serializer\Serializer;

/**
 * @author Beñat Espiña <benatespina@gmail.com>
 */
class AccessTokenApi
{
    private $client;
    private $serializer;

    public function __construct(HttpClient $client, Serializer $serializer)
    {
        $this->client = $client;
        $this->serializer = $serializer;
    }

    public function applicationDeAuthenticate($accessTokens, array $parameters = [])
    {
        return (new ApplicationDeAuthenticate($this->client, $this->serializer))->__invoke($accessTokens, $parameters);
    }

    public function invalidate($accessTokens, array $parameters = [])
    {
        return (new Invalidate($this->client, $this->serializer))->__invoke($accessTokens, $parameters);
    }

    public function read($accessTokens, array $parameters = [])
    {
        return (new Read($this->client, $this->serializer))->__invoke($accessTokens, $parameters);
    }
}
