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
 * Class BetaDateTraitSpec.
 *
 * @author Beñat Espiña <benatespina@gmail.com>
 */
class BetaDateTraitSpec extends ObjectBehavior
{
    function let()
    {
        $this->beAnInstanceOf('BenatEspina\StackExchangeApiClient\Stubs\Traits\BetaDateTraitStub');
    }

    function its_closed_beta_date_is_mutable()
    {
        $closedBetaDate = new \DateTime('@' . 1409845665);

        $this->setClosedBetaDate($closedBetaDate)->shouldReturn($this);
        $this->getClosedBetaDate()->shouldReturn($closedBetaDate);
    }

    function its_open_beta_date_is_mutable()
    {
        $openBetaDate = new \DateTime('@' . 1409845665);

        $this->setOpenBetaDate($openBetaDate)->shouldReturn($this);
        $this->getOpenBetaDate()->shouldReturn($openBetaDate);
    }
}
