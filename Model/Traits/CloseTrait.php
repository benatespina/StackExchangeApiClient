<?php

/**
 * This file is part of the StackExchangeApiClient library.
 *
 * @author  benatespina <benatespina@gmail.com>
 *
 * @license MIT
 */

namespace BenatEspina\StackExchangeApiClient\Model\Traits;

use BenatEspina\StackExchangeApiClient\Model\ClosedDetails;
use BenatEspina\StackExchangeApiClient\Model\Interfaces\ClosedDetailsInterface;
use BenatEspina\StackExchangeApiClient\Util\Util;

/**
 * Trait CloseTrait.
 *
 * @package BenatEspina\StackExchangeApiClient\Model\Traits
 */
trait CloseTrait
{
    /**
     * Boolean that shows it can close or not.
     *
     * @var boolean
     */
    protected $canClose;

    /**
     * Number of close votes.
     *
     * @var int
     */
    protected $closeVoteCount;

    /**
     * Closed date.
     *
     * @var \DateTime|null
     */
    protected $closedDate;

    /**
     * Closed details.
     *
     * @var \BenatEspina\StackExchangeApiClient\Model\Interfaces\ClosedDetailsInterface|null
     */
    protected $closedDetails;

    /**
     * Closed reason.
     *
     * @var string|null
     */
    protected $closedReason;

    /**
     * Sets can close.
     *
     * @param boolean $canClose The canClose boolean
     *
     * @return $this self Object
     */
    public function setCanClose($canClose)
    {
        $this->canClose = $canClose;

        return $this;
    }

    /**
     * Gets can close.
     *
     * @return boolean
     */
    public function isCanClose()
    {
        return $this->canClose;
    }

    /**
     * Sets number of close votes.
     *
     * @param int $closeVoteCount The number of close votes
     *
     * @return $this self Object
     */
    public function setCloseVoteCount($closeVoteCount)
    {
        $this->closeVoteCount = $closeVoteCount;

        return $this;
    }

    /**
     * Gets close vote count.
     *
     * @return int
     */
    public function getCloseVoteCount()
    {
        return $this->closeVoteCount;
    }

    /**
     * Sets closed date.
     *
     * @param \DateTime|null $closedDate The closed date
     *
     * @return $this self Object
     */
    public function setClosedDate(\DateTime $closedDate)
    {
        $this->closedDate = $closedDate;

        return $this;
    }

    /**
     * Gets closed date.
     *
     * @return \DateTime|null
     */
    public function getClosedDate()
    {
        return $this->closedDate;
    }

    /**
     * Sets closed details.
     *
     * @param \BenatEspina\StackExchangeApiClient\Model\Interfaces\ClosedDetailsInterface|null $closedDetails The closed
     *                                                                                                        details
     *
     * @return $this self Object
     */
    public function setClosedDetails(ClosedDetailsInterface $closedDetails)
    {
        $this->closedDetails = $closedDetails;

        return $this;
    }

    /**
     * Gets closed details.
     *
     * @return \BenatEspina\StackExchangeApiClient\Model\Interfaces\ClosedDetailsInterface|null
     */
    public function getClosedDetails()
    {
        return $this->closedDetails;
    }

    /**
     * Sets closed reason.
     *
     * @param string|null $closedReason The closed reason
     *
     * @return $this self Object
     */
    public function setClosedReason($closedReason)
    {
        $this->closedReason = $closedReason;

        return $this;
    }

    /**
     * Gets closed reason.
     *
     * @return string|null
     */
    public function getClosedReason()
    {
        return $this->closedReason;
    }

    /**
     * Loads the variables if the data exist into resource. It works like a constructor.
     *
     * @param null|mixed[] $resource The resource
     *
     * @return void
     */
    protected function loadClose($resource)
    {
        $this->canClose = Util::setIfBoolExists($resource, 'can_close');
        $this->closeVoteCount = Util::setIfIntegerExists($resource, 'close_vote_count');
        $this->closedDate = Util::setIfDateTimeExists($resource, 'closed_date');
        $this->closedDetails = new ClosedDetails(Util::setIfArrayExists($resource, 'closed_details'));
        $this->closedReason = Util::setIfStringExists($resource, 'closed_reason');
    }
}
