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

use BenatEspina\StackExchangeApiClient\Model\Interfaces\CommentInterface;

/**
 * Interface CommentCountInterface.
 *
 * @author Beñat Espiña <benatespina@gmail.com>
 */
interface CommentCountInterface
{
    /**
     * Sets number of comments.
     *
     * @param int $commentCount The number of comments
     *
     * @return $this self Object
     */
    public function setCommentCount($commentCount);

    /**
     * Gets number of comments.
     *
     * @return int
     */
    public function getCommentCount();

    /**
     * Adds comment.
     *
     * @param \BenatEspina\StackExchangeApiClient\Model\Interfaces\CommentInterface $comment The comment object
     *
     * @return $this self Object
     */
    public function addComment(CommentInterface $comment);

    /**
     * Removes comment.
     *
     * @param \BenatEspina\StackExchangeApiClient\Model\Interfaces\CommentInterface $comment The comment object
     *
     * @return $this self Object
     */
    public function removeComment(CommentInterface $comment);

    /**
     * Gets array of comments.
     *
     * @return array<\BenatEspina\StackExchangeApiClient\Model\Interfaces\CommentInterface>
     */
    public function getComments();
}
