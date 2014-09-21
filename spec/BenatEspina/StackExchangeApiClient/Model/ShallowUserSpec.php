<?php

/**
 * This file is part of the StackExchangeApiClient library.
 *
 * @author  benatespina <benatespina@gmail.com>
 *
 * @license MIT
 */

namespace spec\BenatEspina\StackExchangeApiClient\Model;

use BenatEspina\StackExchangeApiClient\Model\Interfaces\BadgeCountInterface;
use PhpSpec\ObjectBehavior;

/**
 * Class ShallowUserSpec.
 *
 * @package spec\Benatespina\StackExchangeApiClient\Model
 */
class ShallowUserSpec extends ObjectBehavior
{
    function it_is_initializable()
    {
        $this->shouldHaveType('BenatEspina\StackExchangeApiClient\Model\ShallowUser');
    }

    function it_extends_base_abstract()
    {
        $this->shouldHaveType('BenatEspina\StackExchangeApiClient\Model\Abstracts\BaseAbstract');
    }

    function it_implements_shallow_user_interface()
    {
        $this->shouldImplement('BenatEspina\StackExchangeApiClient\Model\Interfaces\ShallowUserInterface');
    }

    function its_accept_rate_is_mutable()
    {
        $this->setAcceptRate(6)->shouldReturn($this);
        $this->getAcceptRate()->shouldReturn(6);
    }

    function its_badge_count_is_mutable(BadgeCountInterface $badgeCount)
    {
        $this->setBadgeCount($badgeCount)->shouldReturn($this);
        $this->getBadgeCount()->shouldReturn($badgeCount);
    }

    function its_display_name_is_mutable()
    {
        $this->setDisplayName('display-name')->shouldReturn($this);
        $this->getDisplayName()->shouldReturn('display-name');
    }

    function its_link_is_mutable()
    {
        $this->setLink('http://link.com')->shouldReturn($this);
        $this->getLink()->shouldReturn('http://link.com');
    }

    function its_profile_image_is_mutable()
    {
        $this->setProfileImage('profile-image')->shouldReturn($this);
        $this->getProfileImage()->shouldReturn('profile-image');
    }

    function its_reputation_is_mutable()
    {
        $this->setReputation(1003)->shouldReturn($this);
        $this->getReputation()->shouldReturn(1003);
    }

    function its_is_not_a_valid_user_type()
    {
        $this->setUserType('unregistered')->shouldReturn($this);

        $this->setUserType('invalid-user-type')->shouldReturn($this);
        $this->getUserType()->shouldReturn('unregistered');
    }

    function its_user_type_is_mutable()
    {
        $this->setUserType('unregistered')->shouldReturn($this);

        $this->setUserType('registered')->shouldReturn($this);
        $this->getUserType()->shouldReturn('registered');
    }
}
