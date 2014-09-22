<?php

/**
 * This file is part of the StackExchangeApiClient library.
 *
 * @author  benatespina <benatespina@gmail.com>
 *
 * @license MIT
 */

namespace BenatEspina\StackExchangeApiClient\Model;

use BenatEspina\StackExchangeApiClient\Model\Interfaces\ReputationHistoryInterface;
use BenatEspina\StackExchangeApiClient\Util\Util;

/**
 * Class ReputationHistory.
 *
 * @package BenatEspina\StackExchangeApiClient\Model
 */
class ReputationHistory implements ReputationHistoryInterface
{
    const REPUTATION_HISTORY_TYPE_ASKER_ACCEPTS_ANSWER = 'asker_accepts_answer';
    const REPUTATION_HISTORY_TYPE_ASKER_UNACCEPT_ANSWER = 'asker_unaccept_answer';
    const REPUTATION_HISTORY_TYPE_ANSWER_ACCEPTED = 'answer_accepted';
    const REPUTATION_HISTORY_TYPE_ANSWER_UNACCEPTED = 'answer_unaccepted';
    const REPUTATION_HISTORY_TYPE_VOTER_DOWNVOTES = 'voter_downvotes';
    const REPUTATION_HISTORY_TYPE_VOTER_UNDOWNVOTES = 'voter_undownvotes';
    const REPUTATION_HISTORY_TYPE_POST_DOWNVOTED = 'post_downvoted';
    const REPUTATION_HISTORY_TYPE_POST_UNDOWNVOTED = 'post_undownvoted';
    const REPUTATION_HISTORY_TYPE_POST_UPVOTED = 'post_upvoted';
    const REPUTATION_HISTORY_TYPE_POST_UNUPVOTED = 'post_unupvoted';
    const REPUTATION_HISTORY_TYPE_SUGGESTED_EDIT_APPROVAL_RECEIVED = 'suggested_edit_approval_received';
    const REPUTATION_HISTORY_TYPE_POST_FLAGGED_AS_SPAM = 'post_flagged_as_spam';
    const REPUTATION_HISTORY_TYPE_POST_FLAGGED_AS_OFFENSIVE = 'post_flagged_as_offensive';
    const REPUTATION_HISTORY_TYPE_BOUNTY_GIVEN = 'bounty_given';
    const REPUTATION_HISTORY_TYPE_BOUNTY_EARNED = 'bounty_earned';
    const REPUTATION_HISTORY_TYPE_BOUNTY_CANCELLED = 'bounty_cancelled';
    const REPUTATION_HISTORY_TYPE_POST_DELETED = 'post_deleted';
    const REPUTATION_HISTORY_TYPE_POST_UNDELETED = 'post_undeleted';
    const REPUTATION_HISTORY_TYPE_ASSOCIATION_BONUS = 'association_bonus';
    const REPUTATION_HISTORY_TYPE_ARBITRARY_REPUTATION_CHANGE = 'arbitrary_reputation_change';
    const REPUTATION_HISTORY_TYPE_VOTE_FRAUD_REVERSAL = 'vote_fraud_reversal';
    const REPUTATION_HISTORY_TYPE_POST_MIGRATED = 'post_migrated';
    const REPUTATION_HISTORY_TYPE_USER_DELETED = 'user_deleted';

    /**
     * Creation date.
     *
     * @var \DateTime
     */
    protected $creationDate;

    /**
     * The post id.
     *
     * @var int|null
     */
    protected $postId;

    /**
     * Reputation change.
     *
     * @var int
     */
    protected $reputationChange;

    /**
     * Reputation history type that can be 'asker_accepts_answer', 'asker_unaccept_answer', 'answer_accepted',
     * 'answer_unaccepted', 'voter_downvotes', 'voter_undownvotes', 'post_downvoted', 'post_undownvoted',
     * 'post_upvoted', 'post_unupvoted', 'suggested_edit_approval_received', 'post_flagged_as_spam',
     * 'post_flagged_as_offensive', 'bounty_given', 'bounty_earned', 'bounty_cancelled', 'post_deleted',
     * 'post_undeleted', 'association_bonus', 'arbitrary_reputation_change', 'vote_fraud_reversal', 'post_migrated',
     * or 'user_deleted'.
     *
     * @var string
     */
    protected $reputationHistoryType;

    /**
     * User id.
     *
     * @var int
     */
    protected $userId;

    /**
     * Private array that contains all the reputation history types. It is useful for not duplicated the code.
     *
     * @var string[]
     */
    private $reputationHistoryTypes = array(
        self::REPUTATION_HISTORY_TYPE_ASKER_ACCEPTS_ANSWER,
        self::REPUTATION_HISTORY_TYPE_ASKER_UNACCEPT_ANSWER,
        self::REPUTATION_HISTORY_TYPE_ANSWER_ACCEPTED,
        self::REPUTATION_HISTORY_TYPE_ANSWER_UNACCEPTED,
        self::REPUTATION_HISTORY_TYPE_VOTER_DOWNVOTES,
        self::REPUTATION_HISTORY_TYPE_VOTER_UNDOWNVOTES,
        self::REPUTATION_HISTORY_TYPE_POST_DOWNVOTED,
        self::REPUTATION_HISTORY_TYPE_POST_UNDOWNVOTED,
        self::REPUTATION_HISTORY_TYPE_POST_UPVOTED,
        self::REPUTATION_HISTORY_TYPE_POST_UNUPVOTED,
        self::REPUTATION_HISTORY_TYPE_SUGGESTED_EDIT_APPROVAL_RECEIVED,
        self::REPUTATION_HISTORY_TYPE_POST_FLAGGED_AS_SPAM,
        self::REPUTATION_HISTORY_TYPE_POST_FLAGGED_AS_OFFENSIVE,
        self::REPUTATION_HISTORY_TYPE_BOUNTY_GIVEN,
        self::REPUTATION_HISTORY_TYPE_BOUNTY_EARNED,
        self::REPUTATION_HISTORY_TYPE_BOUNTY_CANCELLED,
        self::REPUTATION_HISTORY_TYPE_POST_DELETED,
        self::REPUTATION_HISTORY_TYPE_POST_UNDELETED,
        self::REPUTATION_HISTORY_TYPE_ASSOCIATION_BONUS,
        self::REPUTATION_HISTORY_TYPE_ARBITRARY_REPUTATION_CHANGE,
        self::REPUTATION_HISTORY_TYPE_VOTE_FRAUD_REVERSAL,
        self::REPUTATION_HISTORY_TYPE_POST_MIGRATED,
        self::REPUTATION_HISTORY_TYPE_USER_DELETED
    );

    /**
     * Constructor.
     *
     * @param null|mixed[] $json The json string being decoded
     */
    public function __construct($json = null)
    {
        $this->creationDate = Util::setIfDateTimeExists($json, 'creation_date');
        $this->postId = Util::setIfIntegerExists($json, 'post_id');
        $this->reputationChange = Util::setIfIntegerExists($json, 'reputation_change');
        $this->reputationHistoryType = Util::isEqual($json, 'reputation_history_type', $this->reputationHistoryTypes);
        $this->userId = Util::setIfIntegerExists($json, 'user_id');
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
    public function setReputationHistoryType($reputationHistoryType)
    {
        if (Util::coincidesElement($reputationHistoryType, $this->reputationHistoryTypes) === true) {
            $this->reputationHistoryType = $reputationHistoryType;
        }

        return $this;
    }

    /**
     * {@inheritdoc}
     */
    public function getReputationHistoryType()
    {
        return $this->reputationHistoryType;
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
}
