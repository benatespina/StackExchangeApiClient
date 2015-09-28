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

use BenatEspina\StackExchangeApiClient\Model\Interfaces\AccountMergeInterface;
use BenatEspina\StackExchangeApiClient\Util\Util;

/**
 * Class AccountMerge.
 *
 * @author Beñat Espiña <benatespina@gmail.com>
 */
class AccountMerge implements AccountMergeInterface
{
    /**
     * Merge date.
     *
     * @var \DateTime
     */
    protected $mergeDate;

    /**
     * New account id.
     *
     * @var int
     */
    protected $newAccountId;

    /**
     * Old account id.
     *
     * @var int
     */
    protected $oldAccountId;

    /**
     * Constructor.
     *
     * @param null|mixed[] $json The json string being decoded
     */
    public function __construct($json = null)
    {
        $this->mergeDate = Util::setIfDateTimeExists($json, 'merge_date');
        $this->newAccountId = Util::setIfIntegerExists($json, 'new_account_id');
        $this->oldAccountId = Util::setIfIntegerExists($json, 'old_account_id');
    }

    /**
     * {@inheritdoc}
     */
    public function setMergeDate(\DateTime $mergeDate)
    {
        $this->mergeDate = $mergeDate;

        return $this;
    }

    /**
     * {@inheritdoc}
     */
    public function getMergeDate()
    {
        return $this->mergeDate;
    }

    /**
     * {@inheritdoc}
     */
    public function setNewAccountId($newAccountId)
    {
        $this->newAccountId = $newAccountId;

        return $this;
    }

    /**
     * {@inheritdoc}
     */
    public function getNewAccountId()
    {
        return $this->newAccountId;
    }

    /**
     * {@inheritdoc}
     */
    public function setOldAccountId($oldAccountId)
    {
        $this->oldAccountId = $oldAccountId;

        return $this;
    }

    /**
     * {@inheritdoc}
     */
    public function getOldAccountId()
    {
        return $this->oldAccountId;
    }
}
