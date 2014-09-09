<?php

/**
 * This file is part of the StackExchangeApiClient library.
 *
 * @author  benatespina <benatespina@gmail.com>
 *
 * @license MIT
 */

namespace spec\Benatespina\StackExchangeApiClient\Model;

use BenatEspina\StackExchangeApiClient\Model\UserInterface;
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

    function it_implements_answer_interface()
    {
        $this->shouldImplement('BenatEspina\StackExchangeApiClient\Model\Interfaces\AnswerInterface');
    }

    function its_owner_is_mutable(UserInterface $owner)
    {
        $this->setOwner($owner)->shouldReturn($this);
        $this->getOwner()->shouldReturn($owner);
    }

    function its_is_accepted_is_mutable()
    {
        $this->setAccepted(true)->shouldReturn($this);
        $this->isAccepted()->shouldReturn(true);
    }

    function its_score_is_mutable()
    {
        $this->setScore(90)->shouldReturn($this);
        $this->getScore()->shouldReturn(90);
    }

    function its_last_activity_date_is_mutable()
    {
        $lastActivityDate = new \DateTime("@" . 1409845665);

        $this->setLastActivityDate($lastActivityDate)->shouldReturn($this);
        $this->getLastActivityDate()->shouldReturn($lastActivityDate);
    }

    function its_creation_date_is_mutable()
    {
        $creationDate = new \DateTime("@" . 1409845665);

        $this->setCreationDate($creationDate)->shouldReturn($this);
        $this->getCreationDate()->shouldReturn($creationDate);
    }

    function its_answer_id_is_mutable()
    {
        $this->setAnswerId(25669772)->shouldReturn($this);
        $this->getAnswerId()->shouldReturn(25669772);
    }

    function its_question_id_is_mutable()
    {
        $this->setQuestionId(25669612)->shouldReturn($this);
        $this->getQuestionId()->shouldReturn(25669612);
    }
}
