<?php

/**
 * This file is part of the StackExchangeApiClient library.
 *
 * @author  benatespina <benatespina@gmail.com>
 *
 * @license MIT
 */

namespace spec\BenatEspina\StackExchangeApiClient\Model;

use BenatEspina\StackExchangeApiClient\Model\Interfaces\ShallowUserInterface;
use PhpSpec\ObjectBehavior;

/**
 * Class QuestionTimelineSpec.
 *
 * @package spec\Benatespina\StackExchangeApiClient\Model
 */
class QuestionTimelineSpec extends ObjectBehavior
{
    function it_is_initializable()
    {
        $this->shouldHaveType('BenatEspina\StackExchangeApiClient\Model\QuestionTimeline');
    }

    function it_implements_question_timeline_interface()
    {
        $this->shouldImplement('BenatEspina\StackExchangeApiClient\Model\Interfaces\QuestionTimelineInterface');
    }

    function its_comment_id_is_mutable()
    {
        $this->setCommentId(3454556)->shouldReturn($this);
        $this->getCommentId()->shouldReturn(3454556);
    }

    function its_creation_date_is_mutable()
    {
        $creationDate = new \DateTime("@" . 1409845665);

        $this->setCreationDate($creationDate)->shouldReturn($this);
        $this->getCreationDate()->shouldReturn($creationDate);
    }

    function its_owner_is_mutable(ShallowUserInterface $owner)
    {
        $this->setOwner($owner)->shouldReturn($this);
        $this->getOwner()->shouldReturn($owner);
    }

    function its_post_id_is_mutable()
    {
        $this->setPostId(3454556)->shouldReturn($this);
        $this->getPostId()->shouldReturn(3454556);
    }

    function its_question_id_is_mutable()
    {
        $this->setQuestionId(3454556)->shouldReturn($this);
        $this->getQuestionId()->shouldReturn(3454556);
    }

    function its_revision_guid_is_mutable()
    {
        $this->setRevisionGuid('revision-guid')->shouldReturn($this);
        $this->getRevisionGuid()->shouldReturn('revision-guid');
    }

    function its_is_not_a_valid_timeline_type()
    {
        $this->setTimelineType('question')->shouldReturn($this);

        $this->setTimelineType('invalid-timeline-type')->shouldReturn($this);
        $this->getTimelineType()->shouldReturn('question');
    }

    function its_timeline_type_is_mutable()
    {
        $this->setTimelineType('question')->shouldReturn($this);

        $this->setTimelineType('answer')->shouldReturn($this);
        $this->getTimelineType()->shouldReturn('answer');
    }

    function its_user_is_mutable(ShallowUserInterface $user)
    {
        $this->setUser($user)->shouldReturn($this);
        $this->getUser()->shouldReturn($user);
    }
}
