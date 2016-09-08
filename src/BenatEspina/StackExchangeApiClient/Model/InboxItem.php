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
 * Class inbox item model class.
 *
 * @author Beñat Espiña <benatespina@gmail.com>
 */
class InboxItem implements Model
{
    const ITEM_TYPES = [
        'careers_invitations',
        'careers_message',
        'chat_message', 'comment',
        'meta_question',
        'moderator_message',
        'new_answer',
        'post_notice',
    ];

    protected $answerId;
    protected $body;
    protected $questionId;
    protected $commentId;
    protected $creationDate;
    protected $isUnread;
    protected $itemType;
    protected $link;
    protected $site;
    protected $title;

    public static function fromJson(array $data)
    {
        $instance = new self();
        $instance
            ->setAnswerId(array_key_exists('answer_id', $data) ? $data['answer_id'] : null)
            ->setBody(array_key_exists('body', $data) ? $data['body'] : null)
            ->setCommentId(array_key_exists('comment_id', $data) ? $data['comment_id'] : null)
            ->setCreationDate(array_key_exists('creation_date', $data)
                ? new \DateTimeImmutable('@' . $data['creation_date'])
                : null
            )
            ->setUnread(array_key_exists('is_unread', $data) ? $data['is_unread'] : null)
            ->setItemType(array_key_exists('item_type', $data) ? $data['item_type'] : null)
            ->setLink(array_key_exists('link', $data) ? $data['link'] : null)
            ->setQuestionId(array_key_exists('question_id', $data) ? $data['question_id'] : null)
            ->setSite(array_key_exists('site', $data) ? Site::fromJson($data['site']) : null)
            ->setTitle(array_key_exists('title', $data) ? $data['title'] : null);

        return $instance;
    }

    public static function fromProperties(
        $answerId,
        $commentId,
        \DateTimeInterface $creationDate,
        $isUnread,
        $itemType,
        $link,
        $questionId,
        Site $site,
        $title,
        $body = null
    ) {
        $instance = new self();
        $instance
            ->setAnswerId($answerId)
            ->setBody($body)
            ->setCommentId($commentId)
            ->setCreationDate($creationDate)
            ->setUnread($isUnread)
            ->setItemType($itemType)
            ->setLink($link)
            ->setQuestionId($questionId)
            ->setSite($site)
            ->setTitle($title);

        return $instance;
    }

    public function setAnswerId($answerId)
    {
        $this->answerId = $answerId;

        return $this;
    }

    public function getAnswerId()
    {
        return $this->answerId;
    }

    public function setBody($body)
    {
        $this->body = $body;

        return $this;
    }

    public function getBody()
    {
        return $this->body;
    }

    public function setQuestionId($questionId)
    {
        $this->questionId = $questionId;

        return $this;
    }

    public function getQuestionId()
    {
        return $this->questionId;
    }

    public function setCommentId($commentId)
    {
        $this->commentId = $commentId;

        return $this;
    }

    public function getCommentId()
    {
        return $this->commentId;
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

    public function setUnread($isUnread)
    {
        $this->isUnread = $isUnread;

        return $this;
    }

    public function isUnread()
    {
        return $this->isUnread;
    }

    public function setItemType($itemType)
    {
        if (in_array($itemType, self::ITEM_TYPES, true)) {
            $this->itemType = $itemType;
        }

        return $this;
    }

    public function getItemType()
    {
        return $this->itemType;
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

    public function setSite(Site $site = null)
    {
        $this->site = $site;

        return $this;
    }

    public function getSite()
    {
        return $this->site;
    }

    public function setTitle($title)
    {
        $this->title = $title;

        return $this;
    }

    public function getTitle()
    {
        return $this->title;
    }
}
