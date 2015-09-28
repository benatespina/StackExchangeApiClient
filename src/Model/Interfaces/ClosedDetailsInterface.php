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
 * Interface ClosedDetailsInterface.
 *
 * @author Beñat Espiña <benatespina@gmail.com>
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
     * @param bool $onHold The on hold boolean
     *
     * @return $this self Object
     */
    public function setOnHold($onHold);

    /**
     * Gets on hold.
     *
     * @return bool
     */
    public function isOnHold();

    /**
     * Adds original question.
     *
     * @param \BenatEspina\StackExchangeApiClient\Model\Interfaces\OriginalQuestionInterface|null $originalQuestion The
     *                                                                                                              original
     *                                                                                                              question
     *
     * @return $this self Object
     */
    public function addOriginalQuestion(OriginalQuestionInterface $originalQuestion);

    /**
     * Removes original question.
     *
     * @param \BenatEspina\StackExchangeApiClient\Model\Interfaces\OriginalQuestionInterface|null $originalQuestion The
     *                                                                                                              original
     *                                                                                                              question
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
