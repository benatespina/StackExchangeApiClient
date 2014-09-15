<?php

/**
 * This file is part of the StackExchangeApiClient library.
 *
 * @author  benatespina <benatespina@gmail.com>
 *
 * @license MIT
 */

namespace BenatEspina\StackExchangeApiClient\Model\Interfaces\Traits;

/**
 * Interface TotalResourceInterface.
 *
 * @package BenatEspina\StackExchangeApiClient\Model\Interfaces\Traits
 */
interface TotalResourceInterface
{
    /**
     * Sets total accepted.
     *
     * @param int $totalAccepted The total accepted
     *
     * @return $this self Object
     */
    public function setTotalAccepted($totalAccepted);

    /**
     * Gets total accepted.
     *
     * @return int
     */
    public function getTotalAccepted();

    /**
     * Sets total answers.
     *
     * @param int $totalAnswers The total answers
     *
     * @return $this self Object
     */
    public function setTotalAnswers($totalAnswers);

    /**
     * Gets total answers.
     *
     * @return int
     */
    public function getTotalAnswers();

    /**
     * Sets total badges.
     *
     * @param int $totalBadges The total badges
     *
     * @return $this self Object
     */
    public function setTotalBadges($totalBadges);

    /**
     * Gets total badges.
     *
     * @return int
     */
    public function getTotalBadges();

    /**
     * Sets total comments.
     *
     * @param int $totalComments The total comments
     *
     * @return $this self Object
     */
    public function setTotalComments($totalComments);

    /**
     * Gets total comments.
     *
     * @return int
     */
    public function getTotalComments();

    /**
     * Sets total questions.
     *
     * @param int $totalQuestions The total questions
     *
     * @return $this self Object
     */
    public function setTotalQuestions($totalQuestions);

    /**
     * Gets total questions.
     *
     * @return int
     */
    public function getTotalQuestions();

    /**
     * Sets total unanswered.
     *
     * @param int $totalUnanswered The total unanswered
     *
     * @return $this self Object
     */
    public function setTotalUnanswered($totalUnanswered);

    /**
     * Gets total unanswered.
     *
     * @return int
     */
    public function getTotalUnanswered();

    /**
     * Sets total users.
     *
     * @param int $totalUsers The total users
     *
     * @return $this self Object
     */
    public function setTotalUsers($totalUsers);

    /**
     * Gets total users.
     *
     * @return int
     */
    public function getTotalUsers();

    /**
     * Sets total votes.
     *
     * @param int $totalVotes The total votes
     *
     * @return $this self Object
     */
    public function setTotalVotes($totalVotes);

    /**
     * Gets total votes.
     *
     * @return int
     */
    public function getTotalVotes();
}
