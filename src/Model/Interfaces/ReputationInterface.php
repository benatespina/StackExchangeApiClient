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
 * Interface ReputationInterface.
 *
 * @author Beñat Espiña <benatespina@gmail.com>
 */
interface ReputationInterface
{
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
     * Sets on date.
     *
     * @param \DateTime $onDate The on date.
     *
     * @return $this self Object
     */
    public function setOnDate(\DateTime $onDate);

    /**
     * Gets on date.
     *
     * @return \DateTime
     */
    public function getOnDate();

    /**
     * Sets post id.
     *
     * @param int $postId The post id
     *
     * @return $this self Object
     */
    public function setPostId($postId);

    /**
     * Gets post id.
     *
     * @return int
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
     * Sets reputation change.
     *
     * @param int $reputationChange The reputation change
     *
     * @return $this self Object
     */
    public function setReputationChange($reputationChange);

    /**
     * Gets reputation change.
     *
     * @return int
     */
    public function getReputationChange();

    /**
     * Sets title.
     *
     * @param string $title The title
     *
     * @return $this self Object
     */
    public function setTitle($title);

    /**
     * Gets title.
     *
     * @return string
     */
    public function getTitle();

    /**
     * Sets id.
     *
     * @param int $userId The id
     *
     * @return $this self Object
     */
    public function setUserId($userId);

    /**
     * Gets id.
     *
     * @return int
     */
    public function getUserId();

    /**
     * Sets vote type.
     *
     * @param string $voteType The vote type that can be 'accepts', 'up_votes', 'down_votes', 'bounties_offered',
     *                         'bounties_won', 'spam', or 'suggested_edits'
     *
     * @return $this self Object
     */
    public function setVoteType($voteType);

    /**
     * Gets vote type.
     *
     * @return string
     */
    public function getVoteType();
}
