<?php

/**
 * This file is part of the StackExchangeApiClient library.
 *
 * @author  benatespina <benatespina@gmail.com>
 *
 * @license MIT
 */

namespace BenatEspina\StackExchangeApiClient\Model\Traits;

use BenatEspina\StackExchangeApiClient\Util\Util;

/**
 * Trait VoteCountTrait.
 *
 * @package BenatEspina\StackExchangeApiClient\Model\Traits
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
     *
     * @return void
     */
    protected function loadVoteCount($resource)
    {
        $this->downVoteCount = Util::setIfIntegerExists($resource, 'down_vote_count');
        $this->upVoteCount = Util::setIfIntegerExists($resource, 'up_vote_count');
    }
}
