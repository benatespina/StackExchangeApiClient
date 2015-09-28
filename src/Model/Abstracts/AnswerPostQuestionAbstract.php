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

use BenatEspina\StackExchangeApiClient\Model\Traits\CommentCountTrait;
use BenatEspina\StackExchangeApiClient\Model\Traits\EditTrait;
use BenatEspina\StackExchangeApiClient\Model\Traits\VoteCountTrait;
use BenatEspina\StackExchangeApiClient\Util\Util;

/**
 * Class AnswerPostQuestionAbstract.
 *
 * @author Beñat Espiña <benatespina@gmail.com>
 */
abstract class AnswerPostQuestionAbstract extends ResourceAbstract
{
    use CommentCountTrait,
        EditTrait,
        VoteCountTrait;

    /**
     * Downvoted.
     *
     * @var bool
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
     * @param null|mixed[] $json The json string being decoded
     */
    public function __construct($json = null)
    {
        parent::__construct($json);
        $this->loadCommentCount($json);
        $this->loadEdit($json);
        $this->loadVoteCount($json);

        $this->downvoted = Util::setIfBoolExists($json, 'downvoted');
        $this->lastActivityDate = Util::setIfDateTimeExists($json, 'last_activity_date');
        $this->link = Util::setIfStringExists($json, 'link');
        $this->shareLink = Util::setIfStringExists($json, 'share_link');
        $this->title = Util::setIfStringExists($json, 'title');
    }

    /**
     * Sets downvoted.
     *
     * @param bool $downvoted The downvoted boolean
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
     * @return bool
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
