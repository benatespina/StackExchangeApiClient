<?php

/**
 * This file is part of the StackExchangeApiClient library.
 *
 * @author  benatespina <benatespina@gmail.com>
 *
 * @license MIT
 */

namespace spec\BenatEspina\StackExchangeApiClient\Model\Traits;

use PhpSpec\ObjectBehavior;

/**
 * Class TotalResourceTraitSpec.
 *
 * @package spec\Benatespina\StackExchangeApiClient\Model\Traits
 */
class TotalResourceTraitSpec extends ObjectBehavior
{
    function let()
    {
        $this->beAnInstanceOf('BenatEspina\StackExchangeApiClient\Stubs\Traits\TotalResourceTraitStub');
    }

    function its_total_accepted_is_mutable()
    {
        $this->setTotalAccepted(6)->shouldReturn($this);
        $this->getTotalAccepted()->shouldReturn(6);
    }

    function its_total_answers_is_mutable()
    {
        $this->setTotalAnswers(6)->shouldReturn($this);
        $this->getTotalAnswers()->shouldReturn(6);
    }

    function its_total_badges_is_mutable()
    {
        $this->setTotalComments(6)->shouldReturn($this);
        $this->getTotalComments()->shouldReturn(6);
    }

    function its_total_questions_is_mutable()
    {
        $this->setTotalQuestions(6)->shouldReturn($this);
        $this->getTotalQuestions()->shouldReturn(6);
    }

    function its_total_unanswered_is_mutable()
    {
        $this->setTotalUnanswered(6)->shouldReturn($this);
        $this->getTotalUnanswered()->shouldReturn(6);
    }

    function its_total_users_is_mutable()
    {
        $this->setTotalUsers(6)->shouldReturn($this);
        $this->getTotalUsers()->shouldReturn(6);
    }

    function its_total_votes_is_mutable()
    {
        $this->setTotalVotes(6)->shouldReturn($this);
        $this->getTotalVotes()->shouldReturn(6);
    }
}
