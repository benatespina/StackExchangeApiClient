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
 * Interface BountyInterface.
 *
 * @author Beñat Espiña <benatespina@gmail.com>
 */
interface BountyInterface
{
    /**
     * Sets body amount.
     *
     * @param int|null $bodyAmount The body amount
     *
     * @return $this self Object
     */
    public function setBodyAmount($bodyAmount);

    /**
     * Gets body amount.
     *
     * @return int|null
     */
    public function getBodyAmount();

    /**
     * Sets bounty closes date.
     *
     * @param \DateTime|null $bountyClosesDate The bounty closes date
     *
     * @return $this self Object
     */
    public function setBountyClosesDate(\DateTime $bountyClosesDate);

    /**
     * Gets bounty closes date.
     *
     * @return \DateTime|null
     */
    public function getBountyClosesDate();

    /**
     * Sets bounty user.
     *
     * @param \BenatEspina\StackExchangeApiClient\Model\Interfaces\ShallowUserInterface|null $bountyUser The bounty user
     *
     * @return $this self Object
     */
    public function setBountyUser(ShallowUserInterface $bountyUser);

    /**
     * Gets bounty user.
     *
     * @return \BenatEspina\StackExchangeApiClient\Model\Interfaces\ShallowUserInterface|null
     */
    public function getBountyUser();
}
