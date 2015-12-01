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

use PhpSpec\ObjectBehavior;

/**
 * Class RevisionTraitSpec.
 *
 * @author Beñat Espiña <benatespina@gmail.com>
 */
class RevisionTraitSpec extends ObjectBehavior
{
    function let()
    {
        $this->beAnInstanceOf('BenatEspina\StackExchangeApiClient\Stubs\Traits\RevisionTraitStub');
    }

    function its_is_revision_guid_is_mutable()
    {
        $this->setRevisionGuid('revision-guid')->shouldReturn($this);
        $this->getRevisionGuid()->shouldReturn('revision-guid');
    }

    function its_is_revision_number_is_mutable()
    {
        $this->setRevisionNumber(6584930)->shouldReturn($this);
        $this->getRevisionNumber()->shouldReturn(6584930);
    }

    function its_is_not_a_valid_revision_type()
    {
        $this->setRevisionType('single_user')->shouldReturn($this);

        $this->setRevisionType('invalid_revision_type')->shouldReturn($this);
        $this->getRevisionType()->shouldReturn('single_user');
    }

    function its_is_revision_type_is_mutable()
    {
        $this->setRevisionType('single_user')->shouldReturn($this);

        $this->setRevisionType('vote_based')->shouldReturn($this);
        $this->getRevisionType()->shouldReturn('vote_based');
    }
}
