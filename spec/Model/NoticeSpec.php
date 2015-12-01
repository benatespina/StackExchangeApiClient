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
 * Class NoticeSpec.
 *
 * @author Beñat Espiña <benatespina@gmail.com>
 */
class NoticeSpec extends ObjectBehavior
{
    function it_is_initializable()
    {
        $this->shouldHaveType('BenatEspina\StackExchangeApiClient\Model\Notice');
    }

    function it_implements_notice_interface()
    {
        $this->shouldImplement('BenatEspina\StackExchangeApiClient\Model\Interfaces\NoticeInterface');
    }

    function its_body_is_mutable()
    {
        $this->setBody('The body')->shouldReturn($this);
        $this->getBody()->shouldReturn('The body');
    }

    function its_creation_date_is_mutable()
    {
        $creationDate = new \DateTime('@' . 1409845665);

        $this->setCreationDate($creationDate)->shouldReturn($this);
        $this->getCreationDate()->shouldReturn($creationDate);
    }

    function its_owner_user_id_is_mutable()
    {
        $this->setOwnerUserId(436456)->shouldReturn($this);
        $this->getOwnerUserId()->shouldReturn(436456);
    }
}
