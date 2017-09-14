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
 * https://api.stackexchange.com/docs/create-answer.
 *
 * @author Beñat Espiña <benatespina@gmail.com>
 */
class CreateAnswer
{
    private const URL = '/questions/{id}/answers/add';

    private $client;
    private $serializer;
    private $authentication;

    public function __construct(HttpClient $client, Serializer $serializer, Authentication $authentication)
    {
        $this->client = $client;
        $this->serializer = $serializer;
        $this->authentication = $authentication;
    }

    public function __invoke(string $questionId, string $body, array $parameters = AnswerApi::QUERY_PARAMS)
    {
        return $this->serializer->serialize(
            $this->client->post(
                $this->url($questionId),
                $this->buildParameters($parameters, $body)
            )
        );
    }

    private function url(string $questionId) : string
    {
        return str_replace('{id}', $questionId, self::URL);
    }

    private function buildParameters(array $parameters, string $body) : array
    {
        return $this->mergeBodyIntoParameters(
            $this->mergeAuthenticationIntoParameters($parameters),
            $body
        );
    }

    private function mergeBodyIntoParameters(array $parameters, string $body) : array
    {
        return array_merge($parameters, ['body' => $body]);
    }

    private function mergeAuthenticationIntoParameters(array $parameters) : array
    {
        return array_merge($parameters, $this->authentication->toArray());
    }
}
