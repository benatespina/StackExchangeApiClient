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

namespace spec\BenatEspina\StackExchangeApiClient\Serializer;

use BenatEspina\StackExchangeApiClient\Model\AccessToken;
use BenatEspina\StackExchangeApiClient\Serializer\Serializer;
use BenatEspina\StackExchangeApiClient\Serializer\ToModelSerializer;
use PhpSpec\ObjectBehavior;

/**
 * @author Beñat Espiña <benatespina@gmail.com>
 */
class ToModelSerializerSpec extends ObjectBehavior
{
    function it_can_be_serialized()
    {
        $this->beConstructedWith(AccessToken::class);
        $this->shouldHaveType(ToModelSerializer::class);
        $this->shouldImplement(Serializer::class);

        $this->serialize([
            'items' => [
                [
                    'account_id'   => 23423423,
                    'access_token' => 'sdfsdfsdfds',
                    'scope'        => [
                        'write',
                    ],
                ],
            ],
        ])->shouldReturnAnInstanceOf(AccessToken::class);
    }

    function it_can_be_serialized_more_than_one_resource()
    {
        $this->beConstructedWith(AccessToken::class);
        $this->shouldHaveType(ToModelSerializer::class);
        $this->shouldImplement(Serializer::class);

        $this->serialize([
            'items' => [
                [
                    'account_id'   => 23423423,
                    'access_token' => 'sdfsdfsdfds',
                    'scope'        => [
                        'write',
                    ],
                ],
                [
                    'account_id'   => 45546446,
                    'access_token' => 'styuuiykmdfds',
                    'scope'        => [
                        'write',
                    ],
                ],
            ],
        ])->shouldBeArray();
    }
}
