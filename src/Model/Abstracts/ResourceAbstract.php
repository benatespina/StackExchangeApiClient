<?php

/*
 * This file is part of the Stack Exchange Api Client library.
 *
 * Copyright (c) 2015 Beñat Espiña <benatespina@gmail.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace BenatEspina\StackExchangeApiClient\Model\Abstracts;

use BenatEspina\StackExchangeApiClient\Model\Interfaces\ShallowUserInterface;
use BenatEspina\StackExchangeApiClient\Model\ShallowUser;
use BenatEspina\StackExchangeApiClient\Util\Util;

/**
 * Class ResourceAbstract.
 *
 * @author Beñat Espiña <benatespina@gmail.com>
 */
abstract class ResourceAbstract extends BaseAbstract
{
    /**
     * The body.
     *
     * @var string
     */
    protected $body;

    /**
     * The body markdown.
     *
     * @var string
     */
    protected $bodyMarkDown;

    /**
     * Creation date.
     *
     * @var \DateTime
     */
    protected $creationDate;

    /**
     * The link.
     *
     * @var string
     */
    protected $link;

    /**
     * The owner.
     *
     * @var \BenatEspina\StackExchangeApiClient\Model\Interfaces\ShallowUserInterface|null
     */
    protected $owner;

    /**
     * The score.
     *
     * @var int
     */
    protected $score;

    /**
     * Boolean that shows it is upvoted or not.
     *
     * @var boolean.
     */
    protected $upvoted;

    /**
     * Constructor.
     *
     * @param null|mixed[] $json The json string being decoded
     */
    public function __construct($json = null)
    {
        $this->body = Util::setIfStringExists($json, 'body');
        $this->bodyMarkDown = Util::setIfStringExists($json, 'body_markdown');
        $this->creationDate = Util::setIfDateTimeExists($json, 'creation_date');
        $this->link = Util::setIfStringExists($json, 'link');
        $this->owner = new ShallowUser(Util::setIfArrayExists($json, 'owner'));
        $this->score = Util::setIfIntegerExists($json, 'score');
        $this->upvoted = Util::setIfBoolExists($json, 'upvoted');
    }

    /**
     * Sets body.
     *
     * @param string $body The body
     *
     * @return $this self Object
     */
    public function setBody($body)
    {
        $this->body = $body;

        return $this;
    }

    /**
     * Gets body.
     *
     * @return string
     */
    public function getBody()
    {
        return $this->body;
    }

    /**
     * Sets body markdown.
     *
     * @param string $bodyMarkDown The body markdown
     *
     * @return $this self Object
     */
    public function setBodyMarkDown($bodyMarkDown)
    {
        $this->bodyMarkDown = $bodyMarkDown;

        return $this;
    }

    /**
     * Gets body markdown.
     *
     * @return string
     */
    public function getBodyMarkDown()
    {
        return $this->bodyMarkDown;
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
     * Sets link.
     *
     * @param string $link The link
     *
     * @return $this self Object
     */
    public function setLink($link)
    {
        $this->link = $link;

        return $this;
    }

    /**
     * Gets link.
     *
     * @return string
     */
    public function getLink()
    {
        return $this->link;
    }

    /**
     * Sets owner.
     *
     * @param \BenatEspina\StackExchangeApiClient\Model\Interfaces\ShallowUserInterface|null $owner The owner
     *
     * @return $this self Object
     */
    public function setOwner(ShallowUserInterface $owner)
    {
        $this->owner = $owner;

        return $this;
    }

    /**
     * Gets owner.
     *
     * @return \BenatEspina\StackExchangeApiClient\Model\Interfaces\ShallowUserInterface|null
     */
    public function getOwner()
    {
        return $this->owner;
    }

    /**
     * Sets score.
     *
     * @param int $score The score
     *
     * @return $this self Object
     */
    public function setScore($score)
    {
        $this->score = $score;

        return $this;
    }

    /**
     * Gets score.
     *
     * @return int
     */
    public function getScore()
    {
        return $this->score;
    }

    /**
     * Sets upvoted.
     *
     * @param bool $upvoted The upvoted boolean
     *
     * @return $this self Object
     */
    public function setUpvoted($upvoted)
    {
        $this->upvoted = $upvoted;

        return $this;
    }

    /**
     * Gets upvoted.
     *
     * @return bool
     */
    public function isUpvoted()
    {
        return $this->upvoted;
    }
}
