<?php

/**
 * This file is part of the StackExchangeApiClient library.
 *
 * @author  benatespina <benatespina@gmail.com>
 *
 * @license MIT
 */

namespace spec\BenatEspina\StackExchangeApiClient\Model\Traits;

use BenatEspina\StackExchangeApiClient\Model\Interfaces\MigrationInfoInterface;
use PhpSpec\ObjectBehavior;

/**
 * Class MigrateTraitSpec.
 *
 * @package spec\Benatespina\StackExchangeApiClient\Model\Traits
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
