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
 * Interface GenericIdInterface.
 *
 * @package BenatEspina\StackExchangeApiClient\Model\Interfaces\Traits
 */
interface GenericIdInterface
{
    /**
     * Sets the answer id.
     *
     * @param int $answerId The answer id
     *
     * @return $this self Object
     */
    public function setAnswerId($answerId);

    /**
     * Gets the answer id.
     *
     * @return int
     */
    public function getAnswerId();

    /**
     * Sets body.
     *
     * @param string|null $body The body
     *
     * @return $this self Object
     */
    public function setBody($body);

    /**
     * Gets body.
     *
     * @return string|null
     */
    public function getBody();

    /**
     * Sets the question id.
     *
     * @param int|null $questionId The question id
     *
     * @return $this self Object
     */
    public function setQuestionId($questionId);

    /**
     * Gets the question id.
     *
     * @return int|null
     */
    public function getQuestionId();
}
