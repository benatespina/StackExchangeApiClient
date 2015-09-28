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
 * Class ErrorSpec.
 *
 * @author Beñat Espiña <benatespina@gmail.com>
 */
class ErrorSpec extends ObjectBehavior
{
    function it_is_initializable()
    {
        $this->shouldHaveType('BenatEspina\StackExchangeApiClient\Model\Error');
    }

    function it_implements_error_interface()
    {
        $this->shouldImplement('BenatEspina\StackExchangeApiClient\Model\Interfaces\ErrorInterface');
    }

    function it_extends_exception()
    {
        $this->shouldHaveType('Exception');
    }

    function its_description_is_mutable()
    {
        $this->setDescription('The error description')->shouldReturn($this);
        $this->getDescription()->shouldReturn('The error description');
    }
}
