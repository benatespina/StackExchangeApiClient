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
 * Trait RequiresTrait.
 *
 * @package BenatEspina\StackExchangeApiClient\Model\Traits
 */
trait RequiresTrait
{
    /**
     * Boolean that shows if comment is required or not.
     *
     * @var boolean|null
     */
    protected $requiresComment;

    /**
     * Boolean that shows if question id is required or not.
     *
     * @var boolean|null
     */
    protected $requiresQuestionId;

    /**
     * Boolean that shows if site id is required or not.
     *
     * @var boolean|null
     */
    protected $requiresSite;

    /**
     * Sets requires comment.
     *
     * @param boolean|null $requiresComment The requires comment boolean
     *
     * @return $this self Object
     */
    public function setRequiresComment($requiresComment)
    {
        $this->requiresComment = $requiresComment;

        return $this;
    }

    /**
     * Gets requires comment.
     *
     * @return boolean|null
     */
    public function isRequiresComment()
    {
        return $this->requiresComment;
    }

    /**
     * Sets requires question id.
     *
     * @param boolean|null $requiresQuestionId The requires question id boolean
     *
     * @return $this self Object
     */
    public function setRequiresQuestionId($requiresQuestionId)
    {
        $this->requiresQuestionId = $requiresQuestionId;

        return $this;
    }

    /**
     * Gets requires question id.
     *
     * @return boolean|null
     */
    public function isRequiresQuestionId()
    {
        return $this->requiresQuestionId;
    }

    /**
     * Sets requires site.
     *
     * @param boolean|null $requiresSite The requires site boolean
     *
     * @return $this self Object
     */
    public function setRequiresSite($requiresSite)
    {
        $this->requiresSite = $requiresSite;

        return $this;
    }

    /**
     * Gets requires site.
     *
     * @return boolean|null
     */
    public function isRequiresSite()
    {
        return $this->requiresSite;
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
        $this->requiresComment = Util::setIfExists($resource, 'requires_comment');
        $this->requiresQuestionId = Util::setIfExists($resource, 'requires_question_id');
        $this->requiresSite = Util::setIfArrayExists($resource, 'requires_site');
    }
}
