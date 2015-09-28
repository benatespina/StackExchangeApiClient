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
 * Class BadgeCountSpec.
 *
 * @author Beñat Espiña <benatespina@gmail.com>
 */
class BadgeCountSpec extends ObjectBehavior
{
    function it_is_initializable()
    {
        $this->shouldHaveType('BenatEspina\StackExchangeApiClient\Model\BadgeCount');
    }

    function it_implements_badge_count_interface()
    {
        $this->shouldImplement('BenatEspina\StackExchangeApiClient\Model\Interfaces\BadgeCountInterface');
    }

    function its_bronze_is_mutable()
    {
        $this->setBronze(23)->shouldReturn($this);
        $this->getBronze()->shouldReturn(23);
    }

    function its_gold_is_mutable()
    {
        $this->setGold(1)->shouldReturn($this);
        $this->getGold()->shouldReturn(1);
    }

    function its_silver_is_mutable()
    {
        $this->setSilver(7)->shouldReturn($this);
        $this->getSilver()->shouldReturn(7);
    }
}
