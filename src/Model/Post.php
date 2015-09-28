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

use BenatEspina\StackExchangeApiClient\Model\Abstracts\AnswerPostQuestionAbstract as BasePost;
use BenatEspina\StackExchangeApiClient\Model\Interfaces\PostInterface;
use BenatEspina\StackExchangeApiClient\Util\Util;

/**
 * Class Post.
 *
 * @author Beñat Espiña <benatespina@gmail.com>
 */
class Post extends BasePost implements PostInterface
{
    const POST_TYPE_QUESTION = 'question';
    const POST_TYPE_ANSWER = 'answer';

    /**
     * The post type tha can be 'question' or 'answer'.
     *
     * @var int
     */
    protected $postType;

    /**
     * Constructor.
     *
     * @param null|mixed[] $json The json string being decoded
     */
    public function __construct($json = null)
    {
        parent::__construct($json);
        $this->id = Util::setIfIntegerExists($json, 'post_id');

        $this->postType = Util::isEqual($json, 'post_type', [self::POST_TYPE_ANSWER, self::POST_TYPE_QUESTION]);
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
}
