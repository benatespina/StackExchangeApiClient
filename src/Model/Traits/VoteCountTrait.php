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

use BenatEspina\StackExchangeApiClient\Util\Util;

/**
 * Trait VoteCountTrait.
 *
 * @author Beñat Espiña <benatespina@gmail.com>
 */
trait VoteCountTrait
{
    /**
     * Number of down votes.
     *
     * @var int
     */
    protected $downVoteCount;

    /**
     * Number of up votes.
     *
     * @var int
     */
    protected $upVoteCount;

    /**
     * Sets number of down votes.
     *
     * @param int $downVoteCount The number of down votes
     *
     * @return $this self Object
     */
    public function setDownVoteCount($downVoteCount)
    {
        $this->downVoteCount = $downVoteCount;

        return $this;
    }

    /**
     * Gets number of down votes.
     *
     * @return int
     */
    public function getDownVoteCount()
    {
        return $this->downVoteCount;
    }

    /**
     * Sets number of up votes.
     *
     * @param int $upVoteCount The number of up votes
     *
     * @return $this self Object
     */
    public function setUpVoteCount($upVoteCount)
    {
        $this->upVoteCount = $upVoteCount;

        return $this;
    }

    /**
     * Gets number of up votes.
     *
     * @return int
     */
    public function getUpVoteCount()
    {
        return $this->upVoteCount;
    }

    /**
     * Loads the variables if the data exist into resource. It works like a constructor.
     *
     * @param null|mixed[] $resource The resource
     */
    protected function loadVoteCount($resource)
    {
        $this->downVoteCount = Util::setIfIntegerExists($resource, 'down_vote_count');
        $this->upVoteCount = Util::setIfIntegerExists($resource, 'up_vote_count');
    }
}
