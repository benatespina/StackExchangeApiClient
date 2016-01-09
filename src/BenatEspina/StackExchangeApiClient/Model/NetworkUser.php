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
 * The network user model class.
 *
 * @author Beñat Espiña <benatespina@gmail.com>
 */
class NetworkUser implements Model
{
    const USER_TYPE_DOES_NOT_EXIST = 'does_not_exist';
    const USER_TYPE_MODERATOR = 'moderator';
    const USER_TYPE_REGISTERED = 'registered';
    const USER_TYPE_UNREGISTERED = 'unregistered';

    private $id;
    private $answerCount;
    private $badgeCounts;
    private $creationDate;
    private $lastAccessDate;
    private $questionCount;
    private $reputation;
    private $siteName;
    private $siteUrl;
    private $topAnswers;
    private $topQuestions;
    private $userType;

    public static function fromJson(array $data)
    {
        $topAnswers = [];
        $topQuestions = [];
        if (array_key_exists('top_answers', $data) && is_array($data['top_answers'])) {
            foreach ($data['top_answers'] as $topAnswer) {
                $topAnswers[] = NetworkPost::fromJson($topAnswer);
            }
        }
        if (array_key_exists('top_questions', $data) && is_array($data['top_questions'])) {
            foreach ($data['top_questions'] as $topQuestion) {
                $topQuestions[] = NetworkPost::fromJson($topQuestion);
            }
        }

        return new self(
            array_key_exists('user_id', $data) ? $data['user_id'] : null,
            array_key_exists('answer_count', $data) ? $data['answer_count'] : null,
            array_key_exists('badge_counts', $data) ? BadgeCount::fromJson($data['badge_counts']) : null,
            array_key_exists('creation_date', $data) ? new \DateTime('@' . $data['creation_date']) : null,
            array_key_exists('last_access_date', $data) ? new \DateTime('@' . $data['last_access_date']) : null,
            array_key_exists('question_count', $data) ? $data['question_count'] : null,
            array_key_exists('reputation', $data) ? $data['reputation'] : null,
            array_key_exists('site_name', $data) ? $data['site_name'] : null,
            array_key_exists('site_url', $data) ? $data['site_url'] : null,
            $topAnswers,
            $topQuestions,
            array_key_exists('user_type', $data) ? $data['user_type'] : null
        );
    }

    public static function fromProperties(
        $id,
        $answerCount,
        BadgeCount $badgeCounts,
        \DateTime $creationDate,
        \DateTime $lastAccessDate,
        $questionCount,
        $reputation,
        $siteName,
        $siteUrl,
        array $topAnswers,
        array $topQuestions,
        $userType
    ) {
    }

    private function __construct(
        $id = null,
        $answerCount = null,
        BadgeCount $badgeCounts = null,
        \DateTime $creationDate = null,
        \DateTime $lastAccessDate = null,
        $questionCount = null,
        $reputation = null,
        $siteName = null,
        $siteUrl = null,
        array $topAnswers = [],
        array $topQuestions = [],
        $userType = null
    ) {
        $this->id = $id;
        $this->answerCount = $answerCount;
        $this->badgeCounts = $badgeCounts;
        $this->creationDate = $creationDate;
        $this->lastAccessDate = $lastAccessDate;
        $this->questionCount = $questionCount;
        $this->reputation = $reputation;
        $this->siteName = $siteName;
        $this->siteUrl = $siteUrl;
        $this->topAnswers = $topAnswers;
        $this->topQuestions = $topQuestions;
        $this->userType = $userType;
        $this->setUserType($userType);
    }

    public function getId()
    {
        return $this->id;
    }

    public function setId($id)
    {
        $this->id = $id;

        return $this;
    }

    public function getAnswerCount()
    {
        return $this->answerCount;
    }

    public function setAnswerCount($answerCount)
    {
        $this->answerCount = $answerCount;

        return $this;
    }

    public function getBadgeCounts()
    {
        return $this->badgeCounts;
    }

    public function setBadgeCounts(BadgeCount $badgeCounts)
    {
        $this->badgeCounts = $badgeCounts;

        return $this;
    }

    public function getCreationDate()
    {
        return $this->creationDate;
    }

    public function setCreationDate(\DateTime $creationDate)
    {
        $this->creationDate = $creationDate;

        return $this;
    }

    public function getLastAccessDate()
    {
        return $this->lastAccessDate;
    }

    public function setLastAccessDate(\DateTime $lastAccessDate)
    {
        $this->lastAccessDate = $lastAccessDate;

        return $this;
    }

    public function getQuestionCount()
    {
        return $this->questionCount;
    }

    public function setQuestionCount($questionCount)
    {
        $this->questionCount = $questionCount;

        return $this;
    }

    public function getReputation()
    {
        return $this->reputation;
    }

    public function setReputation($reputation)
    {
        $this->reputation = $reputation;

        return $this;
    }

    public function getSiteName()
    {
        return $this->siteName;
    }

    public function setSiteName($siteName)
    {
        $this->siteName = $siteName;

        return $this;
    }

    public function getSiteUrl()
    {
        return $this->siteUrl;
    }

    public function setSiteUrl($siteUrl)
    {
        $this->siteUrl = $siteUrl;

        return $this;
    }

    public function getTopAnswers()
    {
        return $this->topAnswers;
    }

    public function setTopAnswers($topAnswers)
    {
        $this->topAnswers = $topAnswers;

        return $this;
    }

    public function getTopQuestions()
    {
        return $this->topQuestions;
    }

    public function setTopQuestions($topQuestions)
    {
        $this->topQuestions = $topQuestions;

        return $this;
    }

    public function getUserType()
    {
        return $this->userType;
    }

    public function setUserType($userType)
    {
        if (in_array($userType, [
            self::USER_TYPE_DOES_NOT_EXIST,
            self::USER_TYPE_MODERATOR,
            self::USER_TYPE_REGISTERED,
            self::USER_TYPE_UNREGISTERED,
        ], true)) {
            $this->userType = $userType;
        }

        return $this;
    }
}
