<?php

/*
 * This file is part of the Stack Exchange Api Client library.
 *
 * Copyright (c) 2014-2015 Beñat Espiña <benatespina@gmail.com>
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
class Answer
{
    private $id;
    private $accepted;
    private $awardedBountyAmount;
    private $awardedBountyUsers;
    private $canFlag;
    private $isAccepted;
    private $questionId;
    private $communityOwnedDate;
    private $lockedDate;
    private $tags;
    private $downvoted;
    private $lastActivityDate;
    private $shareLink;
    private $title;
    private $commentCount;
    private $comments;
    private $lastEditDate;
    private $lastEditor;
    private $downVoteCount;
    private $upVoteCount;
    private $body;
    private $bodyMarkDown;
    private $creationDate;
    private $link;
    private $owner;
    private $score;
    private $upvoted;

    public static function fromProperties(
        $id,
        $accepted,
        $canFlag,
        $isAccepted,
        $questionId,
        array $tags,
        $downvoted,
        \DateTime $lastActivityDate,
        $shareLink,
        $title,
        $commentCount,
        ShallowUser $lastEditor,
        $downVoteCount,
        $upVoteCount,
        $body,
        $bodyMarkDown,
        \DateTime $creationDate,
        $link,
        $score,
        $upvoted,
        array $awardedBountyUsers = [],
        array $comments = [],
        $awardedBountyAmount = null,
        \DateTime $communityOwnedDate = null,
        ShallowUser $lastEditor = null,
        \DateTime $lastEditDate = null,
        \DateTime $lockedDate = null,
        ShallowUser $owner = null
    ) {
        return new self(
            $id,
            $accepted,
            $canFlag,
            $isAccepted,
            $questionId,
            $tags,
            $downvoted,
            $lastActivityDate,
            $shareLink,
            $title,
            $commentCount,
            $downVoteCount,
            $upVoteCount,
            $body,
            $bodyMarkDown,
            $creationDate,
            $link,
            $score,
            $upvoted,
            $comments,
            $awardedBountyUsers,
            $awardedBountyAmount,
            $communityOwnedDate,
            $lastEditor,
            $lastEditDate,
            $lockedDate,
            $owner
        );
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

        return new self(
            array_key_exists('answer_id', $data) ? $data['answer_id'] : null,
            array_key_exists('accepted', $data) ? $data['accepted'] : null,
            array_key_exists('can_flag', $data) ? $data['can_flag'] : null,
            array_key_exists('is_accepted', $data) ? $data['is_accepted'] : null,
            array_key_exists('question_id', $data) ? $data['question_id'] : null,
            $tags,
            array_key_exists('downvoted', $data) ? $data['downvoted'] : null,
            array_key_exists('downvoted', $data) ? new \DateTime('@' . $data['last_activity_date']) : null,
            array_key_exists('share_link', $data) ? $data['share_link'] : null,
            array_key_exists('title', $data) ? $data['title'] : null,
            array_key_exists('comment_count', $data) ? $data['comment_count'] : null,
            array_key_exists('down_vote_count', $data) ? $data['down_vote_count'] : null,
            array_key_exists('up_vote_count', $data) ? $data['up_vote_count'] : null,
            array_key_exists('body', $data) ? $data['body'] : null,
            array_key_exists('body_markdown', $data) ? $data['body_markdown'] : null,
            array_key_exists('creation_date', $data) ? new \DateTime('@' . $data['creation_date']) : null,
            array_key_exists('link', $data) ? $data['link'] : null,
            array_key_exists('score', $data) ? $data['score'] : null,
            array_key_exists('upvoted', $data) ? $data['upvoted'] : null,
            $awardedBountyUsers,
            $comments,
            array_key_exists('awarded_bounty_amount', $data) ? $data['awarded_bounty_amount'] : null,
            array_key_exists('community_owned_date', $data) ? new \DateTime('@' . $data['community_owned_date']) : null,
            array_key_exists('last_editor', $data) ? ShallowUser::fromJson($data['last_editor']) : null,
            array_key_exists('last_edit_date', $data) ? new \DateTime('@' . $data['last_edit_date']) : null,
            array_key_exists('locked_date', $data) ? new \DateTime('@' . $data['locked_date']) : null,
            array_key_exists('owner', $data) ? ShallowUser::fromJson($data['owner']) : null
        );
    }

    private function __construct(
        $id,
        $accepted,
        $canFlag,
        $isAccepted,
        $questionId,
        array $tags,
        $downvoted,
        \DateTime $lastActivityDate,
        $shareLink,
        $title,
        $commentCount,
        $downVoteCount,
        $upVoteCount,
        $body,
        $bodyMarkDown,
        \DateTime $creationDate,
        $link,
        $score,
        $upvoted,
        array $awardedBountyUsers,
        array $comments,
        $awardedBountyAmount = null,
        \DateTime $communityOwnedDate = null,
        ShallowUser $lastEditor = null,
        \DateTime $lastEditDate = null,
        \DateTime $lockedDate = null,
        ShallowUser $owner = null
    ) {
        $this->id = $id;
        $this->accepted = $accepted;
        $this->awardedBountyAmount = $awardedBountyAmount;
        $this->awardedBountyUsers = $awardedBountyUsers;
        $this->canFlag = $canFlag;
        $this->isAccepted = $isAccepted;
        $this->questionId = $questionId;
        $this->communityOwnedDate = $communityOwnedDate;
        $this->lockedDate = $lockedDate;
        $this->tags = $tags;
        $this->downvoted = $downvoted;
        $this->lastActivityDate = $lastActivityDate;
        $this->shareLink = $shareLink;
        $this->title = $title;
        $this->commentCount = $commentCount;
        $this->comments = $comments;
        $this->lastEditDate = $lastEditDate;
        $this->lastEditor = $lastEditor;
        $this->downVoteCount = $downVoteCount;
        $this->upVoteCount = $upVoteCount;
        $this->body = $body;
        $this->bodyMarkDown = $bodyMarkDown;
        $this->creationDate = $creationDate;
        $this->link = $link;
        $this->owner = $owner;
        $this->score = $score;
        $this->upvoted = $upvoted;
    }
}
