<?php

/*
 * This file is part of the Stack Exchange Api Client library.
 *
 * (c) Beñat Espiña <benatespina@gmail.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

declare(strict_types=1);

namespace spec\BenatEspina\StackExchangeApiClient\Authentication;

use BenatEspina\StackExchangeApiClient\Authentication\Authentication;
use PhpSpec\ObjectBehavior;

/**
 * @author Beñat Espiña <benatespina@gmail.com>
 */
class AuthenticationSpec extends ObjectBehavior
{
    function it_can_be_created()
    {
        $this->beConstructedWith('the-key', 'the-access-token');
        $this->shouldHaveType(Authentication::class);
        $this->key()->shouldReturn('the-key');
        $this->accessToken()->shouldReturn('the-access-token');
        $this->toArray()->shouldReturn(['key' => 'the-key', 'access_token' => 'the-access-token']);
        $this->toUrl()->shouldReturn('&access_token=the-access-token&key=the-key');
    }
}
