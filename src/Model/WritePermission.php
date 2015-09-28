<?php

/*
 * This file is part of the Stack Exchange Api Client library.
 *
 * Copyright (c) 2015 Beñat Espiña <benatespina@gmail.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace BenatEspina\StackExchangeApiClient\Model;

use BenatEspina\StackExchangeApiClient\Model\Abstracts\BaseAbstract as BaseWritePermission;
use BenatEspina\StackExchangeApiClient\Model\Interfaces\WritePermissionInterface;
use BenatEspina\StackExchangeApiClient\Util\Util;

/**
 * Class WritePermission.
 *
 * @author Beñat Espiña <benatespina@gmail.com>
 */
class WritePermission extends BaseWritePermission implements WritePermissionInterface
{
    /**
     * Boolean that shows if cans add or not.
     *
     * @var bool
     */
    protected $canAdd;

    /**
     * Boolean that shows if cans delete or not.
     *
     * @var bool
     */
    protected $canDelete;

    /**
     * Boolean that shows if cans edit or not.
     *
     * @var bool
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
     * @param null|mixed[] $json The json string being decoded
     */
    public function __construct($json = null)
    {
        $this->id = Util::setIfIntegerExists($json, 'user_id');

        $this->canAdd = Util::setIfBoolExists($json, 'can_add');
        $this->canDelete = Util::setIfBoolExists($json, 'can_delete');
        $this->canEdit = Util::setIfBoolExists($json, 'can_edit');
        $this->maxDailyActions = Util::setIfIntegerExists($json, 'max_daily_actions');
        $this->minSecondsBetweenActions = Util::setIfIntegerExists($json, 'min_seconds_between_actions');
        $this->objectType = Util::setIfStringExists($json, 'object_type');
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
