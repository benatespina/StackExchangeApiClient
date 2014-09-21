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
 * Class ReputationSpec.
 *
 * @package spec\Benatespina\StackExchangeApiClient\Model
 */
class ReputationSpec extends ObjectBehavior
{
    function it_is_initializable()
    {
        $this->shouldHaveType('BenatEspina\StackExchangeApiClient\Model\Reputation');
    }

    function it_implements_reputation_interface()
    {
        $this->shouldImplement('BenatEspina\StackExchangeApiClient\Model\Interfaces\ReputationInterface');
    }

    function its_link_is_mutable()
    {
        $this->setLink('http://link.com')->shouldReturn($this);
        $this->getLink()->shouldReturn('http://link.com');
    }

    function its_on_date_is_mutable()
    {
        $onDate = new \DateTime("@" . 1409845665);

        $this->setOnDate($onDate)->shouldReturn($this);
        $this->getOnDate()->shouldReturn($onDate);
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

    function its_reputation_change_is_mutable()
    {
        $this->setReputationChange(45)->shouldReturn($this);
        $this->getReputationChange()->shouldReturn(45);
    }

    function its_title_is_mutable()
    {
        $this->setTitle('The title')->shouldReturn($this);
        $this->gettitle()->shouldReturn('The title');
    }

    function its_user_id_is_mutable()
    {
        $this->setUserId(3564656)->shouldReturn($this);
        $this->getUserId()->shouldReturn(3564656);
    }

    function its_is_not_a_valid_vote_type()
    {
        $this->setVoteType('accepts')->shouldReturn($this);

        $this->setVoteType('invalid-vote-type')->shouldReturn($this);
        $this->getVoteType()->shouldReturn('accepts');
    }

    function its_vote_type_is_mutable()
    {
        $this->setVoteType('accepts')->shouldReturn($this);

        $this->setVoteType('up_votes')->shouldReturn($this);
        $this->getVoteType()->shouldReturn('up_votes');
    }
}
