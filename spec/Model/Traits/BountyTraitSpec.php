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
 * Class BountyTraitSpec.
 *
 * @author Beñat Espiña <benatespina@gmail.com>
 */
class BountyTraitSpec extends ObjectBehavior
{
    function let()
    {
        $this->beAnInstanceOf('BenatEspina\StackExchangeApiClient\Stubs\Traits\BountyTraitStub');
    }

    function its_body_amount_is_mutable()
    {
        $this->setBodyAmount(6)->shouldReturn($this);
        $this->getBodyAmount()->shouldReturn(6);
    }

    function its_bounty_closes_date_is_mutable()
    {
        $bountyClosesDate = new \DateTime('@' . 1409845665);

        $this->setBountyClosesDate($bountyClosesDate)->shouldReturn($this);
        $this->getBountyClosesDate()->shouldReturn($bountyClosesDate);
    }

    function its_bounty_user_is_mutable(ShallowUserInterface $user)
    {
        $this->setBountyUser($user)->shouldReturn($this);
        $this->getBountyUser()->shouldReturn($user);
    }
}
