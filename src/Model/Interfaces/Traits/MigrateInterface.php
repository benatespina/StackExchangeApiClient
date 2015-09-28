<?php

/*
 * This file is part of the Stack Exchange Api Client library.
 *
 * Copyright (c) 2015 Beñat Espiña <benatespina@gmail.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace BenatEspina\StackExchangeApiClient\Model\Interfaces\Traits;

use BenatEspina\StackExchangeApiClient\Model\Interfaces\MigrationInfoInterface;

/**
 * Interface MigrateInterface.
 *
 * @author Beñat Espiña <benatespina@gmail.com>
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
