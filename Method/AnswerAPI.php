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
     * The prefix of answers API requests.
     *
     * @var string
     */
    protected $prefix = '/answers';

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
     * @param string[] $params QueryString parameter(s), by default, the basic to work:
     *                         array('site' => 'stackoverflow', 'sort' => 'activity')
     *
     * @return array<BenatEspina\StackExchangeApiClient\Model\Interfaces\AnswerInterface>
     */
    public function getAnswers($params = array('site' => 'stackoverflow', 'sort' => 'activity'))
    {
        return $this->responseToAnswer($this->client->get($this->prefix, $params));
    }

    /**
     * Get answers identified by a set of ids.
     *
     * More info: http://api.stackexchange.com/docs/answers-by-ids
     *
     * @param string[] $ids    The array which contains the ids delimited by semicolon
     * @param string[] $params QueryString parameter(s), by default, the basic to work:
     *                         array('site' => 'stackoverflow', 'sort' => 'activity')
     *
     * @return array<BenatEspina\StackExchangeApiClient\Model\Interfaces\AnswerInterface>
     */
    public function getAnswersById($ids, $params = array('site' => 'stackoverflow', 'sort' => 'activity'))
    {
        return $this->responseToAnswer($this->client->get($this->prefix . '/' . implode(';', $ids), $params));
    }

    /**
     * Create a new answer on the given question.
     *
     * More info: https://api.stackexchange.com/docs/create-answer
     *
     * @param string   $id      The id of question
     * @param string[] $request The array which contains the required parameters as 'site' and 'body'
     *
     * @return array<BenatEspina\StackExchangeApiClient\Model\Interfaces\AnswerInterface>
     */
    public function postAnswer($id, $request = array())
    {
        return $this->responseToAnswer(
            $this->client->post('/questions/' . $id . $this->prefix . '/add', array(), $request)
        );
    }

    /**
     * Transforms the json decodes array to answer objects array.
     *
     * @param mixed $response Decoded array containing response
     *
     * @return array<BenatEspina\StackExchangeApiClient\Model\Interfaces\AnswerInterface>
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
