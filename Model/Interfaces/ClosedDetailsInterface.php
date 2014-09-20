<?php

/**
 * This file is part of the StackExchangeApiClient library.
 *
 * @author  benatespina <benatespina@gmail.com>
 *
 * @license MIT
 */

namespace BenatEspina\StackExchangeApiClient\Model\Interfaces;

/**
 * Interface ClosedDetailsInterface.
 *
 * @package BenatEspina\StackExchangeApiClient\Model\Interfaces
 */
interface ClosedDetailsInterface
{
    /**
     * Adds user.
     *
     * @param \BenatEspina\StackExchangeApiClient\Model\Interfaces\ShallowUserInterface $user The shallow user
     *
     * @return $this self Object
     */
    public function addByUser(ShallowUserInterface $user);

    /**
     * Removes user.
     *
     * @param \BenatEspina\StackExchangeApiClient\Model\Interfaces\ShallowUserInterface $user The shallow user
     *
     * @return $this self Object
     */
    public function removeByUser(ShallowUserInterface $user);

    /**
     * Gets by users array.
     *
     * @return array<\BenatEspina\StackExchangeApiClient\Model\Interfaces\ShallowUserInterface>
     */
    public function getByUsers();

    /**
     * Sets description.
     *
     * @param string $description The description
     *
     * @return $this self Object
     */
    public function setDescription($description);

    /**
     * Gets description.
     *
     * @return string
     */
    public function getDescription();

    /**
     * Sets on hold boolean.
     *
     * @param boolean $onHold The on hold boolean
     *
     * @return $this self Object
     */
    public function setOnHold($onHold);

    /**
     * Gets on hold.
     *
     * @return boolean
     */
    public function isOnHold();

    /**
     * Adds original question.
     *
     * @param \BenatEspina\StackExchangeApiClient\Model\Interfaces\OriginalQuestionInterface|null $originalQuestion The
     *                                                                                                          original
     *                                                                                                          question
     *
     * @return $this self Object
     */
    public function addOriginalQuestion(OriginalQuestionInterface $originalQuestion);

    /**
     * Removes original question.
     *
     * @param \BenatEspina\StackExchangeApiClient\Model\Interfaces\OriginalQuestionInterface|null $originalQuestion The
     *                                                                                                          original
     *                                                                                                          question
     *
     * @return $this self Object
     */
    public function removeOriginalQuestion(OriginalQuestionInterface $originalQuestion);

    /**
     * Gets original questions array.
     *
     * @return array<\BenatEspina\StackExchangeApiClient\Model\Interfaces\OriginalQuestionInterface>|null
     */
    public function getOriginalQuestions();

    /**
     * Sets reason.
     *
     * @param string $reason The reason
     *
     * @return $this self Object
     */
    public function setReason($reason);

    /**
     * Gets reason.
     *
     * @return string
     */
    public function getReason();
}
