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

namespace BenatEspina\StackExchangeApiClient;

use BenatEspina\StackExchangeApiClient\Api\AccessTokenApi;
use BenatEspina\StackExchangeApiClient\Api\AnswerApi;
use BenatEspina\StackExchangeApiClient\Authentication\Authentication;
use BenatEspina\StackExchangeApiClient\Http\GuzzleHttpClient;
use BenatEspina\StackExchangeApiClient\Http\HttpClient;
use BenatEspina\StackExchangeApiClient\Serializer\NoSerializeSerializer;
use BenatEspina\StackExchangeApiClient\Serializer\Serializer;

/**
 * @author Beñat Espiña <benatespina@gmail.com>
 */
final class StackExchange
{
    private $client;
    private $serializer;
    private $authentication;

    public static function withoutAuth() : self
    {
        return new self(new GuzzleHttpClient());
    }

    public static function withAuth(string $key, string $accessToken) : self
    {
        return new self(new GuzzleHttpClient(), new Authentication($key, $accessToken));
    }

    public function __construct(HttpClient $client, Authentication $authentication = null)
    {
        $this->client = $client;
        $this->authentication = $authentication;
        $this->serializer = new NoSerializeSerializer();
    }

    public function accessToken(Serializer $serializer = null) : AccessTokenApi
    {
        return new AccessTokenApi($this->client, $serializer ?? $this->serializer);
    }

    public function answer(Serializer $serializer = null) : AnswerApi
    {
        return new AnswerApi($this->client, $serializer ?? $this->serializer, $this->authentication);
    }
}
