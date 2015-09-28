<?php

/*
 * This file is part of the Stack Exchange Api Client library.
 *
 * Copyright (c) 2015 Beñat Espiña <benatespina@gmail.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace spec\BenatEspina\StackExchangeApiClient\Model\Abstracts;

use PhpSpec\ObjectBehavior;

/**
 * Class AnswerQuestionAbstractSpec.
 *
 * @author Beñat Espiña <benatespina@gmail.com>
 */
class AnswerQuestionAbstractSpec extends ObjectBehavior
{
    function let()
    {
        $this->beAnInstanceOf('BenatEspina\StackExchangeApiClient\Stubs\Abstracts\AnswerQuestionAbstractStub');
    }

    function its_community_owned_date_is_mutable()
    {
        $communityOwnedDate = new \DateTime('@' . 1409845665);

        $this->setCommunityOwnedDate($communityOwnedDate)->shouldReturn($this);
        $this->getCommunityOwnedDate()->shouldReturn($communityOwnedDate);
    }

    function its_locked_owned_date_is_mutable()
    {
        $lockedDate = new \DateTime('@' . 1409845665);

        $this->setLockedDate($lockedDate)->shouldReturn($this);
        $this->getLockedDate()->shouldReturn($lockedDate);
    }

    function its_tags_is_mutable()
    {
        $this->getTags()->shouldHaveCount(0);

        $this->addTag('tag');

        $this->getTags()->shouldHaveCount(1);

        $this->removeTag('tag');

        $this->getTags()->shouldHaveCount(0);
    }
}
