<?php

/*
 * This file is part of the Stack Exchange Api Client library.
 *
 * Copyright (c) 2015 Beñat Espiña <benatespina@gmail.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace spec\BenatEspina\StackExchangeApiClient\Model\Traits;

use PhpSpec\ObjectBehavior;

/**
 * Class VoteCountTraitSpec.
 *
 * @author Beñat Espiña <benatespina@gmail.com>
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
