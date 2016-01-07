<?php

/*
 * This file is part of the Stack Exchange Api Client library.
 *
 * Copyright (c) 2014-2015 Beñat Espiña <benatespina@gmail.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace BenatEspina\StackExchangeApiClient\Model;

/**
 * The user model class.
 *
 * @author Beñat Espiña <benatespina@gmail.com>
 */
class User
{
    private $shallowUser;
    private $aboutMe;
    private $accountId;
    private $age;
    private $answerCount;
    private $creationDate;
    private $displayName;
    private $downVoteCount;
    private $isEmployee;
    private $lastAccessDate;
    private $lastModifiedDate;
    private $location;
    private $questionCount;
    private $reputationChangeDay;
    private $reputationChangeMonth;
    private $reputationChangeQuarter;
    private $reputationChangeWeek;
    private $reputationChangeYear;
    private $timedPenaltyDate;
    private $upVoteCount;
    private $viewCount;
    private $websiteUrl;

    public static function fromJson(array $data)
    {
        return new self(
            ShallowUser::fromJson($data),
            array_key_exists('about_me', $data) ? $data['about_me'] : null,
            array_key_exists('account_id', $data) ? $data['account_id'] : null,
            array_key_exists('age', $data) ? $data['age'] : null,
            array_key_exists('answer_count', $data) ? $data['answer_count'] : null,
            array_key_exists('creation_date', $data) ? new \DateTime('@' . $data['creation_date']) : null,
            array_key_exists('display_name', $data) ? $data['display_name'] : null,
            array_key_exists('down_vote_count', $data) ? $data['down_vote_count'] : null,
            array_key_exists('is_employee', $data) ? $data['is_employee'] : null,
            array_key_exists('last_access_date', $data) ? new \DateTime('@' . $data['last_access_date']) : null,
            array_key_exists('last_modified_date', $data) ? new \DateTime('@' . $data['last_modified_date']) : null,
            array_key_exists('location', $data) ? $data['location'] : null,
            array_key_exists('question_count', $data) ? $data['question_count'] : null,
            array_key_exists('reputation_change_day', $data) ? $data['reputation_change_day'] : null,
            array_key_exists('reputation_change_month', $data) ? $data['reputation_change_month'] : null,
            array_key_exists('reputation_change_quarter', $data) ? $data['reputation_change_quarter'] : null,
            array_key_exists('reputation_change_week', $data) ? $data['reputation_change_week'] : null,
            array_key_exists('reputation_change_year', $data) ? $data['reputation_change_year'] : null,
            array_key_exists('timed_penalty_date', $data) ? new \DateTime('@' . $data['timed_penalty_date']) : null,
            array_key_exists('up_vote_count', $data) ? $data['up_vote_count'] : null,
            array_key_exists('view_count', $data) ? $data['view_count'] : null,
            array_key_exists('website_url', $data) ? $data['website_url'] : null
        );
    }

    public static function fromProperties(
        ShallowUser $shallowUser,
        $accountId,
        $answerCount,
        \DateTime $creationDate,
        $displayName,
        $downVoteCount,
        $isEmployee,
        \DateTime $lastAccessDate,
        $questionCount,
        $reputationChangeDay,
        $reputationChangeMonth,
        $reputationChangeQuarter,
        $reputationChangeWeek,
        $reputationChangeYear,
        $upVoteCount,
        $viewCount,
        $aboutMe = null,
        $age = null,
        \DateTime $lastModifiedDate = null,
        $location = null,
        \DateTime $timedPenaltyDate = null,
        $websiteUrl = null
    ) {
        return new self(
            $shallowUser,
            $aboutMe,
            $accountId,
            $age,
            $answerCount,
            $creationDate,
            $displayName,
            $downVoteCount,
            $isEmployee,
            $lastAccessDate,
            $lastModifiedDate,
            $location,
            $questionCount,
            $reputationChangeDay,
            $reputationChangeMonth,
            $reputationChangeQuarter,
            $reputationChangeWeek,
            $reputationChangeYear,
            $timedPenaltyDate,
            $upVoteCount,
            $viewCount,
            $websiteUrl
        );
    }

    private function __construct(
        ShallowUser $shallowUser = null,
        $aboutMe = null,
        $accountId = null,
        $age = null,
        $answerCount = null,
        \DateTime $creationDate = null,
        $displayName = null,
        $downVoteCount = null,
        $isEmployee = null,
        \DateTime $lastAccessDate = null,
        \DateTime $lastModifiedDate = null,
        $location = null,
        $questionCount = null,
        $reputationChangeDay = null,
        $reputationChangeMonth = null,
        $reputationChangeQuarter = null,
        $reputationChangeWeek = null,
        $reputationChangeYear = null,
        \DateTime $timedPenaltyDate = null,
        $upVoteCount = null,
        $viewCount = null,
        $websiteUrl = null
    ) {
        $this->shallowUser = $shallowUser;
        $this->aboutMe = $aboutMe;
        $this->accountId = $accountId;
        $this->age = $age;
        $this->answerCount = $answerCount;
        $this->creationDate = $creationDate;
        $this->displayName = $displayName;
        $this->downVoteCount = $downVoteCount;
        $this->isEmployee = $isEmployee;
        $this->lastAccessDate = $lastAccessDate;
        $this->lastModifiedDate = $lastModifiedDate;
        $this->location = $location;
        $this->questionCount = $questionCount;
        $this->reputationChangeDay = $reputationChangeDay;
        $this->reputationChangeMonth = $reputationChangeMonth;
        $this->reputationChangeQuarter = $reputationChangeQuarter;
        $this->reputationChangeWeek = $reputationChangeWeek;
        $this->reputationChangeYear = $reputationChangeYear;
        $this->timedPenaltyDate = $timedPenaltyDate;
        $this->upVoteCount = $upVoteCount;
        $this->viewCount = $viewCount;
        $this->websiteUrl = $websiteUrl;
    }

    public function getShallowUser()
    {
        return $this->shallowUser;
    }

    public function setShallowUser(ShallowUser $shallowUser)
    {
        $this->shallowUser = $shallowUser;

        return $this;
    }

    public function getAboutMe()
    {
        return $this->aboutMe;
    }

    public function setAboutMe($aboutMe)
    {
        $this->aboutMe = $aboutMe;

        return $this;
    }

    public function getAccountId()
    {
        return $this->accountId;
    }

    public function setAccountId($accountId)
    {
        $this->accountId = $accountId;

        return $this;
    }

    public function getAge()
    {
        return $this->age;
    }

    public function setAge($age)
    {
        $this->age = $age;

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

    public function getCreationDate()
    {
        return $this->creationDate;
    }

    public function setCreationDate(\DateTime $creationDate)
    {
        $this->creationDate = $creationDate;

        return $this;
    }

    public function getDisplayName()
    {
        return $this->displayName;
    }

    public function setDisplayName($displayName)
    {
        $this->displayName = $displayName;

        return $this;
    }

    public function getDownVoteCount()
    {
        return $this->downVoteCount;
    }

    public function setDownVoteCount($downVoteCount)
    {
        $this->downVoteCount = $downVoteCount;

        return $this;
    }

    public function getIsEmployee()
    {
        return $this->isEmployee;
    }

    public function setIsEmployee($isEmployee)
    {
        $this->isEmployee = $isEmployee;

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

    public function getLastModifiedDate()
    {
        return $this->lastModifiedDate;
    }

    public function setLastModifiedDate(\DateTime $lastModifiedDate)
    {
        $this->lastModifiedDate = $lastModifiedDate;

        return $this;
    }

    public function getLocation()
    {
        return $this->location;
    }

    public function setLocation($location)
    {
        $this->location = $location;

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

    public function getReputationChangeDay()
    {
        return $this->reputationChangeDay;
    }

    public function setReputationChangeDay($reputationChangeDay)
    {
        $this->reputationChangeDay = $reputationChangeDay;

        return $this;
    }

    public function getReputationChangeMonth()
    {
        return $this->reputationChangeMonth;
    }

    public function setReputationChangeMonth($reputationChangeMonth)
    {
        $this->reputationChangeMonth = $reputationChangeMonth;

        return $this;
    }

    public function getReputationChangeQuarter()
    {
        return $this->reputationChangeQuarter;
    }

    public function setReputationChangeQuarter($reputationChangeQuarter)
    {
        $this->reputationChangeQuarter = $reputationChangeQuarter;

        return $this;
    }

    public function getReputationChangeWeek()
    {
        return $this->reputationChangeWeek;
    }

    public function setReputationChangeWeek($reputationChangeWeek)
    {
        $this->reputationChangeWeek = $reputationChangeWeek;

        return $this;
    }

    public function getReputationChangeYear()
    {
        return $this->reputationChangeYear;
    }

    public function setReputationChangeYear($reputationChangeYear)
    {
        $this->reputationChangeYear = $reputationChangeYear;

        return $this;
    }

    public function getTimedPenaltyDate()
    {
        return $this->timedPenaltyDate;
    }

    public function setTimedPenaltyDate(\DateTime $timedPenaltyDate)
    {
        $this->timedPenaltyDate = $timedPenaltyDate;

        return $this;
    }

    public function getUpVoteCount()
    {
        return $this->upVoteCount;
    }

    public function setUpVoteCount($upVoteCount)
    {
        $this->upVoteCount = $upVoteCount;

        return $this;
    }

    public function getViewCount()
    {
        return $this->viewCount;
    }

    public function setViewCount($viewCount)
    {
        $this->viewCount = $viewCount;

        return $this;
    }

    public function getWebsiteUrl()
    {
        return $this->websiteUrl;
    }

    public function setWebsiteUrl($websiteUrl)
    {
        $this->websiteUrl = $websiteUrl;

        return $this;
    }
}
