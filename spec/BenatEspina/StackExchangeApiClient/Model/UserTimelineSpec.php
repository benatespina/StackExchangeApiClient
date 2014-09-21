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
 * Class UserTimelineSpec.
 *
 * @package spec\Benatespina\StackExchangeApiClient\Model
 */
class UserTimelineSpec extends ObjectBehavior
{
    function it_is_initializable()
    {
        $this->shouldHaveType('BenatEspina\StackExchangeApiClient\Model\UserTimeline');
    }

    function it_extends_base_abstract()
    {
        $this->shouldHaveType('BenatEspina\StackExchangeApiClient\Model\Abstracts\BaseAbstract');
    }

    function it_implements_user_timeline_interface()
    {
        $this->shouldImplement('BenatEspina\StackExchangeApiClient\Model\Interfaces\UserTimelineInterface');
    }

    function its_badge_id_is_mutable()
    {
        $this->setBadgeId(3455467)->shouldReturn($this);
        $this->getBadgeId()->shouldReturn(3455467);
    }

    function its_comment_id_is_mutable()
    {
        $this->setCommentId(3455467)->shouldReturn($this);
        $this->getCommentId()->shouldReturn(3455467);
    }

    function its_creation_date_is_mutable()
    {
        $creationDate = new \DateTime("@" . 1409845665);

        $this->setCreationDate($creationDate)->shouldReturn($this);
        $this->getCreationDate()->shouldReturn($creationDate);
    }

    function its_detail_is_mutable()
    {
        $this->setDetail('The detail')->shouldReturn($this);
        $this->getDetail()->shouldReturn('The detail');
    }

    function its_link_is_mutable()
    {
        $this->setLink('http://link.com')->shouldReturn($this);
        $this->getLink()->shouldReturn('http://link.com');
    }

    function its_post_id_is_mutable()
    {
        $this->setPostId(3564656)->shouldReturn($this);
        $this->getPostId()->shouldReturn(3564656);
    }

    function its_is_not_a_valid_post_type()
    {
        $this->setPostType('question')->shouldReturn($this);

        $this->setPostType('invalid-post-type')->shouldReturn($this);
        $this->getPostType()->shouldReturn('question');
    }

    function its_post_type_is_mutable()
    {
        $this->setPostType('question')->shouldReturn($this);

        $this->setPostType('answer')->shouldReturn($this);
        $this->getPostType()->shouldReturn('answer');
    }

    function its_suggested_edit_id_is_mutable()
    {
        $this->setSuggestedEditId(45)->shouldReturn($this);
        $this->getSuggestedEditId()->shouldReturn(45);
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

    function its_title_is_mutable()
    {
        $this->setTitle('The title')->shouldReturn($this);
        $this->getTitle()->shouldReturn('The title');
    }
}
