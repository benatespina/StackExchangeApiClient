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
 * Class AnswerTraitSpec.
 *
 * @author Beñat Espiña <benatespina@gmail.com>
 */
class AnswerTraitSpec extends ObjectBehavior
{
    function let()
    {
        $this->beAnInstanceOf('BenatEspina\StackExchangeApiClient\Stubs\Traits\AnswerTraitStub');
    }

    function its_accepted_answer_id_is_mutable()
    {
        $this->setAcceptedAnswerId(25669772)->shouldReturn($this);
        $this->getAcceptedAnswerId()->shouldReturn(25669772);
    }

    function its_answer_count_is_mutable()
    {
        $this->setAnswerCount(6)->shouldReturn($this);
        $this->getAnswerCount()->shouldReturn(6);
    }
}
