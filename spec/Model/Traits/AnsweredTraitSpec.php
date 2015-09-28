<?php

/*
 * This file is part of the Stack Exchange Api Client library.
 *
 * Copyright (c) 2015 Beñat Espiña <benatespina@gmail.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace spec\BenatEspina\StackExchangeApiClient\Model\Traits;

use PhpSpec\ObjectBehavior;

/**
 * Class AnsweredTraitSpec.
 *
 * @author Beñat Espiña <benatespina@gmail.com>
 */
class AnsweredTraitSpec extends ObjectBehavior
{
    function let()
    {
        $this->beAnInstanceOf('BenatEspina\StackExchangeApiClient\Stubs\Traits\AnsweredTraitStub');
    }

    function its_is_answered_is_mutable()
    {
        $this->setAnswered(true)->shouldReturn($this);
        $this->isAnswered()->shouldReturn(true);
    }
}
