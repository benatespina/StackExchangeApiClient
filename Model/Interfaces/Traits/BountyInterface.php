<?php

/**
 * This file is part of the StackExchangeApiClient library.
 *
 * @author  benatespina <benatespina@gmail.com>
 *
 * @license MIT
 */

namespace BenatEspina\StackExchangeApiClient\Model\Interfaces\Traits;

use BenatEspina\StackExchangeApiClient\Model\Interfaces\ShallowUserInterface;

/**
 * Interface BountyInterface.
 *
 * @package BenatEspina\StackExchangeApiClient\Model\Interfaces\Traits
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
