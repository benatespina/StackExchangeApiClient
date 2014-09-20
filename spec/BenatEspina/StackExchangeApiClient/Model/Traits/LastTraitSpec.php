<?php

/**
 * This file is part of the StackExchangeApiClient library.
 *
 * @author  benatespina <benatespina@gmail.com>
 *
 * @license MIT
 */

namespace spec\BenatEspina\StackExchangeApiClient\Model\Traits;

use PhpSpec\ObjectBehavior;

/**
 * Class LastTraitSpec.
 *
 * @package spec\Benatespina\StackExchangeApiClient\Model\Traits
 */
class LastTraitSpec extends ObjectBehavior
{
    function let()
    {
        $this->beAnInstanceOf('BenatEspina\StackExchangeApiClient\Stubs\Traits\LastTraitStub');
    }

    function its_last_body_is_mutable()
    {
        $this->setLastBody('The last body')->shouldReturn($this);
        $this->getLastBody()->shouldReturn('The last body');
    }

    function its_last_tags_is_mutable()
    {
        $this->getLastTags()->shouldHaveCount(0);

        $this->addLastTag('last-tag');

        $this->getLastTags()->shouldHaveCount(1);

        $this->removeLastTag('last-tag');

        $this->getLastTags()->shouldHaveCount(0);
    }

    function its_last_title_is_mutable()
    {
        $this->setLastTitle('The last title')->shouldReturn($this);
        $this->getLastTitle()->shouldReturn('The last title');
    }
}
