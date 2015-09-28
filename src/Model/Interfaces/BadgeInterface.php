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
 * Interface BadgeInterface.
 *
 * @author Beñat Espiña <benatespina@gmail.com>
 */
interface BadgeInterface
{
    /**
     * Sets award count.
     *
     * @param int $awardCount The award count
     *
     * @return $this self Object
     */
    public function setAwardCount($awardCount);

    /**
     * Gets award count.
     *
     * @return int
     */
    public function getAwardCount();

    /**
     * Sets badge type.
     *
     * @param string $badgeType The badge type, it can be 'named' or 'tag_based'
     *
     * @return $this self Object
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
     * @return $this self Object
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
     * @return $this self Object
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
     * @return $this self Object
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
     * @return $this self Object
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
     * @return $this self Object
     */
    public function setUser(ShallowUserInterface $user);

    /**
     * Gets user.
     *
     * @return \BenatEspina\StackExchangeApiClient\Model\Interfaces\ShallowUserInterface|null
     */
    public function getUser();
}
