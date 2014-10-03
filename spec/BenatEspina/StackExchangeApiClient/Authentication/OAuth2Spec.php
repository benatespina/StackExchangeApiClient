<?php

/**
 * This file is part of the StackExchangeApiClient library.
 *
 * @author  benatespina <benatespina@gmail.com>
 *
 * @license MIT
 */

namespace spec\BenatEspina\StackExchangeApiClient\Authentication;

use PhpSpec\ObjectBehavior;

/**
 * Class OAuth2Spec.
 *
 * @package spec\Benatespina\StackExchangeApiClient\Exception
 */
class OAuth2Spec extends ObjectBehavior
{
    function let()
    {
        $this->beConstructedWith('key', 'access-token', 'client-id', 'scope', 'redirect-uri');
    }

    function it_is_initializable()
    {
        $this->shouldHaveType('BenatEspina\StackExchangeApiClient\Authentication\OAuth2');
    }

    function it_implements_authentication_interface()
    {
        $this->shouldHaveType('BenatEspina\StackExchangeApiClient\Authentication\AuthenticationInterface');
    }

    function it_gets_access_token()
    {
        $this->getAccessToken()->shouldReturn('access-token');
    }

    function it_gets_the_key()
    {
        $this->getKey()->shouldReturn('key');
    }

    function it_gets_auth()
    {
        $this->getAuth()->shouldReturn(array('key' => 'key', 'access_token' => 'access-token'));
    }

    function it_gets_auth_as_string()
    {
        $this->getAuthAsString()->shouldReturn('&access_token=access-token&key=key');
    }
}
