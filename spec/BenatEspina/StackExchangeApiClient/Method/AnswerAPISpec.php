<?php

/**
 * This file is part of the StackExchangeApiClient library.
 *
 * @author  benatespina <benatespina@gmail.com>
 *
 * @license MIT
 */

namespace spec\BenatEspina\StackExchangeApiClient\Method;

use BenatEspina\StackExchangeApiClient\Client;
use PhpSpec\ObjectBehavior;

/**
 * Class AnswerAPISpec.
 *
 * @package spec\Benatespina\StackExchangeApiClient\Method
 */
class AnswerAPISpec extends ObjectBehavior
{
    /**
     * Response that is return the methods of the AnswerAPI.
     *
     * @var (string|boolean|int)[]
     */
    private $response = array(
        'items' => array(
            'owner'              => array(
                'reputation'    => 71,
                'user_id'       => 28421,
                'user_type'     => 'registered',
                'profile_image' => 'http://i.stack.imgur.com/loshM.png?s=128&g=1',
                'display_name'  => 'benatespina',
                'link'          => 'http://stackapps.com/users/28421/benatespina'
            ),
            'is_accepted'        => false,
            'score'              => 0,
            'last_activity_date' => 1412287563,
            'creation_date'      => 1412287563,
            'answer_id'          => 0,
            'question_id'        => 4878
        )
    );

    function let(Client $client)
    {
        $this->beConstructedWith($client);
    }

    function it_is_initializable()
    {
        $this->shouldHaveType('BenatEspina\StackExchangeApiClient\Method\AnswerAPI');
    }

    function it_gets_answers(Client $client)
    {
        $client->get('/answers', array('site' => 'stackoverflow', 'sort' => 'activity'))
            ->shouldBeCalled()->willReturn($this->response);

        $this->getAll(array('site' => 'stackoverflow', 'sort' => 'activity'))->shouldBeArray();
    }

    function it_gets_answers_by_id(Client $client)
    {
        $client->get('/answers/25652752;25652751', array('site' => 'stackoverflow', 'sort' => 'activity'))
            ->shouldBeCalled()->willReturn(
                array(
                    'items' => array(
                        array(
                            'owner'              => array(
                                'user_id'       => 501696,
                                'reputation'    => 42799,
                                'accept_rate'   => 90,
                                'user_type'     => 'registered',
                                'profile_image' => 'http://i.stack.imgur.com/fDhYT.jpg?s=128&g=1',
                                'display_name'  => 'benatespina',
                                'link'          => 'http://stackoverflow.com/users/2359967/benatespina'
                            ),
                            'is_accepted'        => false,
                            'score'              => 0,
                            'last_activity_date' => 1409845665,
                            'creation_date'      => 1409845665,
                            'answer_id'          => 25652752,
                            'question_id'        => 25669612,
                        ),
                        array(
                            'owner'              => array(
                                'user_id'       => 2359967,
                                'reputation'    => 1003,
                                'user_type'     => 'registered',
                                'profile_image' => 'http://i.stack.imgur.com/loshM.png?s=128&g=1',
                                'display_name'  => 'benatespina',
                                'link'          => 'http://stackoverflow.com/users/2359967/benatespina'
                            ),
                            'is_accepted'        => false,
                            'score'              => 0,
                            'last_activity_date' => 1409845665,
                            'creation_date'      => 1409845665,
                            'answer_id'          => 25652751,
                            'question_id'        => 25669612,
                        )
                    )
                )
            );

        $this->getByIds(array('25652752', '25652751'))->shouldBeArray();
    }

    function it_creates_an_answer(Client $client)
    {
        $random = mt_rand();
        $client->post(
            '/questions/question-id/answers/add',
            array(),
            array(
                'site' => 'StackApps',
                'body' => 'Spec for Client with random ' . $random . '; this is part of StackExchangeApiClient tests.'
            )
        )->shouldBeCalled()->willReturn($this->response);

        $this->postAnswer(
            'question-id',
            array(
                'site' => 'StackApps',
                'body' => 'Spec for Client with random ' . $random . '; this is part of StackExchangeApiClient tests.'
            )
        )->shouldReturnAnInstanceOf('BenatEspina\StackExchangeApiClient\Model\Interfaces\AnswerInterface');
    }

    function it_accepts_an_answer(Client $client)
    {
        $client->post('/answers/answer-id/accept', array(), array('site' => 'StackApps'))
            ->shouldBeCalled()->willReturn($this->response);

        $this->postAccept('answer-id', array('site' => 'StackApps'))
            ->shouldReturnAnInstanceOf('BenatEspina\StackExchangeApiClient\Model\Interfaces\AnswerInterface');
    }

    function it_undo_accept_an_answer(Client $client)
    {
        $client->post('/answers/answer-id/accept/undo', array(), array('site' => 'StackApps'))
            ->shouldBeCalled()->willReturn($this->response);

        $this->postUndoAccept('answer-id', array('site' => 'StackApps'))
            ->shouldReturnAnInstanceOf('BenatEspina\StackExchangeApiClient\Model\Interfaces\AnswerInterface');
    }
}
