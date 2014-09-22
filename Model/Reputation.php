<?php

/**
 * This file is part of the StackExchangeApiClient library.
 *
 * @author  benatespina <benatespina@gmail.com>
 *
 * @license MIT
 */

namespace BenatEspina\StackExchangeApiClient\Model;

use BenatEspina\StackExchangeApiClient\Model\Interfaces\ReputationInterface;
use BenatEspina\StackExchangeApiClient\Util\Util;

/**
 * Class Reputation.
 *
 * @package BenatEspina\StackExchangeApiClient\Model
 */
class Reputation implements ReputationInterface
{
    const POST_TYPE_QUESTION = 'question';
    const POST_TYPE_ANSWER = 'answer';

    const VOTE_TYPE_ACCEPTS = 'accepts';
    const VOTE_TYPE_BOUNTIES_OFFERED = 'bounties_offered';
    const VOTE_TYPE_BOUNTIES_WON = 'bounties_won';
    const VOTE_TYPE_DOWN_VOTES = 'down_votes';
    const VOTE_TYPE_SPAM = 'spam';
    const VOTE_TYPE_SUGGESTED_EDITS = 'suggested_edits';
    const VOTE_TYPE_UP_VOTES = 'up_votes';

    /**
     * The link.
     *
     * @var string
     */
    protected $link;

    /**
     * The on date.
     *
     * @var \DateTime
     */
    protected $onDate;

    /**
     * The post id.
     *
     * @var int
     */
    protected $postId;

    /**
     * Post type that can be 'question' or 'answer'.
     *
     * @var string
     */
    protected $postType;

    /**
     * Reputation change.
     *
     * @var int
     */
    protected $reputationChange;

    /**
     * The title.
     *
     * @var string
     */
    protected $title;

    /**
     * User id.
     *
     * @var int
     */
    protected $userId;

    /**
     * User type that can be 'accepts', 'up_votes', 'down_votes',
     * 'bounties_offered', 'bounties_won', 'spam', or 'suggested_edits'.
     *
     * @var string
     */
    protected $voteType;

    /**
     * Constructor.
     *
     * @param null|mixed[] $json The json string being decoded
     */
    public function __construct($json = null)
    {
        $this->link = Util::setIfStringExists($json, 'link');
        $this->onDate = Util::setIfDateTimeExists($json, 'on_date');
        $this->postId = Util::setIfIntegerExists($json, 'post_id');
        $this->postType = Util::isEqual($json, 'post_type', array(self::POST_TYPE_ANSWER, self::POST_TYPE_QUESTION));
        $this->reputationChange = Util::setIfIntegerExists($json, 'reputation_change');
        $this->title = Util::setIfStringExists($json, 'title');
        $this->userId = Util::setIfIntegerExists($json, 'user_id');
        $this->voteType = Util::isEqual(
            $json,
            'vote_type',
            array(
                self::VOTE_TYPE_ACCEPTS,
                self::VOTE_TYPE_BOUNTIES_OFFERED,
                self::VOTE_TYPE_BOUNTIES_WON,
                self::VOTE_TYPE_DOWN_VOTES,
                self::VOTE_TYPE_SPAM,
                self::VOTE_TYPE_SUGGESTED_EDITS,
                self::VOTE_TYPE_UP_VOTES
            )
        );
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

    /**
     * {@inheritdoc}
     */
    public function setOnDate(\DateTime $onDate)
    {
        $this->onDate = $onDate;

        return $this;
    }

    /**
     * {@inheritdoc}
     */
    public function getOnDate()
    {
        return $this->onDate;
    }

    /**
     * {@inheritdoc}
     */
    public function setPostId($postId)
    {
        $this->postId = $postId;

        return $this;
    }

    /**
     * {@inheritdoc}
     */
    public function getPostId()
    {
        return $this->postId;
    }

    /**
     * {@inheritdoc}
     */
    public function setPostType($postType)
    {
        if (Util::coincidesElement($postType, array(self::POST_TYPE_ANSWER, self::POST_TYPE_QUESTION)) === true) {
            $this->postType = $postType;
        }

        return $this;
    }

    /**
     * {@inheritdoc}
     */
    public function getPostType()
    {
        return $this->postType;
    }

    /**
     * {@inheritdoc}
     */
    public function setReputationChange($reputationChange)
    {
        $this->reputationChange = $reputationChange;

        return $this;
    }

    /**
     * {@inheritdoc}
     */
    public function getReputationChange()
    {
        return $this->reputationChange;
    }

    /**
     * {@inheritdoc}
     */
    public function setTitle($title)
    {
        $this->title = $title;

        return $this;
    }

    /**
     * {@inheritdoc}
     */
    public function getTitle()
    {
        return $this->title;
    }

    /**
     * {@inheritdoc}
     */
    public function setUserId($userId)
    {
        $this->userId = $userId;

        return $this;
    }

    /**
     * {@inheritdoc}
     */
    public function getUserId()
    {
        return $this->userId;
    }

    /**
     * {@inheritdoc}
     */
    public function setVoteType($voteType)
    {
        if (Util::coincidesElement(
            $voteType,
            array(
                self::VOTE_TYPE_ACCEPTS,
                self::VOTE_TYPE_BOUNTIES_OFFERED,
                self::VOTE_TYPE_BOUNTIES_WON,
                self::VOTE_TYPE_DOWN_VOTES,
                self::VOTE_TYPE_SPAM,
                self::VOTE_TYPE_SUGGESTED_EDITS,
                self::VOTE_TYPE_UP_VOTES
            )
        ) === true
        ) {
            $this->voteType = $voteType;
        }

        return $this;
    }

    /**
     * {@inheritdoc}
     */
    public function getVoteType()
    {
        return $this->voteType;
    }
}
