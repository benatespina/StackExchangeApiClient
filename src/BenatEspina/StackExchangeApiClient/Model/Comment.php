<?php

/*
 * This file is part of the Stack Exchange Api Client library.
 *
 * (c) Beñat Espiña <benatespina@gmail.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

declare(strict_types=1);
/*
 * This file is part of the Stack Exchange Api Client library.
 *
 * (c) Beñat Espiña <benatespina@gmail.com>
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
    const POST_TYPES = ['question', 'answer'];

    protected $id;
    protected $body;
    protected $bodyMarkdown;
    protected $canFlag;
    protected $creationDate;
    protected $edited;
    protected $link;
    protected $owner;
    protected $postId;
    protected $postType;
    protected $replyToUser;
    protected $score;
    protected $upvoted;

    public static function fromProperties(
        $id,
        $body,
        $bodyMarkdown,
        $canFlag,
        \DateTimeInterface $creationDate,
        $edited,
        $link,
        $postId,
        $postType,
        $score,
        $upvoted,
        ShallowUser $owner = null,
        ShallowUser $replyToUser = null
    ) {
        $instance = new self();
        $instance
            ->setId($id)
            ->setBody($body)
            ->setBodyMarkdown($bodyMarkdown)
            ->setCanFlag($canFlag)
            ->setCreationDate($creationDate)
            ->setEdited($edited)
            ->setLink($link)
            ->setOwner($owner)
            ->setPostId($postId)
            ->setPostType($postType)
            ->setReplyToUser($replyToUser)
            ->setScore($score)
            ->setUpvoted($upvoted);

        return $instance;
    }

    public static function fromJson(array $data)
    {
        $instance = new self();
        $instance
            ->setId(array_key_exists('comment_id', $data) ? $data['comment_id'] : null)
            ->setBody(array_key_exists('body', $data) ? $data['body'] : null)
            ->setBodyMarkdown(array_key_exists('body_markdown', $data) ? $data['body_markdown'] : null)
            ->setCanFlag(array_key_exists('can_flag', $data) ? $data['can_flag'] : null)
            ->setCreationDate(
                array_key_exists('creation_date', $data)
                    ? new \DateTimeImmutable('@' . $data['creation_date'])
                    : null
            )
            ->setEdited(array_key_exists('edited', $data) ? $data['edited'] : null)
            ->setLink(array_key_exists('link', $data) ? $data['link'] : null)
            ->setOwner(array_key_exists('owner', $data) ? ShallowUser::fromJson($data['owner']) : null)
            ->setPostId(array_key_exists('postId', $data) ? $data['postId'] : null)
            ->setPostType(array_key_exists('post_type', $data) ? $data['post_type'] : null)
            ->setReplyToUser(array_key_exists(
                'reply_to_user', $data)
                ? ShallowUser::fromJson($data['reply_to_user'])
                : null
            )
            ->setScore(array_key_exists('score', $data) ? $data['score'] : null)
            ->setUpvoted(array_key_exists('upvoted', $data) ? $data['upvoted'] : null);

        return $instance;
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

    public function setCreationDate(\DateTimeInterface $creationDate)
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

    public function setOwner(ShallowUser $owner = null)
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
        if (in_array($postType, self::POST_TYPES, true)) {
            $this->postType = $postType;
        }

        return $this;
    }

    public function getReplyToUser()
    {
        return $this->replyToUser;
    }

    public function setReplyToUser(ShallowUser $replyToUser = null)
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
