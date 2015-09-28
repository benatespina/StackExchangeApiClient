<?php

/*
 * This file is part of the Stack Exchange Api Client library.
 *
 * Copyright (c) 2015 Beñat Espiña <benatespina@gmail.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace BenatEspina\StackExchangeApiClient\Model\Interfaces;

/**
 * Interface ReputationHistoryInterface.
 *
 * @author Beñat Espiña <benatespina@gmail.com>
 */
interface ReputationHistoryInterface
{
    /**
     * Sets creation date.
     *
     * @param \DateTime $creationDate The creation date.
     *
     * @return $this self Object
     */
    public function setCreationDate(\DateTime $creationDate);

    /**
     * Gets creation date.
     *
     * @return \DateTime
     */
    public function getCreationDate();

    /**
     * Sets post id.
     *
     * @param int|null $postId The post id
     *
     * @return $this self Object
     */
    public function setPostId($postId);

    /**
     * Gets post id.
     *
     * @return int|null
     */
    public function getPostId();

    /**
     * Sets reputation change.
     *
     * @param int $reputationChange The reputation change
     *
     * @return $this self Object
     */
    public function setReputationChange($reputationChange);

    /**
     * Gets reputation change.
     *
     * @return int
     */
    public function getReputationChange();

    /**
     * Sets reputation history type.
     *
     * @param string $reputationHistoryType The reputation history type that can be 'asker_accepts_answer',
     *                                      'asker_unaccept_answer', 'answer_accepted', 'answer_unaccepted',
     *                                      'voter_downvotes', 'voter_undownvotes', 'post_downvoted',
     *                                      'post_undownvoted', 'post_upvoted', 'post_unupvoted',
     *                                      'suggested_edit_approval_received', 'post_flagged_as_spam',
     *                                      'post_flagged_as_offensive', 'bounty_given', 'bounty_earned',
     *                                      'bounty_cancelled', 'post_deleted', 'post_undeleted', 'association_bonus',
     *                                      'arbitrary_reputation_change', 'vote_fraud_reversal', 'post_migrated', or
     *                                      'user_deleted'
     *
     * @return $this self Object
     */
    public function setReputationHistoryType($reputationHistoryType);

    /**
     * Gets reputation history type.
     *
     * @return string
     */
    public function getReputationHistoryType();

    /**
     * Sets id.
     *
     * @param int $userId The id
     *
     * @return $this self Object
     */
    public function setUserId($userId);

    /**
     * Gets id.
     *
     * @return int
     */
    public function getUserId();
}
