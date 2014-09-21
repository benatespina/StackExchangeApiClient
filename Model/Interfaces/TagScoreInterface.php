<?php

/**
 * This file is part of the StackExchangeApiClient library.
 *
 * @author  benatespina <benatespina@gmail.com>
 *
 * @license MIT
 */

namespace BenatEspina\StackExchangeApiClient\Model\Interfaces;

/**
 * Interface TagScoreInterface.
 *
 * @package BenatEspina\StackExchangeApiClient\Model\Interfaces
 */
interface TagScoreInterface
{
    /**
     * Sets post count.
     *
     * @param int $postCount The post count
     *
     * @return $this self Object
     */
    public function setPostCount($postCount);

    /**
     * Gets post count.
     *
     * @return int
     */
    public function getPostCount();

    /**
     * Sets score.
     *
     * @param int $score The score
     *
     * @return $this self Object
     */
    public function setScore($score);

    /**
     * Gets score.
     *
     * @return int
     */
    public function getScore();

    /**
     * Sets user.
     *
     * @param \BenatEspina\StackExchangeApiClient\Model\Interfaces\ShallowUserInterface $user The user
     *
     * @return $this self Object
     */
    public function setUser(ShallowUserInterface $user);

    /**
     * Gets user.
     *
     * @return \BenatEspina\StackExchangeApiClient\Model\Interfaces\ShallowUserInterface
     */
    public function getUser();
}
