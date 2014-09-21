<?php

/**
 * This file is part of the StackExchangeApiClient library.
 *
 * @author  benatespina <benatespina@gmail.com>
 *
 * @license MIT
 */

namespace BenatEspina\StackExchangeApiClient\Model;

use BenatEspina\StackExchangeApiClient\Model\Interfaces\MigrationInfoInterface;
use BenatEspina\StackExchangeApiClient\Model\Interfaces\SiteInterface;
use BenatEspina\StackExchangeApiClient\Util\Util;

/**
 * Class MigrationInfo.
 *
 * @package BenatEspina\StackExchangeApiClient\Model
 */
class MigrationInfo implements MigrationInfoInterface
{
    /**
     * On date.
     *
     * @var \DateTime
     */
    protected $onDate;

    /**
     * The other site.
     *
     * @var \BenatEspina\StackExchangeApiClient\Model\Interfaces\SiteInterface
     */
    protected $otherSite;

    /**
     * The question id.
     *
     * @var int
     */
    protected $questionId;

    /**
     * Constructor.
     *
     * @param null|(int|string)[] $json The json string being decoded
     */
    public function __construct($json = null)
    {
        $this->onDate = Util::setIfDateTimeExists($json, 'on_date');
        $this->otherSite = new Site(Util::setIfExists($json, 'other_site'));
        $this->questionId = Util::setIfExists($json, 'question_id');
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
    public function setQuestionId($questionId)
    {
        $this->questionId = $questionId;

        return $this;
    }

    /**
     * {@inheritdoc}
     */
    public function getQuestionId()
    {
        return $this->questionId;
    }

    /**
     * {@inheritdoc}
     */
    public function setOtherSite(SiteInterface $site)
    {
        $this->otherSite = $site;

        return $this;
    }

    /**
     * {@inheritdoc}
     */
    public function getOtherSite()
    {
        return $this->otherSite;
    }
}
