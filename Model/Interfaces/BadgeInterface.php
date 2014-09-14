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
 * Interface BadgeInterface.
 *
 * @package BenatEspina\StackExchangeApiClient\Model\Interfaces
 */
interface BadgeInterface
{
    /**
     * Sets award count.
     *
     * @param integer $awardCount The award count
     *
     * @return \BenatEspina\StackExchangeApiClient\Model\Interfaces\BadgeInterface
     */
    public function setAwardCount($awardCount);

    /**
     * Gets award count.
     *
     * @return integer
     */
    public function getAwardCount();

    /**
     * Sets badge id.
     *
     * @param integer $badgeId The badge id
     *
     * @return \BenatEspina\StackExchangeApiClient\Model\Interfaces\BadgeInterface
     */
    public function setBadgeId($badgeId);

    /**
     * Gets badge id.
     *
     * @return integer
     */
    public function getBadgeId();

    /**
     * Sets badge type.
     *
     * @param string $badgeType The badge type, it can be 'named' or 'tag_based'
     *
     * @return \BenatEspina\StackExchangeApiClient\Model\Interfaces\BadgeInterface
     */
    public function setBadgeType($badgeType);

    /**
     * Gets badge type.
     *
     * @return string
     */
    public function getBadgeType();

    /**
     * Sets description.
     *
     * @param string $description The description
     *
     * @return string
     */
    public function setDescription($description);

    /**
     * Gets description.
     *
     * @return string
     */
    public function getDescription();

    /**
     * Sets link.
     *
     * @param string $link The link
     *
     * @return string
     */
    public function setLink($link);

    /**
     * Gets link.
     *
     * @return string
     */
    public function getLink();

    /**
     * Sets name.
     *
     * @param string $name The name
     *
     * @return \BenatEspina\StackExchangeApiClient\Model\Interfaces\BadgeInterface
     */
    public function setName($name);

    /**
     * Gets name.
     *
     * @return string
     */
    public function getName();

    /**
     * Sets rank.
     *
     * @param string $rank The rank, it can be, 'gold', 'silver' or 'bronze'
     *
     * @return mixed
     */
    public function setRank($rank);

    /**
     * Gets rank.
     *
     * @return string
     */
    public function getRank();

    /**
     * Sets user.
     *
     * @param \BenatEspina\StackExchangeApiClient\Model\Interfaces\ShallowUserInterface|null $user The shallow user
     *
     * @return \BenatEspina\StackExchangeApiClient\Model\Interfaces\BadgeInterface
     */
    public function setUser(ShallowUserInterface $user);

    /**
     * Gets user.
     *
     * @return \BenatEspina\StackExchangeApiClient\Model\Interfaces\ShallowUserInterface|null
     */
    public function getUser();
}
