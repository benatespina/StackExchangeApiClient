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
 * Class StylingSpec.
 *
 * @author Beñat Espiña <benatespina@gmail.com>
 */
class StylingSpec extends ObjectBehavior
{
    function it_is_initializable()
    {
        $this->shouldHaveType('BenatEspina\StackExchangeApiClient\Model\Styling');
    }

    function it_implements_styling_interface()
    {
        $this->shouldImplement('BenatEspina\StackExchangeApiClient\Model\Interfaces\StylingInterface');
    }

    function its_link_color_is_mutable()
    {
        $this->setLinkColor('http://link-color.com')->shouldReturn($this);
        $this->getLinkColor()->shouldReturn('http://link-color.com');
    }

    function its_tag_foreground_color_is_mutable()
    {
        $this->setTagForegroundColor('tag-foreground-color')->shouldReturn($this);
        $this->getTagForegroundColor()->shouldReturn('tag-foreground-color');
    }

    function its_tag_background_color_is_mutable()
    {
        $this->setTagBackgroundColor('tag-background-color')->shouldReturn($this);
        $this->getTagBackgroundColor()->shouldReturn('tag-background-color');
    }
}
