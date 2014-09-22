<?php

/**
 * This file is part of the StackExchangeApiClient library.
 *
 * @author  benatespina <benatespina@gmail.com>
 *
 * @license MIT
 */

namespace BenatEspina\StackExchangeApiClient\Model\Traits;

use BenatEspina\StackExchangeApiClient\Model\Comment;
use BenatEspina\StackExchangeApiClient\Model\Interfaces\CommentInterface;
use BenatEspina\StackExchangeApiClient\Util\Util;

/**
 * Class CommentCountTrait.
 *
 * @package BenatEspina\StackExchangeApiClient\Model\Traits
 */
trait CommentCountTrait
{
    /**
     * Number of comments.
     *
     * @var int
     */
    protected $commentCount;

    /**
     * An array of comments.
     *
     * @var array<\BenatEspina\StackExchangeApiClient\Model\Interfaces\CommentInterface>|null
     */
    protected $comments = array();

    /**
     * Sets number of comments.
     *
     * @param int $commentCount The number of comments
     *
     * @return $this self Object
     */
    public function setCommentCount($commentCount)
    {
        $this->commentCount = $commentCount;

        return $this;
    }

    /**
     * Gets number of comments.
     *
     * @return int
     */
    public function getCommentCount()
    {
        return $this->commentCount;
    }

    /**
     * Adds comment.
     *
     * @param \BenatEspina\StackExchangeApiClient\Model\Interfaces\CommentInterface|null $comment The comment object
     *
     * @return $this self Object
     */
    public function addComment(CommentInterface $comment)
    {
        $this->comments[] = $comment;

        return $this;
    }

    /**
     * Removes comment.
     *
     * @param \BenatEspina\StackExchangeApiClient\Model\Interfaces\CommentInterface|null $comment The comment object
     *
     * @return $this self Object
     */
    public function removeComment(CommentInterface $comment)
    {
        $this->comments = Util::removeElement($comment, $this->comments);

        return $this;
    }

    /**
     * Gets array of comments.
     *
     * @return array<\BenatEspina\StackExchangeApiClient\Model\Interfaces\CommentInterface>|null
     */
    public function getComments()
    {
        return $this->comments;
    }

    /**
     * Loads the variables if the data exist into resource. It works like a constructor.
     *
     * @param null|mixed[] $resource The resource
     *
     * @return void
     */
    protected function loadCommentCount($resource)
    {
        $this->commentCount = Util::setIfIntegerExists($resource, 'comment_count');
        $comments = Util::setIfArrayExists($resource, 'comments');
        foreach ($comments as $comment) {
            $this->comments[] = new Comment($comment);
        }
    }
}
