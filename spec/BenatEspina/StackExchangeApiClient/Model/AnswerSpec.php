<?php

/**
 * This file is part of the StackExchangeApiClient library.
 *
 * @author  benatespina <benatespina@gmail.com>
 *
 * @license MIT
 */

namespace spec\BenatEspina\StackExchangeApiClient\Model;

use BenatEspina\StackExchangeApiClient\Model\Interfaces\CommentInterface;
use BenatEspina\StackExchangeApiClient\Model\Interfaces\ShallowUserInterface;
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

    function it_extends_AnswerQuestionAbstract()
    {
        $this->shouldHaveType('BenatEspina\StackExchangeApiClient\Model\Abstracts\AnswerQuestionAbstract');
    }

    function it_implements_answer_interface()
    {
        $this->shouldImplement('BenatEspina\StackExchangeApiClient\Model\Interfaces\AnswerInterface');
    }

    function its_comment_count_is_mutable()
    {
        $this->setCommentCount(6)->shouldReturn($this);
        $this->getCommentCount()->shouldReturn(6);
    }

    function its_comments_is_mutable(CommentInterface $comment)
    {
        $this->getComments()->shouldHaveCount(0);

        $this->addComment($comment);

        $this->getComments()->shouldHaveCount(1);

        $this->removeComment($comment);

        $this->getComments()->shouldHaveCount(0);
    }

    function its_last_edit_date_is_mutable()
    {
        $lastEditDate = new \DateTime("@" . 1409845665);

        $this->setLastEditDate($lastEditDate)->shouldReturn($this);
        $this->getLastEditDate()->shouldReturn($lastEditDate);
    }

    function its_las_editor_is_mutable(ShallowUserInterface $lastEditor)
    {
        $this->setLastEditor($lastEditor)->shouldReturn($this);
        $this->getLastEditor()->shouldReturn($lastEditor);
    }

    function its_down_vote_count_is_mutable()
    {
        $this->setDownVoteCount(6)->shouldReturn($this);
        $this->getDownVoteCount()->shouldReturn(6);
    }

    function its_up_vote_count_is_mutable()
    {
        $this->setUpVoteCount(6)->shouldReturn($this);
        $this->getUpVoteCount()->shouldReturn(6);
    }

    function its_accepted_is_mutable()
    {
        $this->setAccepted(true)->shouldReturn($this);
        $this->hasAccepted()->shouldReturn(true);
    }

    function its_can_flag_is_mutable()
    {
        $this->setCanFlag(true)->shouldReturn($this);
        $this->isCanFlag()->shouldReturn(true);
    }

    function its_is_accepted_is_mutable()
    {
        $this->setIsAccepted(true)->shouldReturn($this);
        $this->isAccepted()->shouldReturn(true);
    }

    function its_question_id_is_mutable()
    {
        $this->setQuestionId(25669612)->shouldReturn($this);
        $this->getQuestionId()->shouldReturn(25669612);
    }
}
