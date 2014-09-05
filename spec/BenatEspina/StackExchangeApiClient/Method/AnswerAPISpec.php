<?php

/**
 * This file is part of the StackExchangeApiClient library.
 *
 * @author  benatespina <benatespina@gmail.com>
 *
 * @license MIT
 */

namespace spec\Benatespina\StackExchangeApiClient\Method;

use BenatEspina\StackExchangeApiClient\Client;
use PhpSpec\ObjectBehavior;

/**
 * Class AnswerAPISpec.
 *
 * @package spec\Benatespina\StackExchangeApiClient\Method
 */
class AnswerAPISpec extends ObjectBehavior
{
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
            ->shouldBeCalled()->willReturn(
                array(
                    'items' => array(
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
                            'answer_id'          => 25669772,
                            'question_id'        => 25669612,
                        )
                    )
                )
            );

        $this->getAnswers(array('site' => 'stackoverflow', 'sort' => 'activity'))->shouldBeArray();
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

        $this->getAnswersById(array('25652752', '25652751'))->shouldBeArray();
    }
}
