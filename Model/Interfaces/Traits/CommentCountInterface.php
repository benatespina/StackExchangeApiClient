<?php

/**
 * This file is part of the StackExchangeApiClient library.
 *
 * @author  benatespina <benatespina@gmail.com>
 *
 * @license MIT
 */

namespace BenatEspina\StackExchangeApiClient\Model\Interfaces\Traits;

use BenatEspina\StackExchangeApiClient\Model\Interfaces\CommentInterface;

/**
 * Interface CommentCountInterface.
 *
 * @package BenatEspina\StackExchangeApiClient\Model\Interfaces\Traits
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
