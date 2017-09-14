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

use BenatEspina\StackExchangeApiClient\Api\Answer\AcceptAnswer;
use BenatEspina\StackExchangeApiClient\Api\Answer\Answers;
use BenatEspina\StackExchangeApiClient\Api\Answer\AnswersByIds;
use BenatEspina\StackExchangeApiClient\Api\Answer\AnswersOnQuestions;
use BenatEspina\StackExchangeApiClient\Api\Answer\AnswersOnUsers;
use BenatEspina\StackExchangeApiClient\Api\Answer\CreateAnswer;
use BenatEspina\StackExchangeApiClient\Api\Answer\CreateAnswerFlag;
use BenatEspina\StackExchangeApiClient\Api\Answer\DeleteAnswer;
use BenatEspina\StackExchangeApiClient\Api\Answer\DownvoteAnswer;
use BenatEspina\StackExchangeApiClient\Api\Answer\EditAnswer;
use BenatEspina\StackExchangeApiClient\Api\Answer\MeAnswers;
use BenatEspina\StackExchangeApiClient\Api\Answer\MeTagsTopAnswers;
use BenatEspina\StackExchangeApiClient\Api\Answer\RenderAnswer;
use BenatEspina\StackExchangeApiClient\Api\Answer\TopUserAnswersInTags;
use BenatEspina\StackExchangeApiClient\Api\Answer\UndoAcceptAnswer;
use BenatEspina\StackExchangeApiClient\Api\Answer\UndoDownvoteAnswer;
use BenatEspina\StackExchangeApiClient\Api\Answer\UndoUpvoteAnswer;
use BenatEspina\StackExchangeApiClient\Api\Answer\UpvoteAnswer;
use BenatEspina\StackExchangeApiClient\Authentication\Authentication;
use BenatEspina\StackExchangeApiClient\Authentication\AuthenticationIsRequired;
use BenatEspina\StackExchangeApiClient\Http\HttpClient;
use BenatEspina\StackExchangeApiClient\Serializer\Serializer;

/**
 * @author Beñat Espiña <benatespina@gmail.com>
 */
class AnswerApi
{
    public const QUERY_PARAMS = [
        'order'  => 'desc',
        'sort'   => 'activity',
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

    public function acceptAnswer(string $id, array $parameters = self::QUERY_PARAMS)
    {
        $this->checkAuthenticationIsEnabled();

        return (new AcceptAnswer(
            $this->client,
            $this->serializer,
            $this->authentication)
        )->__invoke($id, $parameters);
    }

    public function answers(array $parameters = self::QUERY_PARAMS)
    {
        return (new Answers(
            $this->client,
            $this->serializer
        ))->__invoke($parameters);
    }

    public function answersByIds($ids, array $parameters = self::QUERY_PARAMS)
    {
        return (new AnswersByIds(
            $this->client,
            $this->serializer
        ))->__invoke($ids, $parameters);
    }

    public function answersOnQuestions($ids, array $parameters = self::QUERY_PARAMS)
    {
        return (new AnswersOnQuestions(
            $this->client,
            $this->serializer
        ))->__invoke($ids, $parameters);
    }

    public function answersOnUsers($ids, array $parameters = self::QUERY_PARAMS)
    {
        return (new AnswersOnUsers(
            $this->client,
            $this->serializer
        ))->__invoke($ids, $parameters);
    }

    public function createAnswer(string $questionId, string $body, array $parameters = self::QUERY_PARAMS)
    {
        $this->checkAuthenticationIsEnabled();

        return (new CreateAnswer(
            $this->client,
            $this->serializer,
            $this->authentication
        ))->__invoke($questionId, $body, $parameters);
    }

    public function createAnswerFlag(string $id, array $parameters = self::QUERY_PARAMS)
    {
        $this->checkAuthenticationIsEnabled();

        return (new CreateAnswerFlag(
            $this->client,
            $this->serializer,
            $this->authentication
        ))->__invoke($id, $parameters);
    }

    public function deleteAnswer(string $id, array $parameters = self::QUERY_PARAMS)
    {
        $this->checkAuthenticationIsEnabled();

        return (new DeleteAnswer(
            $this->client,
            $this->serializer,
            $this->authentication
        ))->__invoke($id, $parameters);
    }

    public function downvoteAnswer(string $id, array $parameters = self::QUERY_PARAMS)
    {
        $this->checkAuthenticationIsEnabled();

        return (new DownvoteAnswer(
            $this->client,
            $this->serializer,
            $this->authentication
        ))->__invoke($id, $parameters);
    }

    public function editAnswer(string $id, string $body, array $parameters = self::QUERY_PARAMS)
    {
        $this->checkAuthenticationIsEnabled();

        return (new EditAnswer(
            $this->client,
            $this->serializer,
            $this->authentication
        ))->__invoke($id, $body, $parameters);
    }

    public function meAnswers(array $parameters = self::QUERY_PARAMS)
    {
        $this->checkAuthenticationIsEnabled();

        return (new MeAnswers(
            $this->client,
            $this->serializer,
            $this->authentication
        ))->__invoke($parameters);
    }

    public function meTagsTopAnswers($tags, array $parameters = self::QUERY_PARAMS)
    {
        $this->checkAuthenticationIsEnabled();

        return (new MeTagsTopAnswers(
            $this->client,
            $this->serializer,
            $this->authentication
        ))->__invoke($tags, $parameters);
    }

    public function renderAnswer(string $id, string $body, array $parameters = self::QUERY_PARAMS)
    {
        $this->checkAuthenticationIsEnabled();

        return (new RenderAnswer(
            $this->client,
            $this->serializer,
            $this->authentication
        ))->__invoke($id, $body, $parameters);
    }

    public function topUserAnswersInTags(string $userId, $tags, array $parameters = self::QUERY_PARAMS)
    {
        return (new TopUserAnswersInTags(
            $this->client,
            $this->serializer
        ))->__invoke($userId, $tags, $parameters);
    }

    public function undoAcceptAnswer(string $id, array $parameters = self::QUERY_PARAMS)
    {
        $this->checkAuthenticationIsEnabled();

        return (new UndoAcceptAnswer(
            $this->client,
            $this->serializer,
            $this->authentication
        ))->__invoke($id, $parameters);
    }

    public function undoDownvoteAnswer(string $id, array $parameters = self::QUERY_PARAMS)
    {
        $this->checkAuthenticationIsEnabled();

        return (new UndoDownvoteAnswer(
            $this->client,
            $this->serializer,
            $this->authentication
        ))->__invoke($id, $parameters);
    }

    public function undoUpvoteAnswer(string $id, array $parameters = self::QUERY_PARAMS)
    {
        $this->checkAuthenticationIsEnabled();

        return (new UndoUpvoteAnswer(
            $this->client,
            $this->serializer,
            $this->authentication
        ))->__invoke($id, $parameters);
    }

    public function upvoteAnswer(string $id, array $parameters = self::QUERY_PARAMS)
    {
        $this->checkAuthenticationIsEnabled();

        return (new UpvoteAnswer(
            $this->client,
            $this->serializer,
            $this->authentication
        ))->__invoke($id, $parameters);
    }

    private function checkAuthenticationIsEnabled() : void
    {
        if (!$this->authentication instanceof Authentication) {
            throw new AuthenticationIsRequired();
        }
    }
}
