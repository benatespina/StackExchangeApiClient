<?php

/*
 * This file is part of the Stack Exchange Api Client library.
 *
 * Copyright (c) 2014-2015 Beñat Espiña <benatespina@gmail.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace BenatEspina\StackExchangeApiClient\Model;

/**
 * The network post model class.
 *
 * @author Beñat Espiña <benatespina@gmail.com>
 */
class NetworkPost
{
    const POST_TYPE_QUESTION = 'question';
    const POST_TYPE_ANSWER = 'answer';

    private $id;
    private $postType;
    private $score;
    private $title;

    public static function fromProperties($id, $postType, $score, $title)
    {
        return new self($id, $postType, $score, $title);
    }

    public static function fromJson(array $data)
    {
        return new self(
            array_key_exists('post_id', $data) ? $data['post_id'] : null,
            array_key_exists('post_type', $data) ? $data['post_type'] : null,
            array_key_exists('score', $data) ? $data['score'] : null,
            array_key_exists('title', $data) ? $data['title'] : null
        );
    }

    private function __construct($id = null, $postType = null, $score = null, $title = null)
    {
        $this->id = $id;
        $this->setPostType($postType);
        $this->score = $score;
        $this->title = $title;
    }

    public function getId()
    {
        return $this->id;
    }

    public function setId($id)
    {
        $this->id = $id;

        return $this;
    }

    public function getPostType()
    {
        return $this->postType;
    }

    public function setPostType($postType)
    {
        if (in_array($postType, [self::POST_TYPE_QUESTION, self::POST_TYPE_ANSWER])) {
            $this->postType = $postType;
        }

        return $this;
    }

    public function getScore()
    {
        return $this->score;
    }

    public function setScore($score)
    {
        $this->score = $score;

        return $this;
    }

    public function getTitle()
    {
        return $this->title;
    }

    public function setTitle($title)
    {
        $this->title = $title;

        return $this;
    }
}
