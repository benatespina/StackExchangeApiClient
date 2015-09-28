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
 * Trait BountyTrait.
 *
 * @author Beñat Espiña <benatespina@gmail.com>
 */
trait BountyTrait
{
    /**
     * The bounty amount.
     *
     * @var int|null
     */
    protected $bodyAmount;

    /**
     * The bounty closes date.
     *
     * @var \DateTime|null
     */
    protected $bountyClosesDate;

    /**
     * Bounty user.
     *
     * @var \BenatEspina\StackExchangeApiClient\Model\Interfaces\ShallowUserInterface|null
     */
    protected $bountyUser;

    /**
     * Sets body amount.
     *
     * @param int|null $bodyAmount The body amount
     *
     * @return $this self Object
     */
    public function setBodyAmount($bodyAmount)
    {
        $this->bodyAmount = $bodyAmount;

        return $this;
    }

    /**
     * Gets body amount.
     *
     * @return int|null
     */
    public function getBodyAmount()
    {
        return $this->bodyAmount;
    }

    /**
     * Sets bounty closes date.
     *
     * @param \DateTime|null $bountyClosesDate The bounty closes date
     *
     * @return $this self Object
     */
    public function setBountyClosesDate(\DateTime $bountyClosesDate)
    {
        $this->bountyClosesDate = $bountyClosesDate;

        return $this;
    }

    /**
     * Gets bounty closes date.
     *
     * @return \DateTime|null
     */
    public function getBountyClosesDate()
    {
        return $this->bountyClosesDate;
    }

    /**
     * Sets bounty user.
     *
     * @param \BenatEspina\StackExchangeApiClient\Model\Interfaces\ShallowUserInterface|null $bountyUser The bounty user
     *
     * @return $this self Object
     */
    public function setBountyUser(ShallowUserInterface $bountyUser)
    {
        $this->bountyUser = $bountyUser;

        return $this;
    }

    /**
     * Gets bounty user.
     *
     * @return \BenatEspina\StackExchangeApiClient\Model\Interfaces\ShallowUserInterface|null
     */
    public function getBountyUser()
    {
        return $this->bountyUser;
    }

    /**
     * Loads the variables if the data exist into resource. It works like a constructor.
     *
     * @param null|mixed[] $resource The resource
     */
    protected function loadBounty($resource)
    {
        $this->bodyAmount = Util::setIfIntegerExists($resource, 'body_amount');
        $this->bountyClosesDate = Util::setIfDateTimeExists($resource, 'bounty_closes_date');
        $this->bountyUser = new ShallowUser(Util::setIfArrayExists($resource, 'bounty_user'));
    }
}
