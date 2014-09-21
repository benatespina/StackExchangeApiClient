<?php

/**
 * This file is part of the StackExchangeApiClient library.
 *
 * @author  benatespina <benatespina@gmail.com>
 *
 * @license MIT
 */

namespace BenatEspina\StackExchangeApiClient\Model;

use BenatEspina\StackExchangeApiClient\Model\Abstracts\BaseAbstract as BaseUserTimeline;
use BenatEspina\StackExchangeApiClient\Model\Interfaces\UserTimelineInterface;
use BenatEspina\StackExchangeApiClient\Util\Util;

/**
 * Class UserTimeline.
 *
 * @package BenatEspina\StackExchangeApiClient\Model
 */
class UserTimeline extends BaseUserTimeline implements UserTimelineInterface
{
    const POST_TYPE_QUESTION = 'question';
    const POST_TYPE_ANSWER = 'answer';

    const TIMELINE_TYPE_ACCEPTED_ANSWER = 'accepted_answer';
    const TIMELINE_TYPE_ANSWER = 'answer';
    const TIMELINE_TYPE_COMMENT = 'comment';
    const TIMELINE_TYPE_POST_STATE_CHANGED = 'post_state_changed';
    const TIMELINE_TYPE_QUESTION = 'question';
    const TIMELINE_TYPE_REVISION = 'revision';
    const TIMELINE_TYPE_UNACCEPTED_ANSWER = 'unaccepted_answer';
    const TIMELINE_TYPE_VOTE_AGGREGATE = 'vote_aggregate';

    /**
     * The badge id.
     *
     * @var int|null
     */
    protected $badgeId;

    /**
     * The comment id.
     *
     * @var int|null
     */
    protected $commentId;

    /**
     * Creation date.
     *
     * @var \DateTime
     */
    protected $creationDate;

    /**
     * The detail.
     *
     * @var string|null
     */
    protected $detail;

    /**
     * The link.
     *
     * @var string
     */
    protected $link;

    /**
     * The post id.
     *
     * @var int|null
     */
    protected $postId;

    /**
     * Post type that can be 'answer' or 'question'.
     *
     * @var string
     */
    protected $postType;

    /**
     * Suggested edit id.
     *
     * @var int|null
     */
    protected $suggestedEditId;

    /**
     * The timeline type that can be 'question', 'answer', 'comment', 'unaccepted_answer',
     * 'accepted_answer','vote_aggregate', 'revision', or 'post_state_changed'.
     *
     * @var string
     */
    protected $timelineType;

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
        $this->id = Util::setIfExists($json, 'user_id');

        $this->badgeId = Util::setIfExists($json, 'badge_id');
        $this->commentId = Util::setIfExists($json, 'comment_id');
        $this->creationDate = Util::setIfDateTimeExists($json, 'creation_date');
        $this->detail = Util::setIfExists($json, 'detail');
        $this->link = new ShallowUser(Util::setIfExists($json, 'link'));
        $this->postId = Util::setIfExists($json, 'post_id');
        $this->postType = Util::isEqual($json, 'post_type', array(self::POST_TYPE_ANSWER, self::POST_TYPE_QUESTION));
        $this->suggestedEditId = Util::setIfExists($json, 'suggested_edit_id');
        $this->timelineType = Util::isEqual(
            $json,
            'timeline_type',
            array(
                self::TIMELINE_TYPE_ACCEPTED_ANSWER,
                self::TIMELINE_TYPE_ANSWER,
                self::TIMELINE_TYPE_COMMENT,
                self::TIMELINE_TYPE_POST_STATE_CHANGED,
                self::TIMELINE_TYPE_QUESTION,
                self::TIMELINE_TYPE_REVISION,
                self::TIMELINE_TYPE_UNACCEPTED_ANSWER,
                self::TIMELINE_TYPE_VOTE_AGGREGATE,
            )
        );
        $this->title = Util::setIfExists($json, $this->title, 'title');
    }

    /**
     * {@inheritdoc}
     */
    public function setBadgeId($badgeId)
    {
        $this->badgeId = $badgeId;

        return $this;
    }

    /**
     * {@inheritdoc}
     */
    public function getBadgeId()
    {
        return $this->badgeId;
    }

    /**
     * {@inheritdoc}
     */
    public function setCommentId($commentId)
    {
        $this->commentId = $commentId;

        return $this;
    }

    /**
     * {@inheritdoc}
     */
    public function getCommentId()
    {
        return $this->commentId;
    }

    /**
     * {@inheritdoc}
     */
    public function setCreationDate(\DateTime $creationDate)
    {
        $this->creationDate = $creationDate;

        return $this;
    }

    /**
     * {@inheritdoc}
     */
    public function getCreationDate()
    {
        return $this->creationDate;
    }

    /**
     * {@inheritdoc}
     */
    public function setDetail($detail)
    {
        $this->detail = $detail;

        return $this;
    }

    /**
     * {@inheritdoc}
     */
    public function getDetail()
    {
        return $this->detail;
    }

    /**
     * {@inheritdoc}
     */
    public function setLink($link)
    {
        $this->link = $link;

        return $this;
    }

    /**
     * {@inheritdoc}
     */
    public function getLink()
    {
        return $this->link;
    }

    /**
     * {@inheritdoc}
     */
    public function setPostId($postId)
    {
        $this->postId = $postId;

        return $this;
    }

    /**
     * {@inheritdoc}
     */
    public function getPostId()
    {
        return $this->postId;
    }

    /**
     * {@inheritdoc}
     */
    public function setPostType($postType)
    {
        if (Util::coincidesElement(
            $postType,
            array(
                self::POST_TYPE_ANSWER,
                self::POST_TYPE_QUESTION
            )
        )) {
            $this->postType = $postType;
        }

        return $this;
    }

    /**
     * {@inheritdoc}
     */
    public function getPostType()
    {
        return $this->postType;
    }

    /**
     * {@inheritdoc}
     */
    public function setSuggestedEditId($suggestedEditId)
    {
        $this->suggestedEditId = $suggestedEditId;

        return $this;
    }

    /**
     * {@inheritdoc}
     */
    public function getSuggestedEditId()
    {
        return $this->suggestedEditId;
    }

    /**
     * {@inheritdoc}
     */
    public function setTimelineType($timelineType)
    {
        if (Util::coincidesElement(
            $timelineType,
            array(
                self::TIMELINE_TYPE_ACCEPTED_ANSWER,
                self::TIMELINE_TYPE_ANSWER,
                self::TIMELINE_TYPE_COMMENT,
                self::TIMELINE_TYPE_POST_STATE_CHANGED,
                self::TIMELINE_TYPE_QUESTION,
                self::TIMELINE_TYPE_REVISION,
                self::TIMELINE_TYPE_UNACCEPTED_ANSWER,
                self::TIMELINE_TYPE_VOTE_AGGREGATE,
            )
        )) {
            $this->timelineType = $timelineType;
        }

        return $this;
    }

    /**
     * {@inheritdoc}
     */
    public function getTimelineType()
    {
        return $this->timelineType;
    }

    /**
     * {@inheritdoc}
     */
    public function setTitle($title)
    {
        $this->title = $title;

        return $this;
    }

    /**
     * {@inheritdoc}
     */
    public function getTitle()
    {
        return $this->title;
    }
}
