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
 * Class NetworkUserSpec.
 *
 * @author Beñat Espiña <benatespina@gmail.com>
 */
class NetworkUserSpec extends ObjectBehavior
{
    function it_is_initializable()
    {
        $this->shouldHaveType('BenatEspina\StackExchangeApiClient\Model\NetworkUser');
    }

    function it_extends_base_abstract()
    {
        $this->shouldHaveType('BenatEspina\StackExchangeApiClient\Model\Abstracts\BaseAbstract');
    }

    function it_implements_network_user_interface()
    {
        $this->shouldImplement('BenatEspina\StackExchangeApiClient\Model\Interfaces\NetworkUserInterface');
    }

    function its_account_id_is_mutable()
    {
        $this->setAccountId(436456)->shouldReturn($this);
        $this->getAccountId()->shouldReturn(436456);
    }

    function its_creation_date_is_mutable()
    {
        $creationDate = new \DateTime('@' . 1409845665);

        $this->setCreationDate($creationDate)->shouldReturn($this);
        $this->getCreationDate()->shouldReturn($creationDate);
    }

    function its_last_access_date_is_mutable()
    {
        $lastAccessDate = new \DateTime('@' . 1409845665);

        $this->setLastAccessDate($lastAccessDate)->shouldReturn($this);
        $this->getLastAccessDate()->shouldReturn($lastAccessDate);
    }

    function its_reputation_count_is_mutable()
    {
        $this->setReputation(1003)->shouldReturn($this);
        $this->getReputation()->shouldReturn(1003);
    }

    function its_site_name_is_mutable()
    {
        $this->setSiteName('site-name')->shouldReturn($this);
        $this->getSiteName()->shouldReturn('site-name');
    }

    function its_site_url_is_mutable()
    {
        $this->setSiteUrl('http://site-url.com')->shouldReturn($this);
        $this->getSiteUrl()->shouldReturn('http://site-url.com');
    }

    function its_is_not_a_valid_user_type()
    {
        $this->setUserType('does_not_exist')->shouldReturn($this);

        $this->setUserType('invalid-user-type')->shouldReturn($this);
        $this->getUserType()->shouldReturn('does_not_exist');
    }

    function its_user_type_is_mutable()
    {
        $this->setUserType('does_not_exist')->shouldReturn($this);

        $this->setUserType('moderator')->shouldReturn($this);
        $this->getUserType()->shouldReturn('moderator');
    }
}
