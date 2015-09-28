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

use BenatEspina\StackExchangeApiClient\Model\Interfaces\ShallowUserInterface;

/**
 * Interface AwardedBountyInterface.
 *
 * @author Beñat Espiña <benatespina@gmail.com>
 */
interface AwardedBountyInterface
{
    /**
     * Sets awarded bounty amount.
     *
     * @param int|null $awardedBountyAmount The awarded bounty amount
     *
     * @return $this self Object
     */
    public function setAwardedBountyAmount($awardedBountyAmount);

    /**
     * Gets awarded bounty amount.
     *
     * @return int|null
     */
    public function getAwardedBountyAmount();

    /**
     * Adds awarded bounty user.
     *
     * @param \BenatEspina\StackExchangeApiClient\Model\Interfaces\ShallowUserInterface $awardedBountyUser The awarded
     *                                                                                                     bounty user
     *
     * @return $this self Object
     */
    public function addAwardedBountyUser(ShallowUserInterface $awardedBountyUser);

    /**
     * Removes awarded bounty user.
     *
     * @param \BenatEspina\StackExchangeApiClient\Model\Interfaces\ShallowUserInterface $awardedBountyUser The awarded
     *                                                                                                     bounty user
     *
     * @return $this self Object
     */
    public function removeAwardedBountyUser(ShallowUserInterface $awardedBountyUser);

    /**
     * Gets array of awarded bounty users.
     *
     * @return array<\BenatEspina\StackExchangeApiClient\Model\Interfaces\ShallowUserInterface>|null
     */
    public function getAwardedBountyUsers();
}
