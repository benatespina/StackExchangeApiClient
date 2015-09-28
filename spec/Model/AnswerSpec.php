<?php

/*
 * This file is part of the Stack Exchange Api Client library.
 *
 * Copyright (c) 2015 Beñat Espiña <benatespina@gmail.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace spec\BenatEspina\StackExchangeApiClient\Model;

use PhpSpec\ObjectBehavior;

/**
 * Class AnswerSpec.
 *
 * @author Beñat Espiña <benatespina@gmail.com>
 */
class AnswerSpec extends ObjectBehavior
{
    function it_is_initializable()
    {
        $this->shouldHaveType('BenatEspina\StackExchangeApiClient\Model\Answer');
    }

    function it_extends_answer_question_abstract()
    {
        $this->shouldHaveType('BenatEspina\StackExchangeApiClient\Model\Abstracts\AnswerQuestionAbstract');
    }

    function it_implements_answer_interface()
    {
        $this->shouldImplement('BenatEspina\StackExchangeApiClient\Model\Interfaces\AnswerInterface');
    }

    function its_private_accepted_is_mutable()
    {
        $this->setPrivateAccepted(true)->shouldReturn($this);
        $this->hasAccepted()->shouldReturn(true);
    }

    function its_can_flag_is_mutable()
    {
        $this->setCanFlag(true)->shouldReturn($this);
        $this->isCanFlag()->shouldReturn(true);
    }

    function its_is_accepted_is_mutable()
    {
        $this->setAccepted(true)->shouldReturn($this);
        $this->isAccepted()->shouldReturn(true);
    }

    function its_question_id_is_mutable()
    {
        $this->setQuestionId(25669612)->shouldReturn($this);
        $this->getQuestionId()->shouldReturn(25669612);
    }
}
