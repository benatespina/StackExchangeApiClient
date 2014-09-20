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
 * Class GenericIdTraitSpec.
 *
 * @package spec\Benatespina\StackExchangeApiClient\Model\Traits
 */
class GenericIdTraitSpec extends ObjectBehavior
{
    function let()
    {
        $this->beAnInstanceOf('BenatEspina\StackExchangeApiClient\Stubs\Traits\GenericIdTraitStub');
    }

    function its_answer_id_is_mutable()
    {
        $this->setAnswerId(25669772)->shouldReturn($this);
        $this->getAnswerId()->shouldReturn(25669772);
    }

    function its_body_is_mutable()
    {
        $this->setBody('The body')->shouldReturn($this);
        $this->getBody()->shouldReturn('The body');
    }

    function its_question_id_is_mutable()
    {
        $this->setQuestionId(25669772)->shouldReturn($this);
        $this->getQuestionId()->shouldReturn(25669772);
    }
}
