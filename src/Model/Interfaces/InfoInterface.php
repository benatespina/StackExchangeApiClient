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

use BenatEspina\StackExchangeApiClient\Model\Interfaces\Traits\TotalResourceInterface;

/**
 * Interface InfoInterface.
 *
 * @author Beñat Espiña <benatespina@gmail.com>
 */
interface InfoInterface extends TotalResourceInterface
{
    /**
     * Sets answers per minute.
     *
     * @param int $answersPerMinute The answers per minute decimal
     *
     * @return $this self Object
     */
    public function setAnswersPerMinute($answersPerMinute);

    /**
     * Gets answers per minute.
     *
     * @return int
     */
    public function getAnswersPerMinute();

    /**
     * Sets api revision.
     *
     * @param string $apiRevision The api revision
     *
     * @return $this self Object
     */
    public function setApiRevision($apiRevision);

    /**
     * Gets api revision.
     *
     * @return string
     */
    public function getApiRevision();

    /**
     * Sets badges per minute.
     *
     * @param int $badgesPerMinute The badges per minute decimal
     *
     * @return $this self Object
     */
    public function setBadgesPerMinute($badgesPerMinute);

    /**
     * Gets badges per minute.
     *
     * @return int
     */
    public function getBadgesPerMinute();

    /**
     * Sets new active users.
     *
     * @param int $newActiveUsers The new active users
     *
     * @return $this self Object
     */
    public function setNewActiveUsers($newActiveUsers);

    /**
     * Gets new active users.
     *
     * @return int
     */
    public function getNewActiveUsers();

    /**
     * Sets questions per minute.
     *
     * @param int $questionsPerMinute The questions per minute decimal
     *
     * @return $this self Object
     */
    public function setQuestionsPerMinute($questionsPerMinute);

    /**
     * Gets questions per minute.
     *
     * @return int
     */
    public function getQuestionsPerMinute();

    /**
     * Sets site.
     *
     * @param \BenatEspina\StackExchangeApiClient\Model\Interfaces\SiteInterface $site The site
     *
     * @return $this self Object
     */
    public function setSite(SiteInterface $site);

    /**
     * Gets site.
     *
     * @return \BenatEspina\StackExchangeApiClient\Model\Interfaces\SiteInterface
     */
    public function getSite();
}
