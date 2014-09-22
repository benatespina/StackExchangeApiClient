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
 * Interface LastInterface.
 *
 * @package BenatEspina\StackExchangeApiClient\Model\Interfaces\Traits
 */
interface LastInterface
{
    /**
     * Sets last body.
     *
     * @param string|null $lastBody The last body
     *
     * @return $this self Object
     */
    public function setLastBody($lastBody);

    /**
     * Gets last body.
     *
     * @return string|null
     */
    public function getLastBody();

    /**
     * Adds last tag.
     *
     * @param string|null $lastTag The last tag
     *
     * @return $this self Object
     */
    public function addLastTag($lastTag);

    /**
     * Removes last tag.
     *
     * @param string|null $lastTag The last tag
     *
     * @return $this self Object
     */
    public function removeLastTag($lastTag);

    /**
     * Gets array of last tags.
     *
     * @return string[]
     */
    public function getLastTags();

    /**
     * Sets last title.
     *
     * @param string|null $lastTitle The last title
     *
     * @return $this self Object
     */
    public function setLastTitle($lastTitle);

    /**
     * Gets last title.
     *
     * @return string|null
     */
    public function getLastTitle();
}
