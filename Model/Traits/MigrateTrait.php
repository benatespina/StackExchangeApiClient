<?php

/**
 * This file is part of the StackExchangeApiClient library.
 *
 * @author  benatespina <benatespina@gmail.com>
 *
 * @license MIT
 */

namespace BenatEspina\StackExchangeApiClient\Model\Traits;

use BenatEspina\StackExchangeApiClient\Model\Interfaces\MigrationInfoInterface;
use BenatEspina\StackExchangeApiClient\Model\MigrationInfo;
use BenatEspina\StackExchangeApiClient\Util\Util;

/**
 * Trait MigrateTrait.
 *
 * @package BenatEspina\StackExchangeApiClient\Model\Traits
 */
trait MigrateTrait
{
    /**
     * Migrated from.
     *
     * @var \BenatEspina\StackExchangeApiClient\Model\Interfaces\MigrationInfoInterface|null
     */
    protected $migratedFrom;

    /**
     * Migrated to.
     *
     * @var \BenatEspina\StackExchangeApiClient\Model\Interfaces\MigrationInfoInterface|null
     */
    protected $migratedTo;

    /**
     * Sets migrated from.
     *
     * @param \BenatEspina\StackExchangeApiClient\Model\Interfaces\MigrationInfoInterface|null $migratedFrom The
     *                                                                                                       migration
     *                                                                                                       info
     *
     * @return $this self Object
     */
    public function setMigratedFrom(MigrationInfoInterface $migratedFrom)
    {
        $this->migratedFrom = $migratedFrom;

        return $this;
    }

    /**
     * Gets migrated from.
     *
     * @return \BenatEspina\StackExchangeApiClient\Model\Interfaces\MigrationInfoInterface|null
     */
    public function getMigratedFrom()
    {
        return $this->migratedFrom;
    }

    /**
     * Sets migrated to.
     *
     * @param \BenatEspina\StackExchangeApiClient\Model\Interfaces\MigrationInfoInterface|null $migratedTo The
     *                                                                                                     migration
     *                                                                                                     info
     *
     * @return $this self Object
     */
    public function setMigratedTo(MigrationInfoInterface $migratedTo)
    {
        $this->migratedTo = $migratedTo;

        return $this;
    }

    /**
     * Gets migrated to.
     *
     * @return \BenatEspina\StackExchangeApiClient\Model\Interfaces\MigrationInfoInterface|null
     */
    public function getMigratedTo()
    {
        return $this->migratedTo;
    }

    /**
     * Loads the variables if the data exist into resource. It works like a constructor.
     *
     * @param null|(int|string)[] $resource The resource
     *
     * @return void
     */
    protected function loadMigration($resource)
    {
        $this->migratedFrom = new MigrationInfo(Util::setIfExists($resource, 'migrated_from'));
        $this->migratedTo = new MigrationInfo(Util::setIfExists($resource, 'migrated_to'));
    }
}
