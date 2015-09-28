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

use BenatEspina\StackExchangeApiClient\Model\Interfaces\ClosedDetailsInterface;

/**
 * Interface CloseInterface.
 *
 * @author Beñat Espiña <benatespina@gmail.com>
 */
interface CloseInterface
{
    /**
     * Sets can close.
     *
     * @param bool $canClose The canClose boolean
     *
     * @return $this self Object
     */
    public function setCanClose($canClose);

    /**
     * Gets can close.
     *
     * @return bool
     */
    public function isCanClose();

    /**
     * Sets number of close votes.
     *
     * @param int $closeVoteCount The number of close votes
     *
     * @return $this self Object
     */
    public function setCloseVoteCount($closeVoteCount);

    /**
     * Gets close vote count.
     *
     * @return int
     */
    public function getCloseVoteCount();

    /**
     * Sets closed date.
     *
     * @param \DateTime|null $closedDate The closed date
     *
     * @return $this self Object
     */
    public function setClosedDate(\DateTime $closedDate);

    /**
     * Gets closed date.
     *
     * @return \DateTime|null
     */
    public function getClosedDate();

    /**
     * Sets closed details.
     *
     * @param \BenatEspina\StackExchangeApiClient\Model\Interfaces\ClosedDetailsInterface|null $closedDetails The closed
     *                                                                                                        details
     *
     * @return $this self Object
     */
    public function setClosedDetails(ClosedDetailsInterface $closedDetails);

    /**
     * Gets closed details.
     *
     * @return \BenatEspina\StackExchangeApiClient\Model\Interfaces\ClosedDetailsInterface|null
     */
    public function getClosedDetails();

    /**
     * Sets closed reason.
     *
     * @param string|null $closedReason The closed reason
     *
     * @return $this self Object
     */
    public function setClosedReason($closedReason);

    /**
     * Gets closed reason.
     *
     * @return string|null
     */
    public function getClosedReason();
}
