<?php

/*
 * This file is part of the Stack Exchange Api Client library.
 *
 * (c) Beñat Espiña <benatespina@gmail.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

declare(strict_types=1);
/*
 * This file is part of the Stack Exchange Api Client library.
 *
 * (c) Beñat Espiña <benatespina@gmail.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace BenatEspina\StackExchangeApiClient\Model;

/**
 * Class network activity model class.
 *
 * @author Beñat Espiña <benatespina@gmail.com>
 */
class NetworkActivity implements Model
{
    const ACTIVITY_TYPES = [
        'answer_posted',
        'badge_earned',
        'comment_posted',
        'question_posted',
    ];

    protected $accountId;
    protected $activityType;
    protected $apiSiteParameter;
    protected $badgeId;
    protected $description;
    protected $link;
    protected $postId;
    protected $score;
    protected $creationDate;
    protected $tags;
    protected $title;

    public static function fromJson(array $data)
    {
        $tags = [];
        if (array_key_exists('tags', $data) && is_array($data['tags'])) {
            foreach ($data['tags'] as $tag) {
                $tags[] = Tag::fromJson($tag);
            }
        }

        $instance = new self();
        $instance
            ->setAccountId(array_key_exists('account_id', $data) ? $data['account_id'] : null)
            ->setActivityType(array_key_exists('activity_type', $data) ? $data['activity_type'] : null)
            ->setApiSiteParameter(array_key_exists('api_site_parameter', $data) ? $data['api_site_parameter'] : null)
            ->setBadgeId(array_key_exists('badge_id', $data) ? $data['badge_id'] : null)
            ->setDescription(array_key_exists('description', $data) ? $data['description'] : null)
            ->setLink(array_key_exists('link', $data) ? $data['link'] : null)
            ->setPostId(array_key_exists('post_id', $data) ? $data['post_id'] : null)
            ->setScore(array_key_exists('score', $data) ? $data['score'] : null)
            ->setCreationDate(
                array_key_exists('creation_date', $data)
                    ? new \DateTimeImmutable('@' . $data['creation_date'])
                    : null
            )
            ->setTags($tags)
            ->setTitle(array_key_exists('title', $data) ? $data['title'] : null);

        return $instance;
    }

    public static function fromProperties(
        $accountId,
        $activityType,
        $apiSiteParameter,
        $badgeId,
        $description,
        $link,
        $postId,
        $score,
        \DateTimeInterface $creationDate,
        $tags,
        $title
    ) {
        $instance = new self();
        $instance
            ->setAccountId($accountId)
            ->setActivityType($activityType)
            ->setApiSiteParameter($apiSiteParameter)
            ->setBadgeId($badgeId)
            ->setDescription($description)
            ->setLink($link)
            ->setPostId($postId)
            ->setScore($score)
            ->setCreationDate($creationDate)
            ->setTags($tags)
            ->setTitle($title);

        return $instance;
    }

    public function setAccountId($accountId)
    {
        $this->accountId = $accountId;

        return $this;
    }

    public function getAccountId()
    {
        return $this->accountId;
    }

    public function setActivityType($activityType)
    {
        if (in_array($activityType, self::ACTIVITY_TYPES, true)) {
            $this->activityType = $activityType;
        }

        return $this;
    }

    public function getActivityType()
    {
        return $this->activityType;
    }

    public function setApiSiteParameter($apiSiteParameter)
    {
        $this->apiSiteParameter = $apiSiteParameter;

        return $this;
    }

    public function getApiSiteParameter()
    {
        return $this->apiSiteParameter;
    }

    public function setBadgeId($badgeId)
    {
        $this->badgeId = $badgeId;

        return $this;
    }

    public function getBadgeId()
    {
        return $this->badgeId;
    }

    public function setDescription($description)
    {
        $this->description = $description;

        return $this;
    }

    public function getDescription()
    {
        return $this->description;
    }

    public function setLink($link)
    {
        $this->link = $link;

        return $this;
    }

    public function getLink()
    {
        return $this->link;
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

    public function setScore($score)
    {
        $this->score = $score;

        return $this;
    }

    public function getScore()
    {
        return $this->score;
    }

    public function setCreationDate(\DateTimeInterface $creationDate = null)
    {
        $this->creationDate = $creationDate;

        return $this;
    }

    public function getCreationDate()
    {
        return $this->creationDate;
    }

    public function setTags($tags)
    {
        $this->tags = $tags;

        return $this;
    }

    public function getTags()
    {
        return $this->tags;
    }

    public function setTitle($title)
    {
        $this->title = $title;

        return $this;
    }

    public function getTitle()
    {
        return $this->title;
    }
}
