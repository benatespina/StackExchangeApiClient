<?php

/**
 * This file is part of the StackExchangeApiClient library.
 *
 * @author  benatespina <benatespina@gmail.com>
 *
 * @license MIT
 */

namespace spec\BenatEspina\StackExchangeApiClient\Model;

use BenatEspina\StackExchangeApiClient\Model\Interfaces\OriginalQuestionInterface;
use BenatEspina\StackExchangeApiClient\Model\Interfaces\ShallowUserInterface;
use PhpSpec\ObjectBehavior;

/**
 * Class ClosedDetailsSpec.
 *
 * @package spec\Benatespina\StackExchangeApiClient\Model
 */
class ClosedDetailsSpec extends ObjectBehavior
{
    function it_is_initializable()
    {
        $this->shouldHaveType('BenatEspina\StackExchangeApiClient\Model\ClosedDetails');
    }

    function it_implements_closed_details_interface()
    {
        $this->shouldImplement('BenatEspina\StackExchangeApiClient\Model\Interfaces\ClosedDetailsInterface');
    }

    function its_by_users_is_mutable(ShallowUserInterface $byUser)
    {
        $this->getByUsers()->shouldHaveCount(0);

        $this->addByUser($byUser);

        $this->getByUsers()->shouldHaveCount(1);

        $this->removeByUser($byUser);

        $this->getByUsers()->shouldHaveCount(0);
    }

    function its_description_is_mutable()
    {
        $this->setDescription('Closed details description')->shouldReturn($this);
        $this->getDescription()->shouldReturn('Closed details description');
    }

    function its_on_hold_is_mutable()
    {
        $this->setOnHold(true)->shouldReturn($this);
        $this->isOnHold()->shouldReturn(true);
    }

    function its_original_questions_is_mutable(OriginalQuestionInterface $originalQuestion)
    {
        $this->getOriginalQuestions()->shouldHaveCount(0);

        $this->addOriginalQuestion($originalQuestion);

        $this->getOriginalQuestions()->shouldHaveCount(1);

        $this->removeOriginalQuestion($originalQuestion);

        $this->getOriginalQuestions()->shouldHaveCount(0);
    }

    function its_reason_is_mutable()
    {
        $this->setReason('The reason')->shouldReturn($this);
        $this->getReason()->shouldReturn('The reason');
    }
}
