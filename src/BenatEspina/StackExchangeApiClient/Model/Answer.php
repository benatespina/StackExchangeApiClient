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
 * The answer model class.
 *
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

    public static function fromProperties(
        $id,
        $accepted,
        $canFlag,
        $isAccepted,
        $questionId,
        array $tags,
        $downvoted,
        \DateTimeInterface $lastActivityDate,
        $shareLink,
        $title,
        $commentCount,
        $downVoteCount,
        $upVoteCount,
        $body,
        $bodyMarkDown,
        \DateTimeInterface $creationDate,
        $link,
        $score,
        $upvoted,
        $awardedBountyAmount,
        array $awardedBountyUsers = [],
        array $comments = [],
        \DateTimeInterface $communityOwnedDate = null,
        ShallowUser $lastEditor = null,
        \DateTimeInterface $lastEditDate = null,
        \DateTimeInterface $lockedDate = null,
        ShallowUser $owner = null
    ) {
        $instance = new self();
        $instance
            ->setId($id)
            ->setAccepted($accepted)
            ->setCanFlag($canFlag)
            ->setIsAccepted($isAccepted)
            ->setQuestionId($questionId)
            ->setTags($tags)
            ->setDownvoted($downvoted)
            ->setLastActivityDate($lastActivityDate)
            ->setShareLink($shareLink)
            ->setTitle($title)
            ->setCommentCount($commentCount)
            ->setDownVoteCount($downVoteCount)
            ->setUpVoteCount($upVoteCount)
            ->setBody($body)
            ->setBodyMarkDown($bodyMarkDown)
            ->setCreationDate($creationDate)
            ->setLink($link)
            ->setScore($score)
            ->setUpvoted($upvoted)
            ->setAwardedBountyAmount($awardedBountyAmount)
            ->setAwardedBountyUsers($awardedBountyUsers)
            ->setComments($comments)
            ->setCommunityOwnedDate($communityOwnedDate)
            ->setLastEditor($lastEditor)
            ->setLastEditDate($lastEditDate)
            ->setLockedDate($lockedDate)
            ->setOwner($owner);

        return $instance;
    }

    public static function fromJson(array $data)
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

    public function getId()
    {
        return $this->id;
    }

    public function setId($id)
    {
        $this->id = $id;

        return $this;
    }

    public function getAccepted()
    {
        return $this->accepted;
    }

    public function setAccepted($accepted)
    {
        $this->accepted = $accepted;

        return $this;
    }

    public function getAwardedBountyAmount()
    {
        return $this->awardedBountyAmount;
    }

    public function setAwardedBountyAmount($awardedBountyAmount)
    {
        $this->awardedBountyAmount = $awardedBountyAmount;

        return $this;
    }

    public function getAwardedBountyUsers()
    {
        return $this->awardedBountyUsers;
    }

    public function setAwardedBountyUsers(array $awardedBountyUsers)
    {
        $this->awardedBountyUsers = $awardedBountyUsers;

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

    public function getIsAccepted()
    {
        return $this->isAccepted;
    }

    public function setIsAccepted($isAccepted)
    {
        $this->isAccepted = $isAccepted;

        return $this;
    }

    public function getQuestionId()
    {
        return $this->questionId;
    }

    public function setQuestionId($questionId)
    {
        $this->questionId = $questionId;

        return $this;
    }

    public function getCommunityOwnedDate()
    {
        return $this->communityOwnedDate;
    }

    public function setCommunityOwnedDate(\DateTimeInterface $communityOwnedDate = null)
    {
        $this->communityOwnedDate = $communityOwnedDate;

        return $this;
    }

    public function getLockedDate()
    {
        return $this->lockedDate;
    }

    public function setLockedDate(\DateTimeInterface $lockedDate = null)
    {
        $this->lockedDate = $lockedDate;

        return $this;
    }

    public function getTags()
    {
        return $this->tags;
    }

    public function setTags(array $tags)
    {
        $this->tags = $tags;

        return $this;
    }

    public function getDownvoted()
    {
        return $this->downvoted;
    }

    public function setDownvoted($downvoted)
    {
        $this->downvoted = $downvoted;

        return $this;
    }

    public function getLastActivityDate()
    {
        return $this->lastActivityDate;
    }

    public function setLastActivityDate(\DateTimeInterface $lastActivityDate)
    {
        $this->lastActivityDate = $lastActivityDate;

        return $this;
    }

    public function getShareLink()
    {
        return $this->shareLink;
    }

    public function setShareLink($shareLink)
    {
        $this->shareLink = $shareLink;

        return $this;
    }

    public function getTitle()
    {
        return $this->title;
    }

    public function setTitle($title)
    {
        $this->title = $title;

        return $this;
    }

    public function getCommentCount()
    {
        return $this->commentCount;
    }

    public function setCommentCount($commentCount)
    {
        $this->commentCount = $commentCount;

        return $this;
    }

    public function getComments()
    {
        return $this->comments;
    }

    public function setComments(array $comments)
    {
        $this->comments = $comments;

        return $this;
    }

    public function getLastEditDate()
    {
        return $this->lastEditDate;
    }

    public function setLastEditDate(\DateTimeInterface $lastEditDate = null)
    {
        $this->lastEditDate = $lastEditDate;

        return $this;
    }

    public function getLastEditor()
    {
        return $this->lastEditor;
    }

    public function setLastEditor(ShallowUser $lastEditor = null)
    {
        $this->lastEditor = $lastEditor;

        return $this;
    }

    public function getDownVoteCount()
    {
        return $this->downVoteCount;
    }

    public function setDownVoteCount($downVoteCount)
    {
        $this->downVoteCount = $downVoteCount;

        return $this;
    }

    public function getUpVoteCount()
    {
        return $this->upVoteCount;
    }

    public function setUpVoteCount($upVoteCount)
    {
        $this->upVoteCount = $upVoteCount;

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

    public function getBodyMarkDown()
    {
        return $this->bodyMarkDown;
    }

    public function setBodyMarkDown($bodyMarkDown)
    {
        $this->bodyMarkDown = $bodyMarkDown;

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
