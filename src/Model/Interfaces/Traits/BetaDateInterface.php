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

/**
 * Interface BetaDateInterface.
 *
 * @author Beñat Espiña <benatespina@gmail.com>
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
