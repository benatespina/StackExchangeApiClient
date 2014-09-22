<?php

/**
 * This file is part of the StackExchangeApiClient library.
 *
 * @author  benatespina <benatespina@gmail.com>
 *
 * @license MIT
 */

namespace BenatEspina\StackExchangeApiClient\Model\Interfaces\Traits;

/**
 * Interface BetaDateInterface.
 *
 * @package BenatEspina\StackExchangeApiClient\Model\Interfaces\Traits
 */
interface BetaDateInterface
{
    /**
     * Sets closed beta date.
     *
     * @param \DateTime $closedBetaDate The closed beta date.
     *
     * @return $this self Object
     */
    public function setClosedBetaDate(\DateTime $closedBetaDate);

    /**
     * Gets closed beta date.
     *
     * @return \DateTime|null
     */
    public function getClosedBetaDate();

    /**
     * Sets open beta date.
     *
     * @param \DateTime $openBetaDate The open beta date.
     *
     * @return $this self Object
     */
    public function setOpenBetaDate(\DateTime $openBetaDate);

    /**
     * Gets open beta date.
     *
     * @return \DateTime|null
     */
    public function getOpenBetaDate();
}
