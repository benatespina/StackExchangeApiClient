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
 * Class TagSpec.
 *
 * @author Beñat Espiña <benatespina@gmail.com>
 */
class TagSpec extends ObjectBehavior
{
    function it_is_initializable()
    {
        $this->shouldHaveType('BenatEspina\StackExchangeApiClient\Model\Tag');
    }

    function it_implements_tag_interface()
    {
        $this->shouldImplement('BenatEspina\StackExchangeApiClient\Model\Interfaces\TagInterface');
    }

    function its_count_is_mutable()
    {
        $this->setCount(6)->shouldReturn($this);
        $this->getCount()->shouldReturn(6);
    }

    function its_has_synonyms_is_mutable()
    {
        $this->setSynonyms(true)->shouldReturn($this);
        $this->hasSynonyms()->shouldReturn(true);
    }

    function its_moderator_only_is_mutable()
    {
        $this->setModeratorOnly(true)->shouldReturn($this);
        $this->isModeratorOnly()->shouldReturn(true);
    }

    function its_required_is_mutable()
    {
        $this->setRequired(true)->shouldReturn($this);
        $this->isRequired()->shouldReturn(true);
    }

    function its_last_activity_date_is_mutable()
    {
        $lastActivityDate = new \DateTime('@' . 1409845665);

        $this->setLastActivityDate($lastActivityDate)->shouldReturn($this);
        $this->getLastActivityDate()->shouldReturn($lastActivityDate);
    }

    function its_name_is_mutable()
    {
        $this->setName('The name')->shouldReturn($this);
        $this->getName()->shouldReturn('The name');
    }

    function its_synonyms_is_mutable()
    {
        $this->getSynonyms()->shouldHaveCount(0);

        $this->addSynonym('synonym');

        $this->getSynonyms()->shouldHaveCount(1);

        $this->removeSynonym('synonym');

        $this->getSynonyms()->shouldHaveCount(0);
    }

    function its_user_id_is_mutable()
    {
        $this->setUserId(434566)->shouldReturn($this);
        $this->getUserId()->shouldReturn(434566);
    }
}
