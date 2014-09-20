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
 * Class RequiresTraitSpec.
 *
 * @package spec\Benatespina\StackExchangeApiClient\Model\Traits
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
