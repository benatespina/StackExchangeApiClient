<?php

/**
 * This file is part of the StackExchangeApiClient library.
 *
 * @author  benatespina <benatespina@gmail.com>
 *
 * @license MIT
 */

namespace spec\BenatEspina\StackExchangeApiClient\Model;

use BenatEspina\StackExchangeApiClient\Model\Interfaces\AnswerInterface;
use BenatEspina\StackExchangeApiClient\Model\Interfaces\NoticeInterface;
use PhpSpec\ObjectBehavior;

/**
 * Class QuestionSpec.
 *
 * @package spec\Benatespina\StackExchangeApiClient\Model
 */
class QuestionSpec extends ObjectBehavior
{
    function it_is_initializable()
    {
        $this->shouldHaveType('BenatEspina\StackExchangeApiClient\Model\Question');
    }

    function it_extends_answer_question_abstract()
    {
        $this->shouldHaveType('BenatEspina\StackExchangeApiClient\Model\Abstracts\AnswerQuestionAbstract');
    }

    function it_implements_question_interface()
    {
        $this->shouldImplement('BenatEspina\StackExchangeApiClient\Model\Interfaces\QuestionInterface');
    }

    function its_answers_is_mutable(AnswerInterface $answer)
    {
        $this->getAnswers()->shouldHaveCount(0);

        $this->addAnswer($answer);

        $this->getAnswers()->shouldHaveCount(1);

        $this->removeAnswer($answer);

        $this->getAnswers()->shouldHaveCount(0);
    }

    function its_can_flag_is_mutable()
    {
        $this->setFlag(true)->shouldReturn($this);
        $this->canFlag()->shouldReturn(true);
    }

    function its_delete_vote_count_is_mutable()
    {
        $this->setDeleteVoteCount(5)->shouldReturn($this);
        $this->getDeleteVoteCount()->shouldReturn(5);
    }

    function its_notice_is_mutable(NoticeInterface $notice)
    {
        $this->setNotice($notice)->shouldReturn($this);
        $this->getNotice()->shouldReturn($notice);
    }

    function its_protected_date_is_mutable()
    {
        $protectedDate = new \DateTime("@" . 1409845665);

        $this->setProtectedDate($protectedDate)->shouldReturn($this);
        $this->getProtectedDate()->shouldReturn($protectedDate);
    }

    function its_reopen_vote_count_is_mutable()
    {
        $this->setReopenVoteCount(5)->shouldReturn($this);
        $this->getReopenVoteCount()->shouldReturn(5);
    }

    function its_view_count_is_mutable()
    {
        $this->setViewCount(309)->shouldReturn($this);
        $this->getViewCount()->shouldReturn(309);
    }
}
