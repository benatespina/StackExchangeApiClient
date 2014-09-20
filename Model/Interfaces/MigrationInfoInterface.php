<?php

/**
 * This file is part of the StackExchangeApiClient library.
 *
 * @author  benatespina <benatespina@gmail.com>
 *
 * @license MIT
 */

namespace BenatEspina\StackExchangeApiClient\Model\Interfaces;

/**
 * Interface MigrationInfoInterface.
 *
 * @package BenatEspina\StackExchangeApiClient\Model\Interfaces
 */
interface MigrationInfoInterface
{
    /**
     * Sets on date.
     *
     * @param \DateTime $dateTime The on date
     *
     * @return $this self Object
     */
    public function setOnDate(\DateTime $dateTime);

    /**
     * Gets on date.
     *
     * @return \DateTime
     */
    public function getOnDate();

    /**
     * Sets other site.
     *
     * @param \BenatEspina\StackExchangeApiClient\Model\Interfaces\SiteInterface $site The other site
     *
     * @return $this self Object
     */
    public function setOtherSite(SiteInterface $site);

    /**
     * Gets other site.
     *
     * @return \BenatEspina\StackExchangeApiClient\Model\Interfaces\SiteInterface $site The other site
     */
    public function getOtherSite();

    /**
     * Sets question id.
     *
     * @param string $questionId The question id
     *
     * @return int
     */
    public function setQuestionId($questionId);

    /**
     * Gets question id.
     *
     * @return int
     */
    public function getQuestionId();
}
