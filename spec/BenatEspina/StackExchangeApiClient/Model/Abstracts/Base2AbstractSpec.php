<?php

/**
 * This file is part of the StackExchangeApiClient library.
 *
 * @author  benatespina <benatespina@gmail.com>
 *
 * @license MIT
 */

namespace spec\BenatEspina\StackExchangeApiClient\Model\Abstracts;

use PhpSpec\ObjectBehavior;

/**
 * Class Base2AbstractSpec.
 *
 * @package spec\Benatespina\StackExchangeApiClient\Model\Abstracts
 */
class Base2AbstractSpec extends ObjectBehavior
{
    function let()
    {
        $this->beAnInstanceOf('BenatEspina\StackExchangeApiClient\Stubs\Abstracts\Base2AbstractStub');
    }

    function its_creation_date_is_mutable()
    {
        $creationDate = new \DateTime("@" . 1409845665);

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
