<?php

/**
 * This file is part of the StackExchangeApiClient library.
 *
 * @author  benatespina <benatespina@gmail.com>
 *
 * @license MIT
 */

namespace BenatEspina\StackExchangeApiClient\Model;

use BenatEspina\StackExchangeApiClient\Model\Interfaces\ShallowUserInterface;
use BenatEspina\StackExchangeApiClient\Model\Interfaces\TagScoreInterface;
use BenatEspina\StackExchangeApiClient\Util\Util;

/**
 * Class TagScore.
 *
 * @package BenatEspina\StackExchangeApiClient\Model
 */
class TagScore implements TagScoreInterface
{
    /**
     * Post count.
     *
     * @var int
     */
    protected $postCount;

    /**
     * The score.
     *
     * @var int
     */
    protected $score;

    /**
     * The user.
     *
     * @var \BenatEspina\StackExchangeApiClient\Model\Interfaces\ShallowUserInterface
     */
    protected $user;

    /**
     * Constructor.
     *
     * @param null|mixed[] $json The json string being decoded
     */
    public function __construct($json = null)
    {
        $this->postCount = Util::setIfIntegerExists($json, 'post_count');
        $this->score = Util::setIfIntegerExists($json, 'score');
        $this->user = new ShallowUser(Util::setIfArrayExists($json, 'user'));
    }

    /**
     * {@inheritdoc}
     */
    public function setPostCount($postCount)
    {
        $this->postCount = $postCount;

        return $this;
    }

    /**
     * {@inheritdoc}
     */
    public function getPostCount()
    {
        return $this->postCount;
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
    public function setUser(ShallowUserInterface $user)
    {
        $this->user = $user;

        return $this;
    }

    /**
     * {@inheritdoc}
     */
    public function getUser()
    {
        return $this->user;
    }
}
