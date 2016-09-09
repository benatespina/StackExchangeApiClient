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
 * The post model class.
 *
 * @author Beñat Espiña <benatespina@gmail.com>
 */
class Post implements Model
{
    const POST_TYPES = [
        'question',
        'answer',
    ];

    protected $postId;
    protected $postType;
    protected $downvoted;
    protected $lastActivityDate;
    protected $shareLink;
    protected $title;
    protected $commentCount;
    protected $comments;
    protected $lastEditDate;
    protected $lastEditor;
    protected $downVoteCount;
    protected $upVoteCount;
    protected $creationDate;
    protected $link;
    protected $owner;
    protected $score;
    protected $body;
    protected $bodyMarkdown;
    protected $upvoted;

    public static function fromJson(array $data)
    {
        $comments = [];
        if (array_key_exists('comments', $data) && is_array($data['comments'])) {
            foreach ($data['comments'] as $comment) {
                $comments[] = Comment::fromJson($comment);
            }
        }

        $instance = new self();
        $instance
            ->setPostId(array_key_exists('post_id', $data) ? $data['post_id'] : null)
            ->setPostType(array_key_exists('post_type', $data) ? $data['post_type'] : null)
            ->setCreationDate(
                array_key_exists('creation_date', $data)
                    ? new \DateTimeImmutable('@' . $data['creation_date'])
                    : null
            )
            ->setLastActivityDate(
                array_key_exists('last_activity_date', $data)
                    ? new \DateTimeImmutable('@' . $data['last_activity_date'])
                    : null
            )
            ->setLastEditDate(
                array_key_exists('last_edit_date', $data)
                    ? new \DateTimeImmutable('@' . $data['last_edit_date'])
                    : null
            )
            ->setLink(array_key_exists('link', $data) ? $data['link'] : null)
            ->setOwner(array_key_exists('owner', $data) ? ShallowUser::fromJson($data['owner']) : null)
            ->setScore(array_key_exists('score', $data) ? $data['score'] : null)
            ->setBody(array_key_exists('body', $data) ? $data['body'] : null)
            ->setBodyMarkdown(array_key_exists('body_markdown', $data) ? $data['body_markdown'] : null)
            ->setShareLink(array_key_exists('share_link', $data) ? $data['share_link'] : null)
            ->setTitle(array_key_exists('title', $data) ? $data['title'] : null)
            ->setCommentCount(array_key_exists('comment_count', $data) ? $data['comment_count'] : null)
            ->setComments($comments)
            ->setLastEditor(array_key_exists('last_editor', $data) ? ShallowUser::fromJson($data['last_editor']) : null)
            ->setDownvoted(array_key_exists('downvoted', $data) ? $data['downvoted'] : null)
            ->setDownVoteCount(array_key_exists('down_vote_count', $data) ? $data['down_vote_count'] : null)
            ->setUpvoted(array_key_exists('upvoted', $data) ? $data['upvoted'] : null)
            ->setUpVoteCount(array_key_exists('up_vote_count', $data) ? $data['up_vote_count'] : null);

        return $instance;
    }

    public static function fromProperties(
        $postId,
        $postType,
        \DateTimeInterface $creationDate,
        \DateTimeInterface $lastActivityDate,
        \DateTimeInterface $lastEditDate,
        $link,
        ShallowUser $owner,
        $score,
        $body = null,
        $bodyMarkdown = null,
        $shareLink = null,
        $title = null,
        $commentCount = null,
        array $comments = [],
        $lastEditDate = null,
        $lastEditor = null,
        $downvoted = null,
        $downVoteCount = null,
        $upvoted = null,
        $upVoteCount = null
    ) {
        $instance = new self();
        $instance
            ->setPostId($postId)
            ->setPostType($postType)
            ->setCreationDate($creationDate)
            ->setLastActivityDate($lastActivityDate)
            ->setLastEditDate($lastEditDate)
            ->setLink($link)
            ->setOwner($owner)
            ->setScore($score)
            ->setBody($body)
            ->setBodyMarkdown($bodyMarkdown)
            ->setShareLink($shareLink)
            ->setTitle($title)
            ->setCommentCount($commentCount)
            ->setComments($comments)
            ->setLastEditor($lastEditor)
            ->setDownvoted($downvoted)
            ->setDownVoteCount($downVoteCount)
            ->setUpvoted($upvoted)
            ->setUpVoteCount($upVoteCount);

        return $instance;
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

    public function getCreationDate()
    {
        return $this->creationDate;
    }

    public function setCreationDate(\DateTimeInterface $creationDate = null)
    {
        $this->creationDate = $creationDate;

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

    public function setOwner(ShallowUser $owner = null)
    {
        $this->owner = $owner;

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

    public function getUpvoted()
    {
        return $this->upvoted;
    }

    public function setUpvoted($upvoted)
    {
        $this->upvoted = $upvoted;

        return $this;
    }

    public function setPostType($postType)
    {
        if (in_array($postType, self::POST_TYPES, true)) {
            $this->postType = $postType;
        }

        return $this;
    }

    public function getPostType()
    {
        return $this->postType;
    }

    public function setDownvoted($downvoted)
    {
        $this->downvoted = $downvoted;

        return $this;
    }

    public function isDownvoted()
    {
        return $this->downvoted;
    }

    public function setLastActivityDate(\DateTimeInterface $lastActivityDate = null)
    {
        $this->lastActivityDate = $lastActivityDate;

        return $this;
    }

    public function getLastActivityDate()
    {
        return $this->lastActivityDate;
    }

    public function setShareLink($shareLink)
    {
        $this->shareLink = $shareLink;

        return $this;
    }

    public function getShareLink()
    {
        return $this->shareLink;
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

    public function setCommentCount($commentCount)
    {
        $this->commentCount = $commentCount;

        return $this;
    }

    public function getCommentCount()
    {
        return $this->commentCount;
    }

    public function setComments(array $comments = [])
    {
        $this->comments = $comments;

        return $this;
    }

    public function getComments()
    {
        return $this->comments;
    }

    public function setLastEditDate(\DateTimeInterface $lastEditDate = null)
    {
        $this->lastEditDate = $lastEditDate;

        return $this;
    }

    public function getLastEditDate()
    {
        return $this->lastEditDate;
    }

    public function setLastEditor(ShallowUser $lastEditor = null)
    {
        $this->lastEditor = $lastEditor;

        return $this;
    }

    public function getLastEditor()
    {
        return $this->lastEditor;
    }

    public function setDownVoteCount($downVoteCount)
    {
        $this->downVoteCount = $downVoteCount;

        return $this;
    }

    public function getDownVoteCount()
    {
        return $this->downVoteCount;
    }

    public function setUpVoteCount($upVoteCount)
    {
        $this->upVoteCount = $upVoteCount;

        return $this;
    }

    public function getUpVoteCount()
    {
        return $this->upVoteCount;
    }
}
