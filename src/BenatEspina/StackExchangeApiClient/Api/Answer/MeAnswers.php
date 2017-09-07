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
 * https://api.stackexchange.com/docs/me-answers.
 *
 * @author Beñat Espiña <benatespina@gmail.com>
 */
class MeAnswers
{
    private const URL = '/me/answers';

    private $client;
    private $serializer;
    private $authentication;

    public function __construct(HttpClient $client, Serializer $serializer, Authentication $authentication)
    {
        $this->client = $client;
        $this->serializer = $serializer;
        $this->authentication = $authentication;
    }

    public function __invoke(array $parameters = AnswerApi::QUERY_PARAMS)
    {
        return $this->serializer->serialize(
            $this->client->get(
                self::URL,
                $this->mergeAuthenticationIntoParameters($parameters)
            )
        );
    }

    private function mergeAuthenticationIntoParameters(array $parameters) : array
    {
        return array_merge($parameters, $this->authentication->toArray());
    }
}
