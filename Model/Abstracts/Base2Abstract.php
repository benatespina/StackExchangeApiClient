<?php

/**
 * This file is part of the StackExchangeApiClient library.
 *
 * @author  benatespina <benatespina@gmail.com>
 *
 * @license MIT
 */

namespace BenatEspina\StackExchangeApiClient\Model\Abstracts;

use BenatEspina\StackExchangeApiClient\Util\Util;

/**
 * Class Base2Abstract.
 *
 * @package BenatEspina\StackExchangeApiClient\Model\Abstracts
 */
abstract class Base2Abstract
{
    /**
     * Creation date.
     *
     * @var \DateTime
     */
    protected $creationDate;

    /**
     * Array that contains tags.
     *
     * @var string[]|null
     */
    protected $tags;

    /**
     * The title.
     *
     * @var string|null
     */
    protected $title;

    /**
     * Constructor.
     *
     * @param null|(int|string)[] $json The json string being decoded
     */
    public function __construct($json = null)
    {
        $this->creationDate = Util::setIfDateTimeExists($json, 'creation_date');
        $this->tags = Util::setIfArrayExists($json, 'tags');
        $this->title = Util::setIfExists($json, 'title');
    }

    /**
     * Sets creation date.
     *
     * @param \DateTime $creationDate The creation date
     *
     * @return $this self Object
     */
    public function setCreationDate(\DateTime $creationDate)
    {
        $this->creationDate = $creationDate;

        return $this;
    }

    /**
     * Gets creation date.
     *
     * @return \DateTime
     */
    public function getCreationDate()
    {
        return $this->creationDate;
    }

    /**
     * Adds tag.
     *
     * @param string|null $tag The tag
     *
     * @return $this self Object
     */
    public function addTag($tag)
    {
        $this->tags[] = $tag;

        return $this;
    }

    /**
     * Removes tag.
     *
     * @param string|null $tag The tag
     *
     * @return $this self Object
     */
    public function removeTag($tag)
    {
        $this->tags = Util::removeElement($tag, $this->tags);

        return $this;
    }

    /**
     * Gets array of tags.
     *
     * @return string[]|null
     */
    public function getTags()
    {
        return $this->tags;
    }

    /**
     * Sets title.
     *
     * @param string|null $title The title
     *
     * @return $this self Object
     */
    public function setTitle($title)
    {
        $this->title = $title;

        return $this;
    }

    /**
     * Gets title.
     *
     * @return string|null
     */
    public function getTitle()
    {
        return $this->title;
    }
}
