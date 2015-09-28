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

use BenatEspina\StackExchangeApiClient\Model\Interfaces\ShallowUserInterface;
use PhpSpec\ObjectBehavior;

/**
 * Class EditTraitSpec.
 *
 * @author Beñat Espiña <benatespina@gmail.com>
 */
class EditTraitSpec extends ObjectBehavior
{
    function let()
    {
        $this->beAnInstanceOf('BenatEspina\StackExchangeApiClient\Stubs\Traits\EditTraitStub');
    }

    function its_last_edit_date_is_mutable()
    {
        $lastEditDate = new \DateTime('@' . 1409845665);

        $this->setLastEditDate($lastEditDate)->shouldReturn($this);
        $this->getLastEditDate()->shouldReturn($lastEditDate);
    }

    function its_las_editor_is_mutable(ShallowUserInterface $lastEditor)
    {
        $this->setLastEditor($lastEditor)->shouldReturn($this);
        $this->getLastEditor()->shouldReturn($lastEditor);
    }
}
