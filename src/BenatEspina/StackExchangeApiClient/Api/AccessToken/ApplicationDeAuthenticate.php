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

namespace BenatEspina\StackExchangeApiClient\Api\AccessToken;

use BenatEspina\StackExchangeApiClient\Http\HttpClient;
use BenatEspina\StackExchangeApiClient\Serializer\Serializer;

/**
 * https://api.stackexchange.com/docs/application-de-authenticate.
 *
 * @author Beñat Espiña <benatespina@gmail.com>
 */
class ApplicationDeAuthenticate
{
    private const URL = '/apps/{accessTokens}/de-authenticate';

    private $client;
    private $serializer;

    public function __construct(HttpClient $client, Serializer $serializer)
    {
        $this->client = $client;
        $this->serializer = $serializer;
    }

    public function __invoke($accessTokens, array $parameters = [])
    {
        return $this->serializer->serialize(
            $this->client->get(
                $this->url($accessTokens),
                $parameters
            )
        );
    }

    private function url($accessTokens) : string
    {
        return str_replace('{accessTokens}', $this->stringifyAccessTokens($accessTokens), self::URL);
    }

    private function stringifyAccessTokens($accessTokens) : string
    {
        return is_array($accessTokens) ? implode(';', $accessTokens) : $accessTokens;
    }
}
