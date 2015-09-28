<?php

/*
 * This file is part of the Stack Exchange Api Client library.
 *
 * Copyright (c) 2015 Beñat Espiña <benatespina@gmail.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace BenatEspina\StackExchangeApiClient\Model;

use BenatEspina\StackExchangeApiClient\Model\Abstracts\BaseAbstract as BaseEvent;
use BenatEspina\StackExchangeApiClient\Model\Interfaces\EventInterface;
use BenatEspina\StackExchangeApiClient\Util\Util;

/**
 * Class Event.
 *
 * @author Beñat Espiña <benatespina@gmail.com>
 */
class Event extends BaseEvent implements EventInterface
{
    const EVENT_TYPE_ANSWER_POSTED = 'answer_posted';
    const EVENT_TYPE_COMMENT_POSTED = 'comment_posted';
    const EVENT_TYPE_POST_EDITED = 'post_edited';
    const EVENT_TYPE_QUESTION_POSTED = 'question_posted';
    const EVENT_TYPE_USER_CREATED = 'user_created';

    /**
     * Creation date.
     *
     * @var \DateTime
     */
    protected $creationDate;

    /**
     * Event type that can be 'question_posted', 'answer_posted', 'comment_posted', 'post_edited', or 'user_created'.
     *
     * @var string
     */
    protected $eventType;

    /**
     * Excerpt.
     *
     * @var string
     */
    protected $excerpt;

    /**
     * Link.
     *
     * @var string
     */
    protected $link;

    /**
     * Constructor.
     *
     * @param null|mixed[] $json The json string being decoded
     */
    public function __construct($json = null)
    {
        $this->id = Util::setIfIntegerExists($json, 'event_id');

        $this->creationDate = Util::setIfDateTimeExists($json, 'creation_date');
        $this->eventType = Util::isEqual(
            $json,
            'event_type',
            [
                self::EVENT_TYPE_ANSWER_POSTED,
                self::EVENT_TYPE_COMMENT_POSTED,
                self::EVENT_TYPE_POST_EDITED,
                self::EVENT_TYPE_QUESTION_POSTED,
                self::EVENT_TYPE_USER_CREATED,
            ]
        );
        $this->excerpt = Util::setIfStringExists($json, 'excerpt');
        $this->link = Util::setIfStringExists($json, 'link');
    }

    /**
     * {@inheritdoc}
     */
    public function setCreationDate(\DateTime $creationDate)
    {
        $this->creationDate = $creationDate;

        return $this;
    }

    /**
     * {@inheritdoc}
     */
    public function getCreationDate()
    {
        return $this->creationDate;
    }

    /**
     * {@inheritdoc}
     */
    public function setEventType($eventType)
    {
        if (Util::coincidesElement(
            $eventType,
            [
                self::EVENT_TYPE_ANSWER_POSTED,
                self::EVENT_TYPE_COMMENT_POSTED,
                self::EVENT_TYPE_POST_EDITED,
                self::EVENT_TYPE_QUESTION_POSTED,
                self::EVENT_TYPE_USER_CREATED,
            ]
        ) === true
        ) {
            $this->eventType = $eventType;
        }

        return $this;
    }

    /**
     * {@inheritdoc}
     */
    public function getEventType()
    {
        return $this->eventType;
    }

    /**
     * {@inheritdoc}
     */
    public function setExcerpt($excerpt)
    {
        $this->excerpt = $excerpt;

        return $this;
    }

    /**
     * {@inheritdoc}
     */
    public function getExcerpt()
    {
        return $this->excerpt;
    }

    /**
     * {@inheritdoc}
     */
    public function setLink($link)
    {
        $this->link = $link;

        return $this;
    }

    /**
     * {@inheritdoc}
     */
    public function getLink()
    {
        return $this->link;
    }
}
