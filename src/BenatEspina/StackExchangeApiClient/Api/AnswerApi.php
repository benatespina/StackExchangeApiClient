<?php

/*
 * This file is part of the Stack Exchange Api Client library.
 *
 * Copyright (c) 2014-2015 Beñat Espiña <benatespina@gmail.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace BenatEspina\StackExchangeApiClient\Api;

use BenatEspina\StackExchangeApiClient\Authentication\Authentication;
use BenatEspina\StackExchangeApiClient\Http\Http;
use BenatEspina\StackExchangeApiClient\Serializer\AnswerSerializer;

/**
 * The answer api class.
 *
 * @author Beñat Espiña <benatespina@gmail.com>
 */
final class AnswerApi
{
    const URL = 'answers/';

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

    public function answersOfIds($ids, array $params = ['site' => 'stackoverflow'], $filter = Http::FILTER_ALL, $serialize = true)
    {
        $query = array_merge(['filter' => $filter], $params);
        if (null !== $this->authentication) {
            $query = array_merge($query, $this->authentication->toArray());
        }
        $response = Http::instance()->get(self::URL . (is_array($ids) ? implode(';', $ids) : $ids), $query);

        return $serialize === true ? AnswerSerializer::instance()->serialize($response) : $response;
    }

    public function updateAnswerOfId($id, $body, $filter = Http::FILTER_ALL, $serialize = true)
    {
        if (!$this->authentication instanceof Authentication) {
            throw new \Exception('Authentication is required');
        }
        $response = Http::instance()->post(
            self::URL . $id . '/edit', array_merge(
                ['body' => $body, 'filter' => $filter, 'site' => 'stackoverflow'], $this->authentication->toArray()
            )
        );

        return $serialize === true ? AnswerSerializer::instance()->serialize($response) : $response;
    }

    public function answerOfQuestionId($id, $body, $filter = Http::FILTER_ALL, $serialize = true)
    {
        if (!$this->authentication instanceof Authentication) {
            throw new \Exception('Authentication is required');
        }
        $response = Http::instance()->post(
            'questions/' . $id . '/' . self::URL . 'add', array_merge(
                ['body' => $body, 'filter' => $filter, 'site' => 'stackoverflow'], $this->authentication->toArray()
            )
        );

        return $serialize === true ? AnswerSerializer::instance()->serialize($response) : $response;
    }
}
