<?php

/*
 * This file is part of the Stack Exchange Api Client library.
 *
 * Copyright (c) 2015 Beñat Espiña <benatespina@gmail.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace BenatEspina\StackExchangeApiClient\Model\Interfaces;

/**
 * Interface TagScoreInterface.
 *
 * @author Beñat Espiña <benatespina@gmail.com>
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
