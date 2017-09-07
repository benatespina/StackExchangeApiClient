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
use BenatEspina\StackExchangeApiClient\Http\HttpClient;
use BenatEspina\StackExchangeApiClient\Serializer\Serializer;

/**
 * http://api.stackexchange.com/docs/answers.
 *
 * @author Beñat Espiña <benatespina@gmail.com>
 */
class Answers
{
    private const URL = '/answers';

    private $client;
    private $serializer;

    public function __construct(HttpClient $client, Serializer $serializer)
    {
        $this->client = $client;
        $this->serializer = $serializer;
    }

    public function __invoke(array $parameters = AnswerApi::QUERY_PARAMS)
    {
        return $this->serializer->serialize(
            $this->client->get(
                self::URL,
                $parameters
            )
        );
    }
}
