<?php

/**
 * This file is part of the StackExchangeApiClient library.
 *
 * @author  benatespina <benatespina@gmail.com>
 *
 * @license MIT
 */

namespace BenatEspina\StackExchangeApiClient\Model;

use BenatEspina\StackExchangeApiClient\Model\Abstracts\AnswerPostQuestionAbstract as BasePost;
use BenatEspina\StackExchangeApiClient\Model\Interfaces\PostInterface;
use BenatEspina\StackExchangeApiClient\Util\Util;

/**
 * Class Post.
 *
 * @package BenatEspina\StackExchangeApiClient\Model
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
     * @param null|(int|string)[] $json The json string being decoded
     */
    public function __construct($json = null)
    {
        parent::__construct($json);
        $this->id = Util::setIfExists($json, 'post_id');

        $this->postType = Util::isEqual($json, 'post_type', array(self::POST_TYPE_ANSWER, self::POST_TYPE_QUESTION));
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
}
