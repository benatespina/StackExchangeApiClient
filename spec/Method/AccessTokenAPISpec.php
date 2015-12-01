<?php

/*
 * This file is part of the Stack Exchange Api Client library.
 *
 * Copyright (c) 2015 Beñat Espiña <benatespina@gmail.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace spec\BenatEspina\StackExchangeApiClient\Method;

use BenatEspina\StackExchangeApiClient\Client;
use PhpSpec\ObjectBehavior;

/**
 * Spec file of AccessToken class.
 *
 * @author Beñat Espiña <benatespina@gmail.com>
 */
class AccessTokenAPISpec extends ObjectBehavior
{
    /**
     * Array which contains accessToken objects. It is the return type of methods of access-token.
     *
     * @var \BenatEspina\StackExchangeApiClient\Model\Interfaces\AccessTokenInterface[]
     */
    private $response = [
        'items' => [
            [
                'scope'           => ['write_access, no_expiry'],
                'account_id'      => 2359967,
                'expires_on_date' => 1410082020,
                'access_token'    => 'access-token-1',
            ],
            [
                'scope'           => ['write_access'],
                'account_id'      => 501696,
                'expires_on_date' => 1410082020,
                'access_token'    => 'access-token-2',
            ],
        ],
    ];

    function let(Client $client)
    {
        $this->beConstructedWith($client);
    }

    function it_is_initializable()
    {
        $this->shouldHaveType('BenatEspina\StackExchangeApiClient\Method\AccessTokenAPI');
    }

    function it_gets_invalidate_access_tokens(Client $client)
    {
        $client->get('/access-tokens/access-token-1;access-token-2/invalidate', [])
            ->shouldBeCalled()->willReturn($this->response);

        $this->getInvalidateAccessTokens(['access-token-1', 'access-token-2'])->shouldBeArray();
    }

    function it_gets_access_tokens(Client $client)
    {
        $client->get('/access-tokens/access-token-1;access-token-2', [])
            ->shouldBeCalled()->willReturn($this->response);

        $this->getAccessTokens(['access-token-1', 'access-token-2'])->shouldBeArray();
    }

    function it_gets_de_authenticate_access_tokens(Client $client)
    {
        $client->get('/access-tokens/access-token-1;access-token-2/de-authenticate', [])
            ->shouldBeCalled()->willReturn($this->response);

        $this->getDeAuthenticateAccessTokens(['access-token-1', 'access-token-2'])->shouldBeArray();
    }
}
