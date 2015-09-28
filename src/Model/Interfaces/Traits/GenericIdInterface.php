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
 * Interface GenericIdInterface.
 *
 * @author Beñat Espiña <benatespina@gmail.com>
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
