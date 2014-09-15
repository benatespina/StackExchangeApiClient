<?php

/**
 * This file is part of the StackExchangeApiClient library.
 *
 * @author  benatespina <benatespina@gmail.com>
 *
 * @license MIT
 */

namespace BenatEspina\StackExchangeApiClient\Model\Interfaces\Traits;

/**
 * Interface VoteCountInterface.
 *
 * @package BenatEspina\StackExchangeApiClient\Model\Interfaces\Traits
 */
interface VoteCountInterface
{
    /**
     * Sets number of down votes.
     *
     * @param Number $downVoteCount The number of down votes
     *
     * @return $this self Object
     */
    public function setDownVoteCount($downVoteCount);

    /**
     * Gets number of down votes.
     *
     * @return int
     */
    public function getDownVoteCount();

    /**
     * Sets number of up votes.
     *
     * @param int $upVoteCount The number of up votes
     *
     * @return $this self Object
     */
    public function setUpVoteCount($upVoteCount);

    /**
     * Gets number of up votes.
     *
     * @return int
     */
    public function getUpVoteCount();
}
