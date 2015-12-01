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

use BenatEspina\StackExchangeApiClient\Model\Interfaces\BadgeCountInterface;
use PhpSpec\ObjectBehavior;

/**
 * Class CountTraitSpec.
 *
 * @author Beñat Espiña <benatespina@gmail.com>
 */
class CountTraitSpec extends ObjectBehavior
{
    function let()
    {
        $this->beAnInstanceOf('BenatEspina\StackExchangeApiClient\Stubs\Traits\CountTraitStub');
    }

    function its_answer_count_is_mutable()
    {
        $this->setAnswerCount(6)->shouldReturn($this);
        $this->getAnswerCount()->shouldReturn(6);
    }

    function its_badge_count_is_mutable(BadgeCountInterface $badgeCount)
    {
        $this->setBadgeCount($badgeCount)->shouldReturn($this);
        $this->getBadgeCount()->shouldReturn($badgeCount);
    }

    function its_question_count_is_mutable()
    {
        $this->setQuestionCount(6)->shouldReturn($this);
        $this->getQuestionCount()->shouldReturn(6);
    }
}
