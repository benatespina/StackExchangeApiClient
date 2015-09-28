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

use BenatEspina\StackExchangeApiClient\Model\Abstracts\AnswerQuestionAbstract as BaseQuestion;
use BenatEspina\StackExchangeApiClient\Model\Interfaces\AnswerInterface;
use BenatEspina\StackExchangeApiClient\Model\Interfaces\NoticeInterface;
use BenatEspina\StackExchangeApiClient\Model\Interfaces\QuestionInterface;
use BenatEspina\StackExchangeApiClient\Model\Traits\AnsweredTrait;
use BenatEspina\StackExchangeApiClient\Model\Traits\AnswerTrait;
use BenatEspina\StackExchangeApiClient\Model\Traits\BountyTrait;
use BenatEspina\StackExchangeApiClient\Model\Traits\CloseTrait;
use BenatEspina\StackExchangeApiClient\Model\Traits\FavoriteTrait;
use BenatEspina\StackExchangeApiClient\Model\Traits\MigrateTrait;
use BenatEspina\StackExchangeApiClient\Util\Util;

/**
 * Class Question.
 *
 * @author Beñat Espiña <benatespina@gmail.com>
 */
class Question extends BaseQuestion implements QuestionInterface
{
    use AnswerTrait,
        AnsweredTrait,
        BountyTrait,
        CloseTrait,
        FavoriteTrait,
        MigrateTrait;

    /**
     * An array of answers.
     *
     * @var array<\BenatEspina\StackExchangeApiClient\Model\Interfaces\AnswerInterface>|null
     */
    protected $answers = [];

    /**
     * Boolean that shows it can flag or not.
     *
     * @var bool
     */
    protected $canFlag;

    /**
     * Number of delete votes.
     *
     * @var int
     */
    protected $deleteVoteCount;

    /**
     * Notice.
     *
     * @var \BenatEspina\StackExchangeApiClient\Model\Interfaces\NoticeInterface
     */
    protected $notice;

    /**
     * Protected date.
     *
     * @var \DateTime|null
     */
    protected $protectedDate;

    /**
     * Number of reopen votes.
     *
     * @var int
     */
    protected $reopenVoteCount;

    /**
     * Number of views.
     *
     * @var int
     */
    protected $viewCount;

    /**
     * Constructor.
     *
     * @param null|mixed[] $json The json string being decoded
     */
    public function __construct($json = null)
    {
        parent::__construct($json);
        $this->id = Util::setIfIntegerExists($json, 'question_id');

        $this->loadAnswer($json);
        $this->loadAnswered($json);
        $this->loadBounty($json);
        $this->loadClose($json);
        $this->loadFavorite($json);
        $this->loadMigration($json);

        $answers = Util::setIfArrayExists($json, 'answers');
        foreach ($answers as $answer) {
            $this->answers[] = new Answer($answer);
        }
        $this->canFlag = Util::setIfBoolExists($json, 'can_flag');
        $this->deleteVoteCount = Util::setIfIntegerExists($json, 'delete_vote_count');
        $this->notice = new Notice(Util::setIfArrayExists($json, 'notice'));
        $this->protectedDate = Util::setIfDateTimeExists($json, 'protected_date');
        $this->reopenVoteCount = Util::setIfIntegerExists($json, 'reopen_vote_count');
        $this->viewCount = Util::setIfIntegerExists($json, 'view_count');
    }

    /**
     * {@inheritdoc}
     */
    public function addAnswer(AnswerInterface $answer)
    {
        $this->answers[] = $answer;

        return $this;
    }

    /**
     * {@inheritdoc}
     */
    public function removeAnswer(AnswerInterface $answer)
    {
        $this->answers = Util::removeElement($answer, $this->answers);

        return $this;
    }

    /**
     * {@inheritdoc}
     */
    public function getAnswers()
    {
        return $this->answers;
    }

    /**
     * {@inheritdoc}
     */
    public function setFlag($canFlag)
    {
        $this->canFlag = $canFlag;

        return $this;
    }

    /**
     * {@inheritdoc}
     */
    public function canFlag()
    {
        return $this->canFlag;
    }

    /**
     * {@inheritdoc}
     */
    public function setDeleteVoteCount($deleteVoteCount)
    {
        $this->deleteVoteCount = $deleteVoteCount;

        return $this;
    }

    /**
     * {@inheritdoc}
     */
    public function getDeleteVoteCount()
    {
        return $this->deleteVoteCount;
    }

    /**
     * {@inheritdoc}
     */
    public function setNotice(NoticeInterface $notice)
    {
        $this->notice = $notice;

        return $this;
    }

    /**
     * {@inheritdoc}
     */
    public function getNotice()
    {
        return $this->notice;
    }

    /**
     * {@inheritdoc}
     */
    public function setProtectedDate(\DateTime $protectedDate)
    {
        $this->protectedDate = $protectedDate;

        return $this;
    }

    /**
     * {@inheritdoc}
     */
    public function getProtectedDate()
    {
        return $this->protectedDate;
    }

    /**
     * {@inheritdoc}
     */
    public function setReopenVoteCount($reopenVoteCount)
    {
        $this->reopenVoteCount = $reopenVoteCount;

        return $this;
    }

    /**
     * {@inheritdoc}
     */
    public function getReopenVoteCount()
    {
        return $this->reopenVoteCount;
    }

    /**
     * {@inheritdoc}
     */
    public function setViewCount($viewCount)
    {
        $this->viewCount = $viewCount;

        return $this;
    }

    /**
     * {@inheritdoc}
     */
    public function getViewCount()
    {
        return $this->viewCount;
    }
}
