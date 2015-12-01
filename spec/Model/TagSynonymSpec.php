<?php

/*
 * This file is part of the Stack Exchange Api Client library.
 *
 * Copyright (c) 2015 Beñat Espiña <benatespina@gmail.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace spec\BenatEspina\StackExchangeApiClient\Model;

use PhpSpec\ObjectBehavior;

/**
 * Class TagSynonymSpec.
 *
 * @author Beñat Espiña <benatespina@gmail.com>
 */
class TagSynonymSpec extends ObjectBehavior
{
    function it_is_initializable()
    {
        $this->shouldHaveType('BenatEspina\StackExchangeApiClient\Model\TagSynonym');
    }

    function it_implements_tag_score_interface()
    {
        $this->shouldImplement('BenatEspina\StackExchangeApiClient\Model\Interfaces\TagSynonymInterface');
    }

    function its_applied_count_is_mutable()
    {
        $this->setAppliedCount(34)->shouldReturn($this);
        $this->getAppliedCount()->shouldReturn(34);
    }

    function its_creation_date_is_mutable()
    {
        $creationDate = new \DateTime('@' . 1409845665);

        $this->setCreationDate($creationDate)->shouldReturn($this);
        $this->getCreationDate()->shouldReturn($creationDate);
    }

    function its_from_tag_is_mutable()
    {
        $this->setFromTag('from-tag')->shouldReturn($this);
        $this->getFromTag()->shouldReturn('from-tag');
    }

    function its_last_applied_date_is_mutable()
    {
        $lasAppliedDate = new \DateTime('@' . 1409845665);

        $this->setLastAppliedDate($lasAppliedDate)->shouldReturn($this);
        $this->getLastAppliedDate()->shouldReturn($lasAppliedDate);
    }

    function its_to_tag_is_mutable()
    {
        $this->setToTag('to-tag')->shouldReturn($this);
        $this->getToTag()->shouldReturn('to-tag');
    }
}
