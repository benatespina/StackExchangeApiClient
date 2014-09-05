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
 * Class Answer.
 *
 * @package BenatEspina\StackExchangeApiClient\Model
 */
class Answer implements AnswerInterface
{
    /**
     * User object.
     *
     * @var \BenatEspina\StackExchangeApiClient\Model\UserInterface
     */
    protected $owner;

    /**
     * Boolean that shows if answer is accepted or not.
     *
     * @var bool
     */
    protected $isAccepted;

    /**
     * The score.
     *
     * @var integer
     */
    protected $score;

    /**
     * Last activity date.
     *
     * @var \DateTime
     */
    protected $lastActivityDate;

    /**
     * Creation date.
     *
     * @var \DateTime
     */
    protected $creationDate;

    /**
     * The answer id.
     *
     * @var integer
     */
    protected $answerId;

    /**
     * The question id.
     *
     * @var integer
     */
    protected $questionId;

    /**
     * Constructor.
     *
     * @param null|array $json The json string being decoded
     */
    public function __construct($json = null)
    {
        if ($json !== null) {
            $this->owner = new User($json['owner']);
            $this->isAccepted = $json['is_accepted'];
            $this->score = $json['score'];
            $this->lastActivityDate = new \DateTime("@" . $json['last_activity_date']);
            $this->creationDate = new \DateTime("@" . $json['creation_date']);
            $this->answerId = $json['answer_id'];
            $this->questionId = $json['question_id'];
        }
    }

    /**
     * {@inheritdoc}
     */
    public function setOwner(UserInterface $owner)
    {
        $this->owner = $owner;

        return $this;
    }

    /**
     * {@inheritdoc}
     */
    public function getOwner()
    {
        return $this->owner;
    }

    /**
     * {@inheritdoc}
     */
    public function setIsAccepted($isAccepted)
    {
        $this->isAccepted = $isAccepted;

        return $this;
    }

    /**
     * {@inheritdoc}
     */
    public function isAccepted()
    {
        return $this->isAccepted;
    }

    /**
     * {@inheritdoc}
     */
    public function setScore($score)
    {
        $this->score = $score;

        return $this;
    }

    /**
     * {@inheritdoc}
     */
    public function getScore()
    {
        return $this->score;
    }

    /**
     * {@inheritdoc}
     */
    public function setLastActivityDate(\DateTime $lastActivityDate)
    {
        $this->lastActivityDate = $lastActivityDate;

        return $this;
    }

    /**
     * {@inheritdoc}
     */
    public function getLastActivityDate()
    {
        return $this->lastActivityDate;
    }

    /**
     * {@inheritdoc}
     */
    public function setCreationDate(\DateTime $creationDate)
    {
        $this->creationDate = $creationDate;

        return $this;
    }

    /**
     * {@inheritdoc}
     */
    public function getCreationDate()
    {
        return $this->creationDate;
    }

    /**
     * {@inheritdoc}
     */
    public function setQuestionId($questionId)
    {
        $this->questionId = $questionId;

        return $this;
    }

    /**
     * {@inheritdoc}
     */
    public function setAnswerId($answerId)
    {
        $this->answerId = $answerId;

        return $this;
    }

    /**
     * {@inheritdoc}
     */
    public function getAnswerId()
    {
        return $this->answerId;
    }

    /**
     * {@inheritdoc}
     */
    public function getQuestionId()
    {
        return $this->questionId;
    }
}
