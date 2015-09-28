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
 * Interface ShallowUserInterface.
 *
 * @author Beñat Espiña <benatespina@gmail.com>
 */
interface ShallowUserInterface
{
    /**
     * Sets accept rate.
     *
     * @param int|null $acceptRate The acceptRate
     *
     * @return $this self Object
     */
    public function setAcceptRate($acceptRate);

    /**
     * Gets accept rate.
     *
     * @return int|null
     */
    public function getAcceptRate();

    /**
     * Sets badge count.
     *
     * @param \BenatEspina\StackExchangeApiClient\Model\Interfaces\BadgeCountInterface $badgeCount The badge count
     *
     * @return $this self Object
     */
    public function setBadgeCount(BadgeCountInterface $badgeCount);

    /**
     * Gets badge count.
     *
     * @return \BenatEspina\StackExchangeApiClient\Model\Interfaces\BadgeCountInterface
     */
    public function getBadgeCount();

    /**
     * Sets display name.
     *
     * @param string|null $displayName The displayName
     *
     * @return $this self Object
     */
    public function setDisplayName($displayName);

    /**
     * Gets display name.
     *
     * @return string|null
     */
    public function getDisplayName();

    /**
     * Sets link.
     *
     * @param string|null $link The link
     *
     * @return $this self Object
     */
    public function setLink($link);

    /**
     * Gets link.
     *
     * @return string|null
     */
    public function getLink();

    /**
     * Sets profile image.
     *
     * @param string|null $profileImage The profileImage
     *
     * @return $this self Object
     */
    public function setProfileImage($profileImage);

    /**
     * Gets profile image.
     *
     * @return string|null
     */
    public function getProfileImage();

    /**
     * Sets reputation.
     *
     * @param int|null $reputation The reputation
     *
     * @return $this self Object
     */
    public function setReputation($reputation);

    /**
     * Gets reputation.
     *
     * @return int|null
     */
    public function getReputation();

    /**
     * Sets user type.
     *
     * @param string $userType The userType
     *
     * @return $this self Object
     */
    public function setUserType($userType);

    /**
     * Gets user type.
     *
     * @return string
     */
    public function getUserType();
}
