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
 * Interface WritePermissionInterface.
 *
 * @package BenatEspina\StackExchangeApiClient\Model\Interfaces
 */
interface WritePermissionInterface
{
    /**
     * Sets can add.
     *
     * @param boolean $canAdd The can add boolean
     *
     * @return $this self Object
     */
    public function setCanAdd($canAdd);

    /**
     * Gets can add.
     *
     * @return boolean
     */
    public function canAdd();

    /**
     * Sets can delete.
     *
     * @param boolean $canDelete The can delete boolean
     *
     * @return $this self Object
     */
    public function setCanDelete($canDelete);

    /**
     * Gets can delete.
     *
     * @return boolean
     */
    public function canDelete();

    /**
     * Sets can edit.
     *
     * @param boolean $canEdit The can edit boolean
     *
     * @return $this self Object
     */
    public function setCanEdit($canEdit);

    /**
     * Gets can edit.
     *
     * @return boolean
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
