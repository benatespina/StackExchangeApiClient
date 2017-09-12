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

namespace Test\BenatEspina\StackExchangeApiClient\AccessToken;

use BenatEspina\StackExchangeApiClient\Model\AccessToken;
use BenatEspina\StackExchangeApiClient\Serializer\ToModelSerializer;
use BenatEspina\StackExchangeApiClient\StackExchange;

/**
 * @author Beñat Espiña <benatespina@gmail.com>
 */
class ReadTest extends \PHPUnit_Framework_TestCase
{
    private $stackExchange;
    private $authStackExchange;

    public function setUp()
    {
        $this->stackExchange = StackExchange::withoutAuth();
        $this->authStackExchange = StackExchange::withAuth(KEY, ACCESS_TOKEN);
    }

    public function testRead() : void
    {
        $response = $this->stackExchange->accessToken()->read(ACCESS_TOKEN);

        $this->assertEquals(self::RESPONSE, $response);
    }

    public function testReadReturningAccessTokenObject() : void
    {
        $accessToken = $this->stackExchange->accessToken(
            new ToModelSerializer(AccessToken::class)
        )->read(ACCESS_TOKEN);

        $this->assertInstanceOf(AccessToken::class, $accessToken);
        $this->assertEquals(self::RESPONSE, [$accessToken->jsonSerialize()]);
        $this->assertEquals(2737661, $accessToken->getAccountId());
        $this->assertEquals(ACCESS_TOKEN, $accessToken->getAccessToken());
        $this->assertEquals(['no_expiry', 'write_access', 'private_info'], $accessToken->getScope());
    }

    public function testReadWithAuth() : void
    {
        $response = $this->authStackExchange->accessToken()->read(ACCESS_TOKEN);

        $this->assertEquals(self::RESPONSE, $response);
    }

    public function testReadWithAuthReturningAccessTokenObject() : void
    {
        $accessToken = $this->authStackExchange->accessToken(
            new ToModelSerializer(AccessToken::class)
        )->read(ACCESS_TOKEN);

        $this->assertInstanceOf(AccessToken::class, $accessToken);
        $this->assertEquals(self::RESPONSE, [$accessToken->jsonSerialize()]);
        $this->assertEquals(2737661, $accessToken->getAccountId());
        $this->assertEquals(ACCESS_TOKEN, $accessToken->getAccessToken());
        $this->assertEquals(['no_expiry', 'write_access', 'private_info'], $accessToken->getScope());
    }

    private const RESPONSE = [
        [
            'account_id'   => 2737661,
            'access_token' => ACCESS_TOKEN,
            'scope'        => [
                'no_expiry',
                'write_access',
                'private_info',
            ],
        ],
    ];
}
