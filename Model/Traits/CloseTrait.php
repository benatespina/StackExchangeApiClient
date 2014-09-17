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
     * {@inheritdoc}
     */
    public function setCanClose($canClose)
    {
        $this->canClose = $canClose;

        return $this;
    }

    /**
     * {@inheritdoc}
     */
    public function isCanClose()
    {
        return $this->canClose;
    }

    /**
     * {@inheritdoc}
     */
    public function setCloseVoteCount($closeVoteCount)
    {
        $this->closeVoteCount = $closeVoteCount;

        return $this;
    }

    /**
     * {@inheritdoc}
     */
    public function getCloseVoteCount()
    {
        return $this->closeVoteCount;
    }

    /**
     * {@inheritdoc}
     */
    public function setClosedDate(\DateTime $closedDate)
    {
        $this->closedDate = $closedDate;

        return $this;
    }

    /**
     * {@inheritdoc}
     */
    public function getClosedDate()
    {
        return $this->closedDate;
    }

    /**
     * {@inheritdoc}
     */
    public function setClosedDetails(ClosedDetailsInterface $closedDetails)
    {
        $this->closedDetails = $closedDetails;

        return $this;
    }

    /**
     * {@inheritdoc}
     */
    public function getClosedDetails()
    {
        return $this->closedDetails;
    }

    /**
     * {@inheritdoc}
     */
    public function setClosedReason($closedReason)
    {
        $this->closedReason = $closedReason;

        return $this;
    }

    /**
     * {@inheritdoc}
     */
    public function getClosedReason()
    {
        return $this->closedReason;
    }

    /**
     * Loads the variables if the data exist into resource. It works like a constructor.
     *
     * @param null|(int|string)[] $resource The resource
     *
     * @return void
     */
    protected function loadClose($resource)
    {
        $this->canClose = Util::setIfExists($resource, 'can_close');
        $this->closeVoteCount = Util::setIfExists($resource, 'close_vote_count');
        $this->closedDate = Util::setIfDateTimeExists($resource, 'closed_date');
        $this->closedDetails = new ClosedDetails(Util::setIfExists($resource, 'closed_details'));
        $this->closedReason = Util::setIfExists($resource, 'closed_reason');
    }
}
