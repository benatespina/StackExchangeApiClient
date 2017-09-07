<?php

/*
 * This file is part of the Stack Exchange Api Client library.
 *
 * (c) Beñat Espiña <benatespina@gmail.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

declare(strict_types=1);
/*
 * This file is part of the Stack Exchange Api Client library.
 *
 * (c) Beñat Espiña <benatespina@gmail.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace BenatEspina\StackExchangeApiClient\Model;

/**
 * The account merge model class.
 *
 * @author Beñat Espiña <benatespina@gmail.com>
 */
class AccountMerge implements Model
{
    protected $mergeDate;
    protected $newAccountId;
    protected $oldAccountId;

    public static function fromProperties(\DateTimeInterface $mergeDate, $newAccountId, $oldAccountId)
    {
        $instance = new self();
        $instance
            ->setMergeDate($mergeDate)
            ->setNewAccountId($newAccountId)
            ->setOldAccountId($oldAccountId);

        return $instance;
    }

    public static function fromJson(array $data)
    {
        $instance = new self();
        $instance
            ->setMergeDate(
                array_key_exists('merge_date', $data)
                    ? new \DateTimeImmutable('@' . $data['merge_date'])
                    : null
            )
            ->setNewAccountId(array_key_exists('new_account_id', $data) ? $data['new_account_id'] : null)
            ->setOldAccountId(array_key_exists('old_account_id', $data) ? $data['old_account_id'] : null);

        return $instance;
    }

    public function setMergeDate(\DateTimeInterface $mergeDate = null)
    {
        $this->mergeDate = $mergeDate;

        return $this;
    }

    public function getMergeDate()
    {
        return $this->mergeDate;
    }

    public function setNewAccountId($newAccountId)
    {
        $this->newAccountId = $newAccountId;

        return $this;
    }

    public function getNewAccountId()
    {
        return $this->newAccountId;
    }

    public function setOldAccountId($oldAccountId)
    {
        $this->oldAccountId = $oldAccountId;

        return $this;
    }

    public function getOldAccountId()
    {
        return $this->oldAccountId;
    }
}
