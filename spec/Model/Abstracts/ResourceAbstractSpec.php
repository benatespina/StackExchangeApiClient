<?php

/*
 * This file is part of the Stack Exchange Api Client library.
 *
 * Copyright (c) 2015 Beñat Espiña <benatespina@gmail.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace spec\BenatEspina\StackExchangeApiClient\Model\Abstracts;

use BenatEspina\StackExchangeApiClient\Model\Interfaces\ShallowUserInterface;
use PhpSpec\ObjectBehavior;

/**
 * Class ResourceAbstractSpec.
 *
 * @author Beñat Espiña <benatespina@gmail.com>
 */
class ResourceAbstractSpec extends ObjectBehavior
{
    function let()
    {
        $this->beAnInstanceOf('BenatEspina\StackExchangeApiClient\Stubs\Abstracts\ResourceAbstractStub');
    }

    function its_body_is_mutable()
    {
        $this->setBody('The body')->shouldReturn($this);
        $this->getBody()->shouldReturn('The body');
    }

    function its_body_mark_down_is_mutable()
    {
        $this->setBodyMarkDown('The body markdown')->shouldReturn($this);
        $this->getBodyMarkDown()->shouldReturn('The body markdown');
    }

    function its_creation_date_is_mutable()
    {
        $creationDate = new \DateTime('@' . 1409845665);

        $this->setCreationDate($creationDate)->shouldReturn($this);
        $this->getCreationDate()->shouldReturn($creationDate);
    }

    function its_link_is_mutable()
    {
        $this->setLink('http://link.com')->shouldReturn($this);
        $this->getlink()->shouldReturn('http://link.com');
    }

    function its_owner_is_mutable(ShallowUserInterface $owner)
    {
        $this->setOwner($owner)->shouldReturn($this);
        $this->getOwner()->shouldReturn($owner);
    }

    function its_score_is_mutable()
    {
        $this->setScore(90)->shouldReturn($this);
        $this->getScore()->shouldReturn(90);
    }

    function its_upvoted_is_mutable()
    {
        $this->setUpvoted(true)->shouldReturn($this);
        $this->isUpvoted()->shouldReturn(true);
    }
}
