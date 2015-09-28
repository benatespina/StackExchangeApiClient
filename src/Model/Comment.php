<?php

/*
 * This file is part of the Stack Exchange Api Client library.
 *
 * Copyright (c) 2015 Beñat Espiña <benatespina@gmail.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace BenatEspina\StackExchangeApiClient\Model;

use BenatEspina\StackExchangeApiClient\Model\Abstracts\ResourceAbstract as BaseComment;
use BenatEspina\StackExchangeApiClient\Model\Interfaces\CommentInterface;
use BenatEspina\StackExchangeApiClient\Model\Interfaces\ShallowUserInterface;
use BenatEspina\StackExchangeApiClient\Util\Util;

/**
 * Class Comment.
 *
 * @author Beñat Espiña <benatespina@gmail.com>
 */
class Comment extends BaseComment implements CommentInterface
{
    const POST_TYPE_QUESTION = 'question';
    const POST_TYPE_ANSWER = 'answer';

    /**
     * Boolean that shows it can flag or not.
     *
     * @var bool
     */
    protected $canFlag;

    /**
     * Boolean that shows it edited or not.
     *
     * @var bool
     */
    protected $edited;

    /**
     * The post id.
     *
     * @var int
     */
    protected $postId;

    /**
     * Post type that can be 'question' or 'answer'.
     *
     * @var string
     */
    protected $postType;

    /**
     * Reply to user.
     *
     * @var \BenatEspina\StackExchangeApiClient\Model\Interfaces\ShallowUserInterface|null
     */
    protected $replyToUser;

    /**
     * Constructor.
     *
     * @param null|mixed[] $json The json string being decoded
     */
    public function __construct($json = null)
    {
        parent::__construct($json);
        $this->id = Util::setIfIntegerExists($json, 'comment_id');

        $this->canFlag = Util::setIfBoolExists($json, 'can_flag');
        $this->edited = Util::setIfBoolExists($json, 'edited');
        $this->postId = Util::setIfIntegerExists($json, 'post_id');
        $this->postType = Util::isEqual($json, 'post_type', [self::POST_TYPE_ANSWER, self::POST_TYPE_QUESTION]);
        $this->replyToUser = new ShallowUser(Util::setIfArrayExists($json, 'reply_to_user'));
    }

    /**
     * {@inheritdoc}
     */
    public function setCanFlag($canFlag)
    {
        $this->canFlag = $canFlag;

        return $this;
    }

    /**
     * {@inheritdoc}
     */
    public function isCanFlag()
    {
        return $this->canFlag;
    }

    /**
     * {@inheritdoc}
     */
    public function setEdited($edited)
    {
        $this->edited = $edited;

        return $this;
    }

    /**
     * {@inheritdoc}
     */
    public function isEdited()
    {
        return $this->edited;
    }

    /**
     * {@inheritdoc}
     */
    public function setPostId($postId)
    {
        $this->postId = $postId;

        return $this;
    }

    /**
     * {@inheritdoc}
     */
    public function getPostId()
    {
        return $this->postId;
    }

    /**
     * {@inheritdoc}
     */
    public function setPostType($postType)
    {
        if (Util::coincidesElement($postType, [self::POST_TYPE_ANSWER, self::POST_TYPE_QUESTION]) === true) {
            $this->postType = $postType;
        }

        return $this;
    }

    /**
     * {@inheritdoc}
     */
    public function getPostType()
    {
        return $this->postType;
    }

    /**
     * {@inheritdoc}
     */
    public function setReplyToUser(ShallowUserInterface $replyToUser)
    {
        $this->replyToUser = $replyToUser;

        return $this;
    }

    /**
     * {@inheritdoc}
     */
    public function getReplyToUser()
    {
        return $this->replyToUser;
    }
}
