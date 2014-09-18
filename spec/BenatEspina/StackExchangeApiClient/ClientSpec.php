<?php

/**
 * This file is part of the StackExchangeApiClient library.
 *
 * @author  benatespina <benatespina@gmail.com>
 *
 * @license MIT
 */

namespace spec\BenatEspina\StackExchangeApiClient;

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

    function it_posts()
    {
        $this->post('/filters/create')->shouldBeArray();
    }

    function it_throws_an_exception_because_no_method_found_with_this_name()
    {
        $this->shouldThrow(
            new RequestException(
                array(
                    'error_id'      => 404,
                    'error_message' => 'no method found with this name',
                    'error_name'    => 'no_method'
                )
            )
        )->during('post', array('/no-method'));
    }
}
