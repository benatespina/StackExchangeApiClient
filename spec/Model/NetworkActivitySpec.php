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
 * Class NetworkActivitySpec.
 *
 * @author Beñat Espiña <benatespina@gmail.com>
 */
class NetworkActivitySpec extends ObjectBehavior
{
    function it_is_initializable()
    {
        $this->shouldHaveType('BenatEspina\StackExchangeApiClient\Model\NetworkActivity');
    }

    function it_extends_base_2_abstract()
    {
        $this->shouldHaveType('BenatEspina\StackExchangeApiClient\Model\Abstracts\Base2Abstract');
    }

    function it_implements_network_activity_interface()
    {
        $this->shouldImplement('BenatEspina\StackExchangeApiClient\Model\Interfaces\NetworkActivityInterface');
    }

    function its_account_id_is_mutable()
    {
        $this->setAccountId(454654)->shouldReturn($this);
        $this->getAccountId()->shouldReturn(454654);
    }

    function its_is_not_a_valid_acitivty_type()
    {
        $this->setActivityType('question_posted')->shouldReturn($this);

        $this->setActivityType('invalid-activity-type')->shouldReturn($this);
        $this->getActivityType()->shouldReturn('question_posted');
    }

    function its_activity_type_is_mutable()
    {
        $this->setActivityType('question_posted')->shouldReturn($this);

        $this->setActivityType('answer_posted')->shouldReturn($this);
        $this->getActivityType()->shouldReturn('answer_posted');
    }

    function its_api_site_parameter_is_mutable()
    {
        $this->setApiSiteParameter('api-site-parameter')->shouldReturn($this);
        $this->getApiSiteParameter()->shouldReturn('api-site-parameter');
    }

    function its_badge_id_is_mutable()
    {
        $this->setBadgeId(534554)->shouldReturn($this);
        $this->getBadgeId()->shouldReturn(534554);
    }

    function its_description_is_mutable()
    {
        $this->setDescription('The description')->shouldReturn($this);
        $this->getDescription()->shouldReturn('The description');
    }

    function its_link_is_mutable()
    {
        $this->setLink('http://link.com')->shouldReturn($this);
        $this->getLink()->shouldReturn('http://link.com');
    }

    function its_post_id_is_mutable()
    {
        $this->setPostId(534554)->shouldReturn($this);
        $this->getPostId()->shouldReturn(534554);
    }

    function its_score_is_mutable()
    {
        $this->setScore(45)->shouldReturn($this);
        $this->getScore()->shouldReturn(45);
    }
}
