<?php

/**
 * This file is part of the StackExchangeApiClient library.
 *
 * @author  benatespina <benatespina@gmail.com>
 *
 * @license MIT
 */

namespace spec\Benatespina\StackExchangeApiClient\Model;

use BenatEspina\StackExchangeApiClient\Model\Interfaces\UserInterface;
use PhpSpec\ObjectBehavior;

/**
 * Class BadgeSpec.
 *
 * @package spec\Benatespina\StackExchangeApiClient\Model
 */
class BadgeSpec extends ObjectBehavior
{
    function it_is_initializable()
    {
        $this->shouldHaveType('BenatEspina\StackExchangeApiClient\Model\Badge');
    }

    function it_extends_base_abstract_model()
    {
        $this->shouldHaveType('BenatEspina\StackExchangeApiClient\Model\Abstracts\BaseAbstractModel');
    }

    function it_implements_user_interface()
    {
        $this->shouldImplement('BenatEspina\StackExchangeApiClient\Model\Interfaces\BadgeInterface');
    }

    function its_award_count_is_mutable()
    {
        $this->setAwardCount(2000)->shouldReturn($this);
        $this->getAwardCount()->shouldReturn(2000);
    }

    function its_badge_id_is_mutable()
    {
        $this->setBadgeId('badge-id')->shouldReturn($this);
        $this->getBadgeId()->shouldReturn('badge-id');
    }

    function its_badge_type_is_mutable()
    {
        $this->setBadgeType('named')->shouldReturn($this);
        $this->getBadgeType()->shouldReturn('named');
    }

    function its_description_is_mutable()
    {
        $this->setDescription('badge-description')->shouldReturn($this);
        $this->getDescription()->shouldReturn('badge-description');
    }

    function its_name_is_mutable()
    {
        $this->setName('badge-name')->shouldReturn($this);
        $this->getName()->shouldReturn('badge-name');
    }

    function its_rank_is_mutable()
    {
        $this->setRank('safe')->shouldReturn($this);
        $this->getRank()->shouldReturn('safe');
    }

    function its_user_is_mutable(UserInterface $user)
    {
        $this->setUser($user)->shouldReturn($this);
        $this->getUser()->shouldReturn($user);
    }

    function its_link_is_mutable()
    {
        $this->setLink('http://link-url.com')->shouldReturn($this);
        $this->getLink()->shouldReturn('http://link-url.com');
    }
}
