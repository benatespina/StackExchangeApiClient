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

use BenatEspina\StackExchangeApiClient\Model\Interfaces\Traits\AnsweredInterface;
use BenatEspina\StackExchangeApiClient\Model\Interfaces\Traits\AnswerInterface as AnswerTrait;
use BenatEspina\StackExchangeApiClient\Model\Interfaces\Traits\BountyInterface;
use BenatEspina\StackExchangeApiClient\Model\Interfaces\Traits\CloseInterface;
use BenatEspina\StackExchangeApiClient\Model\Interfaces\Traits\CommentCountInterface;
use BenatEspina\StackExchangeApiClient\Model\Interfaces\Traits\EditInterface;
use BenatEspina\StackExchangeApiClient\Model\Interfaces\Traits\FavoriteInterface;
use BenatEspina\StackExchangeApiClient\Model\Interfaces\Traits\MigrateInterface;
use BenatEspina\StackExchangeApiClient\Model\Interfaces\Traits\VoteCountInterface;

/**
 * Interface QuestionInterface.
 *
 * @author Beñat Espiña <benatespina@gmail.com>
 */
interface QuestionInterface extends
    AnswerTrait,
    AnsweredInterface,
    BountyInterface,
    CommentCountInterface,
    CloseInterface,
    EditInterface,
    FavoriteInterface,
    MigrateInterface,
    VoteCountInterface
{
    /**
     * Adds answer.
     *
     * @param \BenatEspina\StackExchangeApiClient\Model\Interfaces\AnswerInterface $answer The answer object
     *
     * @return $this self Object
     */
    public function addAnswer(AnswerInterface $answer);

    /**
     * Removes answer.
     *
     * @param \BenatEspina\StackExchangeApiClient\Model\Interfaces\AnswerInterface $answer The answer object
     *
     * @return $this self Object
     */
    public function removeAnswer(AnswerInterface $answer);

    /**
     * Gets array of answers.
     *
     * @return array<\\BenatEspina\StackExchangeApiClient\Model\Interfaces\AnswerInterface>
     */
    public function getAnswers();

    /**
     * Sets can flag.
     *
     * @param bool $canFlag The canFlag boolean
     *
     * @return $this self Object
     */
    public function setFlag($canFlag);

    /**
     * Gets can flag.
     *
     * @return bool
     */
    public function canFlag();

    /**
     * Sets number of delete votes.
     *
     * @param int $deleteVoteCount The number of delete votes
     *
     * @return $this self Object
     */
    public function setDeleteVoteCount($deleteVoteCount);

    /**
     * Gets number of delete votes.
     *
     * @return int
     */
    public function getDeleteVoteCount();

    /**
     * Sets notice.
     *
     * @param \BenatEspina\StackExchangeApiClient\Model\Interfaces\NoticeInterface $notice The notice
     *
     * @return $this self Object
     */
    public function setNotice(NoticeInterface $notice);

    /**
     * Gets notice.
     *
     * @return \BenatEspina\StackExchangeApiClient\Model\Interfaces\NoticeInterface
     */
    public function getNotice();

    /**
     * Sets protected date.
     *
     * @param \DateTime|null $protectedDate The protected date.
     *
     * @return $this self Object
     */
    public function setProtectedDate(\DateTime $protectedDate);

    /**
     * Gets protected date.
     *
     * @return \DateTime|null
     */
    public function getProtectedDate();

    /**
     * Sets number of reopen votes.
     *
     * @param int $reopenVoteCount The number of reopen votes.
     *
     * @return $this self Object
     */
    public function setReopenVoteCount($reopenVoteCount);

    /**
     * Gets number of reopen votes.
     *
     * @return int
     */
    public function getReopenVoteCount();

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
}
