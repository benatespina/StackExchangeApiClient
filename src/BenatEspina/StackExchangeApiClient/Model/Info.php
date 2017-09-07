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
 * Class info model class.
 *
 * @author Beñat Espiña <benatespina@gmail.com>
 */
class Info implements Model
{
    protected $totalAccepted;
    protected $totalAnswers;
    protected $totalBadges;
    protected $totalComments;
    protected $totalQuestions;
    protected $totalUnanswered;
    protected $totalUsers;
    protected $totalVotes;
    protected $answersPerMinute;
    protected $apiRevision;
    protected $badgesPerMinute;
    protected $newActiveUsers;
    protected $questionsPerMinute;
    protected $site;

    public static function fromJson(array $data)
    {
        $instance = new self();
        $instance
            ->setTotalAccepted(array_key_exists('total_accepted', $data) ? $data['total_accepted'] : null)
            ->setTotalAnswers(array_key_exists('total_answers', $data) ? $data['total_answers'] : null)
            ->setTotalBadges(array_key_exists('total_badges', $data) ? $data['total_badges'] : null)
            ->setTotalComments(array_key_exists('total_comments', $data) ? $data['total_comments'] : null)
            ->setTotalQuestions(array_key_exists('total_questions', $data) ? $data['total_questions'] : null)
            ->setTotalUnanswered(array_key_exists('total_unanswered', $data) ? $data['total_unanswered'] : null)
            ->setTotalUsers(array_key_exists('total_users', $data) ? $data['total_users'] : null)
            ->setTotalVotes(array_key_exists('total_votes', $data) ? $data['total_votes'] : null)
            ->setAnswersPerMinute(
                array_key_exists('answers_per_minute', $data)
                    ? $data['answers_per_minute']
                    : null
            )
            ->setApiRevision(array_key_exists('api_revision', $data) ? $data['api_revision'] : null)
            ->setBadgesPerMinute(
                array_key_exists('badges_per_minute', $data)
                    ? $data['badges_per_minute']
                    : null
            )
            ->setNewActiveUsers(
                array_key_exists('new_active_users', $data)
                    ? $data['new_active_users']
                    : null
            )
            ->setQuestionsPerMinute(
                array_key_exists('questions_per_minute', $data)
                    ? $data['questions_per_minute']
                    : null
            )
            ->setSite(array_key_exists('site', $data) ? Site::fromJson($data['site']) : null);

        return $instance;
    }

    public static function fromProperties(
        $totalAccepted,
        $totalAnswers,
        $totalBadges,
        $totalComments,
        $totalQuestions,
        $totalUnanswered,
        $totalUsers,
        $totalVotes,
        $answersPerMinute,
        $apiRevision,
        $badgesPerMinute,
        $newActiveUsers,
        $questionsPerMinute,
        Site $site = null
    ) {
        $instance = new self();
        $instance
            ->setTotalAccepted($totalAccepted)
            ->setTotalAnswers($totalAnswers)
            ->setTotalBadges($totalBadges)
            ->setTotalComments($totalComments)
            ->setTotalQuestions($totalQuestions)
            ->setTotalUnanswered($totalUnanswered)
            ->setTotalUsers($totalUsers)
            ->setTotalVotes($totalVotes)
            ->setAnswersPerMinute($answersPerMinute)
            ->setApiRevision($apiRevision)
            ->setBadgesPerMinute($badgesPerMinute)
            ->setNewActiveUsers($newActiveUsers)
            ->setQuestionsPerMinute($questionsPerMinute)
            ->setSite($site);

        return $instance;
    }

    public function setTotalAccepted($totalAccepted)
    {
        $this->totalAccepted = $totalAccepted;

        return $this;
    }

    public function getTotalAccepted()
    {
        return $this->totalAccepted;
    }

    public function setTotalAnswers($totalAnswers)
    {
        $this->totalAnswers = $totalAnswers;

        return $this;
    }

    public function getTotalAnswers()
    {
        return $this->totalAnswers;
    }

    public function setTotalBadges($totalBadges)
    {
        $this->totalBadges = $totalBadges;

        return $this;
    }

    public function getTotalBadges()
    {
        return $this->totalBadges;
    }

    public function setTotalComments($totalComments)
    {
        $this->totalComments = $totalComments;

        return $this;
    }

    public function getTotalComments()
    {
        return $this->totalComments;
    }

    public function setTotalQuestions($totalQuestions)
    {
        $this->totalQuestions = $totalQuestions;

        return $this;
    }

    public function getTotalQuestions()
    {
        return $this->totalQuestions;
    }

    public function setTotalUnanswered($totalUnanswered)
    {
        $this->totalUnanswered = $totalUnanswered;

        return $this;
    }

    public function getTotalUnanswered()
    {
        return $this->totalUnanswered;
    }

    public function setTotalUsers($totalUsers)
    {
        $this->totalUsers = $totalUsers;

        return $this;
    }

    public function getTotalUsers()
    {
        return $this->totalUsers;
    }

    public function setTotalVotes($totalVotes)
    {
        $this->totalVotes = $totalVotes;

        return $this;
    }

    public function getTotalVotes()
    {
        return $this->totalVotes;
    }

    public function setAnswersPerMinute($answersPerMinute)
    {
        $this->answersPerMinute = $answersPerMinute;

        return $this;
    }

    public function getAnswersPerMinute()
    {
        return $this->answersPerMinute;
    }

    public function setApiRevision($apiRevision)
    {
        $this->apiRevision = $apiRevision;

        return $this;
    }

    public function getApiRevision()
    {
        return $this->apiRevision;
    }

    public function setBadgesPerMinute($badgesPerMinute)
    {
        $this->badgesPerMinute = $badgesPerMinute;

        return $this;
    }

    public function getBadgesPerMinute()
    {
        return $this->badgesPerMinute;
    }

    public function setNewActiveUsers($newActiveUsers)
    {
        $this->newActiveUsers = $newActiveUsers;

        return $this;
    }

    public function getNewActiveUsers()
    {
        return $this->newActiveUsers;
    }

    public function setQuestionsPerMinute($questionsPerMinute)
    {
        $this->questionsPerMinute = $questionsPerMinute;

        return $this;
    }

    public function getQuestionsPerMinute()
    {
        return $this->questionsPerMinute;
    }

    public function setSite(Site $site = null)
    {
        $this->site = $site;

        return $this;
    }

    public function getSite()
    {
        return $this->site;
    }
}
