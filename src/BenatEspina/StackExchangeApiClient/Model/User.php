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
 * The user model class.
 *
 * @author Beñat Espiña <benatespina@gmail.com>
 */
class User implements Model
{
    protected $shallowUser;
    protected $aboutMe;
    protected $accountId;
    protected $age;
    protected $answerCount;
    protected $creationDate;
    protected $displayName;
    protected $downVoteCount;
    protected $isEmployee;
    protected $lastAccessDate;
    protected $lastModifiedDate;
    protected $location;
    protected $questionCount;
    protected $reputationChangeDay;
    protected $reputationChangeMonth;
    protected $reputationChangeQuarter;
    protected $reputationChangeWeek;
    protected $reputationChangeYear;
    protected $timedPenaltyDate;
    protected $upVoteCount;
    protected $viewCount;
    protected $websiteUrl;

    public static function fromJson(array $data)
    {
        $instance = new self();
        $instance
            ->setShallowUser(ShallowUser::fromJson($data))
            ->setAboutMe(array_key_exists('about_me', $data) ? $data['about_me'] : null)
            ->setAccountId(array_key_exists('account_id', $data) ? $data['account_id'] : null)
            ->setAge(array_key_exists('age', $data) ? $data['age'] : null)
            ->setAnswerCount(array_key_exists('answer_count', $data) ? $data['answer_count'] : null)
            ->setCreationDate(
                array_key_exists('creation_date', $data)
                    ? new \DateTime('@' . $data['creation_date'])
                    : null
            )
            ->setDisplayName(array_key_exists('display_name', $data) ? $data['display_name'] : null)
            ->setDownVoteCount(array_key_exists('down_vote_count', $data) ? $data['down_vote_count'] : null)
            ->setIsEmployee(array_key_exists('is_employee', $data) ? $data['is_employee'] : null)
            ->setLastAccessDate(
                array_key_exists('last_access_date', $data)
                    ? new \DateTimeImmutable('@' . $data['last_access_date'])
                    : null
            )
            ->setLastModifiedDate(
                array_key_exists('last_modified_date', $data)
                    ? new \DateTimeImmutable('@' . $data['last_modified_date'])
                    : null
            )
            ->setLocation(array_key_exists('location', $data) ? $data['location'] : null)
            ->setQuestionCount(array_key_exists('question_count', $data) ? $data['question_count'] : null)
            ->setReputationChangeDay(
                array_key_exists('reputation_change_day', $data)
                    ? $data['reputation_change_day']
                    : null
            )
            ->setReputationChangeMonth(
                array_key_exists('reputation_change_month', $data)
                    ? $data['reputation_change_month']
                    : null
            )
            ->setReputationChangeQuarter(
                array_key_exists('reputation_change_quarter', $data)
                    ? $data['reputation_change_quarter']
                    : null
            )
            ->setReputationChangeWeek(
                array_key_exists('reputation_change_week', $data)
                    ? $data['reputation_change_week']
                    : null
            )
            ->setReputationChangeYear(
                array_key_exists('reputation_change_year', $data)
                    ? $data['reputation_change_year']
                    : null
            )
            ->setTimedPenaltyDate(
                array_key_exists('timed_penalty_date', $data)
                    ? new \DateTimeImmutable('@' . $data['timed_penalty_date'])
                    : null
            )
            ->setUpVoteCount(array_key_exists('up_vote_count', $data) ? $data['up_vote_count'] : null)
            ->setViewCount(array_key_exists('view_count', $data) ? $data['view_count'] : null)
            ->setWebsiteUrl(array_key_exists('website_url', $data) ? $data['website_url'] : null);

        return $instance;
    }

    public static function fromProperties(
        ShallowUser $shallowUser,
        $accountId,
        $answerCount,
        \DateTimeInterface $creationDate,
        $displayName,
        $downVoteCount,
        $isEmployee,
        \DateTimeInterface $lastAccessDate,
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
        \DateTimeInterface $lastModifiedDate = null,
        $location = null,
        \DateTimeInterface $timedPenaltyDate = null,
        $websiteUrl = null
    ) {
        $instance = new self();
        $instance
            ->setShallowUser($shallowUser)
            ->setAboutMe($aboutMe)
            ->setAccountId($accountId)
            ->setAge($age)
            ->setAnswerCount($answerCount)
            ->setCreationDate($creationDate)
            ->setDisplayName($displayName)
            ->setDownVoteCount($downVoteCount)
            ->setIsEmployee($isEmployee)
            ->setLastAccessDate($lastAccessDate)
            ->setLastModifiedDate($lastModifiedDate)
            ->setLocation($location)
            ->setQuestionCount($questionCount)
            ->setReputationChangeDay($reputationChangeDay)
            ->setReputationChangeMonth($reputationChangeMonth)
            ->setReputationChangeQuarter($reputationChangeQuarter)
            ->setReputationChangeWeek($reputationChangeWeek)
            ->setReputationChangeYear($reputationChangeYear)
            ->setTimedPenaltyDate($timedPenaltyDate)
            ->setUpVoteCount($upVoteCount)
            ->setViewCount($viewCount)
            ->setWebsiteUrl($websiteUrl);

        return $instance;
    }

    public function getShallowUser()
    {
        return $this->shallowUser;
    }

    public function setShallowUser(ShallowUser $shallowUser = null)
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

    public function setCreationDate(\DateTimeInterface $creationDate = null)
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

    public function setLastAccessDate(\DateTimeInterface $lastAccessDate = null)
    {
        $this->lastAccessDate = $lastAccessDate;

        return $this;
    }

    public function getLastModifiedDate()
    {
        return $this->lastModifiedDate;
    }

    public function setLastModifiedDate(\DateTimeInterface $lastModifiedDate = null)
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

    public function setTimedPenaltyDate(\DateTimeInterface $timedPenaltyDate = null)
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
