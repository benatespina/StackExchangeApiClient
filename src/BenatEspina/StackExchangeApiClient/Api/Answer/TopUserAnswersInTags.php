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
 * https://api.stackexchange.com/docs/top-user-answers-in-tags.
 *
 * @author Beñat Espiña <benatespina@gmail.com>
 */
final class TopUserAnswersInTags
{
    private const URL = '/users/{id}/tags/{tags}/top-answers';

    private $client;
    private $serializer;

    public function __construct(HttpClient $client, Serializer $serializer)
    {
        $this->client = $client;
        $this->serializer = $serializer;
    }

    public function __invoke(string $userId, $tags, array $parameters = AnswerApi::QUERY_PARAMS)
    {
        return $this->serializer->serialize(
            $this->client->get(
                $this->url($userId, $tags),
                $parameters
            )
        );
    }

    private function url(string $userId, $tags) : string
    {
        return str_replace(
            '{id}', $userId,
            str_replace(
                '{tags}', is_array($tags) ? implode(';', $tags) : $tags, self::URL
            )
        );
    }
}
