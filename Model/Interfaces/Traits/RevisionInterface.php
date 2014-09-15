<?php

/**
 * This file is part of the StackExchangeApiClient library.
 *
 * @author  benatespina <benatespina@gmail.com>
 *
 * @license MIT
 */

namespace BenatEspina\StackExchangeApiClient\Model\Interfaces\Traits;

/**
 * Interface RevisionInterface.
 *
 * @package BenatEspina\StackExchangeApiClient\Model\Interfaces\Traits
 */
interface RevisionInterface
{
    /**
     * Sets revision guid.
     *
     * @param string $revisionGuid The revision guid
     *
     * @return $this self Object
     */
    public function setRevisionGuid($revisionGuid);

    /**
     * Gets revision guid.
     *
     * @return string
     */
    public function getRevisionGuid();

    /**
     * Sets revision number.
     *
     * @param int|null $revisionNumber The revision number
     *
     * @return $this self Object
     */
    public function setRevisionNumber($revisionNumber);

    /**
     * Gets revision number.
     *
     * @return int|null
     */
    public function getRevisionNumber();

    /**
     * Sets revision type.
     *
     * @param string $revisionType The revision that can be 'single_user', or 'vote_based'
     *
     * @return $this self Object
     */
    public function setRevisionType($revisionType);

    /**
     * Gets revision type.
     *
     * @return string
     */
    public function getRevisionType();
}
