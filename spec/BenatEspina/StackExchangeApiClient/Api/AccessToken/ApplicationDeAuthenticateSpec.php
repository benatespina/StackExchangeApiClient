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

namespace spec\BenatEspina\StackExchangeApiClient\Api\AccessToken;

use BenatEspina\StackExchangeApiClient\Api\AccessToken\ApplicationDeAuthenticate;
use BenatEspina\StackExchangeApiClient\Http\HttpClient;
use BenatEspina\StackExchangeApiClient\Serializer\Serializer;
use PhpSpec\ObjectBehavior;
use Prophecy\Argument;

/**
 * @author Beñat Espiña <benatespina@gmail.com>
 */
class ApplicationDeAuthenticateSpec extends ObjectBehavior
{
    function it_can_be_invoked(HttpClient $client, Serializer $serializer)
    {
        $this->beConstructedWith($client, $serializer);
        $this->shouldHaveType(ApplicationDeAuthenticate::class);

        $client->get('/apps/access-token-1;access-token-2/de-authenticate', [])->shouldBeCalled()->willReturn([]);
        $serializer->serialize(Argument::type('array'))->shouldBeCalled()->willReturn([]);

        $this->__invoke(['access-token-1', 'access-token-2']);
    }
}
