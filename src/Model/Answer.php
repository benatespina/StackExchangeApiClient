<?php

/*
 * This file is part of the Stack Exchange Api Client library.
 *
 * Copyright (c) 2015 Beñat Espiña <benatespina@gmail.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace BenatEspina\StackExchangeApiClient\Model;

use BenatEspina\StackExchangeApiClient\Model\Abstracts\AnswerQuestionAbstract as BaseAnswer;
use BenatEspina\StackExchangeApiClient\Model\Interfaces\AnswerInterface;
use BenatEspina\StackExchangeApiClient\Model\Traits\AwardedBountyTrait;
use BenatEspina\StackExchangeApiClient\Util\Util;

/**
 * Class Answer.
 *
 * @author Beñat Espiña <benatespina@gmail.com>
 */
class Answer extends BaseAnswer implements AnswerInterface
{
    use AwardedBountyTrait;

    /**
     * Private boolean that shows if answer is accepted of not.
     *
     * @var bool
     */
    protected $privateAccepted;

    /**
     * Boolean that shows it can flag or not.
     *
     * @var bool
     */
    protected $canFlag;

    /**
     * Boolean that shows if answer is accepted or not.
     *
     * @var bool
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

        $this->privateAccepted = Util::setIfBoolExists($json, 'accepted');
        $this->canFlag = Util::setIfBoolExists($json, 'can_flag');
        $this->isAccepted = Util::setIfBoolExists($json, 'is_accepted');
        $this->questionId = Util::setIfIntegerExists($json, 'question_id');
    }

    /**
     * {@inheritdoc}
     */
    public function setPrivateAccepted($accepted)
    {
        $this->privateAccepted = $accepted;

        return $this;
    }

    /**
     * {@inheritdoc}
     */
    public function hasAccepted()
    {
        return $this->privateAccepted;
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
    public function setAccepted($isAccepted)
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
