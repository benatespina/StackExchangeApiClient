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

use BenatEspina\StackExchangeApiClient\Model\Interfaces\ShallowUserInterface;
use PhpSpec\ObjectBehavior;

/**
 * Class SearchExcerptSpec.
 *
 * @author Beñat Espiña <benatespina@gmail.com>
 */
class SearchExcerptSpec extends ObjectBehavior
{
    function it_is_initializable()
    {
        $this->shouldHaveType('BenatEspina\StackExchangeApiClient\Model\SearchExcerpt');
    }

    function it_extends_base_2_abstract()
    {
        $this->shouldHaveType('BenatEspina\StackExchangeApiClient\Model\Abstracts\Base2Abstract');
    }

    function it_implements_search_excerpt_interface()
    {
        $this->shouldImplement('BenatEspina\StackExchangeApiClient\Model\Interfaces\SearchExcerptInterface');
    }

    function its_answer_count_is_mutable()
    {
        $this->setAnswerCount(5)->shouldReturn($this);
        $this->getAnswerCount()->shouldReturn(5);
    }

    function its_closed_date_is_mutable()
    {
        $closedDate = new \DateTime('@' . 1409845665);

        $this->setClosedDate($closedDate)->shouldReturn($this);
        $this->getClosedDate()->shouldReturn($closedDate);
    }

    function its_community_owned_date_is_mutable()
    {
        $communityOwnedDate = new \DateTime('@' . 1409845665);

        $this->setCommunityOwnedDate($communityOwnedDate)->shouldReturn($this);
        $this->getCommunityOwnedDate()->shouldReturn($communityOwnedDate);
    }

    function its_equivalent_tags_search_is_mutable()
    {
        $this->getEquivalentTagsSearch()->shouldHaveCount(0);

        $this->addEquivalentTagSearch('tag-search');

        $this->getEquivalentTagsSearch()->shouldHaveCount(1);

        $this->removeEquivalentTagSearch('tag-search');

        $this->getEquivalentTagsSearch()->shouldHaveCount(0);
    }

    function its_excerpt_is_mutable()
    {
        $this->setExcerpt('The excerpt')->shouldReturn($this);
        $this->getExcerpt()->shouldReturn('The excerpt');
    }

    function its_accepted_answer_is_mutable()
    {
        $this->setAcceptedAnswer(true)->shouldReturn($this);
        $this->hasAcceptedAnswer()->shouldReturn(true);
    }

    function its_accepted_is_mutable()
    {
        $this->setAccepted(true)->shouldReturn($this);
        $this->isAccepted()->shouldReturn(true);
    }

    function its_is_not_a_valid_item_type()
    {
        $this->setItemType('question')->shouldReturn($this);

        $this->setItemType('invalid-item-type')->shouldReturn($this);
        $this->getItemType()->shouldReturn('question');
    }

    function its_item_type_is_mutable()
    {
        $this->setItemType('question')->shouldReturn($this);

        $this->setItemType('answer')->shouldReturn($this);
        $this->getItemType()->shouldReturn('answer');
    }

    function its_last_activity_date_is_mutable()
    {
        $lastActivityDate = new \DateTime('@' . 1409845665);

        $this->setLastActivityDate($lastActivityDate)->shouldReturn($this);
        $this->getLastActivityDate()->shouldReturn($lastActivityDate);
    }

    function its_last_activity_user_is_mutable(ShallowUserInterface $lastActivityUser)
    {
        $this->setLastActivityUser($lastActivityUser)->shouldReturn($this);
        $this->getLastActivityUser()->shouldReturn($lastActivityUser);
    }

    function its_locked_date_is_mutable()
    {
        $lockedDate = new \DateTime('@' . 1409845665);

        $this->setLockedDate($lockedDate)->shouldReturn($this);
        $this->getLockedDate()->shouldReturn($lockedDate);
    }

    function its_owner_is_mutable(ShallowUserInterface $owner)
    {
        $this->setOwner($owner)->shouldReturn($this);
        $this->getOwner()->shouldReturn($owner);
    }

    function its_question_score_is_mutable()
    {
        $this->setQuestionScore(50)->shouldReturn($this);
        $this->getQuestionScore()->shouldReturn(50);
    }

    function its_score_is_mutable()
    {
        $this->setScore(150)->shouldReturn($this);
        $this->getScore()->shouldReturn(150);
    }
}
