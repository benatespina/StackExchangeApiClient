<?php

/**
 * This file is part of the StackExchangeApiClient library.
 *
 * @author  benatespina <benatespina@gmail.com>
 *
 * @license MIT
 */

namespace spec\BenatEspina\StackExchangeApiClient\Model\Traits;

use BenatEspina\StackExchangeApiClient\Model\Interfaces\ShallowUserInterface;
use PhpSpec\ObjectBehavior;

/**
 * Class AwardedBountyTraitSpec.
 *
 * @package spec\Benatespina\StackExchangeApiClient\Model\Traits
 */
class AwardedBountyTraitSpec extends ObjectBehavior
{
    function let()
    {
        $this->beAnInstanceOf('BenatEspina\StackExchangeApiClient\Stubs\Traits\AwardedBountyTraitStub');
    }

    function its_awarded_bounty_amount_is_mutable()
    {
        $this->setAwardedBountyAmount(6)->shouldReturn($this);
        $this->getAwardedBountyAmount()->shouldReturn(6);
    }

    function its_awarded_bounty_users_is_mutable(ShallowUserInterface $awardedBountyUser)
    {
        $this->getAwardedBountyUsers()->shouldHaveCount(0);

        $this->addAwardedBountyUser($awardedBountyUser);

        $this->getAwardedBountyUsers()->shouldHaveCount(1);

        $this->removeAwardedBountyUser($awardedBountyUser);

        $this->getAwardedBountyUsers()->shouldHaveCount(0);
    }
}
