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
 * Class BountyTraitSpec.
 *
 * @package spec\Benatespina\StackExchangeApiClient\Model\Traits
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
        $bountyClosesDate = new \DateTime("@" . 1409845665);

        $this->setBountyClosesDate($bountyClosesDate)->shouldReturn($this);
        $this->getBountyClosesDate()->shouldReturn($bountyClosesDate);
    }

    function its_bounty_user_is_mutable(ShallowUserInterface $user)
    {
        $this->setBountyUser($user)->shouldReturn($this);
        $this->getBountyUser()->shouldReturn($user);
    }
}
