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

namespace spec\BenatEspina\StackExchangeApiClient;

use BenatEspina\StackExchangeApiClient\Api\AccessTokenApi;
use BenatEspina\StackExchangeApiClient\Api\AnswerApi;
use BenatEspina\StackExchangeApiClient\StackExchange;
use PhpSpec\ObjectBehavior;

/**
 * @author Beñat Espiña <benatespina@gmail.com>
 */
class StackExchangeSpec extends ObjectBehavior
{
    function it_can_be_created()
    {
        $this->beConstructedWithoutAuth();
        $this->shouldHaveType(StackExchange::class);
        $this->accessToken()->shouldReturnAnInstanceOf(AccessTokenApi::class);
        $this->answer()->shouldReturnAnInstanceOf(AnswerApi::class);
    }
}
