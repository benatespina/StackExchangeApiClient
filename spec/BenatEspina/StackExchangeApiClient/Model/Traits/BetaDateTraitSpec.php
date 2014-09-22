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
 * Class BetaDateTraitSpec.
 *
 * @package spec\Benatespina\StackExchangeApiClient\Model\Traits
 */
class BetaDateTraitSpec extends ObjectBehavior
{
    function let()
    {
        $this->beAnInstanceOf('BenatEspina\StackExchangeApiClient\Stubs\Traits\BetaDateTraitStub');
    }

    function its_closed_beta_date_is_mutable()
    {
        $closedBetaDate = new \DateTime("@" . 1409845665);

        $this->setClosedBetaDate($closedBetaDate)->shouldReturn($this);
        $this->getClosedBetaDate()->shouldReturn($closedBetaDate);
    }

    function its_open_beta_date_is_mutable()
    {
        $openBetaDate = new \DateTime("@" . 1409845665);

        $this->setOpenBetaDate($openBetaDate)->shouldReturn($this);
        $this->getOpenBetaDate()->shouldReturn($openBetaDate);
    }
}
