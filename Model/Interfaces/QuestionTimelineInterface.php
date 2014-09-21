<?php

/**
 * This file is part of the StackExchangeApiClient library.
 *
 * @author  benatespina <benatespina@gmail.com>
 *
 * @license MIT
 */

namespace BenatEspina\StackExchangeApiClient\Model\Interfaces;

use BenatEspina\StackExchangeApiClient\Model\Interfaces\Traits\VoteCountInterface;

/**
 * Interface QuestionTimelineInterface.
 *
 * @package BenatEspina\StackExchangeApiClient\Model\Interfaces
 */
interface QuestionTimelineInterface extends VoteCountInterface
{
    /**
     * Sets comment id.
     *
     * @param int|null $commentId The comment id
     *
     * @return $this self Object
     */
    public function setCommentId($commentId);

    /**
     * Gets comment id.
     *
     * @return int|null
     */
    public function getCommentId();

    /**
     * Sets creation date.
     *
     * @param \DateTime $creationDate The creation date
     *
     * @return $this self Object
     */
    public function setCreationDate(\DateTime $creationDate);

    /**
     * Gets creation date.
     *
     * @return \DateTime
     */
    public function getCreationDate();

    /**
     * Sets owner.
     *
     * @param \BenatEspina\StackExchangeApiClient\Model\Interfaces\ShallowUserInterface|null $owner The owner
     *
     * @return $this self Object
     */
    public function setOwner(ShallowUserInterface $owner);

    /**
     * Gets owner.
     *
     * @return \BenatEspina\StackExchangeApiClient\Model\Interfaces\ShallowUserInterface|null
     */
    public function getOwner();

    /**
     * Sets post id.
     *
     * @param int|null $postId The post id
     *
     * @return $this self Object
     */
    public function setPostId($postId);

    /**
     * Gets post id.
     *
     * @return int|null
     */
    public function getPostId();

    /**
     * Sets question id.
     *
     * @param int $questionId The question id
     *
     * @return $this self Object
     */
    public function setQuestionId($questionId);

    /**
     * Gets question id.
     *
     * @return int
     */
    public function getQuestionId();

    /**
     * Sets revision guid.
     *
     * @param string|null $revisionGuid The revision guid
     *
     * @return $this self Object
     */
    public function setRevisionGuid($revisionGuid);

    /**
     * Gets revision guid.
     *
     * @return string|null
     */
    public function getRevisionGuid();

    /**
     * Sets timeline type.
     *
     * @param string $timelineType The timeline type that can be 'question', 'answer', 'comment', 'unaccepted_answer',
     *                             'accepted_answer', 'vote_aggregate', 'revision', or 'post_state_changed'
     *
     * @return $this self Object
     */
    public function setTimelineType($timelineType);

    /**
     * Gets timeline type.
     *
     * @return string
     */
    public function getTimelineType();

    /**
     * Sets user.
     *
     * @param \BenatEspina\StackExchangeApiClient\Model\Interfaces\ShallowUserInterface|null $user The user
     *
     * @return $this self Object
     */
    public function setUser(ShallowUserInterface $user);

    /**
     * Gets user.
     *
     * @return \BenatEspina\StackExchangeApiClient\Model\Interfaces\ShallowUserInterface|null
     */
    public function getUser();
}
