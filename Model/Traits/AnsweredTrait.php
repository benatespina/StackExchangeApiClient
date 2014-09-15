<?php

/**
 * This file is part of the StackExchangeApiClient library.
 *
 * @author  benatespina <benatespina@gmail.com>
 *
 * @license MIT
 */

namespace BenatEspina\StackExchangeApiClient\Model\Traits;

use BenatEspina\StackExchangeApiClient\Util\Util;

/**
 * Trait AnsweredTrait.
 *
 * @package BenatEspina\StackExchangeApiClient\Model\Traits
 */
trait AnsweredTrait
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
     * @param mixed[] $resource The resource
     *
     * @return void
     */
    protected function loadAnswered($resource)
    {
        $this->acceptedAnswerId = Util::setIfExists($resource, 'accepted_answer_id');
        $this->answerCount = Util::setIfExists($resource, 'answer_count');
    }
}
