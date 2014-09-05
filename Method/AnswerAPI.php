<?php

/**
 * This file is part of the StackExchangeApiClient library.
 *
 * @author  benatespina <benatespina@gmail.com>
 *
 * @license MIT
 */

namespace BenatEspina\StackExchangeApiClient\Method;

use BenatEspina\StackExchangeApiClient\Client;
use BenatEspina\StackExchangeApiClient\Model\Answer;

/**
 * Class AnswerAPI.
 *
 * @package BenatEspina\StackExchangeApiClient\Method
 */
class AnswerAPI
{
    /**
     * Client instance.
     *
     * @var \BenatEspina\StackExchangeApiClient\Client
     */
    protected $client;

    /**
     * Constructor.
     *
     * @param \BenatEspina\StackExchangeApiClient\Client $client that will be used to connect the server
     */
    public function __construct(Client $client)
    {
        $this->client = $client;
    }

    /**
     * Get all answers on the site.
     *
     * More info: http://api.stackexchange.com/docs/answers
     *
     * @param array $params QueryString parameter(s), by default, the basic to work:
     *                      array('site' => 'stackoverflow', 'sort' => 'activity')
     *
     * @return array<BenatEspina\StackExchangeApiClient\Model\AnswerInterface>
     */
    public function getAnswers($params = array('site' => 'stackoverflow', 'sort' => 'activity'))
    {
        return $this->responseToAnswer($this->client->get('/answers', $params));
    }

    /**
     * Get answers identified by a set of ids.
     *
     * More info: http://api.stackexchange.com/docs/answers-by-ids
     *
     * @param string[] $ids    The array which contains the ids delimited by semicolon
     * @param array    $params QueryString parameter(s), by default, the basic to work:
     *                         array('site' => 'stackoverflow', 'sort' => 'activity')
     *
     * @return array<BenatEspina\StackExchangeApiClient\Model\AnswerInterface>
     */
    public function getAnswersById($ids, $params = array('site' => 'stackoverflow', 'sort' => 'activity'))
    {
        return $this->responseToAnswer($this->client->get('/answers/' . implode(';', $ids), $params));
    }

    /**
     * Transforms the json decodes array to answer objects array.
     *
     * @param array $response Decoded array containing response
     *
     * @return array<BenatEspina\StackExchangeApiClient\Model\AnswerInterface>
     */
    private function responseToAnswer($response)
    {
        $answers = array();
        foreach ($response['items'] as $response) {
            $answers[] = new Answer($response);
        }

        return $answers;
    }
}
