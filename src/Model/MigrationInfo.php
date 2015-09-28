<?php

/*
 * This file is part of the Stack Exchange Api Client library.
 *
 * Copyright (c) 2015 Beñat Espiña <benatespina@gmail.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace BenatEspina\StackExchangeApiClient\Model;

use BenatEspina\StackExchangeApiClient\Model\Interfaces\MigrationInfoInterface;
use BenatEspina\StackExchangeApiClient\Model\Interfaces\SiteInterface;
use BenatEspina\StackExchangeApiClient\Util\Util;

/**
 * Class MigrationInfo.
 *
 * @author Beñat Espiña <benatespina@gmail.com>
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
     * @param null|mixed[] $json The json string being decoded
     */
    public function __construct($json = null)
    {
        $this->onDate = Util::setIfDateTimeExists($json, 'on_date');
        $this->otherSite = new Site(Util::setIfArrayExists($json, 'other_site'));
        $this->questionId = Util::setIfIntegerExists($json, 'question_id');
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
