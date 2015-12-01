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

use PhpSpec\ObjectBehavior;

/**
 * Class Base2AbstractSpec.
 *
 * @author Beñat Espiña <benatespina@gmail.com>
 */
class Base2AbstractSpec extends ObjectBehavior
{
    function let()
    {
        $this->beAnInstanceOf('BenatEspina\StackExchangeApiClient\Stubs\Abstracts\Base2AbstractStub');
    }

    function its_creation_date_is_mutable()
    {
        $creationDate = new \DateTime('@' . 1409845665);

        $this->setCreationDate($creationDate)->shouldReturn($this);
        $this->getCreationDate()->shouldReturn($creationDate);
    }

    function its_tags_is_mutable()
    {
        $this->getTags()->shouldHaveCount(0);

        $this->addTag('tag');

        $this->getTags()->shouldHaveCount(1);

        $this->removeTag('tag');

        $this->getTags()->shouldHaveCount(0);
    }

    function its_title_is_mutable()
    {
        $this->setTitle('The answer title')->shouldReturn($this);
        $this->getTitle()->shouldReturn('The answer title');
    }
}
