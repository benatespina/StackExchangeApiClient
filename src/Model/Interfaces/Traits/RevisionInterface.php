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

/**
 * Interface RevisionInterface.
 *
 * @author Beñat Espiña <benatespina@gmail.com>
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
