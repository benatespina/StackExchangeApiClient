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
 * Class UserSpec.
 *
 * @author Beñat Espiña <benatespina@gmail.com>
 */
class UserSpec extends ObjectBehavior
{
    function it_is_initializable()
    {
        $this->shouldHaveType('BenatEspina\StackExchangeApiClient\Model\User');
    }

    function it_extends_shallow_user()
    {
        $this->shouldHaveType('BenatEspina\StackExchangeApiClient\Model\ShallowUser');
    }

    function it_implements_user_interface()
    {
        $this->shouldImplement('BenatEspina\StackExchangeApiClient\Model\Interfaces\UserInterface');
    }

    function its_about_me_is_mutable()
    {
        $this->setAboutMe('About me text')->shouldReturn($this);
        $this->getAboutMe()->shouldReturn('About me text');
    }

    function its_account_id_is_mutable()
    {
        $this->setAccountId(436456)->shouldReturn($this);
        $this->getAccountId()->shouldReturn(436456);
    }

    function its_age_is_mutable()
    {
        $this->setAge(24)->shouldReturn($this);
        $this->getAge()->shouldReturn(24);
    }

    function its_answer_count_is_mutable()
    {
        $this->setAnswerCount(6)->shouldReturn($this);
        $this->getAnswerCount()->shouldReturn(6);
    }

    function its_creation_date_is_mutable()
    {
        $creationDate = new \DateTime('@' . 1409845665);

        $this->setCreationDate($creationDate)->shouldReturn($this);
        $this->getCreationDate()->shouldReturn($creationDate);
    }

    function its_is_employee_is_mutable()
    {
        $this->setEmployee(true)->shouldReturn($this);
        $this->isEmployee()->shouldReturn(true);
    }

    function its_last_access_date_is_mutable()
    {
        $lastAccessDate = new \DateTime('@' . 1409845665);

        $this->setLastAccessDate($lastAccessDate)->shouldReturn($this);
        $this->getLastAccessDate()->shouldReturn($lastAccessDate);
    }

    function its_last_modified_date_is_mutable()
    {
        $lastModifiedDate = new \DateTime('@' . 1409845665);

        $this->setLastModifiedDate($lastModifiedDate)->shouldReturn($this);
        $this->getLastModifiedDate()->shouldReturn($lastModifiedDate);
    }

    function its_location_is_mutable()
    {
        $this->setLocation('Santurtzi, Basque Country')->shouldReturn($this);
        $this->getLocation()->shouldReturn('Santurtzi, Basque Country');
    }

    function its_question_count_is_mutable()
    {
        $this->setQuestionCount(6)->shouldReturn($this);
        $this->getQuestionCount()->shouldReturn(6);
    }

    function its_timed_penalty_date_is_mutable()
    {
        $timedPenaltyDate = new \DateTime('@' . 1409845665);

        $this->setTimedPenaltyDate($timedPenaltyDate)->shouldReturn($this);
        $this->getTimedPenaltyDate()->shouldReturn($timedPenaltyDate);
    }

    function its_view_count_is_mutable()
    {
        $this->setViewCount(6)->shouldReturn($this);
        $this->getViewCount()->shouldReturn(6);
    }

    function its_website_url_is_mutable()
    {
        $this->setWebsiteUrl('http://website-url.com')->shouldReturn($this);
        $this->getWebsiteUrl()->shouldReturn('http://website-url.com');
    }
}
