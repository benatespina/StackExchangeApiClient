<?php

/*
 * This file is part of the Stack Exchange Api Client library.
 *
 * Copyright (c) 2015 Beñat Espiña <benatespina@gmail.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace BenatEspina\StackExchangeApiClient\Model\Traits;

use BenatEspina\StackExchangeApiClient\Util\Util;

/**
 * Trait AnswerTrait.
 *
 * @author Beñat Espiña <benatespina@gmail.com>
 */
trait AnswerTrait
{
    /**
     * Accepted answer id.
     *
     * @var int|null
     */
    protected $acceptedAnswerId;

    /**
     * Number of answers.
     *
     * @var int
     */
    protected $answerCount;

    /**
     * Sets accepted answer id.
     *
     * @param int|null $acceptedAnswerId The accepted answer id
     *
     * @return $this self Object
     */
    public function setAcceptedAnswerId($acceptedAnswerId)
    {
        $this->acceptedAnswerId = $acceptedAnswerId;

        return $this;
    }

    /**
     * Gets accepted answer id.
     *
     * @return int|null
     */
    public function getAcceptedAnswerId()
    {
        return $this->acceptedAnswerId;
    }

    /**
     * Sets number of answers.
     *
     * @param int $answerCount The number of answers
     *
     * @return $this self Object
     */
    public function setAnswerCount($answerCount)
    {
        $this->answerCount = $answerCount;

        return $this;
    }

    /**
     * Gets number of answers.
     *
     * @return int
     */
    public function getAnswerCount()
    {
        return $this->answerCount;
    }

    /**
     * Loads the variables if the data exist into resource. It works like a constructor.
     *
     * @param null|mixed[] $resource The resource
     */
    protected function loadAnswer($resource)
    {
        $this->acceptedAnswerId = Util::setIfIntegerExists($resource, 'accepted_answer_id');
        $this->answerCount = Util::setIfIntegerExists($resource, 'answer_count');
    }
}
