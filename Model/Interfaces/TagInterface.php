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
 * Interface TagInterface.
 *
 * @package BenatEspina\StackExchangeApiClient\Model\Interfaces
 */
interface TagInterface
{
    /**
     * Sets count.
     *
     * @param int $count The count
     *
     * @return $this self Object
     */
    public function setCount($count);

    /**
     * Gets count.
     *
     * @return int
     */
    public function getCount();

    /**
     * Sets has synonyms.
     *
     * @param boolean $hasSynonyms The has synonyms boolean
     *
     * @return $this self Object
     */
    public function setSynonyms($hasSynonyms);

    /**
     * Gets has synonyms.
     *
     * @return boolean
     */
    public function hasSynonyms();

    /**
     * Sets is moderator only.
     *
     * @param boolean $isModeratorOnly The is moderator only boolean
     *
     * @return $this self Object
     */
    public function setModeratorOnly($isModeratorOnly);

    /**
     * Gets is moderator only.
     *
     * @return boolean
     */
    public function isModeratorOnly();

    /**
     * Sets is required.
     *
     * @param boolean $isRequired The is required boolean
     *
     * @return $this self Object
     */
    public function setRequired($isRequired);

    /**
     * Gets is required.
     *
     * @return boolean
     */
    public function isRequired();

    /**
     * Sets last activity date.
     *
     * @param \DateTime|null $lastActivityDate The last activity date.
     *
     * @return $this self Object
     */
    public function setLastActivityDate(\DateTime $lastActivityDate);

    /**
     * Gets last activity date.
     *
     * @return \DateTime|null
     */
    public function getLastActivityDate();

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
     * Adds synonym.
     *
     * @param string $synonym The synonym
     *
     * @return $this self Object
     */
    public function addSynonym($synonym);

    /**
     * Removes synonym.
     *
     * @param string $synonym The synonym
     *
     * @return $this self Object
     */
    public function removeSynonym($synonym);

    /**
     * Gets array of synonyms.
     *
     * @return string[]
     */
    public function getSynonyms();

    /**
     * Sets user id.
     *
     * @param int|null $userId The user id
     *
     * @return $this self Object
     */
    public function setUserId($userId);

    /**
     * Gets user id.
     *
     * @return int|null
     */
    public function getUserId();

}
