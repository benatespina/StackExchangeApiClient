<?php

/**
 * This file is part of the StackExchangeApiClient library.
 *
 * @author  benatespina <benatespina@gmail.com>
 *
 * @license MIT
 */

namespace BenatEspina\StackExchangeApiClient\Model;

use BenatEspina\StackExchangeApiClient\Model\Abstracts\BaseAbstract as BaseNetworkPost;
use BenatEspina\StackExchangeApiClient\Model\Interfaces\NetworkPostInterface;
use BenatEspina\StackExchangeApiClient\Util\Util;

/**
 * Class NetworkPost.
 *
 * @package BenatEspina\StackExchangeApiClient\Model
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

        $this->postType = Util::isEqual($json, 'post_type', array(self::POST_TYPE_ANSWER, self::POST_TYPE_QUESTION));
        $this->score = Util::setIfIntegerExists($json, 'score');
        $this->title = Util::setIfStringExists($json, 'title');
    }

    /**
     * {@inheritdoc}
     */
    public function setPostType($postType)
    {
        if (Util::coincidesElement(
            $postType,
            array(
                self::POST_TYPE_ANSWER,
                self::POST_TYPE_QUESTION
            )
        )) {
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
