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
 * The question model class.
 *
 * @author Beñat Espiña <benatespina@gmail.com>
 */
class Question implements Model
{
    protected $questionId;
    protected $acceptedAnswerId;
    protected $isAnswered;
    protected $answerCount;
    protected $answers;
    protected $canFlag;
    protected $deleteVoteCount;
    protected $notice;
    protected $protectedDate;
    protected $creationDate;
    protected $reopenVoteCount;
    protected $viewCount;
    protected $bountyAmount;
    protected $bountyClosesDate;
    protected $bountyUser;
    protected $canClose;
    protected $closeVoteCount;
    protected $closedDate;
    protected $closedDetails;
    protected $closedReason;
    protected $favoriteCount;
    protected $favorited;
    protected $migratedFrom;
    protected $migratedTo;
    protected $communityOwnedDate;
    protected $lockedDate;
    protected $owner;
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
    protected $bodyMarkdown;
    protected $link;
    protected $score;
    protected $upvoted;

    public static function fromJson(array $data)
    {
        $answers = [];
        if (array_key_exists('answers', $data) && is_array($data['answers'])) {
            foreach ($data['answers'] as $answer) {
                $answers[] = Answer::fromJson($answer);
            }
        }
        $comments = [];
        if (array_key_exists('comments', $data) && is_array($data['comments'])) {
            foreach ($data['comments'] as $comment) {
                $comments[] = Comment::fromJson($comment);
            }
        }
        $tags = [];
        if (array_key_exists('tags', $data) && is_array($data['tags'])) {
            foreach ($data['tags'] as $tag) {
                $tags[] = Tag::fromJson($tag);
            }
        }

        $instance = new self();
        $instance
            ->setAcceptedAnswerId(array_key_exists('accepted_answer_id', $data) ? $data['accepted_answer_id'] : null)
            ->setAnswerCount(array_key_exists('answer_count', $data) ? $data['answer_count'] : null)
            ->setAnswers($answers)
            ->setBody(array_key_exists('body', $data) ? $data['body'] : null)
            ->setBodyMarkdown(array_key_exists('body_markdown', $data) ? $data['body_markdown'] : null)
            ->setBountyAmount(array_key_exists('body_amount', $data) ? $data['body_amount'] : null)
            ->setBountyClosesDate(
                array_key_exists('bounty_closes_date', $data)
                    ? new \DateTimeImmutable('@' . $data['bounty_closes_date'])
                    : null
            )
            ->setBountyUser(array_key_exists('bounty_user', $data) ? ShallowUser::fromJson($data['bounty_user']) : null)
            ->setCanClose(array_key_exists('can_close', $data) ? $data['can_close'] : null)
            ->setCanFlag(array_key_exists('can_flag', $data) ? $data['can_flag'] : null)
            ->setCloseVoteCount(array_key_exists('close_vote_count', $data) ? $data['close_vote_count'] : null)
            ->setClosedDate(
                array_key_exists('closed_date', $data)
                    ? new \DateTimeImmutable('@' . $data['closed_date'])
                    : null
            )
            ->setClosedDetails(
                array_key_exists('closed_details', $data)
                    ? CloseDetails::fromJson($data['closed_details'])
                    : null
            )
            ->setClosedReason(array_key_exists('closed_reason', $data) ? $data['closed_reason'] : null)
            ->setCommentCount(array_key_exists('comment_count', $data) ? $data['comment_count'] : null)
            ->setComments($comments)
            ->setCommunityOwnedDate(
                array_key_exists('community_owned_date', $data)
                    ? new \DateTimeImmutable('@' . $data['community_owned_date'])
                    : null
            )
            ->setCreationDate(
                array_key_exists('creation_date', $data)
                    ? new \DateTimeImmutable('@' . $data['creation_date'])
                    : null
            )
            ->setDeleteVoteCount(array_key_exists('delete_vote_count', $data) ? $data['delete_vote_count'] : null)
            ->setDownVoteCount(array_key_exists('down_vote_count', $data) ? $data['down_vote_count'] : null)
            ->setDownvoted(array_key_exists('downvoted', $data) ? $data['downvoted'] : null)
            ->setFavoriteCount(array_key_exists('favorite_count', $data) ? $data['favorite_count'] : null)
            ->setFavorited(array_key_exists('favorited', $data) ? $data['favorited'] : null)
            ->setIsAnswered(array_key_exists('is_answered', $data) ? $data['is_answered'] : null)
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
            ->setLastEditor(array_key_exists('last_editor', $data) ? ShallowUser::fromJson($data['last_editor']) : null)
            ->setLink(array_key_exists('link', $data) ? $data['link'] : null)
            ->setLockedDate(
                array_key_exists('locked_date', $data)
                    ? new \DateTimeImmutable('@' . $data['locked_date'])
                    : null
            )
            ->setMigratedFrom(
                array_key_exists('migrate_from', $data)
                    ? MigrationInfo::fromJson($data['migrate_from'])
                    : null
            )
            ->setMigratedTo(
                array_key_exists('migrate_to', $data)
                    ? MigrationInfo::fromJson($data['migrate_to'])
                    : null
            )
            ->setNotice(array_key_exists('notice', $data) ? Notice::fromJson($data['notice']) : null)
            ->setOwner(array_key_exists('owner', $data) ? ShallowUser::fromJson($data['owner']) : null)
            ->setProtectedDate(
                array_key_exists('protected_date', $data)
                    ? new \DateTimeImmutable('@' . $data['protected_date'])
                    : null
            )
            ->setQuestionId(array_key_exists('question_id', $data) ? $data['question_id'] : null)
            ->setReopenVoteCount(array_key_exists('reopen_vote_count', $data) ? $data['reopen_vote_count'] : null)
            ->setScore(array_key_exists('score', $data) ? $data['score'] : null)
            ->setShareLink(array_key_exists('share_link', $data) ? $data['share_link'] : null)
            ->setTags($tags)
            ->setTitle(array_key_exists('title', $data) ? $data['title'] : null)
            ->setUpVoteCount(array_key_exists('up_vote_count', $data) ? $data['up_vote_count'] : null)
            ->setUpvoted(array_key_exists('upvoted', $data) ? $data['upvoted'] : null)
            ->setViewCount(array_key_exists('view_count', $data) ? $data['view_count'] : null);

        return $instance;
    }

    public static function fromProperties(
        $questionId,
        $acceptedAnswerId,
        $answerCount,
        $bountyAmount,
        \DateTimeInterface $bountyClosesDate,
        \DateTimeInterface $closedDate,
        $closedReason,
        \DateTimeInterface $communityOwnedDate,
        \DateTimeInterface $creationDate,
        $isAnswered,
        \DateTimeInterface $lastActivityDate,
        \DateTimeInterface $lastEditDate,
        ShallowUser $owner,
        $link,
        $score,

        $body = null,
        $bodyMarkdown = null,
        array $answers = [],
        $canFlag = null,
        $deleteVoteCount = null,
        Notice $notice = null,
        \DateTimeInterface $protectedDate = null,
        array $reopenVoteCount = null,
        array $viewCount = null,
        ShallowUser $bountyUser = null,
        $canClose = null,
        $closeVoteCount = null,
        ClosedDetails $closedDetails = null,
        $favoriteCount = null,
        $favorited = null,
        MigrationInfo $migratedFrom = null,
        MigrationInfo $migratedTo = null,
        \DateTimeInterface $lockedDate = null,
        array $tags = [],
        $downvoted = null,
        $shareLink = null,
        $title = null,
        $commentCount = null,
        array $comments = [],
        ShallowUser $lastEditor = null,
        $upvoted = null,
        $downVoteCount = null,
        $upVoteCount = null
    ) {
        $instance = new self();
        $instance
            ->setAcceptedAnswerId($acceptedAnswerId)
            ->setAnswerCount($answerCount)
            ->setAnswers($answers)
            ->setBody($body)
            ->setBodyMarkdown($bodyMarkdown)
            ->setBountyAmount($bountyAmount)
            ->setBountyClosesDate($bountyClosesDate)
            ->setBountyUser($bountyUser)
            ->setCanClose($canClose)
            ->setCanFlag($canFlag)
            ->setCloseVoteCount($closeVoteCount)
            ->setClosedDate($closedDate)
            ->setClosedDetails($closedDetails)
            ->setClosedReason($closedReason)
            ->setCommentCount($commentCount)
            ->setComments($comments)
            ->setCommunityOwnedDate($communityOwnedDate)
            ->setCreationDate($creationDate)
            ->setDeleteVoteCount($deleteVoteCount)
            ->setDownVoteCount($downVoteCount)
            ->setDownvoted($downvoted)
            ->setFavoriteCount($favoriteCount)
            ->setFavorited($favorited)
            ->setIsAnswered($isAnswered)
            ->setLastActivityDate($lastActivityDate)
            ->setLastEditDate($lastEditDate)
            ->setLastEditor($lastEditor)
            ->setLink($link)
            ->setLockedDate($lockedDate)
            ->setMigratedFrom($migratedFrom)
            ->setMigratedTo($migratedTo)
            ->setNotice($notice)
            ->setOwner($owner)
            ->setProtectedDate($protectedDate)
            ->setQuestionId($questionId)
            ->setReopenVoteCount($reopenVoteCount)
            ->setScore($score)
            ->setShareLink($shareLink)
            ->setTags($tags)
            ->setTitle($title)
            ->setUpVoteCount($upVoteCount)
            ->setUpvoted($upvoted)
            ->setViewCount($viewCount);

        return $instance;
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

    public function getScore()
    {
        return $this->score;
    }

    public function setScore($score)
    {
        $this->score = $score;

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

    public function getLink()
    {
        return $this->link;
    }

    public function setLink($link)
    {
        $this->link = $link;

        return $this;
    }

    public function getBountyAmount()
    {
        return $this->bountyAmount;
    }

    public function setBountyAmount($bountyAmount)
    {
        $this->bountyAmount = $bountyAmount;

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

    public function getIsAnswered()
    {
        return $this->isAnswered;
    }

    public function setIsAnswered($isAnswered)
    {
        $this->isAnswered = $isAnswered;

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

    public function setCreationDate(\DateTimeInterface $creationDate = null)
    {
        $this->creationDate = $creationDate;

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

    public function setCommunityOwnedDate(\DateTimeInterface $communityOwnedDate = null)
    {
        $this->communityOwnedDate = $communityOwnedDate;

        return $this;
    }

    public function getCommunityOwnedDate()
    {
        return $this->communityOwnedDate;
    }

    public function setLockedDate(\DateTimeInterface $lockedDate = null)
    {
        $this->lockedDate = $lockedDate;

        return $this;
    }

    public function getLockedDate()
    {
        return $this->lockedDate;
    }

    public function setTags(array $tags = [])
    {
        $this->tags = $tags;

        return $this;
    }

    public function getTags()
    {
        return $this->tags;
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

    public function setAcceptedAnswerId($acceptedAnswerId)
    {
        $this->acceptedAnswerId = $acceptedAnswerId;

        return $this;
    }

    public function getAcceptedAnswerId()
    {
        return $this->acceptedAnswerId;
    }

    public function setAnswerCount($answerCount)
    {
        $this->answerCount = $answerCount;

        return $this;
    }

    public function getAnswerCount()
    {
        return $this->answerCount;
    }

    public function setAnswered($isAnswered)
    {
        $this->isAnswered = $isAnswered;

        return $this;
    }

    public function isAnswered()
    {
        return $this->isAnswered;
    }

    public function setBountyClosesDate(\DateTimeInterface $bountyClosesDate = null)
    {
        $this->bountyClosesDate = $bountyClosesDate;

        return $this;
    }

    public function getBountyClosesDate()
    {
        return $this->bountyClosesDate;
    }

    public function setBountyUser(ShallowUser $bountyUser = null)
    {
        $this->bountyUser = $bountyUser;

        return $this;
    }

    public function getBountyUser()
    {
        return $this->bountyUser;
    }

    public function setCanClose($canClose)
    {
        $this->canClose = $canClose;

        return $this;
    }

    public function isCanClose()
    {
        return $this->canClose;
    }

    public function setCloseVoteCount($closeVoteCount)
    {
        $this->closeVoteCount = $closeVoteCount;

        return $this;
    }

    public function getCloseVoteCount()
    {
        return $this->closeVoteCount;
    }

    public function setClosedDate(\DateTimeInterface $closedDate = null)
    {
        $this->closedDate = $closedDate;

        return $this;
    }

    public function getClosedDate()
    {
        return $this->closedDate;
    }

    public function setClosedDetails(ClosedDetails $closedDetails = null)
    {
        $this->closedDetails = $closedDetails;

        return $this;
    }

    public function getClosedDetails()
    {
        return $this->closedDetails;
    }

    public function setClosedReason($closedReason)
    {
        $this->closedReason = $closedReason;

        return $this;
    }

    public function getClosedReason()
    {
        return $this->closedReason;
    }

    public function setFavoriteCount($favoriteCount)
    {
        $this->favoriteCount = $favoriteCount;

        return $this;
    }

    public function getFavoriteCount()
    {
        return $this->favoriteCount;
    }

    public function setFavorited($favorited)
    {
        $this->favorited = $favorited;

        return $this;
    }

    public function isFavorited()
    {
        return $this->favorited;
    }

    public function setMigratedFrom(MigrationInfo $migratedFrom = null)
    {
        $this->migratedFrom = $migratedFrom;

        return $this;
    }

    public function getMigratedFrom()
    {
        return $this->migratedFrom;
    }

    public function setMigratedTo(MigrationInfo $migratedTo = null)
    {
        $this->migratedTo = $migratedTo;

        return $this;
    }

    public function getMigratedTo()
    {
        return $this->migratedTo;
    }

    public function setAnswers(array $answers = [])
    {
        $this->answers = $answers;

        return $this;
    }

    public function getAnswers()
    {
        return $this->answers;
    }

    public function setFlag($canFlag)
    {
        $this->canFlag = $canFlag;

        return $this;
    }

    public function canFlag()
    {
        return $this->canFlag;
    }

    public function setDeleteVoteCount($deleteVoteCount)
    {
        $this->deleteVoteCount = $deleteVoteCount;

        return $this;
    }

    public function getDeleteVoteCount()
    {
        return $this->deleteVoteCount;
    }

    public function setNotice(Notice $notice = null)
    {
        $this->notice = $notice;

        return $this;
    }

    public function getNotice()
    {
        return $this->notice;
    }

    public function setProtectedDate(\DateTimeInterface $protectedDate = null)
    {
        $this->protectedDate = $protectedDate;

        return $this;
    }

    public function getProtectedDate()
    {
        return $this->protectedDate;
    }

    public function setReopenVoteCount($reopenVoteCount)
    {
        $this->reopenVoteCount = $reopenVoteCount;

        return $this;
    }

    public function getReopenVoteCount()
    {
        return $this->reopenVoteCount;
    }

    public function setViewCount($viewCount)
    {
        $this->viewCount = $viewCount;

        return $this;
    }

    public function getViewCount()
    {
        return $this->viewCount;
    }
}
