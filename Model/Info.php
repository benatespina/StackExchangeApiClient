<?php

/**
 * This file is part of the StackExchangeApiClient library.
 *
 * @author  benatespina <benatespina@gmail.com>
 *
 * @license MIT
 */

namespace BenatEspina\StackExchangeApiClient\Model;

use BenatEspina\StackExchangeApiClient\Model\Interfaces\InfoInterface;
use BenatEspina\StackExchangeApiClient\Model\Interfaces\SiteInterface;
use BenatEspina\StackExchangeApiClient\Model\Traits\TotalResourceTrait;
use BenatEspina\StackExchangeApiClient\Util\Util;

/**
 * Class Info.
 *
 * @package BenatEspina\StackExchangeApiClient\Model
 */
class Info implements InfoInterface
{
    use TotalResourceTrait;

    /**
     * Answers per minute.
     *
     * @var int
     */
    protected $answersPerMinute;

    /**
     * Api revision.
     *
     * @var string
     */
    protected $apiRevision;

    /**
     * Badges per minute.
     *
     * @var int
     */
    protected $badgesPerMinute;

    /**
     * New active users.
     *
     * @var int
     */
    protected $newActiveUsers;

    /**
     * Questions per minute.
     *
     * @var int
     */
    protected $questionsPerMinute;

    /**
     * The site.
     *
     * @var \BenatEspina\StackExchangeApiClient\Model\Interfaces\SiteInterface
     */
    protected $site;

    /**
     * Constructor.
     *
     * @param null|(int|string)[] $json The json string being decoded
     */
    public function __construct($json = null)
    {
        $this->answersPerMinute = Util::setIfExists($json, 'answers_per_minute');
        $this->apiRevision = Util::setIfExists($json, 'api_revision');
        $this->badgesPerMinute = Util::setIfExists($json, 'badges_per_minute');
        $this->newActiveUsers = Util::setIfExists($json, 'new_active_users');
        $this->questionsPerMinute = Util::setIfExists($json, 'questions_per_minute');
        $this->site = new Site(Util::setIfExists($json, 'site'));
    }

    /**
     * {@inheritdoc}
     */
    public function setAnswersPerMinute($answersPerMinute)
    {
        $this->answersPerMinute = $answersPerMinute;

        return $this;
    }

    /**
     * {@inheritdoc}
     */
    public function getAnswersPerMinute()
    {
        return $this->answersPerMinute;
    }

    /**
     * {@inheritdoc}
     */
    public function setApiRevision($apiRevision)
    {
        $this->apiRevision = $apiRevision;

        return $this;
    }

    /**
     * {@inheritdoc}
     */
    public function getApiRevision()
    {
        return $this->apiRevision;
    }

    /**
     * {@inheritdoc}
     */
    public function setBadgesPerMinute($badgesPerMinute)
    {
        $this->badgesPerMinute = $badgesPerMinute;

        return $this;
    }

    /**
     * {@inheritdoc}
     */
    public function getBadgesPerMinute()
    {
        return $this->badgesPerMinute;
    }

    /**
     * {@inheritdoc}
     */
    public function setNewActiveUsers($newActiveUsers)
    {
        $this->newActiveUsers = $newActiveUsers;

        return $this;
    }

    /**
     * {@inheritdoc}
     */
    public function getNewActiveUsers()
    {
        return $this->newActiveUsers;
    }

    /**
     * {@inheritdoc}
     */
    public function setQuestionsPerMinute($questionsPerMinute)
    {
        $this->questionsPerMinute = $questionsPerMinute;

        return $this;
    }

    /**
     * {@inheritdoc}
     */
    public function getQuestionsPerMinute()
    {
        return $this->questionsPerMinute;
    }

    /**
     * {@inheritdoc}
     */
    public function setSite(SiteInterface $site)
    {
        $this->site = $site;

        return $this;
    }

    /**
     * {@inheritdoc}
     */
    public function getSite()
    {
        return $this->site;
    }
}
