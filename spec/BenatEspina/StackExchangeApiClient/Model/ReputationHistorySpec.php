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
 * Class ReputationHistorySpec.
 *
 * @package spec\Benatespina\StackExchangeApiClient\Model
 */
class ReputationHistorySpec extends ObjectBehavior
{
    function it_is_initializable()
    {
        $this->shouldHaveType('BenatEspina\StackExchangeApiClient\Model\ReputationHistory');
    }

    function it_implements_reputation_history_interface()
    {
        $this->shouldImplement('BenatEspina\StackExchangeApiClient\Model\Interfaces\ReputationHistoryInterface');
    }

    function its_creation_date_is_mutable()
    {
        $creationDate = new \DateTime("@" . 1409845665);

        $this->setCreationDate($creationDate)->shouldReturn($this);
        $this->getCreationDate()->shouldReturn($creationDate);
    }

    function its_post_id_is_mutable()
    {
        $this->setPostId(3564656)->shouldReturn($this);
        $this->getPostId()->shouldReturn(3564656);
    }

    function its_reputation_change_is_mutable()
    {
        $this->setReputationChange(45)->shouldReturn($this);
        $this->getReputationChange()->shouldReturn(45);
    }

    function its_is_not_a_valid_reputation_history_type()
    {
        $this->setReputationHistoryType('asker_accepts_answer')->shouldReturn($this);

        $this->setReputationHistoryType('invalid-reputation-history-type')->shouldReturn($this);
        $this->getReputationHistoryType()->shouldReturn('asker_accepts_answer');
    }

    function its_reputation_history_type_is_mutable()
    {
        $this->setReputationHistoryType('asker_accepts_answer')->shouldReturn($this);

        $this->setReputationHistoryType('asker_unaccept_answer')->shouldReturn($this);
        $this->getReputationHistoryType()->shouldReturn('asker_unaccept_answer');
    }

    function its_user_id_is_mutable()
    {
        $this->setUserId(3564656)->shouldReturn($this);
        $this->getUserId()->shouldReturn(3564656);
    }
}
