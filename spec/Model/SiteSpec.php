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

use BenatEspina\StackExchangeApiClient\Model\Interfaces\StylingInterface;
use PhpSpec\ObjectBehavior;

/**
 * Class SiteSpec.
 *
 * @author Beñat Espiña <benatespina@gmail.com>
 */
class SiteSpec extends ObjectBehavior
{
    function it_is_initializable()
    {
        $this->shouldHaveType('BenatEspina\StackExchangeApiClient\Model\Site');
    }

    function it_implements_site_interface()
    {
        $this->shouldImplement('BenatEspina\StackExchangeApiClient\Model\Interfaces\SiteInterface');
    }

    function its_aliases_is_mutable()
    {
        $this->getAliases()->shouldHaveCount(0);

        $this->addAlias('alias');

        $this->getAliases()->shouldHaveCount(1);

        $this->removeAlias('alias');

        $this->getAliases()->shouldHaveCount(0);
    }

    function its_api_site_parameter_is_mutable()
    {
        $this->setApiSiteParameter('api-site-parameter')->shouldReturn($this);
        $this->getApiSiteParameter()->shouldReturn('api-site-parameter');
    }

    function its_audience_is_mutable()
    {
        $this->setAudience('audience')->shouldReturn($this);
        $this->getAudience()->shouldReturn('audience');
    }

    function its_launch_date_is_mutable()
    {
        $launchDate = new \DateTime('@' . 1409845665);

        $this->setLaunchDate($launchDate)->shouldReturn($this);
        $this->getLaunchDate()->shouldReturn($launchDate);
    }

    function its_markdown_extensions_is_mutable()
    {
        $this->getMarkdownExtensions()->shouldHaveCount(0);

        $this->addMarkdownExtension('markdown-extension');

        $this->getMarkdownExtensions()->shouldHaveCount(1);

        $this->removeMarkdownExtension('markdown-extension');

        $this->getMarkdownExtensions()->shouldHaveCount(0);
    }

    function its_name_is_mutable()
    {
        $this->setName('The name')->shouldReturn($this);
        $this->getName()->shouldReturn('The name');
    }

    function its_styling_is_mutable(StylingInterface $styling)
    {
        $this->setStyling($styling)->shouldReturn($this);
        $this->getStyling()->shouldReturn($styling);
    }

    function its_twitter_account_is_mutable()
    {
        $this->setTwitterAccount('Twitter-account')->shouldReturn($this);
        $this->getTwitterAccount()->shouldReturn('Twitter-account');
    }
}
