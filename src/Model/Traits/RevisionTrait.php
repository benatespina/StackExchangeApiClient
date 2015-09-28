<?php

/*
 * This file is part of the Stack Exchange Api Client library.
 *
 * Copyright (c) 2015 Beñat Espiña <benatespina@gmail.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace BenatEspina\StackExchangeApiClient\Model\Traits;

use BenatEspina\StackExchangeApiClient\Util\Util;

/**
 * Trait RevisionTrait.
 *
 * @author Beñat Espiña <benatespina@gmail.com>
 */
trait RevisionTrait
{
    /**
     * Revision guid.
     *
     * @var string
     */
    protected $revisionGuid;

    /**
     * Revision number.
     *
     * @var int|null
     */
    protected $revisionNumber;

    /**
     * Revision type that can be 'single_user', or 'vote_based'.
     *
     * @var string
     */
    protected $revisionType;

    /**
     * Sets revision guid.
     *
     * @param string $revisionGuid The revision guid
     *
     * @return $this self Object
     */
    public function setRevisionGuid($revisionGuid)
    {
        $this->revisionGuid = $revisionGuid;

        return $this;
    }

    /**
     * Gets revision guid.
     *
     * @return string
     */
    public function getRevisionGuid()
    {
        return $this->revisionGuid;
    }

    /**
     * Sets revision number.
     *
     * @param int|null $revisionNumber The revision number
     *
     * @return $this self Object
     */
    public function setRevisionNumber($revisionNumber)
    {
        $this->revisionNumber = $revisionNumber;

        return $this;
    }

    /**
     * Gets revision number.
     *
     * @return int|null
     */
    public function getRevisionNumber()
    {
        return $this->revisionNumber;
    }

    /**
     * Sets revision type.
     *
     * @param string $revisionType The revision that can be 'single_user', or 'vote_based'
     *
     * @return $this self Object
     */
    public function setRevisionType($revisionType)
    {
        if (Util::coincidesElement($revisionType, ['single_user', 'vote_based']) === true) {
            $this->revisionType = $revisionType;
        }

        return $this;
    }

    /**
     * Gets revision type.
     *
     * @return string
     */
    public function getRevisionType()
    {
        return $this->revisionType;
    }

    /**
     * Loads the variables if the data exist into resource. It works like a constructor.
     *
     * @param null|mixed[] $resource  The resource
     * @param string[]     $constants The array of constants
     */
    protected function loadRevision($resource, $constants)
    {
        $this->revisionGuid = Util::setIfStringExists($resource, 'revision_guid');
        $this->revisionNumber = Util::setIfIntegerExists($resource, 'revision_number');
        $this->revisionType = Util::isEqual($resource, 'revision_type', $constants);
    }
}
