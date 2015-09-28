<?php

/*
 * This file is part of the Stack Exchange Api Client library.
 *
 * Copyright (c) 2015 Beñat Espiña <benatespina@gmail.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace BenatEspina\StackExchangeApiClient\Model;

use BenatEspina\StackExchangeApiClient\Model\Abstracts\Base2Abstract as BaseNetworkActivity;
use BenatEspina\StackExchangeApiClient\Model\Interfaces\NetworkActivityInterface;
use BenatEspina\StackExchangeApiClient\Util\Util;

/**
 * Class NetworkActivity.
 *
 * @author Beñat Espiña <benatespina@gmail.com>
 */
class NetworkActivity extends BaseNetworkActivity implements NetworkActivityInterface
{
    const ACTIVITY_TYPE_ANSWER_POSTED = 'answer_posted';
    const ACTIVITY_TYPE_BADGE_EARNED = 'badge_earned';
    const ACTIVITY_TYPE_COMMENT_POSTED = 'comment_posted';
    const ACTIVITY_TYPE_QUESTION_POSTED = 'question_posted';

    /**
     * Account id.
     *
     * @var int
     */
    protected $accountId;

    /**
     * Activity type that can be 'question_posted', 'answer_posted', 'badge_earned', or 'comment_posted'.
     *
     * @var string
     */
    protected $activityType;

    /**
     * Api site parameter.
     *
     * @var string
     */
    protected $apiSiteParameter;

    /**
     * Badge id.
     *
     * @var int|null
     */
    protected $badgeId;

    /**
     * Description.
     *
     * @var string
     */
    protected $description;

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
     * The score.
     *
     * @var int|null
     */
    protected $score;

    /**
     * Constructor.
     *
     * @param null|mixed[] $json The json string being decoded
     */
    public function __construct($json = null)
    {
        $this->accountId = Util::setIfIntegerExists($json, 'account_id');
        $this->activityType = Util::isEqual(
            $json, 'activity_type',
            [
                self::ACTIVITY_TYPE_ANSWER_POSTED,
                self::ACTIVITY_TYPE_BADGE_EARNED,
                self::ACTIVITY_TYPE_COMMENT_POSTED,
                self::ACTIVITY_TYPE_QUESTION_POSTED,
            ]
        );
        $this->apiSiteParameter = Util::setIfStringExists($json, 'api_site_parameter');
        $this->description = Util::setIfStringExists($json, 'description');
        $this->link = Util::setIfStringExists($json, 'link');
        $this->postId = Util::setIfIntegerExists($json, 'post_id');
        $this->score = Util::setIfIntegerExists($json, 'score');
    }

    /**
     * {@inheritdoc}
     */
    public function setAccountId($accountId)
    {
        $this->accountId = $accountId;

        return $this;
    }

    /**
     * {@inheritdoc}
     */
    public function getAccountId()
    {
        return $this->accountId;
    }

    /**
     * {@inheritdoc}
     */
    public function setActivityType($activityType)
    {
        if (Util::coincidesElement(
            $activityType,
            [
                self::ACTIVITY_TYPE_ANSWER_POSTED,
                self::ACTIVITY_TYPE_BADGE_EARNED,
                self::ACTIVITY_TYPE_COMMENT_POSTED,
                self::ACTIVITY_TYPE_QUESTION_POSTED,
            ]
        ) === true
        ) {
            $this->activityType = $activityType;
        }

        return $this;
    }

    /**
     * {@inheritdoc}
     */
    public function getActivityType()
    {
        return $this->activityType;
    }

    /**
     * {@inheritdoc}
     */
    public function setApiSiteParameter($apiSiteParameter)
    {
        $this->apiSiteParameter = $apiSiteParameter;

        return $this;
    }

    /**
     * {@inheritdoc}
     */
    public function getApiSiteParameter()
    {
        return $this->apiSiteParameter;
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
    public function setDescription($description)
    {
        $this->description = $description;

        return $this;
    }

    /**
     * {@inheritdoc}
     */
    public function getDescription()
    {
        return $this->description;
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
    public function setScore($score)
    {
        $this->score = $score;

        return $this;
    }

    /**
     * {@inheritdoc}
     */
    public function getScore()
    {
        return $this->score;
    }
}
