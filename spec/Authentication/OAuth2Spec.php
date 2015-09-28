<?php

/*
 * This file is part of the Stack Exchange Api Client library.
 *
 * Copyright (c) 2015 Beñat Espiña <benatespina@gmail.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace spec\BenatEspina\StackExchangeApiClient\Authentication;

use PhpSpec\ObjectBehavior;

/**
 * Spec file of OAuth2 class.
 *
 * @author Beñat Espiña <benatespina@gmail.com>
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
        $this->getAuth()->shouldReturn(['key' => 'key', 'access_token' => 'access-token']);
    }

    function it_gets_auth_as_string()
    {
        $this->getAuthAsString()->shouldReturn('&access_token=access-token&key=key');
    }
}
