<?php

/**
 * This file is part of the StackExchangeApiClient library.
 *
 * @author  benatespina <benatespina@gmail.com>
 *
 * @license MIT
 */

namespace BenatEspina\StackExchangeApiClient\Model;

use BenatEspina\StackExchangeApiClient\Model\Interfaces\AccountMergeInterface;
use BenatEspina\StackExchangeApiClient\Util\Util;

/**
 * Class AccountMerge.
 *
 * @package BenatEspina\StackExchangeApiClient\Model
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
     * @param null|(int|string)[] $json The json string being decoded
     */
    public function __construct($json = null)
    {
        $this->mergeDate = Util::setIfDateTimeExists($json, 'merge_date');
        $this->newAccountId = Util::setIfExists($json, 'new_account_id');
        $this->oldAccountId = Util::setIfExists($json, 'old_account_id');
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
