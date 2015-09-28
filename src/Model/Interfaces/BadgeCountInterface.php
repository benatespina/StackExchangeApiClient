<?php

/*
 * This file is part of the Stack Exchange Api Client library.
 *
 * Copyright (c) 2015 Beñat Espiña <benatespina@gmail.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace BenatEspina\StackExchangeApiClient\Model\Interfaces;

/**
 * Interface BadgeCountInterface.
 *
 * @author Beñat Espiña <benatespina@gmail.com>
 */
interface BadgeCountInterface
{
    /**
     * Sets number of bronze badges.
     *
     * @param int $bronze The number of bronze badges
     *
     * @return $this self Object
     */
    public function setBronze($bronze);

    /**
     * Gets number of bronze badges.
     *
     * @return $this self Object
     */
    public function getBronze();

    /**
     * Sets number of gold badges.
     *
     * @param int $gold The number of gold badges
     *
     * @return $this self Object
     */
    public function setGold($gold);

    /**
     * Gets number of gold badges.
     *
     * @return int
     */
    public function getGold();

    /**
     * Sets number of silver badges.
     *
     * @param int $silver The number of silver badges
     *
     * @return $this self Object
     */
    public function setSilver($silver);

    /**
     * Sets number of silver badges.
     *
     * @return int
     */
    public function getSilver();
}
