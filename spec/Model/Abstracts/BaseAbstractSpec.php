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
 * Class BaseAbstractSpec.
 *
 * @author Beñat Espiña <benatespina@gmail.com>
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
