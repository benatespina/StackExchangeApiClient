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
 * Class AccessTokenSpec.
 *
 * @author Beñat Espiña <benatespina@gmail.com>
 */
class AccessTokenSpec extends ObjectBehavior
{
    function it_is_initializable()
    {
        $this->shouldHaveType('BenatEspina\StackExchangeApiClient\Model\AccessToken');
    }

    function it_implements_acess_token_interface()
    {
        $this->shouldImplement('BenatEspina\StackExchangeApiClient\Model\Interfaces\AccessTokenInterface');
    }

    function its_access_token_is_mutable()
    {
        $this->setAccessToken('access-token')->shouldReturn($this);
        $this->getAccessToken()->shouldReturn('access-token');
    }

    function its_is_account_id_is_mutable()
    {
        $this->setAccountId('account-id')->shouldReturn($this);
        $this->getAccountId()->shouldReturn('account-id');
    }

    function its_expires_on_date_is_mutable()
    {
        $expiresOnDate = new \DateTime('@' . 1409845665);

        $this->setExpiresOnDate($expiresOnDate)->shouldReturn($this);
        $this->getExpiresOnDate()->shouldReturn($expiresOnDate);
    }

    function its_scope_is_mutable()
    {
        $this->getScope()->shouldHaveCount(0);

        $this->addScope('write_access');

        $this->getScope()->shouldHaveCount(1);

        $this->removeScope('write_access');

        $this->getScope()->shouldHaveCount(0);
    }
}
