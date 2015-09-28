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
 * Trait RequiresTrait.
 *
 * @author Beñat Espiña <benatespina@gmail.com>
 */
trait RequiresTrait
{
    /**
     * Boolean that shows if comment is required or not.
     *
     * @var bool|null
     */
    protected $requiresComment;

    /**
     * Boolean that shows if question id is required or not.
     *
     * @var bool|null
     */
    protected $requiresQuestionId;

    /**
     * Boolean that shows if site id is required or not.
     *
     * @var bool|null
     */
    protected $requiresSite;

    /**
     * Sets requires comment.
     *
     * @param bool|null $requiresComment The requires comment boolean
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
     * @return bool|null
     */
    public function isRequiresComment()
    {
        return $this->requiresComment;
    }

    /**
     * Sets requires question id.
     *
     * @param bool|null $requiresQuestionId The requires question id boolean
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
     * @return bool|null
     */
    public function isRequiresQuestionId()
    {
        return $this->requiresQuestionId;
    }

    /**
     * Sets requires site.
     *
     * @param bool|null $requiresSite The requires site boolean
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
     * @return bool|null
     */
    public function isRequiresSite()
    {
        return $this->requiresSite;
    }

    /**
     * Loads the variables if the data exist into resource. It works like a constructor.
     *
     * @param null|mixed[] $resource The resource
     */
    protected function loadAnswered($resource)
    {
        $this->requiresComment = Util::setIfBoolExists($resource, 'requires_comment');
        $this->requiresQuestionId = Util::setIfBoolExists($resource, 'requires_question_id');
        $this->requiresSite = Util::setIfBoolExists($resource, 'requires_site');
    }
}
