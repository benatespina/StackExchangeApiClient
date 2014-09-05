<?php

/**
 * This file is part of the StackExchangeApiClient library.
 *
 * @author  benatespina <benatespina@gmail.com>
 *
 * @license MIT
 */

namespace spec\Benatespina\StackExchangeApiClient;

use BenatEspina\StackExchangeApiClient\Exception\RequestException;
use PhpSpec\ObjectBehavior;

/**
 * Class ClientSpec.
 *
 * @package spec\Benatespina\StackExchangeApiClient
 */
class ClientSpec extends ObjectBehavior
{
    function it_is_initializable()
    {
        $this->shouldHaveType('BenatEspina\StackExchangeApiClient\Client');
    }

    function it_gets()
    {
        $this->get('/answers', array('site' => 'stackoverflow', 'sort' => 'activity'))->shouldBeArray();
    }

    function it_throws_an_exception_because_site_is_required()
    {
        $this->shouldThrow(
            new RequestException(
                array(
                    'error_id'      => 400,
                    'error_message' => 'site is required',
                    'error_name'    => 'bad_parameter'
                )
            )
        )->during('get', array('/answers'));
    }
}
