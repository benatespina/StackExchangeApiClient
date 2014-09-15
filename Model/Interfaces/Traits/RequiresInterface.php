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
 * Interface RequiresInterface.
 *
 * @package BenatEspina\StackExchangeApiClient\Model\Interfaces\Traits
 */
interface RequiresInterface
{
    /**
     * Sets requires comment.
     *
     * @param boolean|null $requiresComment The requires comment boolean
     *
     * @return $this self Object
     */
    public function setRequiresComment($requiresComment);

    /**
     * Gets requires comment.
     *
     * @return boolean|null
     */
    public function isRequiresComment();

    /**
     * Sets requires question id.
     *
     * @param boolean|null $requiresQuestionId The requires question id boolean
     *
     * @return $this self Object
     */
    public function setRequiresQuestionId($requiresQuestionId);

    /**
     * Gets requires question id.
     *
     * @return boolean|null
     */
    public function isRequiresQuestionId();

    /**
     * Sets requires site.
     *
     * @param boolean|null $requiresSite The requires site boolean
     *
     * @return $this self Object
     */
    public function setRequiresSite($requiresSite);

    /**
     * Gets requires site.
     *
     * @return boolean|null
     */
    public function isRequiresSite();
}
