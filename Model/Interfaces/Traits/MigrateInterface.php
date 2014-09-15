<?php

/**
 * This file is part of the StackExchangeApiClient library.
 *
 * @author  benatespina <benatespina@gmail.com>
 *
 * @license MIT
 */

namespace BenatEspina\StackExchangeApiClient\Model\Interfaces\Traits;

use BenatEspina\StackExchangeApiClient\Model\Interfaces\MigrationInfoInterface;

/**
 * Interface MigrateInterface.
 *
 * @package BenatEspina\StackExchangeApiClient\Model\Interfaces\Traits
 */
interface MigrateInterface
{
    /**
     * Sets migrated from.
     *
     * @param \BenatEspina\StackExchangeApiClient\Model\Interfaces\MigrationInfoInterface|null $migrationInfo The
     *                                                                                                        migration
     *                                                                                                        info
     *
     * @return $this self Object
     */
    public function setMigratedFrom(MigrationInfoInterface $migrationInfo);

    /**
     * Gets migrated from.
     *
     * @return \BenatEspina\StackExchangeApiClient\Model\Interfaces\MigrationInfoInterface|null
     */
    public function getMigratedFrom();

    /**
     * Sets migrated to.
     *
     * @param \BenatEspina\StackExchangeApiClient\Model\Interfaces\MigrationInfoInterface|null $migrationInfo The
     *                                                                                                        migration
     *                                                                                                        info
     *
     * @return $this self Object
     */
    public function setMigratedTo(MigrationInfoInterface $migrationInfo);

    /**
     * Gets migrated to.
     *
     * @return \BenatEspina\StackExchangeApiClient\Model\Interfaces\MigrationInfoInterface|null
     */
    public function getMigratedTo();
}
