<?php

/**
 * This file is part of the StackExchangeApiClient library.
 *
 * @author  benatespina <benatespina@gmail.com>
 *
 * @license MIT
 */

namespace BenatEspina\StackExchangeApiClient\Model\Interfaces;

use BenatEspina\StackExchangeApiClient\Model\Interfaces\Traits\CountInterface;
use BenatEspina\StackExchangeApiClient\Model\Interfaces\Traits\TopInterface;

/**
 * Interface NetworkUserInterface.
 *
 * @package BenatEspina\StackExchangeApiClient\Model\Interfaces
 */
interface NetworkUserInterface extends CountInterface, TopInterface
{
    /**
     * Sets account id.
     *
     * @param int $accountId The account id
     *
     * @return $this self Object
     */
    public function setAccountId($accountId);

    /**
     * Gets account id.
     *
     * @return int
     */
    public function getAccountId();

    /**
     * Sets creation date.
     *
     * @param \DateTime $creationDate The creation date
     *
     * @return $this self Object
     */
    public function setCreationDate(\DateTime $creationDate);

    /**
     * Gets creation date.
     *
     * @return \DateTime
     */
    public function getCreationDate();

    /**
     * Sets last access date.
     *
     * @param \DateTime $lastAccessDate The last access date
     *
     * @return $this self Object
     */
    public function setLastAccessDate(\DateTime $lastAccessDate);

    /**
     * Gets last access date.
     *
     * @return \DateTime
     */
    public function getLastAccessDate();

    /**
     * Sets reputation.
     *
     * @param int $reputation The reputation
     *
     * @return $this self Object
     */
    public function setReputation($reputation);

    /**
     * Gets reputation.
     *
     * @return int
     */
    public function getReputation();


    /**
     * Sets site name.
     *
     * @param string $siteName The site name
     *
     * @return $this self Object
     */
    public function setSiteName($siteName);

    /**
     * Gets site name.
     *
     * @return string
     */
    public function getSiteName();

    /**
     * Sets site url.
     *
     * @param string $siteUrl The site url
     *
     * @return $this self Object
     */
    public function setSiteUrl($siteUrl);

    /**
     * Gets site name.
     *
     * @return string
     */
    public function getSiteUrl();

    /**
     * Sets user type.
     *
     * @param string $userType The user type that can be 'unregistered', 'registered', 'moderator', or 'does_not_exist'
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
