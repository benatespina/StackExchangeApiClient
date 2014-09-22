<?php

/**
 * This file is part of the StackExchangeApiClient library.
 *
 * @author  benatespina <benatespina@gmail.com>
 *
 * @license MIT
 */

namespace BenatEspina\StackExchangeApiClient\Model\Interfaces;

use BenatEspina\StackExchangeApiClient\Model\Interfaces\Traits\VoteCountInterface;

/**
 * Interface UserInterface.
 *
 * @package BenatEspina\StackExchangeApiClient\Model\Interfaces
 */
interface UserInterface extends ShallowUserInterface, ReputationChangeInterface, VoteCountInterface
{
    /**
     * Sets about me.
     *
     * @param string|null $aboutMe The about me
     *
     * @return $this self Object
     */
    public function setAboutMe($aboutMe);

    /**
     * Gets about me.
     *
     * @return string|null
     */
    public function getAboutMe();

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
     * Sets age.
     *
     * @param int|null $age The age
     *
     * @return $this self Object
     */
    public function setAge($age);

    /**
     * Gets age.
     *
     * @return int|null
     */
    public function getAge();

    /**
     * Sets number of answers.
     *
     * @param int $answerCount The number of answers
     *
     * @return $this self Object
     */
    public function setAnswerCount($answerCount);

    /**
     * Gets number of answers.
     *
     * @return int
     */
    public function getAnswerCount();

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
     * Sets is employee.
     *
     * @param boolean $isEmployee The isEmployee boolean
     *
     * @return $this self Object
     */
    public function setEmployee($isEmployee);

    /**
     * Gets is employee.
     *
     * @return boolean
     */
    public function isEmployee();

    /**
     * Sets last access date.
     *
     * @param \DateTime $lastAccessDate The last access date
     *
     * @return $this self Object
     */
    public function setLastAccessDate(\DateTime $lastAccessDate);

    /**
     * Gets last access date.
     *
     * @return \DateTime
     */
    public function getLastAccessDate();

    /**
     * Sets last modified date.
     *
     * @param \DateTime|null $lastModifiedDate The last modified date
     *
     * @return $this self Object
     */
    public function setLastModifiedDate($lastModifiedDate);

    /**
     * Gets last modified date.
     *
     * @return \DateTime|null
     */
    public function getLastModifiedDate();

    /**
     * Sets location.
     *
     * @param string|null $location The location
     *
     * @return $this self Object
     */
    public function setLocation($location);

    /**
     * Gets location.
     *
     * @return string|null
     */
    public function getLocation();

    /**
     * Sets question id.
     *
     * @param int $questionCount The question id
     *
     * @return $this self Object
     */
    public function setQuestionCount($questionCount);

    /**
     * Gets question id.
     *
     * @return int
     */
    public function getQuestionCount();

    /**
     * Sets timed penalty date.
     *
     * @param \DateTime|null $timedPenaltyDate The time penalty date
     *
     * @return $this self Object
     */
    public function setTimedPenaltyDate($timedPenaltyDate);

    /**
     * Gets timed penalty date.
     *
     * @return \DateTime|null
     */
    public function getTimedPenaltyDate();

    /**
     * Sets number of views.
     *
     * @param int $viewCount The number of views
     *
     * @return $this self Object
     */
    public function setViewCount($viewCount);

    /**
     * Gets number of views.
     *
     * @return int
     */
    public function getViewCount();

    /**
     * Sets website url.
     *
     * @param string|null $websiteUrl The website url
     *
     * @return $this self Object
     */
    public function setWebsiteUrl($websiteUrl);

    /**
     * Gets website url.
     *
     * @return string|null
     */
    public function getWebsiteUrl();
}
