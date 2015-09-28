<?php

/*
 * This file is part of the Stack Exchange Api Client library.
 *
 * Copyright (c) 2015 Beñat Espiña <benatespina@gmail.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace BenatEspina\StackExchangeApiClient\Model\Interfaces;

/**
 * Interface AccountMergeInterface.
 *
 * @author Beñat Espiña <benatespina@gmail.com>
 */
interface AccountMergeInterface
{
    /**
     * Sets merge date.
     *
     * @param \DateTime $mergeDate The merge date
     *
     * @return $this self Object
     */
    public function setMergeDate(\DateTime $mergeDate);

    /**
     * Gets merge date.
     *
     * @return \DateTime
     */
    public function getMergeDate();

    /**
     * Sets new account id.
     *
     * @param int $newAccountId The new account id
     *
     * @return $this self Object
     */
    public function setNewAccountId($newAccountId);

    /**
     * Gets new account id.
     *
     * @return int
     */
    public function getNewAccountId();

    /**
     * Sets old account id.
     *
     * @param int $oldAccountId The old account id
     *
     * @return $this self Object
     */
    public function setOldAccountId($oldAccountId);

    /**
     * Gets old account id.
     *
     * @return int
     */
    public function getOldAccountId();
}
