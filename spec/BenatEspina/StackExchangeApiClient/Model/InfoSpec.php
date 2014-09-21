<?php

/**
 * This file is part of the StackExchangeApiClient library.
 *
 * @author  benatespina <benatespina@gmail.com>
 *
 * @license MIT
 */

namespace spec\BenatEspina\StackExchangeApiClient\Model;

use BenatEspina\StackExchangeApiClient\Model\Interfaces\SiteInterface;
use PhpSpec\ObjectBehavior;

/**
 * Class InfoSpec.
 *
 * @package spec\Benatespina\StackExchangeApiClient\Model
 */
class InfoSpec extends ObjectBehavior
{
    function it_is_initializable()
    {
        $this->shouldHaveType('BenatEspina\StackExchangeApiClient\Model\Info');
    }

    function it_implements_info_interface()
    {
        $this->shouldImplement('BenatEspina\StackExchangeApiClient\Model\Interfaces\InfoInterface');
    }

    function its_answer_per_minute_is_mutable()
    {
        $this->setAnswersPerMinute(6)->shouldReturn($this);
        $this->getAnswersPerMinute()->shouldReturn(6);
    }

    function its_api_revision_is_mutable()
    {
        $this->setApiRevision('api-revision')->shouldReturn($this);
        $this->getApiRevision()->shouldReturn('api-revision');
    }

    function its_badges_per_minute_is_mutable()
    {
        $this->setBadgesPerMinute(6)->shouldReturn($this);
        $this->getBadgesPerMinute()->shouldReturn(6);
    }

    function its_new_active_users_is_mutable()
    {
        $this->setNewActiveUsers(6)->shouldReturn($this);
        $this->getNewActiveUsers()->shouldReturn(6);
    }

    function its_questions_per_minute_is_mutable()
    {
        $this->setQuestionsPerMinute(6)->shouldReturn($this);
        $this->getQuestionsPerMinute()->shouldReturn(6);
    }

    function its_site_is_mutable(SiteInterface $site)
    {
        $this->setSite($site)->shouldReturn($this);
        $this->getSite()->shouldReturn($site);
    }
}
