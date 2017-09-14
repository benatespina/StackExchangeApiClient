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

namespace BenatEspina\StackExchangeApiClient\Api\Answer;

use BenatEspina\StackExchangeApiClient\Api\AnswerApi;
use BenatEspina\StackExchangeApiClient\Authentication\Authentication;
use BenatEspina\StackExchangeApiClient\Http\HttpClient;
use BenatEspina\StackExchangeApiClient\Serializer\Serializer;

/**
 * https://api.stackexchange.com/docs/me-tags-top-answers.
 *
 * @author Beñat Espiña <benatespina@gmail.com>
 */
class MeTagsTopAnswers
{
    private const URL = '/me/tags{tags}/top-answers';

    private $client;
    private $serializer;
    private $authentication;

    public function __construct(HttpClient $client, Serializer $serializer, Authentication $authentication)
    {
        $this->client = $client;
        $this->serializer = $serializer;
        $this->authentication = $authentication;
    }

    public function __invoke($tags, array $parameters = AnswerApi::QUERY_PARAMS)
    {
        return $this->serializer->serialize(
            $this->client->get(
                $this->url($tags),
                $this->mergeAuthenticationIntoParameters($parameters)
            )
        );
    }

    private function url($tags) : string
    {
        return str_replace('{tags}', is_array($tags) ? implode(';', $tags) : $tags, self::URL);
    }

    private function mergeAuthenticationIntoParameters(array $parameters) : array
    {
        return array_merge($parameters, $this->authentication->toArray());
    }
}
