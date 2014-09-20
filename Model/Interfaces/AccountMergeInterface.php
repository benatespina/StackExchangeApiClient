<?php

/**
 * This file is part of the StackExchangeApiClient library.
 *
 * @author  benatespina <benatespina@gmail.com>
 *
 * @license MIT
 */

namespace BenatEspina\StackExchangeApiClient\Model\Interfaces;

/**
 * Interface AccountMergeInterface.
 *
 * @package BenatEspina\StackExchangeApiClient\Model\Interfaces
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
