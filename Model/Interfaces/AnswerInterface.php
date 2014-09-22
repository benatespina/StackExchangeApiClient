<?php

/**
 * This file is part of the StackExchangeApiClient library.
 *
 * @author  benatespina <benatespina@gmail.com>
 *
 * @license MIT
 */

namespace BenatEspina\StackExchangeApiClient\Model\Interfaces;

use BenatEspina\StackExchangeApiClient\Model\Interfaces\Traits\AwardedBountyInterface;

/**
 * Interface AnswerInterface.
 *
 * @package BenatEspina\StackExchangeApiClient\Model\Interfaces
 */
interface AnswerInterface extends AwardedBountyInterface
{
    /**
     * Sets private accepted.
     *
     * @param boolean $accepted The accepted boolean
     *
     * @return $this self Object
     */
    public function setPrivateAccepted($accepted);

    /**
     * Gets private accepted.
     *
     * @return boolean
     */
    public function hasAccepted();

    /**
     * Sets can flag.
     *
     * @param boolean $canFlag The canFlag boolean
     *
     * @return $this self Object
     */
    public function setCanFlag($canFlag);

    /**
     * Gets can flag.
     *
     * @return boolean
     */
    public function isCanFlag();

    /**
     * Sets is accepted.
     *
     * @param boolean $isAccepted The isAccepted boolean
     *
     * @return $this self Object
     */
    public function setAccepted($isAccepted);

    /**
     * Gets is accepted.
     *
     * @return boolean
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
