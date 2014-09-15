<?php

/**
 * This file is part of the StackExchangeApiClient library.
 *
 * @author  benatespina <benatespina@gmail.com>
 *
 * @license MIT
 */

namespace BenatEspina\StackExchangeApiClient\Model\Traits;

use BenatEspina\StackExchangeApiClient\Util\Util;

/**
 * Trait LastTrait.
 *
 * @package BenatEspina\StackExchangeApiClient\Model\Traits
 */
trait LastTrait
{
    /**
     * The last body.
     *
     * @var string|null
     */
    protected $lastBody;

    /**
     * Array that contains the last tags.
     *
     * @var string|null
     */
    protected $lastTags;

    /**
     * The last title.
     *
     * @var string|null
     */
    protected $lastTitle;

    /**
     * Sets last body.
     *
     * @param string|null $lastBody The last body
     *
     * @return $this self Object
     */
    public function setLastBody($lastBody)
    {
        $this->lastBody = $lastBody;

        return $this;
    }

    /**
     * Gets last body.
     *
     * @return string|null
     */
    public function getLastBody()
    {
        return $this->lastBody;
    }

    /**
     * Adds last tag.
     *
     * @param string|null $lastTag The last tag
     *
     * @return $this self Object
     */
    public function addLastTag($lastTag)
    {
        $this->lastTags[] = $lastTag;

        return $this;
    }

    /**
     * Removes last tag.
     *
     * @param string|null $lastTag The last tag
     *
     * @return $this self Object
     */
    public function removeLastTag($lastTag)
    {
        $this->lastTags = Util::removeElement($lastTag, $this->lastTags);

        return $this;
    }

    /**
     * Gets array of last tags.
     *
     * @return string[]|null
     */
    public function getLastTags()
    {
        return $this->lastTags;
    }

    /**
     * Sets last title.
     *
     * @param string|null $lastTitle The last title
     *
     * @return $this self Object
     */
    public function setLastTitle($lastTitle)
    {
        $this->lastTitle = $lastTitle;

        return $this;
    }

    /**
     * Gets last title.
     *
     * @return string|null
     */
    public function getLastTitle()
    {
        return $this->lastTitle;
    }

    /**
     * Loads the variables if the data exist into resource. It works like a constructor.
     *
     * @param mixed[] $resource The resource
     *
     * @return void
     */
    protected function loadLast($resource)
    {
        $this->lastBody = Util::setIfExists($resource, 'last_body');
        $this->lastTags = Util::setIfExists($resource, 'last_tags');
        $this->lastTitle = Util::setIfExists($resource, 'last_title');
    }
}
