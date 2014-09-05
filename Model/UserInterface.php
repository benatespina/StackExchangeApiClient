<?php

/**
 * This file is part of the StackExchangeApiClient library.
 *
 * @author  benatespina <benatespina@gmail.com>
 *
 * @license MIT
 */

namespace BenatEspina\StackExchangeApiClient\Model;

/**
 * Interface UserInterface.
 *
 * @package BenatEspina\StackExchangeApiClient\Model
 */
interface UserInterface
{
    /**
     * Sets id.
     *
     * @param integer $userId The id
     *
     * @return \BenatEspina\StackExchangeApiClient\Model\UserInterface
     */
    public function setUserId($userId);

    /**
     * Gets id.
     *
     * @return integer
     */
    public function getUserId();

    /**
     * Sets reputation.
     *
     * @param integer $reputation The reputation
     *
     * @return \BenatEspina\StackExchangeApiClient\Model\UserInterface
     */
    public function setReputation($reputation);

    /**
     * Gets reputation.
     *
     * @return integer
     */
    public function getReputation();

    /**
     * Sets user type.
     *
     * @param string $userType The userType
     *
     * @return \BenatEspina\StackExchangeApiClient\Model\UserInterface
     */
    public function setUserType($userType);

    /**
     * Gets user type.
     *
     * @return string
     */
    public function getUserType();

    /**
     * Sets accept rate.
     *
     * @param integer $acceptRate The acceptRate
     *
     * @return \BenatEspina\StackExchangeApiClient\Model\UserInterface
     */
    public function setAcceptRate($acceptRate);

    /**
     * Gets accept rate.
     *
     * @return integer
     */
    public function getAcceptRate();

    /**
     * Sets profile image.
     *
     * @param string $profileImage The profileImage
     *
     * @return \BenatEspina\StackExchangeApiClient\Model\UserInterface
     */
    public function setProfileImage($profileImage);

    /**
     * Gets profile image.
     *
     * @return string
     */
    public function getProfileImage();

    /**
     * Sets display name.
     *
     * @param string $displayName The displayName
     *
     * @return \BenatEspina\StackExchangeApiClient\Model\UserInterface
     */
    public function setDisplayName($displayName);

    /**
     * Gets display name.
     *
     * @return string
     */
    public function getDisplayName();

    /**
     * Sets link.
     *
     * @param string $link The link
     *
     * @return \BenatEspina\StackExchangeApiClient\Model\UserInterface
     */
    public function setLink($link);

    /**
     * Gets link.
     *
     * @return string
     */
    public function getLink();
}
