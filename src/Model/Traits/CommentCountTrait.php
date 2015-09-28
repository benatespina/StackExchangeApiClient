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

use BenatEspina\StackExchangeApiClient\Model\Comment;
use BenatEspina\StackExchangeApiClient\Model\Interfaces\CommentInterface;
use BenatEspina\StackExchangeApiClient\Util\Util;

/**
 * Class CommentCountTrait.
 *
 * @author Beñat Espiña <benatespina@gmail.com>
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
    protected $comments = [];

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
