<?php

/**
 * This file is part of the StackExchangeApiClient library.
 *
 * @author  benatespina <benatespina@gmail.com>
 *
 * @license MIT
 */

namespace BenatEspina\StackExchangeApiClient\Model;

use BenatEspina\StackExchangeApiClient\Model\Interfaces\TopTagInterface;
use BenatEspina\StackExchangeApiClient\Util\Util;

/**
 * Class TopTag.
 *
 * @package BenatEspina\StackExchangeApiClient\Model
 */
class TopTag implements TopTagInterface
{
    /**
     * Number of answers.
     *
     * @var int
     */
    protected $answerCount;

    /**
     * The answer score.
     *
     * @var int
     */
    protected $answerScore;

    /**
     * Number of questions.
     *
     * @var int
     */
    protected $questionCount;

    /**
     * The question score.
     *
     * @var int
     */
    protected $questionScore;

    /**
     * Tag name.
     *
     * @var string
     */
    protected $tagName;

    /**
     * User id.
     *
     * @var int
     */
    protected $userId;

    /**
     * Constructor.
     *
     * @param null|(int|string)[] $json The json string being decoded
     */
    public function __construct($json = null)
    {
        $this->answerCount = Util::setIfExists($json, 'answer_count');
        $this->answerScore = Util::setIfExists($json, 'answer_score');
        $this->questionCount = Util::setIfExists($json, 'question_count');
        $this->questionScore = Util::setIfExists($json, 'question_score');
        $this->tagName = Util::setIfExists($json, 'tag_name');
        $this->userId = Util::setIfExists($json, 'user_id');
    }

    /**
     * {@inheritdoc}
     */
    public function setAnswerCount($answerCount)
    {
        $this->answerCount = $answerCount;

        return $this;
    }

    /**
     * {@inheritdoc}
     */
    public function getAnswerCount()
    {
        return $this->answerCount;
    }

    /**
     * {@inheritdoc}
     */
    public function setAnswerScore($answerScore)
    {
        $this->answerScore = $answerScore;

        return $this;
    }

    /**
     * {@inheritdoc}
     */
    public function getAnswerScore()
    {
        return $this->answerScore;
    }

    /**
     * {@inheritdoc}
     */
    public function setQuestionCount($questionCount)
    {
        $this->questionCount = $questionCount;

        return $this;
    }

    /**
     * {@inheritdoc}
     */
    public function getQuestionCount()
    {
        return $this->questionCount;
    }

    /**
     * {@inheritdoc}
     */
    public function setQuestionScore($questionScore)
    {
        $this->questionScore = $questionScore;

        return $this;
    }

    /**
     * {@inheritdoc}
     */
    public function getQuestionScore()
    {
        return $this->questionScore;
    }

    /**
     * {@inheritdoc}
     */
    public function setTagName($tagName)
    {
        $this->tagName = $tagName;

        return $this;
    }

    /**
     * {@inheritdoc}
     */
    public function getTagName()
    {
        return $this->tagName;
    }

    /**
     * {@inheritdoc}
     */
    public function setUserId($userId)
    {
        $this->userId = $userId;

        return $this;
    }

    /**
     * {@inheritdoc}
     */
    public function getUserId()
    {
        return $this->userId;
    }
}
