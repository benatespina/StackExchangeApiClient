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
 * Class ReputationChangeTraitSpec.
 *
 * @package spec\Benatespina\StackExchangeApiClient\Model\Traits
 */
class ReputationChangeTraitSpec extends ObjectBehavior
{
    function let()
    {
        $this->beAnInstanceOf('BenatEspina\StackExchangeApiClient\Stubs\Traits\ReputationChangeTraitStub');
    }

    function its_reputation_change_by_day_is_mutable()
    {
        $this->setReputationChangeDay(6)->shouldReturn($this);
        $this->getReputationChangeDay()->shouldReturn(6);
    }

    function its_reputation_change_by_month_is_mutable()
    {
        $this->setReputationChangeMonth(6)->shouldReturn($this);
        $this->getReputationChangeMonth()->shouldReturn(6);
    }

    function its_reputation_change_by_quarter_is_mutable()
    {
        $this->setReputationChangeQuarter(6)->shouldReturn($this);
        $this->getReputationChangeQuarter()->shouldReturn(6);
    }

    function its_reputation_change_by_week_is_mutable()
    {
        $this->setReputationChangeWeek(6)->shouldReturn($this);
        $this->getReputationChangeWeek()->shouldReturn(6);
    }

    function its_reputation_change_by_year_is_mutable()
    {
        $this->setReputationChangeYear(6)->shouldReturn($this);
        $this->getReputationChangeYear()->shouldReturn(6);
    }
}
