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

use BenatEspina\StackExchangeApiClient\Model\Abstracts\BaseAbstract as BaseNetworkPost;
use BenatEspina\StackExchangeApiClient\Model\Interfaces\NetworkPostInterface;
use BenatEspina\StackExchangeApiClient\Util\Util;

/**
 * Class NetworkPost.
 *
 * @author Beñat Espiña <benatespina@gmail.com>
 */
class NetworkPost extends BaseNetworkPost implements NetworkPostInterface
{
    const POST_TYPE_QUESTION = 'question';
    const POST_TYPE_ANSWER = 'answer';

    /**
     * Post type that can be 'question' or 'answer'.
     *
     * @var string
     */
    protected $postType;

    /**
     * The score.
     *
     * @var int
     */
    protected $score;

    /**
     * The title.
     *
     * @var string.
     */
    protected $title;

    /**
     * Constructor.
     *
     * @param null|mixed[] $json The json string being decoded
     */
    public function __construct($json = null)
    {
        $this->id = Util::setIfIntegerExists($json, 'post_id');

        $this->postType = Util::isEqual($json, 'post_type', [self::POST_TYPE_ANSWER, self::POST_TYPE_QUESTION]);
        $this->score = Util::setIfIntegerExists($json, 'score');
        $this->title = Util::setIfStringExists($json, 'title');
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
    public function setScore($score)
    {
        $this->score = $score;

        return $this;
    }

    /**
     * {@inheritdoc}
     */
    public function getScore()
    {
        return $this->score;
    }

    /**
     * {@inheritdoc}
     */
    public function setTitle($title)
    {
        $this->title = $title;

        return $this;
    }

    /**
     * {@inheritdoc}
     */
    public function getTitle()
    {
        return $this->title;
    }
}
