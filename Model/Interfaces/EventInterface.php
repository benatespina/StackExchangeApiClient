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
 * Interface EventInterface
 *
 * @package BenatEspina\StackExchangeApiClient\Model\Interfaces
 */
interface EventInterface
{
    /**
     * Sets creation date.
     *
     * @param \DateTime $creationDate The creation date
     *
     * @return $this self Object
     */
    public function setCreationDate(\DateTime $creationDate);

    /**
     * Gets creation date.
     *
     * @return \DateTime
     */
    public function getCreationDate();

    /**
     * Sets event type.
     *
     * @param string $eventType The event type that can be
     *                          'question_posted', 'answer_posted', 'comment_posted', 'post_edited', or 'user_created'
     *
     * @return $this self Object
     */
    public function setEventType($eventType);

    /**
     * Gets event type.
     *
     * @return string
     */
    public function getEventType();

    /**
     * Sets excerpt.
     *
     * @param string $excerpt The excerpt
     *
     * @return $this self Object
     */
    public function setExcerpt($excerpt);

    /**
     * Gets excerpt.
     *
     * @return string
     */
    public function getExcerpt();

    /**
     * Sets link.
     *
     * @param string $link The link
     *
     * @return $this self Object
     */
    public function setLink($link);

    /**
     * Gets link.
     *
     * @return string
     */
    public function getLink();
}
