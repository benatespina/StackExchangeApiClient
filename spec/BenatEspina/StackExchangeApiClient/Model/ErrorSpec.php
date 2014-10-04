<?php

/**
 * This file is part of the StackExchangeApiClient library.
 *
 * @author  benatespina <benatespina@gmail.com>
 *
 * @license MIT
 */

namespace spec\BenatEspina\StackExchangeApiClient\Model;

use PhpSpec\ObjectBehavior;

/**
 * Class ErrorSpec.
 *
 * @package spec\Benatespina\StackExchangeApiClient\Model
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
