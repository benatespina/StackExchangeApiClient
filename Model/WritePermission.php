<?php

/**
 * This file is part of the StackExchangeApiClient library.
 *
 * @author  benatespina <benatespina@gmail.com>
 *
 * @license MIT
 */

namespace BenatEspina\StackExchangeApiClient\Model;

use BenatEspina\StackExchangeApiClient\Model\Abstracts\BaseAbstract as BaseWritePermission;
use BenatEspina\StackExchangeApiClient\Model\Interfaces\WritePermissionInterface;
use BenatEspina\StackExchangeApiClient\Util\Util;

/**
 * Class WritePermission.
 *
 * @package BenatEspina\StackExchangeApiClient\Model
 */
class WritePermission extends BaseWritePermission implements WritePermissionInterface
{
    /**
     * Boolean that shows if cans add or not.
     *
     * @var boolean
     */
    protected $canAdd;

    /**
     * Boolean that shows if cans delete or not.
     *
     * @var boolean
     */
    protected $canDelete;

    /**
     * Boolean that shows if cans edit or not.
     *
     * @var boolean
     */
    protected $canEdit;

    /**
     * Max daily actions.
     *
     * @var int
     */
    protected $maxDailyActions;

    /**
     * Min seconds between actions.
     *
     * @var int
     */
    protected $minSecondsBetweenActions;

    /**
     * Object type.
     *
     * @var string
     */
    protected $objectType;

    /**
     * Constructor.
     *
     * @param null|(int|string)[] $json The json string being decoded
     */
    public function __construct($json = null)
    {
        $this->id = Util::setIfExists($json, 'user_id');

        $this->canAdd = Util::setIfExists($json, 'can_add');
        $this->canDelete = Util::setIfExists($json, 'can_delete');
        $this->canEdit = Util::setIfExists($json, 'can_edit');
        $this->maxDailyActions = Util::setIfExists($json, 'max_daily_actions');
        $this->minSecondsBetweenActions = Util::setIfExists($json, 'min_seconds_between_actions');
        $this->objectType = Util::setIfExists($json, 'object_type');
    }

    /**
     * {@inheritdoc}
     */
    public function setCanAdd($canAdd)
    {
        $this->canAdd = $canAdd;

        return $this;
    }

    /**
     * {@inheritdoc}
     */
    public function canAdd()
    {
        return $this->canAdd;
    }

    /**
     * {@inheritdoc}
     */
    public function setCanDelete($canDelete)
    {
        $this->canDelete = $canDelete;

        return $this;
    }

    /**
     * {@inheritdoc}
     */
    public function canDelete()
    {
        return $this->canDelete;
    }

    /**
     * {@inheritdoc}
     */
    public function setCanEdit($canEdit)
    {
        $this->canEdit = $canEdit;

        return $this;
    }

    /**
     * {@inheritdoc}
     */
    public function canEdit()
    {
        return $this->canEdit;
    }

    /**
     * {@inheritdoc}
     */
    public function setMaxDailyActions($maxDailyActions)
    {
        $this->maxDailyActions = $maxDailyActions;

        return $this;
    }

    /**
     * {@inheritdoc}
     */
    public function getMaxDailyActions()
    {
        return $this->maxDailyActions;
    }

    /**
     * {@inheritdoc}
     */
    public function setMinSecondsBetweenActions($minSecondsBetweenActions)
    {
        $this->minSecondsBetweenActions = $minSecondsBetweenActions;

        return $this;
    }

    /**
     * {@inheritdoc}
     */
    public function getMinSecondsBetweenActions()
    {
        return $this->minSecondsBetweenActions;
    }

    /**
     * {@inheritdoc}
     */
    public function setObjectType($objectType)
    {
        $this->objectType = $objectType;

        return $this;
    }

    /**
     * {@inheritdoc}
     */
    public function getObjectType()
    {
        return $this->objectType;
    }
}
