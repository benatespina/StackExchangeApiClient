<?php

/*
 * This file is part of the Stack Exchange Api Client library.
 *
 * Copyright (c) 2015 Beñat Espiña <benatespina@gmail.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace BenatEspina\StackExchangeApiClient\Model\Interfaces\Traits;

/**
 * Interface AnswerInterface.
 *
 * @author Beñat Espiña <benatespina@gmail.com>
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
