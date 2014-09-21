<?php

/**
 * This file is part of the StackExchangeApiClient library.
 *
 * @author  benatespina <benatespina@gmail.com>
 *
 * @license MIT
 */

namespace BenatEspina\StackExchangeApiClient\Model\Interfaces\Traits;

/**
 * Interface AnswerInterface.
 *
 * @package BenatEspina\StackExchangeApiClient\Model\Interfaces\Traits
 */
interface AnswerInterface
{
    /**
     * Sets accepted answer id.
     *
     * @param int|null $acceptedAnswerId The accepted answer id
     *
     * @return $this self Object
     */
    public function setAcceptedAnswerId($acceptedAnswerId);

    /**
     * Gets accepted answer id.
     *
     * @return int|null
     */
    public function getAcceptedAnswerId();

    /**
     * Sets number of answers.
     *
     * @param int $answerCount The number of answers
     *
     * @return $this self Object
     */
    public function setAnswerCount($answerCount);

    /**
     * Gets number of answers.
     *
     * @return int
     */
    public function getAnswerCount();
}
