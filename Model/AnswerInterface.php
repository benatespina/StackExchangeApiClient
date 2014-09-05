<?php

/**
 * This file is part of the StackExchangeApiClient library.
 *
 * @author  benatespina <benatespina@gmail.com>
 *
 * @license MIT
 */

namespace BenatEspina\StackExchangeApiClient\Model;

/**
 * Interface AnswerInterface.
 *
 * @package BenatEspina\StackExchangeApiClient\Model
 */
interface AnswerInterface
{
    /**
     * Sets owner.
     *
     * @param \BenatEspina\StackExchangeApiClient\Model\UserInterface $owner The owner
     *
     * @return \BenatEspina\StackExchangeApiClient\Model\AnswerInterface
     */
    public function setOwner(UserInterface $owner);

    /**
     * Gets owner.
     *
     * @return \BenatEspina\StackExchangeApiClient\Model\UserInterface
     */
    public function getOwner();

    /**
     * Sets is accepted.
     *
     * @param bool $isAccepted The isAccepted boolean
     *
     * @return \BenatEspina\StackExchangeApiClient\Model\AnswerInterface
     */
    public function setIsAccepted($isAccepted);

    /**
     * Gets is accepted.
     *
     * @return bool
     */
    public function isAccepted();

    /**
     * Sets score.
     *
     * @param integer $score The score
     *
     * @return \BenatEspina\StackExchangeApiClient\Model\AnswerInterface
     */
    public function setScore($score);

    /**
     * Gets score.
     *
     * @return integer
     */
    public function getScore();

    /**
     * Sets last activity date.
     *
     * @param \DateTime $lastActivityDate The lastActivityDate
     *
     * @return \BenatEspina\StackExchangeApiClient\Model\AnswerInterface
     */
    public function setLastActivityDate(\DateTime $lastActivityDate);

    /**
     * Gets last activity date.
     *
     * @return \DateTime
     */
    public function getLastActivityDate();

    /**
     * Sets creation date.
     *
     * @param \DateTime $creationDate The creationDate
     *
     * @return \BenatEspina\StackExchangeApiClient\Model\AnswerInterface
     */
    public function setCreationDate(\DateTime $creationDate);

    /**
     * Gets creation date.
     *
     * @return \DateTime
     */
    public function getCreationDate();

    /**
     * Sets id.
     *
     * @param integer $answerId The id
     *
     * @return \BenatEspina\StackExchangeApiClient\Model\AnswerInterface
     */
    public function setAnswerId($answerId);

    /**
     * Gets id.
     *
     * @return integer
     */
    public function getAnswerId();

    /**
     * Sets question id.
     *
     * @param integer $questionId The id
     *
     * @return \BenatEspina\StackExchangeApiClient\Model\AnswerInterface
     */
    public function setQuestionId($questionId);

    /**
     * Gets question id.
     *
     * @return integer
     */
    public function getQuestionId();
}
