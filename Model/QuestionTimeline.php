<?php

/**
 * This file is part of the StackExchangeApiClient library.
 *
 * @author  benatespina <benatespina@gmail.com>
 *
 * @license MIT
 */

namespace BenatEspina\StackExchangeApiClient\Model;

use BenatEspina\StackExchangeApiClient\Model\Interfaces\QuestionTimelineInterface;
use BenatEspina\StackExchangeApiClient\Model\Interfaces\ShallowUserInterface;
use BenatEspina\StackExchangeApiClient\Model\Traits\VoteCountTrait;
use BenatEspina\StackExchangeApiClient\Util\Util;

/**
 * Class QuestionTimeline.
 *
 * @package BenatEspina\StackExchangeApiClient\Model
 */
class QuestionTimeline implements QuestionTimelineInterface
{
    use VoteCountTrait;

    const TIMELINE_TYPE_ACCEPTED_ANSWER = 'accepted_answer';
    const TIMELINE_TYPE_ANSWER = 'answer';
    const TIMELINE_TYPE_COMMENT = 'comment';
    const TIMELINE_TYPE_POST_STATE_CHANGED = 'post_state_changed';
    const TIMELINE_TYPE_QUESTION = 'question';
    const TIMELINE_TYPE_REVISION = 'revision';
    const TIMELINE_TYPE_UNACCEPTED_ANSWER = 'unaccepted_answer';
    const TIMELINE_TYPE_VOTE_AGGREGATE = 'vote_aggregate';

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
     * The owner.
     *
     * @var \BenatEspina\StackExchangeApiClient\Model\Interfaces\ShallowUserInterface|null
     */
    protected $owner;

    /**
     * The post id.
     *
     * @var int|null
     */
    protected $postId;

    /**
     * The question id.
     *
     * @var int|null
     */
    protected $questionId;

    /**
     * The revision guid.
     *
     * @var string|null
     */
    protected $revisionGuid;

    /**
     * The timeline type that can be 'question', 'answer', 'comment', 'unaccepted_answer',
     * 'accepted_answer','vote_aggregate', 'revision', or 'post_state_changed'.
     *
     * @var string
     */
    protected $timelineType;

    /**
     * The user.
     *
     * @var \BenatEspina\StackExchangeApiClient\Model\Interfaces\ShallowUserInterface|null
     */
    protected $user;

    /**
     * Constructor.
     *
     * @param null|(int|string)[] $json The json string being decoded
     */
    public function __construct($json = null)
    {
        $this->loadVoteCount($json);

        $this->commentId = Util::setIfExists($json, 'comment_id');
        $this->creationDate = Util::setIfDateTimeExists($json, 'creation_date');
        $this->owner = new ShallowUser(Util::setIfExists($json, 'owner'));
        $this->postId = Util::setIfExists($json, 'post_id');
        $this->questionId = Util::setIfExists($json, 'question_id');
        $this->revisionGuid = Util::setIfExists($json, 'revision_guid');
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
        $this->user = new ShallowUser(Util::setIfExists($json, 'user'));
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
    public function setOwner(ShallowUserInterface $owner)
    {
        $this->owner = $owner;

        return $this;
    }

    /**
     * {@inheritdoc}
     */
    public function getOwner()
    {
        return $this->owner;
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
    public function setQuestionId($questionId)
    {
        $this->questionId = $questionId;

        return $this;
    }

    /**
     * {@inheritdoc}
     */
    public function getQuestionId()
    {
        return $this->questionId;
    }

    /**
     * {@inheritdoc}
     */
    public function setRevisionGuid($revisionGuid)
    {
        $this->revisionGuid = $revisionGuid;

        return $this;
    }

    /**
     * {@inheritdoc}
     */
    public function getRevisionGuid()
    {
        return $this->revisionGuid;
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
    public function setUser(ShallowUserInterface $user)
    {
        $this->user = $user;

        return $this;
    }

    /**
     * {@inheritdoc}
     */
    public function getUser()
    {
        return $this->user;
    }
}
