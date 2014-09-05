<?php

/**
 * This file is part of the StackExchangeApiClient library.
 *
 * @author  benatespina <benatespina@gmail.com>
 *
 * @license MIT
 */

namespace spec\Benatespina\StackExchangeApiClient\Model;

use PhpSpec\ObjectBehavior;

/**
 * Class UserSpec.
 *
 * @package spec\Benatespina\StackExchangeApiClient\Model
 */
class UserSpec extends ObjectBehavior
{
    function it_is_initializable()
    {
        $this->shouldHaveType('BenatEspina\StackExchangeApiClient\Model\User');
    }

    function it_implements_user_interface()
    {
        $this->shouldImplement('BenatEspina\StackExchangeApiClient\Model\UserInterface');
    }

    function its_user_id_is_mutable()
    {
        $this->setUserId(2359967)->shouldReturn($this);
        $this->getUserId()->shouldReturn(2359967);
    }

    function its_reputation_is_mutable()
    {
        $this->setReputation(1003)->shouldReturn($this);
        $this->getReputation()->shouldReturn(1003);
    }

    function its_user_type_is_mutable()
    {
        $this->setUserType('registered')->shouldReturn($this);
        $this->getUserType()->shouldReturn('registered');
    }

    function its_accept_rate_is_mutable()
    {
        $this->setAcceptRate(93)->shouldReturn($this);
        $this->getAcceptRate()->shouldReturn(93);
    }

    function its_profile_image_is_mutable()
    {
        $this->setProfileImage('http://i.stack.imgur.com/loshM.png?s=128&g=1')->shouldReturn($this);
        $this->getProfileImage()->shouldReturn('http://i.stack.imgur.com/loshM.png?s=128&g=1');
    }

    function its_display_name_is_mutable()
    {
        $this->setDisplayName('benatespina')->shouldReturn($this);
        $this->getDisplayName()->shouldReturn('benatespina');
    }

    function its_link_is_mutable()
    {
        $this->setLink('http://stackoverflow.com/users/2359967/benatespina')->shouldReturn($this);
        $this->getLink()->shouldReturn('http://stackoverflow.com/users/2359967/benatespina');
    }
}
