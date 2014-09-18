<?php

/**
 * This file is part of the StackExchangeApiClient library.
 *
 * @author  benatespina <benatespina@gmail.com>
 *
 * @license MIT
 */

namespace spec\BenatEspina\StackExchangeApiClient\Model\Traits;

use PhpSpec\ObjectBehavior;

/**
 * Class AnswerSpec.
 *
 * @package spec\Benatespina\StackExchangeApiClient\Model\Traits
 */
class AnswerSpec extends ObjectBehavior
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
