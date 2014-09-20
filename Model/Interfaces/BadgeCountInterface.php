<?php

/**
 * This file is part of the StackExchangeApiClient library.
 *
 * @author  benatespina <benatespina@gmail.com>
 *
 * @license MIT
 */

namespace BenatEspina\StackExchangeApiClient\Model\Interfaces;

/**
 * Interface BadgeCountInterface.
 *
 * @package BenatEspina\StackExchangeApiClient\Model\Interfaces
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
     * @return integer
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
     * @return integer
     */
    public function getSilver();
}
