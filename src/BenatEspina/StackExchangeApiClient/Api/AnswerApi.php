<?php

/*
 * This file is part of the Stack Exchange Api Client library.
 *
 * Copyright (c) 2014-2016 Beñat Espiña <benatespina@gmail.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace BenatEspina\StackExchangeApiClient\Api;

use BenatEspina\StackExchangeApiClient\Authentication\Authentication;
use BenatEspina\StackExchangeApiClient\Http\Http;
use BenatEspina\StackExchangeApiClient\Model\Answer;
use BenatEspina\StackExchangeApiClient\Serializer\AnswerSerializer;

/**
 * The answer api class.
 *
 * @author Beñat Espiña <benatespina@gmail.com>
 */
final class AnswerApi
{
    const URL = 'answers/';
    const QUERY_PARAMS = [
        'order'  => 'desc',
        'sort'   => 'activity',
        'site'   => 'stackoverflow',
        'filter' => Http::FILTER_ALL,
    ];

    /**
     * The authentication.
     *
     * @var Authentication|null
     */
    private $authentication;

    /**
     * Constructor.
     *
     * @param Authentication|null $anAuthentication The authentication
     */
    public function __construct(Authentication $anAuthentication = null)
    {
        $this->authentication = $anAuthentication;
    }

    /**
     * Get all answers on the site.
     *
     * More info: http://api.stackexchange.com/docs/answers
     *
     * @param array $params    QueryString parameter(s)
     * @param bool  $serialize Checks if the result will be serialize or not, by default is true
     *
     * @return array
     */
    public function all(array $params = ['site' => 'stackoverflow'], $serialize = true)
    {
        if ($this->authentication instanceof Authentication) {
            if (true === empty($params)) {
                $params = array_merge($params, self::QUERY_PARAMS);
            }
            $params = array_merge($params, $this->authentication->toArray());
        }
        $response = Http::instance()->get(
            self::URL, $params
        );

        return $serialize === true ? AnswerSerializer::serialize($response) : $response;
    }

    /**
     * Get answers identified by a set of ids.
     *
     * More info: http://api.stackexchange.com/docs/answers-by-ids
     *
     * @param string|array $ids       Array which contains the ids delimited by semicolon, or a simple id
     * @param array        $params    QueryString parameter(s)
     * @param bool         $serialize Checks if the result will be serialize or not, by default is true
     *
     * @return array|Answer
     */
    public function getOfIds($ids, array $params = ['site' => 'stackoverflow'], $serialize = true)
    {
        if ($this->authentication instanceof Authentication) {
            if (true === empty($params)) {
                $params = array_merge($params, self::QUERY_PARAMS);
            }
            $params = array_merge($params, $this->authentication->toArray());
        }
        $response = Http::instance()->get(
            self::URL . (is_array($ids) ? implode(';', $ids) : $ids), $params
        );

        return $serialize === true ? AnswerSerializer::serialize($response) : $response;
    }

    /**
     * Casts an accept vote on the given answer.
     *
     * More info: https://api.stackexchange.com/docs/accept-answer
     *
     * @param string $id        The id of question
     * @param array  $params    QueryString parameter(s)
     * @param bool   $serialize Checks if the result will be serialize or not, by default is true
     *
     * @throws \Exception when the auth is null
     *
     * @return Answer
     */
    public function accept($id, array $params = self::QUERY_PARAMS, $serialize = true)
    {
        if (!$this->authentication instanceof Authentication) {
            throw new \Exception('Authentication is required');
        }
        $response = Http::instance()->put(
            self::URL . $id . '/accept', array_merge($params, $this->authentication->toArray())
        );

        return $serialize === true ? AnswerSerializer::serialize($response) : $response;
    }

    /**
     * Undoes an accept vote on the given answer.
     *
     * More info: https://api.stackexchange.com/docs/undo-accept-answer
     *
     * @param string $id        The id of question
     * @param array  $params    QueryString parameter(s)
     * @param bool   $serialize Checks if the result will be serialize or not, by default is true
     *
     * @throws \Exception when the auth is null
     *
     * @return Answer
     */
    public function undoAccept($id, array $params = self::QUERY_PARAMS, $serialize = true)
    {
        if (!$this->authentication instanceof Authentication) {
            throw new \Exception('Authentication is required');
        }
        $response = Http::instance()->put(
            self::URL . $id . '/accept/undo', array_merge($params, $this->authentication->toArray())
        );

        return $serialize === true ? AnswerSerializer::serialize($response) : $response;
    }

    /**
     * Deletes an answer.
     *
     * More info: https://api.stackexchange.com/docs/delete-answer
     *
     * @param string $id        The id of question
     * @param array  $params    QueryString parameter(s)
     * @param bool   $serialize Checks if the result will be serialize or not, by default is true
     *
     * @throws \Exception when the auth is null
     *
     * @return Answer
     */
    public function delete($id, array $params = self::QUERY_PARAMS, $serialize = true)
    {
        if (!$this->authentication instanceof Authentication) {
            throw new \Exception('Authentication is required');
        }
        $response = Http::instance()->delete(
            self::URL . $id . '/delete', array_merge($params, $this->authentication->toArray())
        );

        return $serialize === true ? AnswerSerializer::serialize($response) : $response;
    }

    /**
     * Downvotes an answer.
     *
     * More info: https://api.stackexchange.com/docs/downvote-answer
     *
     * @param string $id        The id of question
     * @param array  $params    QueryString parameter(s)
     * @param bool   $serialize Checks if the result will be serialize or not, by default is true
     *
     * @throws \Exception when the auth is null
     *
     * @return Answer
     */
    public function downvote($id, array $params = self::QUERY_PARAMS, $serialize = true)
    {
        if (!$this->authentication instanceof Authentication) {
            throw new \Exception('Authentication is required');
        }
        $response = Http::instance()->put(
            self::URL . $id . '/downvote', array_merge($params, $this->authentication->toArray())
        );

        return $serialize === true ? AnswerSerializer::serialize($response) : $response;
    }

    /**
     * Undoes an downvote on an answer.
     *
     * More info: https://api.stackexchange.com/docs/undo-downvote-answer
     *
     * @param string $id        The id of question
     * @param array  $params    QueryString parameter(s)
     * @param bool   $serialize Checks if the result will be serialize or not, by default is true
     *
     * @throws \Exception when the auth is null
     *
     * @return Answer
     */
    public function undoDownvote($id, array $params = self::QUERY_PARAMS, $serialize = true)
    {
        if (!$this->authentication instanceof Authentication) {
            throw new \Exception('Authentication is required');
        }
        $response = Http::instance()->put(
            self::URL . $id . '/downvote/undo', array_merge($params, $this->authentication->toArray())
        );

        return $serialize === true ? AnswerSerializer::serialize($response) : $response;
    }

    /**
     * Edit an existing answer.
     *
     * More info: https://api.stackexchange.com/docs/edit-answer
     *
     * @param string $id        The id of question
     * @param string $body      The body of the answer
     * @param array  $params    QueryString parameter(s)
     * @param bool   $serialize Checks if the result will be serialize or not, by default is true
     *
     * @throws \Exception when the auth is null
     *
     * @return Answer
     */
    public function update($id, $body, array $params = self::QUERY_PARAMS, $serialize = true)
    {
        if (!$this->authentication instanceof Authentication) {
            throw new \Exception('Authentication is required');
        }
        $response = Http::instance()->put(
            self::URL . $id . '/edit', array_merge(['body' => $body], $params, $this->authentication->toArray())
        );

        return $serialize === true ? AnswerSerializer::serialize($response) : $response;
    }

    /**
     * Upvotes an answer.
     *
     * More info: https://api.stackexchange.com/docs/upvote-answer
     *
     * @param string $id        The id of question
     * @param array  $params    QueryString parameter(s)
     * @param bool   $serialize Checks if the result will be serialize or not, by default is true
     *
     * @throws \Exception when the auth is null
     *
     * @return Answer
     */
    public function upvote($id, array $params = self::QUERY_PARAMS, $serialize = true)
    {
        if (!$this->authentication instanceof Authentication) {
            throw new \Exception('Authentication is required');
        }
        $response = Http::instance()->put(
            self::URL . $id . '/upvote', array_merge($params, $this->authentication->toArray())
        );

        return $serialize === true ? AnswerSerializer::serialize($response) : $response;
    }

    /**
     * Undoes an upvote on an answer.
     *
     * More info: https://api.stackexchange.com/docs/undo-upvote-answer
     *
     * @param string $id        The id of question
     * @param array  $params    QueryString parameter(s)
     * @param bool   $serialize Checks if the result will be serialize or not, by default is true
     *
     * @throws \Exception when the auth is null
     *
     * @return Answer
     */
    public function undoUpvote($id, array $params = self::QUERY_PARAMS, $serialize = true)
    {
        if (!$this->authentication instanceof Authentication) {
            throw new \Exception('Authentication is required');
        }
        $response = Http::instance()->put(
            self::URL . $id . '/upvote/undo', array_merge($params, $this->authentication->toArray())
        );

        return $serialize === true ? AnswerSerializer::serialize($response) : $response;
    }

    /**
     * Casts a flag against the answer identified by id.
     *
     * More info: https://api.stackexchange.com/docs/create-answer-flag
     *
     * @param string $id        The id of question
     * @param array  $params    QueryString parameter(s)
     * @param bool   $serialize Checks if the result will be serialize or not, by default is true
     *
     * @throws \Exception when the auth is null
     *
     * @return Answer
     */
    public function addFlag($id, array $params = self::QUERY_PARAMS, $serialize = true)
    {
        if (!$this->authentication instanceof Authentication) {
            throw new \Exception('Authentication is required');
        }
        $response = Http::instance()->put(
            self::URL . $id . '/flags/add', array_merge($params, $this->authentication->toArray())
        );

        return $serialize === true ? AnswerSerializer::serialize($response) : $response;
    }

    /**
     * Gets the answers to a set of questions identified in id.
     *
     * More info: https://api.stackexchange.com/docs/answers-on-questions
     *
     * @param string|array $ids       Array which contains the ids delimited by semicolon, or a simple id
     * @param array        $params    QueryString parameter(s)
     * @param bool         $serialize Checks if the result will be serialize or not, by default is true
     *
     * @return array|Answer
     */
    public function getOfQuestionIds($ids, array $params = ['site' => 'stackoverflow'], $serialize = true)
    {
        if ($this->authentication instanceof Authentication) {
            if (true === empty($params)) {
                $params = array_merge($params, self::QUERY_PARAMS);
            }
            $params = array_merge($params, $this->authentication->toArray());
        }
        $response = Http::instance()->get(
            'questions/' . (is_array($ids) ? implode(';', $ids) : $ids) . self::URL, $params
        );

        return $serialize === true ? AnswerSerializer::serialize($response) : $response;
    }

    /**
     * Create a new answer on the given question.
     *
     * More info: https://api.stackexchange.com/docs/create-answer
     *
     * @param string $id        The id of question
     * @param string $body      The body of the answer
     * @param array  $params    QueryString parameter(s)
     * @param bool   $serialize Checks if the result will be serialize or not, by default is true
     *
     * @throws \Exception when the auth is null
     *
     * @return Answer
     */
    public function addOfQuestionId($id, $body, array $params = self::QUERY_PARAMS, $serialize = true)
    {
        if (!$this->authentication instanceof Authentication) {
            throw new \Exception('Authentication is required');
        }
        $response = Http::instance()->post(
            'questions/' . $id . '/' . self::URL . 'add', array_merge(
                ['body' => $body], $params, $this->authentication->toArray()
            )
        );

        return $serialize === true ? AnswerSerializer::serialize($response) : $response;
    }

    /**
     * Render an answer given it's body and the question it's on.
     *
     * More info: https://api.stackexchange.com/docs/render-answer
     *
     * @param string $id        The id of question
     * @param string $body      The body of the answer
     * @param array  $params    QueryString parameter(s)
     * @param bool   $serialize Checks if the result will be serialize or not, by default is true
     *
     * @throws \Exception when the auth is null
     *
     * @return Answer
     */
    public function render($id, $body, array $params = ['site' => 'stackoverflow'], $serialize = true)
    {
        if ($this->authentication instanceof Authentication) {
            if (true === empty($params)) {
                $params = array_merge($params, self::QUERY_PARAMS);
            }
            $params = array_merge($params, $this->authentication->toArray());
        }
        $response = Http::instance()->post(
            'questions/' . $id . '/' . self::URL . 'render', array_merge(
                ['body' => $body], $params, $this->authentication->toArray()
            )
        );

        return $serialize === true ? AnswerSerializer::serialize($response) : $response;
    }

    /**
     * Returns the answers the users in {ids} have posted.
     *
     * More info: https://api.stackexchange.com/docs/answers-on-users
     *
     * @param string|array $ids       Array which contains the ids delimited by semicolon, or a simple id
     * @param array        $params    QueryString parameter(s)
     * @param bool         $serialize Checks if the result will be serialize or not, by default is true
     *
     * @return array|Answer
     */
    public function getOfUserIds($ids, array $params = ['site' => 'stackoverflow'], $serialize = true)
    {
        if ($this->authentication instanceof Authentication) {
            if (true === empty($params)) {
                $params = array_merge($params, self::QUERY_PARAMS);
            }
            $params = array_merge($params, $this->authentication->toArray());
        }
        $response = Http::instance()->get(
            'users/' . (is_array($ids) ? implode(';', $ids) : $ids) . '/' . self::URL, $params
        );

        return $serialize === true ? AnswerSerializer::serialize($response) : $response;
    }

    /**
     * Returns the answers owned by the user associated with the given access_token.
     *
     * More info: https://api.stackexchange.com/docs/me-answers
     *
     * @param array $params    QueryString parameter(s)
     * @param bool  $serialize Checks if the result will be serialize or not, by default is true
     *
     * @throws \Exception when the auth is null
     *
     * @return array|Answer
     */
    public function myAnswers(array $params = self::QUERY_PARAMS, $serialize = true)
    {
        if (!$this->authentication instanceof Authentication) {
            throw new \Exception('Authentication is required');
        }
        $response = Http::instance()->get(
            'me/' . self::URL, array_merge($params, $this->authentication->toArray())
        );

        return $serialize === true ? AnswerSerializer::serialize($response) : $response;
    }

    /**
     * Returns the top 30 answers a user has posted in response to questions with the given tags.
     *
     * More info: https://api.stackexchange.com/docs/top-user-answers-in-tags
     *
     * @param string       $userId    The user id
     * @param string|array $tags      Array which contains the $tags delimited by semicolon, or a simple tag
     * @param array        $params    QueryString parameter(s)
     * @param bool         $serialize Checks if the result will be serialize or not, by default is true
     *
     * @return array|Answer
     */
    public function getTopOfUserAndTags($userId, $tags, array $params = ['site' => 'stackoverflow'], $serialize = true)
    {
        if ($this->authentication instanceof Authentication) {
            if (true === empty($params)) {
                $params = array_merge($params, self::QUERY_PARAMS);
            }
            $params = array_merge($params, $this->authentication->toArray());
        }
        $response = Http::instance()->get(
            'users/' . $userId . '/tags/' . (is_array($tags) ? implode(';', $tags) : $tags) . '/top-' . self::URL, $params
        );

        return $serialize === true ? AnswerSerializer::serialize($response) : $response;
    }

    /**
     * Returns the top 30 answers the user associated with the given
     * access_token has posted in response to questions with the given tags.
     *
     * More info: https://api.stackexchange.com/docs/me-tags-top-answers
     *
     * @param string|array $tags      Array which contains the tags delimited by semicolon, or a simple tag
     * @param array        $params    QueryString parameter(s)
     * @param bool         $serialize Checks if the result will be serialize or not, by default is true
     *
     * @throws \Exception when the auth is null
     *
     * @return array|Answer
     */
    public function myTopAnswersOfTags($tags, array $params = self::QUERY_PARAMS, $serialize = true)
    {
        if (!$this->authentication instanceof Authentication) {
            throw new \Exception('Authentication is required');
        }
        $response = Http::instance()->get(
            'me/tags/' . (is_array($tags) ? implode(';', $tags) : $tags) . '/top-' . self::URL,
            array_merge($params, $this->authentication->toArray())
        );

        return $serialize === true ? AnswerSerializer::serialize($response) : $response;
    }
}
