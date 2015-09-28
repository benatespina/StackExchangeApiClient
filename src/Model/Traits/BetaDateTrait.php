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

use BenatEspina\StackExchangeApiClient\Util\Util;

/**
 * Trait BetaDateTrait.
 *
 * @author Beñat Espiña <benatespina@gmail.com>
 */
trait BetaDateTrait
{
    /**
     * Closed beta date.
     *
     * @var \DateTime|null
     */
    protected $closedBetaDate;

    /**
     * Open beta date.
     *
     * @var \DateTime|null
     */
    protected $openBetaDate;

    /**
     * Sets closed beta date.
     *
     * @param \DateTime $closedBetaDate The closed beta date.
     *
     * @return $this self Object
     */
    public function setClosedBetaDate(\DateTime $closedBetaDate)
    {
        $this->closedBetaDate = $closedBetaDate;

        return $this;
    }

    /**
     * Gets closed beta date.
     *
     * @return \DateTime|null
     */
    public function getClosedBetaDate()
    {
        return $this->closedBetaDate;
    }

    /**
     * Sets open beta date.
     *
     * @param \DateTime $openBetaDate The open beta date.
     *
     * @return $this self Object
     */
    public function setOpenBetaDate(\DateTime $openBetaDate)
    {
        $this->openBetaDate = $openBetaDate;

        return $this;
    }

    /**
     * Gets open beta date.
     *
     * @return \DateTime|null
     */
    public function getOpenBetaDate()
    {
        return $this->openBetaDate;
    }

    /**
     * Loads the variables if the data exist into resource. It works like a constructor.
     *
     * @param null|mixed[] $resource The resource
     */
    protected function loadBetaDate($resource)
    {
        $this->closedBetaDate = Util::setIfDateTimeExists($resource, 'closed_beta_date');
        $this->openBetaDate = Util::setIfDateTimeExists($resource, 'open_beta_date');
    }
}
