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

use BenatEspina\StackExchangeApiClient\Model\Interfaces\ShallowUserInterface;
use PhpSpec\ObjectBehavior;

/**
 * Class AwardedBountyTraitSpec.
 *
 * @author Beñat Espiña <benatespina@gmail.com>
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
