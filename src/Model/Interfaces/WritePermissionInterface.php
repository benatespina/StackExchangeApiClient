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
 * Interface WritePermissionInterface.
 *
 * @author Beñat Espiña <benatespina@gmail.com>
 */
interface WritePermissionInterface
{
    /**
     * Sets can add.
     *
     * @param bool $canAdd The can add boolean
     *
     * @return $this self Object
     */
    public function setCanAdd($canAdd);

    /**
     * Gets can add.
     *
     * @return bool
     */
    public function canAdd();

    /**
     * Sets can delete.
     *
     * @param bool $canDelete The can delete boolean
     *
     * @return $this self Object
     */
    public function setCanDelete($canDelete);

    /**
     * Gets can delete.
     *
     * @return bool
     */
    public function canDelete();

    /**
     * Sets can edit.
     *
     * @param bool $canEdit The can edit boolean
     *
     * @return $this self Object
     */
    public function setCanEdit($canEdit);

    /**
     * Gets can edit.
     *
     * @return bool
     */
    public function canEdit();

    /**
     * Sets max daily actions.
     *
     * @param int $maxDailyActions The max daily actions
     *
     * @return $this self Object
     */
    public function setMaxDailyActions($maxDailyActions);

    /**
     * Gets max daily actions.
     *
     * @return int
     */
    public function getMaxDailyActions();

    /**
     * Sets min seconds between actions.
     *
     * @param int $minSecondsBetweenActions The min seconds between actions
     *
     * @return $this self Object
     */
    public function setMinSecondsBetweenActions($minSecondsBetweenActions);

    /**
     * Gets min seconds between actions.
     *
     * @return int
     */
    public function getMinSecondsBetweenActions();

    /**
     * Sets object type.
     *
     * @param string $objectType The object type
     *
     * @return $this self Object
     */
    public function setObjectType($objectType);

    /**
     * Gets object type.
     *
     * @return string
     */
    public function getObjectType();
}
