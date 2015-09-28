<?php

/*
 * This file is part of the Stack Exchange Api Client library.
 *
 * Copyright (c) 2015 Beñat Espiña <benatespina@gmail.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace spec\BenatEspina\StackExchangeApiClient\Model;

use PhpSpec\ObjectBehavior;

/**
 * Class PrivilegeSpec.
 *
 * @author Beñat Espiña <benatespina@gmail.com>
 */
class PrivilegeSpec extends ObjectBehavior
{
    function it_is_initializable()
    {
        $this->shouldHaveType('BenatEspina\StackExchangeApiClient\Model\Privilege');
    }

    function it_privilege_interface()
    {
        $this->shouldImplement('BenatEspina\StackExchangeApiClient\Model\Interfaces\PrivilegeInterface');
    }

    function its_description_is_mutable()
    {
        $this->setDescription('Privilege description')->shouldReturn($this);
        $this->getDescription()->shouldReturn('Privilege description');
    }

    function its_reputation_is_mutable()
    {
        $this->setReputation(1003)->shouldReturn($this);
        $this->getReputation()->shouldReturn(1003);
    }

    function its_short_description_is_mutable()
    {
        $this->setShortDescription('Privilege short description')->shouldReturn($this);
        $this->getShortDescription()->shouldReturn('Privilege short description');
    }
}
