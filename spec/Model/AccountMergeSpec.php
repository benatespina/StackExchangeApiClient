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
 * Class AccountMergeSpec.
 *
 * @author Beñat Espiña <benatespina@gmail.com>
 */
class AccountMergeSpec extends ObjectBehavior
{
    function it_is_initializable()
    {
        $this->shouldHaveType('BenatEspina\StackExchangeApiClient\Model\AccountMerge');
    }

    function it_implements_account_merge_interface()
    {
        $this->shouldImplement('BenatEspina\StackExchangeApiClient\Model\Interfaces\AccountMergeInterface');
    }

    function its_merge_date_is_mutable()
    {
        $mergeDate = new \DateTime('@' . 1409845665);

        $this->setMergeDate($mergeDate)->shouldReturn($this);
        $this->getMergeDate()->shouldReturn($mergeDate);
    }

    function its_new_account_id_is_mutable()
    {
        $this->setNewAccountId('new-account-id')->shouldReturn($this);
        $this->getNewAccountId()->shouldReturn('new-account-id');
    }

    function its_old_account_id_is_mutable()
    {
        $this->setOldAccountId('old-account-id')->shouldReturn($this);
        $this->getOldAccountId()->shouldReturn('old-account-id');
    }
}
