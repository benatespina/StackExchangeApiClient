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
 * Class MigrationInfoSpec.
 *
 * @package spec\Benatespina\StackExchangeApiClient\Model
 */
class MigrationInfoSpec extends ObjectBehavior
{
    function it_is_initializable()
    {
        $this->shouldHaveType('BenatEspina\StackExchangeApiClient\Model\MigrationInfo');
    }

    function it_implements_migration_info_interface()
    {
        $this->shouldImplement('BenatEspina\StackExchangeApiClient\Model\Interfaces\MigrationInfoInterface');
    }

    function its_on_date_is_mutable()
    {
        $onDate = new \DateTime("@" . 1409845665);

        $this->setOnDate($onDate)->shouldReturn($this);
        $this->getOnDate()->shouldReturn($onDate);
    }

    function its_other_site_is_mutable(SiteInterface $otherSite)
    {
        $this->setOtherSite($otherSite)->shouldReturn($this);
        $this->getOtherSite()->shouldReturn($otherSite);
    }

    function its_question_id_is_mutable()
    {
        $this->setQuestionId(453645)->shouldReturn($this);
        $this->getQuestionId()->shouldReturn(453645);
    }
}
