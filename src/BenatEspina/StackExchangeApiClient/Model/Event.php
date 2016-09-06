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
 * Class event model class.
 *
 * @author Beñat Espiña <benatespina@gmail.com>
 */
class Event implements Model
{
    const EVENT_TYPES = ['answer_posted', 'comment_posted', 'post_edited', 'question_posted', 'user_created'];

    protected $id;
    protected $creationDate;
    protected $eventType;
    protected $excerpt;
    protected $link;

    public static function fromJson(array $data)
    {
        $instance = new self();
        $instance
            ->setId(array_key_exists('event_id', $data) ? $data['event_id'] : null)
            ->setCreationDate(array_key_exists('creation_date', $data) ? $data['creation_date'] : null)
            ->setEventType(array_key_exists('event_type', $data) ? $data['event_type'] : null)
            ->setExcerpt(array_key_exists('excerpt', $data) ? $data['excerpt'] : null)
            ->setLink(array_key_exists('link', $data) ? $data['link'] : null);

        return $instance;
    }

    public static function fromProperties(
        $id,
        \DateTimeInterface $creationDate,
        $eventType,
        $excerpt = null,
        $link = null
    ) {
        $instance = new self();
        $instance
            ->setId($id)
            ->setCreationDate($creationDate)
            ->setEventType($eventType)
            ->setExcerpt($excerpt)
            ->setLink($link);

        return $instance;
    }

    public function setId($id)
    {
        $this->id = $id;

        return $this;
    }

    public function getId()
    {
        return $this->id;
    }

    public function setCreationDate(\DateTimeInterface $creationDate = null)
    {
        $this->creationDate = $creationDate;

        return $this;
    }

    public function getCreationDate()
    {
        return $this->creationDate;
    }

    public function setEventType($eventType)
    {
        if (in_array($eventType, self::EVENT_TYPES, true)) {
            $this->eventType = $eventType;
        }

        return $this;
    }

    public function getEventType()
    {
        return $this->eventType;
    }

    public function setExcerpt($excerpt)
    {
        $this->excerpt = $excerpt;

        return $this;
    }

    public function getExcerpt()
    {
        return $this->excerpt;
    }

    public function setLink($link)
    {
        $this->link = $link;

        return $this;
    }

    public function getLink()
    {
        return $this->link;
    }
}
