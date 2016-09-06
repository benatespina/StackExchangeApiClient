<?php

/*
 * This file is part of the Stack Exchange Api Client library.
 *
 * Copyright (c) 2014-2016 Beñat Espiña <benatespina@gmail.com>
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
class NetworkPost implements Model
{
    const POST_TYPES = ['question', 'answer'];

    protected $id;
    protected $postType;
    protected $score;
    protected $title;

    public static function fromProperties($id, $postType, $score, $title)
    {
        $instance = new self();
        $instance
            ->setId($id)
            ->setPostType($postType)
            ->setScore($score)
            ->setTitle($title);

        return $instance;
    }

    public static function fromJson(array $data)
    {
        $instance = new self();
        $instance
            ->setId(array_key_exists('post_id', $data) ? $data['post_id'] : null)
            ->setPostType(array_key_exists('post_type', $data) ? $data['post_type'] : null)
            ->setScore(array_key_exists('score', $data) ? $data['score'] : null)
            ->setTitle(array_key_exists('title', $data) ? $data['title'] : null);

        return $instance;
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
        if (in_array($postType, self::POST_TYPES, true)) {
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
