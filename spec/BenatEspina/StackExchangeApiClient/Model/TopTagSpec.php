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
 * Class TopTagSpec.
 *
 * @package spec\Benatespina\StackExchangeApiClient\Model
 */
class TopTagSpec extends ObjectBehavior
{
    function it_is_initializable()
    {
        $this->shouldHaveType('BenatEspina\StackExchangeApiClient\Model\TopTag');
    }

    function it_implements_top_tag_interface()
    {
        $this->shouldImplement('BenatEspina\StackExchangeApiClient\Model\Interfaces\TopTagInterface');
    }

    function its_answer_count_is_mutable()
    {
        $this->setAnswerCount(4)->shouldReturn($this);
        $this->getAnswerCount()->shouldReturn(4);
    }

    function its_answer_score_is_mutable()
    {
        $this->setAnswerScore(45)->shouldReturn($this);
        $this->getAnswerScore()->shouldReturn(45);
    }

    function its_question_count_is_mutable()
    {
        $this->setQuestionCount(4)->shouldReturn($this);
        $this->getQuestionCount()->shouldReturn(4);
    }

    function its_question_score_is_mutable()
    {
        $this->setQuestionScore(45)->shouldReturn($this);
        $this->getQuestionScore()->shouldReturn(45);
    }

    function its_tag_name_is_mutable()
    {
        $this->setTagName('tag-name')->shouldReturn($this);
        $this->getTagName()->shouldReturn('tag-name');
    }

    function its_user_id_is_mutable()
    {
        $this->setUserId(3455656)->shouldReturn($this);
        $this->getUserId()->shouldReturn(3455656);
    }
}
