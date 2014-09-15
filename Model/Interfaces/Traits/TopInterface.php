<?php

/**
 * This file is part of the StackExchangeApiClient library.
 *
 * @author  benatespina <benatespina@gmail.com>
 *
 * @license MIT
 */

namespace BenatEspina\StackExchangeApiClient\Model\Interfaces\Traits;

use BenatEspina\StackExchangeApiClient\Model\Interfaces\NetworkPostInterface;

/**
 * Interface TopInterface.
 *
 * @package BenatEspina\StackExchangeApiClient\Model\Interfaces\Traits
 */
interface TopInterface
{
    /**
     * Adds top answer.
     *
     * @param \BenatEspina\StackExchangeApiClient\Model\Interfaces\NetworkPostInterface $topAnswer The answer
     *
     * @return $this self Object
     */
    public function addTopAnswer(NetworkPostInterface $topAnswer);

    /**
     * Removes top answer.
     *
     * @param \BenatEspina\StackExchangeApiClient\Model\Interfaces\NetworkPostInterface $topAnswer The top answer
     *
     * @return $this self Object
     */
    public function removeTopAnswer(NetworkPostInterface $topAnswer);

    /**
     * Gets top answer.
     *
     * @return array<\BenatEspina\StackExchangeApiClient\Model\Interfaces\NetworkPostInterface>
     */
    public function getTopAnswers();

    /**
     * Adds top question.
     *
     * @param \BenatEspina\StackExchangeApiClient\Model\Interfaces\NetworkPostInterface $topQuestion The top question
     *
     * @return $this self Object
     */
    public function addTopQuestion(NetworkPostInterface $topQuestion);

    /**
     * Removes top question.
     *
     * @param \BenatEspina\StackExchangeApiClient\Model\Interfaces\NetworkPostInterface $topQuestion The top question
     *
     * @return $this self Object
     */
    public function removeTopQuestion(NetworkPostInterface $topQuestion);

    /**
     * Gets top question.
     *
     * @return array<\BenatEspina\StackExchangeApiClient\Model\Interfaces\NetworkPostInterface>
     */
    public function getTopQuestions();
}
