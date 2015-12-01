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
 * Class GenericIdTraitSpec.
 *
 * @author Beñat Espiña <benatespina@gmail.com>
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
