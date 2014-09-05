<?php

/**
 * This file is part of the StackExchangeApiClient library.
 *
 * @author  benatespina <benatespina@gmail.com>
 *
 * @license MIT
 */

namespace spec\Benatespina\StackExchangeApiClient\Exception;

use PhpSpec\ObjectBehavior;

/**
 * Class RequestExceptionSpec.
 *
 * @package spec\Benatespina\StackExchangeApiClient\Exception
 */
class RequestExceptionSpec extends ObjectBehavior
{
    function let()
    {
        $this->beConstructedWith(
            array(
                'error_id'      => 400,
                'error_message' => 'site is required',
                'error_name'    => 'bad_parameter'
            )
        );
    }

    function it_is_initializable()
    {
        $this->shouldHaveType('BenatEspina\StackExchangeApiClient\Exception\RequestException');
    }
}
