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
 * Class RequiresTraitSpec.
 *
 * @author Beñat Espiña <benatespina@gmail.com>
 */
class RequiresTraitSpec extends ObjectBehavior
{
    function let()
    {
        $this->beAnInstanceOf('BenatEspina\StackExchangeApiClient\Stubs\Traits\RequiresTraitStub');
    }

    function its_requires_comment_is_mutable()
    {
        $this->setRequiresComment(true)->shouldReturn($this);
        $this->isRequiresComment()->shouldReturn(true);
    }

    function its_requires_question_is_mutable()
    {
        $this->setRequiresQuestionId(true)->shouldReturn($this);
        $this->isRequiresQuestionId()->shouldReturn(true);
    }

    function its_requires_site_is_mutable()
    {
        $this->setRequiresSite(true)->shouldReturn($this);
        $this->isRequiresSite()->shouldReturn(true);
    }
}
