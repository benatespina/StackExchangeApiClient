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

use BenatEspina\StackExchangeApiClient\Model\Interfaces\MigrationInfoInterface;
use PhpSpec\ObjectBehavior;

/**
 * Class MigrateTraitSpec.
 *
 * @author Beñat Espiña <benatespina@gmail.com>
 */
class MigrateTraitSpec extends ObjectBehavior
{
    function let()
    {
        $this->beAnInstanceOf('BenatEspina\StackExchangeApiClient\Stubs\Traits\MigrateTraitStub');
    }

    function its_migrated_from_is_mutable(MigrationInfoInterface $migrationInfo)
    {
        $this->setMigratedFrom($migrationInfo)->shouldReturn($this);
        $this->getMigratedFrom()->shouldReturn($migrationInfo);
    }

    function its_migrated_to_is_mutable(MigrationInfoInterface $migrationInfo)
    {
        $this->setMigratedTo($migrationInfo)->shouldReturn($this);
        $this->getMigratedTo()->shouldReturn($migrationInfo);
    }
}
