<?php

/**
 * This file is part of the StackExchangeApiClient library.
 *
 * @author  benatespina <benatespina@gmail.com>
 *
 * @license MIT
 */

namespace spec\BenatEspina\StackExchangeApiClient\Model;

use PhpSpec\ObjectBehavior;

/**
 * Class RelatedSiteSpec.
 *
 * @package spec\Benatespina\StackExchangeApiClient\Model
 */
class RelatedSiteSpec extends ObjectBehavior
{
    function it_is_initializable()
    {
        $this->shouldHaveType('BenatEspina\StackExchangeApiClient\Model\RelatedSite');
    }

    function it_implements_related_site_interface()
    {
        $this->shouldImplement('BenatEspina\StackExchangeApiClient\Model\Interfaces\RelatedSiteInterface');
    }

    function its_api_site_parameter_is_mutable()
    {
        $this->setApiSiteParameter('api-site-parameter')->shouldReturn($this);
        $this->getApiSiteParameter()->shouldReturn('api-site-parameter');
    }

    function its_name_is_mutable()
    {
        $this->setName('The name')->shouldReturn($this);
        $this->getName()->shouldReturn('The name');
    }

    function its_is_not_a_valid_relation()
    {
        $this->setRelation('chat')->shouldReturn($this);

        $this->setRelation('invalid-relation')->shouldReturn($this);
        $this->getRelation()->shouldReturn('chat');
    }

    function its_relation_is_mutable()
    {
        $this->setRelation('chat')->shouldReturn($this);

        $this->setRelation('meta')->shouldReturn($this);
        $this->getRelation()->shouldReturn('meta');
    }

    function its_site_url_is_mutable()
    {
        $this->setSiteUrl('http://site-url.com')->shouldReturn($this);
        $this->getSiteUrl()->shouldReturn('http://site-url.com');
    }
}
