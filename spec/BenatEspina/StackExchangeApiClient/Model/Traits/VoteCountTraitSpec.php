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
 * Class VoteCountTraitSpec.
 *
 * @package spec\Benatespina\StackExchangeApiClient\Model\Traits
 */
class VoteCountTraitSpec extends ObjectBehavior
{
    function let()
    {
        $this->beAnInstanceOf('BenatEspina\StackExchangeApiClient\Stubs\Traits\VoteCountTraitStub');
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
}
