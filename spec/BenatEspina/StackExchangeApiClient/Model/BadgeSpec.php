<?php

/**
 * This file is part of the StackExchangeApiClient library.
 *
 * @author  benatespina <benatespina@gmail.com>
 *
 * @license MIT
 */

namespace spec\BenatEspina\StackExchangeApiClient\Model;

use BenatEspina\StackExchangeApiClient\Model\Interfaces\ShallowUserInterface;
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

    function it_extends_base_abstract()
    {
        $this->shouldHaveType('BenatEspina\StackExchangeApiClient\Model\Abstracts\BaseAbstract');
    }

    function it_implements_badge_interface()
    {
        $this->shouldImplement('BenatEspina\StackExchangeApiClient\Model\Interfaces\BadgeInterface');
    }

    function its_award_count_is_mutable()
    {
        $this->setAwardCount(2000)->shouldReturn($this);
        $this->getAwardCount()->shouldReturn(2000);
    }

    function its_is_not_a_valid_badge_type()
    {
        $this->setBadgeType('named')->shouldReturn($this);

        $this->setBadgeType('invalid-badge-type')->shouldReturn($this);
        $this->getBadgeType()->shouldReturn('named');
    }

    function its_badge_type_is_mutable()
    {
        $this->setBadgeType('named')->shouldReturn($this);

        $this->setBadgeType('tag_based')->shouldReturn($this);
        $this->getBadgeType()->shouldReturn('tag_based');
    }

    function its_description_is_mutable()
    {
        $this->setDescription('badge-description')->shouldReturn($this);
        $this->getDescription()->shouldReturn('badge-description');
    }

    function its_link_is_mutable()
    {
        $this->setLink('http://link-url.com')->shouldReturn($this);
        $this->getLink()->shouldReturn('http://link-url.com');
    }

    function its_name_is_mutable()
    {
        $this->setName('badge-name')->shouldReturn($this);
        $this->getName()->shouldReturn('badge-name');
    }

    function its_is_not_a_valid_rank()
    {
        $this->setRank('gold')->shouldReturn($this);

        $this->setRank('invalid-rank')->shouldReturn($this);
        $this->getRank()->shouldReturn('gold');
    }

    function its_rank_is_mutable()
    {
        $this->setRank('gold')->shouldReturn($this);
        
        $this->setRank('silver')->shouldReturn($this);
        $this->getRank()->shouldReturn('silver');
    }

    function its_user_is_mutable(ShallowUserInterface $user)
    {
        $this->setUser($user)->shouldReturn($this);
        $this->getUser()->shouldReturn($user);
    }
}
