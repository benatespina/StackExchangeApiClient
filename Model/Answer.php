<?php

/**
 * This file is part of the StackExchangeApiClient library.
 *
 * @author  benatespina <benatespina@gmail.com>
 *
 * @license MIT
 */

namespace BenatEspina\StackExchangeApiClient\Model;

use BenatEspina\StackExchangeApiClient\Model\Abstracts\AnswerQuestionAbstract as BaseAnswer;
use BenatEspina\StackExchangeApiClient\Model\Interfaces\AnswerInterface;
use BenatEspina\StackExchangeApiClient\Model\Traits\AwardedBountyTrait;
use BenatEspina\StackExchangeApiClient\Util\Util;

/**
 * Class Answer.
 *
 * @package BenatEspina\StackExchangeApiClient\Model
 */
class Answer extends BaseAnswer implements AnswerInterface
{
    use AwardedBountyTrait;

    /**
     * Private boolean that shows if answer is accepted of not.
     *
     * @var boolean
     */
    protected $accepted;

    /**
     * Boolean that shows it can flag or not.
     *
     * @var boolean
     */
    protected $canFlag;

    /**
     * Boolean that shows if answer is accepted or not.
     *
     * @var boolean
     */
    protected $isAccepted;

    /**
     * The question id.
     *
     * @var int
     */
    protected $questionId;

    /**
     * Constructor.
     *
     * @param null|mixed[] $json The json string being decoded
     */
    public function __construct($json = null)
    {
        parent::__construct($json);
        $this->id = Util::setIfIntegerExists($json, 'answer_id');

        $this->loadAwardedBounty($json);

        $this->accepted = Util::setIfBoolExists($json, 'accepted');
        $this->canFlag = Util::setIfBoolExists($json, 'can_flag');
        $this->isAccepted = Util::setIfBoolExists($json, 'is_accepted');
        $this->questionId = Util::setIfIntegerExists($json, 'question_id');
    }

    /**
     * {@inheritdoc}
     */
    public function setAccepted($accepted)
    {
        $this->accepted = $accepted;

        return $this;
    }

    /**
     * {@inheritdoc}
     */
    public function hasAccepted()
    {
        return $this->accepted;
    }

    /**
     * {@inheritdoc}
     */
    public function setCanFlag($canFlag)
    {
        $this->canFlag = $canFlag;

        return $this;
    }

    /**
     * {@inheritdoc}
     */
    public function isCanFlag()
    {
        return $this->canFlag;
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
    public function setQuestionId($questionId)
    {
        $this->questionId = $questionId;

        return $this;
    }

    /**
     * {@inheritdoc}
     */
    public function getQuestionId()
    {
        return $this->questionId;
    }
}
