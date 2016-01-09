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
 * The comment model class.
 *
 * @author Beñat Espiña <benatespina@gmail.com>
 */
class Comment implements Model
{
    const POST_TYPE_QUESTION = 'question';
    const POST_TYPE_ANSWER = 'answer';

    private $id;
    private $body;
    private $bodyMarkdown;
    private $canFlag;
    private $creationDate;
    private $edited;
    private $link;
    private $owner;
    private $postId;
    private $postType;
    private $replyToUser;
    private $score;
    private $upvoted;

    public static function fromProperties(
        $id,
        $body,
        $bodyMarkdown,
        $canFlag,
        \DateTime $creationDate,
        $edited,
        $link,
        $postId,
        $postType,
        $score,
        $upvoted,
        ShallowUser $owner = null,
        ShallowUser $replyToUser = null
    ) {
        return new self(
            $id,
            $body,
            $bodyMarkdown,
            $canFlag,
            $creationDate,
            $edited,
            $link,
            $owner,
            $postId,
            $postType,
            $replyToUser,
            $score,
            $upvoted
        );
    }

    public static function fromJson(array $data)
    {
        return new self(
            array_key_exists('comment_id', $data) ? $data['comment_id'] : null,
            array_key_exists('body', $data) ? $data['body'] : null,
            array_key_exists('body_markdown', $data) ? $data['body_markdown'] : null,
            array_key_exists('can_flag', $data) ? $data['can_flag'] : null,
            array_key_exists('creation_date', $data) ? new \DateTime('@' . $data['creation_date']) : null,
            array_key_exists('edited', $data) ? $data['edited'] : null,
            array_key_exists('link', $data) ? $data['link'] : null,
            array_key_exists('owner', $data) ? ShallowUser::fromJson($data['owner']) : null,
            array_key_exists('postId', $data) ? $data['postId'] : null,
            array_key_exists('post_type', $data) ? $data['post_type'] : null,
            array_key_exists('reply_to_user', $data) ? ShallowUser::fromJson($data['reply_to_user']) : null,
            array_key_exists('score', $data) ? $data['score'] : null,
            array_key_exists('upvoted', $data) ? $data['upvoted'] : null
        );
    }

    private function __construct(
        $id = null,
        $body = null,
        $bodyMarkdown = null,
        $canFlag = null,
        \DateTime $creationDate = null,
        $edited = null,
        $link = null,
        ShallowUser $owner = null,
        $postId = null,
        $postType = null,
        ShallowUser $replyToUser = null,
        $score = null,
        $upvoted = null
    ) {
        $this->id = $id;
        $this->body = $body;
        $this->bodyMarkdown = $bodyMarkdown;
        $this->canFlag = $canFlag;
        $this->creationDate = $creationDate;
        $this->edited = $edited;
        $this->link = $link;
        $this->owner = $owner;
        $this->postId = $postId;
        $this->setPostType($postType);
        $this->replyToUser = $replyToUser;
        $this->score = $score;
        $this->upvoted = $upvoted;
    }

    public function getId()
    {
        return $this->id;
    }

    public function setId($id)
    {
        $this->id = $id;

        return $this;
    }

    public function getBody()
    {
        return $this->body;
    }

    public function setBody($body)
    {
        $this->body = $body;

        return $this;
    }

    public function getBodyMarkdown()
    {
        return $this->bodyMarkdown;
    }

    public function setBodyMarkdown($bodyMarkdown)
    {
        $this->bodyMarkdown = $bodyMarkdown;

        return $this;
    }

    public function getCanFlag()
    {
        return $this->canFlag;
    }

    public function setCanFlag($canFlag)
    {
        $this->canFlag = $canFlag;

        return $this;
    }

    public function getCreationDate()
    {
        return $this->creationDate;
    }

    public function setCreationDate(\DateTime $creationDate)
    {
        $this->creationDate = $creationDate;

        return $this;
    }

    public function getEdited()
    {
        return $this->edited;
    }

    public function setEdited($edited)
    {
        $this->edited = $edited;

        return $this;
    }

    public function getLink()
    {
        return $this->link;
    }

    public function setLink($link)
    {
        $this->link = $link;

        return $this;
    }

    public function getOwner()
    {
        return $this->owner;
    }

    public function setOwner(ShallowUser $owner)
    {
        $this->owner = $owner;

        return $this;
    }

    public function getPostId()
    {
        return $this->postId;
    }

    public function setPostId($postId)
    {
        $this->postId = $postId;

        return $this;
    }

    public function getPostType()
    {
        return $this->postType;
    }

    public function setPostType($postType)
    {
        if (in_array($postType, [self::POST_TYPE_QUESTION, self::POST_TYPE_ANSWER], true)) {
            $this->postType = $postType;
        }

        return $this;
    }

    public function getReplyToUser()
    {
        return $this->replyToUser;
    }

    public function setReplyToUser(ShallowUser $replyToUser)
    {
        $this->replyToUser = $replyToUser;

        return $this;
    }

    public function getScore()
    {
        return $this->score;
    }

    public function setScore($score)
    {
        $this->score = $score;

        return $this;
    }

    public function getUpvoted()
    {
        return $this->upvoted;
    }

    public function setUpvoted($upvoted)
    {
        $this->upvoted = $upvoted;

        return $this;
    }
}
