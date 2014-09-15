<?php

/**
 * This file is part of the StackExchangeApiClient library.
 *
 * @author  benatespina <benatespina@gmail.com>
 *
 * @license MIT
 */

namespace BenatEspina\StackExchangeApiClient\Model\Abstracts;

use BenatEspina\StackExchangeApiClient\Model\Traits\CommentCountTrait;
use BenatEspina\StackExchangeApiClient\Model\Traits\EditTrait;
use BenatEspina\StackExchangeApiClient\Model\Traits\VoteCountTrait;
use BenatEspina\StackExchangeApiClient\Util\Util;

/**
 * Class AnswerPostQuestionAbstract.
 *
 * @package BenatEspina\StackExchangeApiClient\Model\Abstracts
 */
abstract class AnswerPostQuestionAbstract extends ResourceAbstract
{
    use
        CommentCountTrait,
        EditTrait,
        VoteCountTrait;

    /**
     * Downvoted.
     *
     * @var boolean.
     */
    protected $downvoted;

    /**
     * Last activity date.
     *
     * @var \DateTime
     */
    protected $lastActivityDate;

    /**
     * The share link.
     *
     * @var string
     */
    protected $shareLink;

    /**
     * The title of resource.
     *
     * @var string
     */
    protected $title;

    /**
     * Constructor.
     *
     * @param null|(int|string)[] $json The json string being decoded
     */
    public function __construct($json = null)
    {
        parent::__construct($json);
        $this->loadCommentCount($json);
        $this->loadEdit($json);
        $this->loadVoteCount($json);

        $this->downvoted = Util::setIfExists($json, 'downvoted');
        $this->lastActivityDate = Util::setIfDateTimeExists($json, 'last_activity_date');
        $this->link = Util::setIfExists($json, 'link');
        $this->shareLink = Util::setIfExists($json, 'share_link');
        $this->title = Util::setIfExists($json, 'title');
    }

    /**
     * Sets downvoted.
     *
     * @param boolean $downvoted The downvoted boolean
     *
     * @return $this self Object
     */
    public function setDownvoted($downvoted)
    {
        $this->downvoted = $downvoted;

        return $this;
    }

    /**
     * Gets downvoted.
     *
     * @return boolean
     */
    public function isDownvoted()
    {
        return $this->downvoted;
    }

    /**
     * Sets last activity date.
     *
     * @param \DateTime $lastActivityDate The last activity date
     *
     * @return $this self Object
     */
    public function setLastActivityDate(\DateTime $lastActivityDate)
    {
        $this->lastActivityDate = $lastActivityDate;

        return $this;
    }

    /**
     * Gets last activity date.
     *
     * @return \DateTime
     */
    public function getLastActivityDate()
    {
        return $this->lastActivityDate;
    }

    /**
     * Sets share link.
     *
     * @param string $shareLink The share link
     *
     * @return $this self Object
     */
    public function setShareLink($shareLink)
    {
        $this->shareLink = $shareLink;

        return $this;
    }

    /**
     * Gets share link.
     *
     * @return string
     */
    public function getShareLink()
    {
        return $this->shareLink;
    }

    /**
     * Sets title.
     *
     * @param string $title The title
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
     * @return string
     */
    public function getTitle()
    {
        return $this->title;
    }
}
