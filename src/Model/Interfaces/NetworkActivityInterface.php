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
 * Interface NetworkActivityInterface.
 *
 * @author Beñat Espiña <benatespina@gmail.com>
 */
interface NetworkActivityInterface
{
    /**
     * Sets account id.
     *
     * @param int $accountId The account id
     *
     * @return $this self Object
     */
    public function setAccountId($accountId);

    /**
     * Gets account id.
     *
     * @return int
     */
    public function getAccountId();

    /**
     * Sets activity type.
     *
     * @param int $activityType The activity type that can be 'question_posted',
     *                          'answer_posted', 'badge_earned', or 'comment_posted'
     *
     * @return $this self Object
     */
    public function setActivityType($activityType);

    /**
     * Gets activity type.
     *
     * @return int
     */
    public function getActivityType();

    /**
     * Sets api site parameter.
     *
     * @param string $apiSiteParameter The api site parameter
     *
     * @return string
     */
    public function setApiSiteParameter($apiSiteParameter);

    /**
     * Gets api site parameter.
     *
     * @return string|null
     */
    public function getApiSiteParameter();

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
     * Sets description.
     *
     * @param string $description The description
     *
     * @return $this self Object
     */
    public function setDescription($description);

    /**
     * Gets description.
     *
     * @return string
     */
    public function getDescription();

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
     * Sets score.
     *
     * @param int|null $score The score
     *
     * @return $this self Object
     */
    public function setScore($score);

    /**
     * Gets score.
     *
     * @return int|null
     */
    public function getScore();
}
