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

namespace BenatEspina\StackExchangeApiClient\Model;

/**
 * @author Beñat Espiña <benatespina@gmail.com>
 */
class Answer implements Model
{
    protected $id;
    protected $accepted;
    protected $awardedBountyAmount;
    protected $awardedBountyUsers;
    protected $canFlag;
    protected $isAccepted;
    protected $questionId;
    protected $communityOwnedDate;
    protected $lockedDate;
    protected $tags;
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
    protected $body;
    protected $bodyMarkDown;
    protected $creationDate;
    protected $link;
    protected $owner;
    protected $score;
    protected $upvoted;

    public static function fromJson(array $data) : self
    {
        $tags = [];
        $awardedBountyUsers = [];
        $comments = [];

        if (array_key_exists('tags', $data) && is_array($data['tags'])) {
            foreach ($data['tags'] as $tag) {
                $tags[] = Tag::fromJson($tag);
            }
        }
        if (array_key_exists('awarded_bounty_users', $data) && is_array($data['awarded_bounty_users'])) {
            foreach ($data['awarded_bounty_users'] as $awardedBountyUser) {
                $awardedBountyUsers[] = ShallowUser::fromJson($awardedBountyUser);
            }
        }
        if (array_key_exists('comments', $data) && is_array($data['comments'])) {
            foreach ($data['comments'] as $comment) {
                $comments[] = Comment::fromJson($comment);
            }
        }

        $instance = new self();
        $instance
            ->setId(array_key_exists('answer_id', $data) ? $data['answer_id'] : null)
            ->setAccepted(array_key_exists('accepted', $data) ? $data['accepted'] : null)
            ->setCanFlag(array_key_exists('can_flag', $data) ? $data['can_flag'] : null)
            ->setIsAccepted(array_key_exists('is_accepted', $data) ? $data['is_accepted'] : null)
            ->setQuestionId(array_key_exists('question_id', $data) ? $data['question_id'] : null)
            ->setTags($tags)
            ->setDownvoted(array_key_exists('downvoted', $data) ? $data['downvoted'] : null)
            ->setLastActivityDate(
                array_key_exists('last_activity_date', $data)
                    ? new \DateTimeImmutable('@' . $data['last_activity_date'])
                    : null
            )
            ->setShareLink(array_key_exists('share_link', $data) ? $data['share_link'] : null)
            ->setTitle(array_key_exists('title', $data) ? $data['title'] : null)
            ->setCommentCount(array_key_exists('comment_count', $data) ? $data['comment_count'] : null)
            ->setDownVoteCount(array_key_exists('down_vote_count', $data) ? $data['down_vote_count'] : null)
            ->setUpVoteCount(array_key_exists('up_vote_count', $data) ? $data['up_vote_count'] : null)
            ->setBody(array_key_exists('body', $data) ? $data['body'] : null)
            ->setBodyMarkDown(array_key_exists('body_markdown', $data) ? $data['body_markdown'] : null)
            ->setCreationDate(
                array_key_exists('creation_date', $data)
                    ? new \DateTimeImmutable('@' . $data['creation_date'])
                    : null
            )
            ->setLink(array_key_exists('link', $data) ? $data['link'] : null)
            ->setScore(array_key_exists('score', $data) ? $data['score'] : null)
            ->setUpvoted(array_key_exists('upvoted', $data) ? $data['upvoted'] : null)
            ->setAwardedBountyAmount(
                array_key_exists('awarded_bounty_amount', $data)
                    ? $data['awarded_bounty_amount']
                    : null
            )
            ->setAwardedBountyUsers($awardedBountyUsers)
            ->setComments($comments)
            ->setCommunityOwnedDate(
                array_key_exists('community_owned_date', $data)
                    ? new \DateTimeImmutable('@' . $data['community_owned_date'])
                    : null
            )
            ->setLastEditor(array_key_exists('last_editor', $data) ? ShallowUser::fromJson($data['last_editor']) : null)
            ->setLastEditDate(
                array_key_exists('last_edit_date', $data)
                    ? new \DateTimeImmutable('@' . $data['last_edit_date'])
                    : null
            )
            ->setLockedDate(array_key_exists('locked_date', $data) ? new \DateTime('@' . $data['locked_date']) : null)
            ->setOwner(array_key_exists('owner', $data) ? ShallowUser::fromJson($data['owner']) : null);

        return $instance;
    }

    public function getId() : ?int
    {
        return $this->id;
    }

    public function setId(?int $id) : self
    {
        $this->id = $id;

        return $this;
    }

    public function getAccepted() : ?bool
    {
        return $this->accepted;
    }

    public function setAccepted(?bool $accepted) : self
    {
        $this->accepted = $accepted;

        return $this;
    }

    public function getAwardedBountyAmount() : ?int
    {
        return $this->awardedBountyAmount;
    }

    public function setAwardedBountyAmount(?int $awardedBountyAmount) : self
    {
        $this->awardedBountyAmount = $awardedBountyAmount;

        return $this;
    }

    public function getAwardedBountyUsers() : array
    {
        return $this->awardedBountyUsers;
    }

    public function setAwardedBountyUsers(array $awardedBountyUsers) : self
    {
        $this->awardedBountyUsers = $awardedBountyUsers;

        return $this;
    }

    public function getCanFlag() : ?bool
    {
        return $this->canFlag;
    }

    public function setCanFlag(?bool $canFlag) : self
    {
        $this->canFlag = $canFlag;

        return $this;
    }

    public function getIsAccepted() : ?bool
    {
        return $this->isAccepted;
    }

    public function setIsAccepted(?bool $isAccepted) : self
    {
        $this->isAccepted = $isAccepted;

        return $this;
    }

    public function getQuestionId() : ?int
    {
        return $this->questionId;
    }

    public function setQuestionId(?int $questionId) : self
    {
        $this->questionId = $questionId;

        return $this;
    }

    public function getCommunityOwnedDate() : ?\DateTimeInterface
    {
        return $this->communityOwnedDate;
    }

    public function setCommunityOwnedDate(?\DateTimeInterface $communityOwnedDate) : self
    {
        $this->communityOwnedDate = $communityOwnedDate;

        return $this;
    }

    public function getLockedDate() : ?\DateTimeInterface
    {
        return $this->lockedDate;
    }

    public function setLockedDate(?\DateTimeInterface $lockedDate) : self
    {
        $this->lockedDate = $lockedDate;

        return $this;
    }

    public function getTags() : array
    {
        return $this->tags;
    }

    public function setTags(array $tags) : self
    {
        $this->tags = $tags;

        return $this;
    }

    public function getDownvoted() : ?bool
    {
        return $this->downvoted;
    }

    public function setDownvoted(?bool $downvoted) : self
    {
        $this->downvoted = $downvoted;

        return $this;
    }

    public function getLastActivityDate() : \DateTimeInterface
    {
        return $this->lastActivityDate;
    }

    public function setLastActivityDate(\DateTimeInterface $lastActivityDate) : self
    {
        $this->lastActivityDate = $lastActivityDate;

        return $this;
    }

    public function getShareLink() : ?string
    {
        return $this->shareLink;
    }

    public function setShareLink(?string $shareLink) : self
    {
        $this->shareLink = $shareLink;

        return $this;
    }

    public function getTitle() : ?string
    {
        return $this->title;
    }

    public function setTitle(?string $title) : self
    {
        $this->title = $title;

        return $this;
    }

    public function getCommentCount() : ?int
    {
        return $this->commentCount;
    }

    public function setCommentCount(?int $commentCount) : self
    {
        $this->commentCount = $commentCount;

        return $this;
    }

    public function getComments() : array
    {
        return $this->comments;
    }

    public function setComments(array $comments) : self
    {
        $this->comments = $comments;

        return $this;
    }

    public function getLastEditDate() : ?\DateTimeInterface
    {
        return $this->lastEditDate;
    }

    public function setLastEditDate(?\DateTimeInterface $lastEditDate) : self
    {
        $this->lastEditDate = $lastEditDate;

        return $this;
    }

    public function getLastEditor() : ?ShallowUser
    {
        return $this->lastEditor;
    }

    public function setLastEditor(?ShallowUser $lastEditor) : self
    {
        $this->lastEditor = $lastEditor;

        return $this;
    }

    public function getDownVoteCount() : ?int
    {
        return $this->downVoteCount;
    }

    public function setDownVoteCount(?int $downVoteCount) : self
    {
        $this->downVoteCount = $downVoteCount;

        return $this;
    }

    public function getUpVoteCount() : ?int
    {
        return $this->upVoteCount;
    }

    public function setUpVoteCount(?int $upVoteCount) : self
    {
        $this->upVoteCount = $upVoteCount;

        return $this;
    }

    public function getBody() : ?string
    {
        return $this->body;
    }

    public function setBody(?string $body) : self
    {
        $this->body = $body;

        return $this;
    }

    public function getBodyMarkDown() : ?string
    {
        return $this->bodyMarkDown;
    }

    public function setBodyMarkDown(?string $bodyMarkDown) : self
    {
        $this->bodyMarkDown = $bodyMarkDown;

        return $this;
    }

    public function getCreationDate() : \DateTimeInterface
    {
        return $this->creationDate;
    }

    public function setCreationDate(\DateTimeInterface $creationDate) : self
    {
        $this->creationDate = $creationDate;

        return $this;
    }

    public function getLink() : ?string
    {
        return $this->link;
    }

    public function setLink(?string $link) : self
    {
        $this->link = $link;

        return $this;
    }

    public function getOwner() : ?ShallowUser
    {
        return $this->owner;
    }

    public function setOwner(?ShallowUser $owner) : self
    {
        $this->owner = $owner;

        return $this;
    }

    public function getScore() : ?int
    {
        return $this->score;
    }

    public function setScore(?int $score) : self
    {
        $this->score = $score;

        return $this;
    }

    public function getUpvoted() : ?bool
    {
        return $this->upvoted;
    }

    public function setUpvoted(?bool $upvoted) : self
    {
        $this->upvoted = $upvoted;

        return $this;
    }

    public function jsonSerialize() : array
    {
        return [
            'accepted'              => $this->getAccepted(),
            'answer_id'             => $this->getId(),
            'awarded_bounty_amount' => $this->getAwardedBountyAmount(),
            'awarded_bounty_users'  => $this->getAwardedBountyUsers(),
            'body'                  => $this->getBody(),
            'body_markdown'         => $this->getBodyMarkDown(),
            'can_flag'              => $this->getCanFlag(),
            'comment_count'         => $this->getCommentCount(),
            'comments'              => $this->getComments(),
            'community_owned_date'  => $this->getCommunityOwnedDate(),
            'creation_date'         => $this->getCreationDate(),
            'down_vote_count'       => $this->getDownVoteCount(),
            'downvoted'             => $this->getDownvoted(),
            'is_accepted'           => $this->getIsAccepted(),
            'last_activity_date'    => $this->getLastActivityDate(),
            'last_edit_date'        => $this->getLastEditDate(),
            'last_editor'           => $this->getLastEditor(),
            'link'                  => $this->getLink(),
            'locked_date'           => $this->getLockedDate(),
            'owner'                 => $this->getOwner(),
            'question_id'           => $this->getQuestionId(),
            'score'                 => $this->getScore(),
            'share_link'            => $this->getShareLink(),
            'tags'                  => $this->getTags(),
            'title'                 => $this->getTitle(),
            'up_vote_count'         => $this->getUpVoteCount(),
            'upvoted'               => $this->getUpvoted(),
        ];
    }
}
