<?php

/**
 * This file is part of the StackExchangeApiClient library.
 *
 * @author  benatespina <benatespina@gmail.com>
 *
 * @license MIT
 */

namespace spec\BenatEspina\StackExchangeApiClient\Model;

use PhpSpec\ObjectBehavior;

/**
 * Class AnswerSpec.
 *
 * @package spec\Benatespina\StackExchangeApiClient\Model
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
