<?php

/*
 * This file is part of the Stack Exchange Api Client library.
 *
 * Copyright (c) 2015 Beñat Espiña <benatespina@gmail.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace BenatEspina\StackExchangeApiClient\Model\Interfaces\Traits;

/**
 * Interface VoteCountInterface.
 *
 * @author Beñat Espiña <benatespina@gmail.com>
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
