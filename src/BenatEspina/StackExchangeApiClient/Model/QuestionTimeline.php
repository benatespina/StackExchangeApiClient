<?php

/*
 * This file is part of the Stack Exchange Api Client library.
 *
 * Copyright (c) 2014-2016 Beñat Espiña <benatespina@gmail.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace BenatEspina\StackExchangeApiClient\Model;

/**
 * Class question timeline model class.
 *
 * @author Beñat Espiña <benatespina@gmail.com>
 */
class QuestionTimeline implements Model
{
    const TIMELINE_TYPES = [
        'accepted_answer',
        'answer',
        'comment',
        'post_state_changed',
        'question',
        'revision',
        'unaccepted_answer',
        'vote_aggregate',
    ];

    protected $downVoteCount;
    protected $upVoteCount;
    protected $commentId;
    protected $creationDate;
    protected $owner;
    protected $postId;
    protected $questionId;
    protected $revisionGuid;
    protected $timelineType;
    protected $user;

    public static function fromJson(array $data)
    {
        $instance = new self();
        $instance
            ->setDownVoteCount(array_key_exists('down_vote_count', $data) ? $data['down_vote_count'] : null)
            ->setUpVoteCount(array_key_exists('up_vote_count', $data) ? $data['up_vote_count'] : null)
            ->setCommentId(array_key_exists('comment_id', $data) ? $data['comment_id'] : null)
            ->setCreationDate(
                array_key_exists('creation_date', $data)
                    ? new \DateTimeImmutable('@' . $data['creation_date'])
                    : null
            )
            ->setOwner(array_key_exists('owner', $data) ? $data['owner'] : null)
            ->setPostId(array_key_exists('post_id', $data) ? $data['post_id'] : null)
            ->setQuestionId(array_key_exists('question_id', $data) ? $data['question_id'] : null)
            ->setRevisionGuid(array_key_exists('revision_guid', $data) ? $data['revision_guid'] : null)
            ->setTimelineType(array_key_exists('timeline_type', $data) ? $data['timeline_type'] : null)
            ->setUser(array_key_exists('user', $data) ? $data['user'] : null);

        return $instance;
    }

    public static function fromProperties(
        $downVoteCount,
        $upVoteCount,
        $commentId,
        \DateTimeInterface $creationDate,
        ShallowUser $owner,
        $postId,
        $questionId,
        $revisionGuid,
        $timelineType,
        ShallowUser $user
    ) {
        $instance = new self();
        $instance
            ->setDownVoteCount($downVoteCount)
            ->setUpVoteCount($upVoteCount)
            ->setCommentId($commentId)
            ->setCreationDate($creationDate)
            ->setOwner($owner)
            ->setPostId($postId)
            ->setQuestionId($questionId)
            ->setRevisionGuid($revisionGuid)
            ->setTimelineType($timelineType)
            ->setUser($user);

        return $instance;
    }

    public function setDownVoteCount($downVoteCount)
    {
        $this->downVoteCount = $downVoteCount;

        return $this;
    }

    public function getDownVoteCount()
    {
        return $this->downVoteCount;
    }

    public function setUpVoteCount($upVoteCount)
    {
        $this->upVoteCount = $upVoteCount;

        return $this;
    }

    public function getUpVoteCount()
    {
        return $this->upVoteCount;
    }

    public function setCommentId($commentId)
    {
        $this->commentId = $commentId;

        return $this;
    }

    public function getCommentId()
    {
        return $this->commentId;
    }

    public function setCreationDate(\DateTimeInterface $creationDate)
    {
        $this->creationDate = $creationDate;

        return $this;
    }

    public function getCreationDate()
    {
        return $this->creationDate;
    }

    public function setOwner(ShallowUser $owner)
    {
        $this->owner = $owner;

        return $this;
    }

    public function getOwner()
    {
        return $this->owner;
    }

    public function setPostId($postId)
    {
        $this->postId = $postId;

        return $this;
    }

    public function getPostId()
    {
        return $this->postId;
    }

    public function setQuestionId($questionId)
    {
        $this->questionId = $questionId;

        return $this;
    }

    public function getQuestionId()
    {
        return $this->questionId;
    }

    public function setRevisionGuid($revisionGuid)
    {
        $this->revisionGuid = $revisionGuid;

        return $this;
    }

    public function getRevisionGuid()
    {
        return $this->revisionGuid;
    }

    public function setTimelineType($timelineType)
    {
        if (in_array($timelineType, self::TIMELINE_TYPES, true)) {
            $this->timelineType = $timelineType;
        }

        return $this;
    }

    public function getTimelineType()
    {
        return $this->timelineType;
    }

    public function setUser(ShallowUser $user)
    {
        $this->user = $user;

        return $this;
    }

    public function getUser()
    {
        return $this->user;
    }
}
