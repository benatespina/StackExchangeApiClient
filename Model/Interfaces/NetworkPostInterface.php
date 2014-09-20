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
 * Interface NetworkPostInterface.
 *
 * @package BenatEspina\StackExchangeApiClient\Model\Interfaces
 */
interface NetworkPostInterface
{
    /**
     * Sets post type.
     *
     * @param int $postType The post type that can be 'question' or 'answer'
     *
     * @return $this self Object
     */
    public function setPostType($postType);

    /**
     * Gets post type.
     *
     * @return int
     */
    public function getPostType();

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
     * Sets title.
     *
     * @param string $title The title
     *
     * @return $this self Object
     */
    public function setTitle($title);

    /**
     * Gets title.
     *
     * @return string
     */
    public function getTitle();
}
