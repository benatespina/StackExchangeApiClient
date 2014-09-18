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
 * Class BaseAbstractSpec.
 *
 * @package spec\Benatespina\StackExchangeApiClient\Model\Abstracts
 */
class BaseAbstractSpec extends ObjectBehavior
{
    function let()
    {
        $this->beAnInstanceOf('BenatEspina\StackExchangeApiClient\Stubs\Abstracts\BaseAbstractStub');
    }

    function its_id_is_mutable()
    {
        $this->setId(25669772)->shouldReturn($this);
        $this->getId()->shouldReturn(25669772);
    }
}
