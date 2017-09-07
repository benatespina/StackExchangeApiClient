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
 * The network user model class.
 *
 * @author Beñat Espiña <benatespina@gmail.com>
 */
class NetworkUser implements Model
{
    const USER_TYPES = ['does_not_exist', 'moderator', 'registered', 'unregistered'];

    protected $id;
    protected $answerCount;
    protected $badgeCounts;
    protected $creationDate;
    protected $lastAccessDate;
    protected $questionCount;
    protected $reputation;
    protected $siteName;
    protected $siteUrl;
    protected $topAnswers;
    protected $topQuestions;
    protected $userType;

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

        $instance = new self();
        $instance
            ->setId(array_key_exists('user_id', $data) ? $data['user_id'] : null)
            ->setAnswerCount(array_key_exists('answer_count', $data) ? $data['answer_count'] : null)
            ->setBadgeCounts(
                array_key_exists('badge_counts', $data)
                    ? BadgeCount::fromJson($data['badge_counts'])
                    : null
            )
            ->setCreationDate(array_key_exists('creation_date', $data)
                ? new \DateTimeImmutable('@' . $data['creation_date'])
                : null
            )
            ->setLastAccessDate(array_key_exists('last_access_date', $data)
                ? new \DateTimeImmutable('@' . $data['last_access_date'])
                : null
            )
            ->setQuestionCount(array_key_exists('question_count', $data) ? $data['question_count'] : null)
            ->setQuestionCount(array_key_exists('reputation', $data) ? $data['reputation'] : null)
            ->setQuestionCount(array_key_exists('site_name', $data) ? $data['site_name'] : null)
            ->setQuestionCount(array_key_exists('site_url', $data) ? $data['site_url'] : null)
            ->setTopAnswers($topAnswers)
            ->setTopQuestions($topQuestions)
            ->setUserType(array_key_exists('user_type', $data) ? $data['user_type'] : null);

        return $instance;
    }

    public static function fromProperties(
        $id,
        $answerCount,
        BadgeCount $badgeCounts,
        \DateTimeInterface $creationDate,
        \DateTimeInterface $lastAccessDate,
        $questionCount,
        $reputation,
        $siteName,
        $siteUrl,
        array $topAnswers,
        array $topQuestions,
        $userType
    ) {
        $instance = new self();
        $instance
            ->setId($id)
            ->setAnswerCount($answerCount)
            ->setBadgeCounts($badgeCounts)
            ->setCreationDate($creationDate)
            ->setLastAccessDate($lastAccessDate)
            ->setQuestionCount($questionCount)
            ->setReputation($reputation)
            ->setSiteName($siteName)
            ->setSiteUrl($siteUrl)
            ->setTopAnswers($topAnswers)
            ->setTopQuestions($topQuestions)
            ->setUserType($userType);

        return $instance;
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

    public function setBadgeCounts(BadgeCount $badgeCounts = null)
    {
        $this->badgeCounts = $badgeCounts;

        return $this;
    }

    public function getCreationDate()
    {
        return $this->creationDate;
    }

    public function setCreationDate(\DateTimeInterface $creationDate = null)
    {
        $this->creationDate = $creationDate;

        return $this;
    }

    public function getLastAccessDate()
    {
        return $this->lastAccessDate;
    }

    public function setLastAccessDate(\DateTimeInterface $lastAccessDate = null)
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
        if (in_array($userType, self::USER_TYPES, true)) {
            $this->userType = $userType;
        }

        return $this;
    }
}
