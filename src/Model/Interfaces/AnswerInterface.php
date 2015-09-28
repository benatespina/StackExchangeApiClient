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

use BenatEspina\StackExchangeApiClient\Model\Interfaces\Traits\AwardedBountyInterface;

/**
 * Interface AnswerInterface.
 *
 * @author Beñat Espiña <benatespina@gmail.com>
 */
interface AnswerInterface extends AwardedBountyInterface
{
    /**
     * Sets private accepted.
     *
     * @param bool $accepted The accepted boolean
     *
     * @return $this self Object
     */
    public function setPrivateAccepted($accepted);

    /**
     * Gets private accepted.
     *
     * @return bool
     */
    public function hasAccepted();

    /**
     * Sets can flag.
     *
     * @param bool $canFlag The canFlag boolean
     *
     * @return $this self Object
     */
    public function setCanFlag($canFlag);

    /**
     * Gets can flag.
     *
     * @return bool
     */
    public function isCanFlag();

    /**
     * Sets is accepted.
     *
     * @param bool $isAccepted The isAccepted boolean
     *
     * @return $this self Object
     */
    public function setAccepted($isAccepted);

    /**
     * Gets is accepted.
     *
     * @return bool
     */
    public function isAccepted();

    /**
     * Sets the question id.
     *
     * @param int $questionId The question id
     *
     * @return $this self Object
     */
    public function setQuestionId($questionId);

    /**
     * Gets the question id.
     *
     * @return int
     */
    public function getQuestionId();
}
