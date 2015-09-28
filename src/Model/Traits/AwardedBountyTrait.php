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

use BenatEspina\StackExchangeApiClient\Model\Interfaces\ShallowUserInterface;
use BenatEspina\StackExchangeApiClient\Model\ShallowUser;
use BenatEspina\StackExchangeApiClient\Util\Util;

/**
 * Trait AwardedBountyTrait.
 *
 * @author Beñat Espiña <benatespina@gmail.com>
 */
trait AwardedBountyTrait
{
    /**
     * The awarded bounty amount.
     *
     * @var int|null
     */
    protected $awardedBountyAmount;

    /**
     * The awarded bounty users.
     *
     * @var array<\BenatEspina\StackExchangeApiClient\Model\Interfaces\ShallowUserInterface>|null
     */
    protected $awardedBountyUsers = [];

    /**
     * Sets awarded bounty amount.
     *
     * @param int|null $awardedBountyAmount The awarded bounty amount
     *
     * @return $this self Object
     */
    public function setAwardedBountyAmount($awardedBountyAmount)
    {
        $this->awardedBountyAmount = $awardedBountyAmount;

        return $this;
    }

    /**
     * Gets awarded bounty amount.
     *
     * @return int|null
     */
    public function getAwardedBountyAmount()
    {
        return $this->awardedBountyAmount;
    }

    /**
     * Adds awarded bounty user.
     *
     * @param \BenatEspina\StackExchangeApiClient\Model\Interfaces\ShallowUserInterface $awardedBountyUser The awarded
     *                                                                                                     bounty user
     *
     * @return $this self Object
     */
    public function addAwardedBountyUser(ShallowUserInterface $awardedBountyUser)
    {
        $this->awardedBountyUsers[] = $awardedBountyUser;

        return $this;
    }

    /**
     * Removes awarded bounty user.
     *
     * @param \BenatEspina\StackExchangeApiClient\Model\Interfaces\ShallowUserInterface $awardedBountyUser The awarded
     *                                                                                                     bounty user
     *
     * @return $this self Object
     */
    public function removeAwardedBountyUser(ShallowUserInterface $awardedBountyUser)
    {
        $this->awardedBountyUsers = Util::removeElement($awardedBountyUser, $this->awardedBountyUsers);

        return $this;
    }

    /**
     * Gets array of awarded bounty users.
     *
     * @return array<\BenatEspina\StackExchangeApiClient\Model\Interfaces\ShallowUserInterface>|null
     */
    public function getAwardedBountyUsers()
    {
        return $this->awardedBountyUsers;
    }

    /**
     * Loads the variables if the data exist into resource. It works like a constructor.
     *
     * @param null|mixed[] $resource The resource
     */
    protected function loadAwardedBounty($resource)
    {
        $this->awardedBountyAmount = Util::setIfIntegerExists($resource, 'awarded_bounty_amount');
        $awardedBountyUsers = Util::setIfArrayExists($resource, 'awarded_bounty_users');
        foreach ($awardedBountyUsers as $awardedBountyUser) {
            $this->awardedBountyUsers[] = new ShallowUser($awardedBountyUser);
        }
    }
}
