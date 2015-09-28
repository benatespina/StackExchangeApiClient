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
 * Interface RequiresInterface.
 *
 * @author Beñat Espiña <benatespina@gmail.com>
 */
interface RequiresInterface
{
    /**
     * Sets requires comment.
     *
     * @param bool|null $requiresComment The requires comment boolean
     *
     * @return $this self Object
     */
    public function setRequiresComment($requiresComment);

    /**
     * Gets requires comment.
     *
     * @return bool|null
     */
    public function isRequiresComment();

    /**
     * Sets requires question id.
     *
     * @param bool|null $requiresQuestionId The requires question id boolean
     *
     * @return $this self Object
     */
    public function setRequiresQuestionId($requiresQuestionId);

    /**
     * Gets requires question id.
     *
     * @return bool|null
     */
    public function isRequiresQuestionId();

    /**
     * Sets requires site.
     *
     * @param bool|null $requiresSite The requires site boolean
     *
     * @return $this self Object
     */
    public function setRequiresSite($requiresSite);

    /**
     * Gets requires site.
     *
     * @return bool|null
     */
    public function isRequiresSite();
}
