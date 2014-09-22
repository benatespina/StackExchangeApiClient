<?php

/**
 * This file is part of the StackExchangeApiClient library.
 *
 * @author  benatespina <benatespina@gmail.com>
 *
 * @license MIT
 */

namespace spec\BenatEspina\StackExchangeApiClient\Model\Traits;

use BenatEspina\StackExchangeApiClient\Model\Interfaces\RelatedSiteInterface;
use PhpSpec\ObjectBehavior;

/**
 * Class SiteTraitSpec.
 *
 * @package spec\Benatespina\StackExchangeApiClient\Model\Traits
 */
class SiteTraitSpec extends ObjectBehavior
{
    function let()
    {
        $this->beAnInstanceOf('BenatEspina\StackExchangeApiClient\Stubs\Traits\SiteTraitStub');
    }

    function its_related_site_is_mutable(RelatedSiteInterface $relatedSite)
    {
        $this->getRelatedSites()->shouldHaveCount(0);

        $this->addRelatedSite($relatedSite);

        $this->getRelatedSites()->shouldHaveCount(1);

        $this->removeRelatedSite($relatedSite);

        $this->getRelatedSites()->shouldHaveCount(0);
    }

    function its_is_not_a_valid_site_state()
    {
        $this->setSiteState('normal')->shouldReturn($this);

        $this->setSiteState('invalid-site-state')->shouldReturn($this);
        $this->getSiteState()->shouldReturn('normal');
    }

    function its_site_state_is_mutable()
    {
        $this->setSiteState('normal')->shouldReturn($this);

        $this->setSiteState('closed_beta')->shouldReturn($this);
        $this->getSiteState()->shouldReturn('closed_beta');
    }

    function its_is_not_a_valid_site_type()
    {
        $this->setSiteType('main_site')->shouldReturn($this);

        $this->setSiteType('invalid-site-type')->shouldReturn($this);
        $this->getSiteType()->shouldReturn('main_site');
    }

    function its_site_type_is_mutable()
    {
        $this->setSiteType('main_site')->shouldReturn($this);

        $this->setSiteType('meta_site')->shouldReturn($this);
        $this->getSiteType()->shouldReturn('meta_site');
    }

    function its_site_url_is_mutable()
    {
        $this->setSiteUrl('http://site-url.com')->shouldReturn($this);
        $this->getSiteUrl()->shouldReturn('http://site-url.com');
    }
}
