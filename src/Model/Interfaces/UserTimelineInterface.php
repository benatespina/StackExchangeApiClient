<?php

/*
 * This file is part of the Stack Exchange Api Client library.
 *
 * Copyright (c) 2015 Beñat Espiña <benatespina@gmail.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace BenatEspina\StackExchangeApiClient\Model\Interfaces;

/**
 * Interface UserTimelineInterface.
 *
 * @author Beñat Espiña <benatespina@gmail.com>
 */
interface UserTimelineInterface
{
    /**
     * Sets badge id.
     *
     * @param int|null $badgeId The badge id
     *
     * @return $this self Object
     */
    public function setBadgeId($badgeId);

    /**
     * Gets badge id.
     *
     * @return int|null
     */
    public function getBadgeId();

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
     * Sets detail.
     *
     * @param string|null $detail The detail
     *
     * @return $this self Object
     */
    public function setDetail($detail);

    /**
     * Gets detail.
     *
     * @return string|null
     */
    public function getDetail();

    /**
     * Sets link.
     *
     * @param string $link The link
     *
     * @return $this self Object
     */
    public function setLink($link);

    /**
     * Gets link.
     *
     * @return string
     */
    public function getLink();

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
     * Sets post type.
     *
     * @param int $postType The post type that can be 'question' or 'answer'
     *
     * @return $this self Object
     */
    public function setPostType($postType);

    /**
     * Gets post type.
     *
     * @return int
     */
    public function getPostType();

    /**
     * Sets suggested edit id.
     *
     * @param int|null $suggestedEditId The suggested edit id
     *
     * @return $this self Object
     */
    public function setSuggestedEditId($suggestedEditId);

    /**
     * Gets suggested edit id.
     *
     * @return int|null
     */
    public function getSuggestedEditId();

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
     * Sets title.
     *
     * @param string|null $title The title
     *
     * @return $this self Object
     */
    public function setTitle($title);

    /**
     * Gets title.
     *
     * @return string|null
     */
    public function getTitle();
}
