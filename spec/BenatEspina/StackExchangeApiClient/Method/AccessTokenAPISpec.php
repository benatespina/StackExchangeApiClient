<?php

/**
 * This file is part of the StackExchangeApiClient library.
 *
 * @author  benatespina <benatespina@gmail.com>
 *
 * @license MIT
 */

namespace spec\BenatEspina\StackExchangeApiClient\Method;

use BenatEspina\StackExchangeApiClient\Client;
use PhpSpec\ObjectBehavior;

/**
 * Class AccessTokenAPISpec.
 *
 * @package spec\Benatespina\StackExchangeApiClient\Method
 */
class AccessTokenAPISpec extends ObjectBehavior
{
    /**
     * Array which contains accessToken objects. It is the return type of methods of access-token.
     *
     * @var array<\BenatEspina\StackExchangeApiClient\Model\AccessTokenInterface>
     */
    private $response = array(
        'items' => array(
            array(
                'scope'           => array('write_access, no_expiry'),
                'account_id'      => 2359967,
                'expires_on_date' => 1410082020,
                'access_token'    => 'access-token-1'
            ),
            array(
                'scope'           => array('write_access'),
                'account_id'      => 501696,
                'expires_on_date' => 1410082020,
                'access_token'    => 'access-token-2'
            ),
        )
    );

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
        $client->get('/access-tokens/access-token-1;access-token-2/invalidate', array())
            ->shouldBeCalled()->willReturn($this->response);

        $this->getInvalidateAccessTokens(array('access-token-1', 'access-token-2'))->shouldBeArray();
    }

    function it_gets_access_tokens(Client $client)
    {
        $client->get('/access-tokens/access-token-1;access-token-2', array())
            ->shouldBeCalled()->willReturn($this->response);

        $this->getAccessTokens(array('access-token-1', 'access-token-2'))->shouldBeArray();
    }

    function it_gets_de_authenticate_access_tokens(Client $client)
    {
        $client->get('/access-tokens/access-token-1;access-token-2/de-authenticate', array())
            ->shouldBeCalled()->willReturn($this->response);

        $this->getDeAuthenticateAccessTokens(array('access-token-1', 'access-token-2'))->shouldBeArray();
    }
}
