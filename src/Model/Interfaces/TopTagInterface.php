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
 * Interface TopTagInterface.
 *
 * @author Beñat Espiña <benatespina@gmail.com>
 */
interface TopTagInterface
{
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
     * Sets answer score.
     *
     * @param int $answerScore The answer score
     *
     * @return $this self Object
     */
    public function setAnswerScore($answerScore);

    /**
     * Gets answer score.
     *
     * @return int
     */
    public function getAnswerScore();

    /**
     * Sets number of questions.
     *
     * @param int $questionCount The number of questions
     *
     * @return $this self Object
     */
    public function setQuestionCount($questionCount);

    /**
     * Gets number of questions.
     *
     * @return int
     */
    public function getQuestionCount();

    /**
     * Sets question score.
     *
     * @param int $questionScore The question score
     *
     * @return $this self Object
     */
    public function setQuestionScore($questionScore);

    /**
     * Gets question score.
     *
     * @return int
     */
    public function getQuestionScore();

    /**
     * Sets tag name.
     *
     * @param string $tagName The tag name
     *
     * @return $this self Object
     */
    public function setTagName($tagName);

    /**
     * Gets tag name.
     *
     * @return string
     */
    public function getTagName();

    /**
     * Sets user id.
     *
     * @param int $userId The user id
     *
     * @return $this self Object
     */
    public function setUserId($userId);

    /**
     * Gets user id.
     *
     * @return int
     */
    public function getUserId();
}
