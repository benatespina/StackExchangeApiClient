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
 * Trait GenericIdTrait.
 *
 * @package BenatEspina\StackExchangeApiClient\Model\Traits
 */
trait GenericIdTrait
{
    /**
     * The answer id.
     *
     * @var int|null
     */
    protected $answerId;

    /**
     * The body.
     *
     * @var string|null
     */
    protected $body;

    /**
     * The question id.
     *
     * @var int|null
     */
    protected $questionId;

    /**
     * Sets the answer id.
     *
     * @param int $answerId The answer id
     *
     * @return $this self Object
     */
    public function setAnswerId($answerId)
    {
        $this->answerId = $answerId;

        return $this;
    }

    /**
     * Gets the answer id.
     *
     * @return int
     */
    public function getAnswerId()
    {
        return $this->answerId;
    }

    /**
     * Sets body.
     *
     * @param string|null $body The body
     *
     * @return $this self Object
     */
    public function setBody($body)
    {
        $this->body = $body;

        return $this;
    }

    /**
     * Gets body.
     *
     * @return string|null
     */
    public function getBody()
    {
        return $this->body;
    }

    /**
     * Sets the question id.
     *
     * @param int|null $questionId The question id
     *
     * @return $this self Object
     */
    public function setQuestionId($questionId)
    {
        $this->questionId = $questionId;

        return $this;
    }

    /**
     * Gets the question id.
     *
     * @return int|null
     */
    public function getQuestionId()
    {
        return $this->questionId;
    }

    /**
     * Loads the variables if the data exist into resource. It works like a constructor.
     *
     * @param null|(int|string)[] $resource The resource
     *
     * @return void
     */
    protected function loadGenericId($resource)
    {
        $this->answerId = Util::setIfExists($resource, 'answer_id');
        $this->body = Util::setIfExists($resource, 'body');
        $this->questionId = Util::setIfExists($resource, 'question_id');
    }
}
