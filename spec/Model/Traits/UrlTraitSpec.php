<?php

/*
 * This file is part of the Stack Exchange Api Client library.
 *
 * Copyright (c) 2015 Beñat Espiña <benatespina@gmail.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace spec\BenatEspina\StackExchangeApiClient\Model\Traits;

use PhpSpec\ObjectBehavior;

/**
 * Class UrlTraitSpec.
 *
 * @author Beñat Espiña <benatespina@gmail.com>
 */
class UrlTraitSpec extends ObjectBehavior
{
    function let()
    {
        $this->beAnInstanceOf('BenatEspina\StackExchangeApiClient\Stubs\Traits\UrlTraitStub');
    }

    function its_favicon_url_is_mutable()
    {
        $this->setFaviconUrl('http://favicon-url')->shouldReturn($this);
        $this->getFaviconUrl()->shouldReturn('http://favicon-url');
    }

    function its_high_res_icon_url_is_mutable()
    {
        $this->setHighResolutionIconUrl('http://high-res-icon-url')->shouldReturn($this);
        $this->getHighResolutionIconUrl()->shouldReturn('http://high-res-icon-url');
    }

    function its_icon_url_is_mutable()
    {
        $this->setIconUrl('http://icon-url')->shouldReturn($this);
        $this->getIconUrl()->shouldReturn('http://icon-url');
    }

    function its_logo_url_is_mutable()
    {
        $this->setLogoUrl('http://logo-url')->shouldReturn($this);
        $this->getLogoUrl()->shouldReturn('http://logo-url');
    }
}
