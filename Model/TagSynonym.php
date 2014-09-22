<?php

/**
 * This file is part of the StackExchangeApiClient library.
 *
 * @author  benatespina <benatespina@gmail.com>
 *
 * @license MIT
 */

namespace BenatEspina\StackExchangeApiClient\Model;

use BenatEspina\StackExchangeApiClient\Model\Interfaces\TagSynonymInterface;
use BenatEspina\StackExchangeApiClient\Util\Util;

/**
 * Class TagScore.
 *
 * @package BenatEspina\StackExchangeApiClient\Model
 */
class TagSynonym implements TagSynonymInterface
{
    /**
     * Applied count.
     *
     * @var int
     */
    protected $appliedCount;

    /**
     * Creation date.
     *
     * @var \DateTime
     */
    protected $creationDate;

    /**
     * From tag.
     *
     * @var string
     */
    protected $fromTag;

    /**
     * Last applied date.
     *
     * @var \DateTime|null
     */
    protected $lastAppliedDate;

    /**
     * To tag.
     *
     * @var string
     */
    protected $toTag;

    /**
     * Constructor.
     *
     * @param null|mixed[] $json The json string being decoded
     */
    public function __construct($json = null)
    {
        $this->appliedCount = Util::setIfIntegerExists($json, 'applied_count');
        $this->creationDate = Util::setIfDateTimeExists($json, 'creation_date');
        $this->fromTag = Util::setIfStringExists($json, 'from_tag');
        $this->lastAppliedDate = Util::setIfDateTimeExists($json, 'last_applied_date');
        $this->toTag = Util::setIfStringExists($json, 'to_tag');
    }

    /**
     * {@inheritdoc}
     */
    public function setAppliedCount($appliedCount)
    {
        $this->appliedCount = $appliedCount;

        return $this;
    }

    /**
     * {@inheritdoc}
     */
    public function getAppliedCount()
    {
        return $this->appliedCount;
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
    public function setFromTag($fromTag)
    {
        $this->fromTag = $fromTag;

        return $this;
    }

    /**
     * {@inheritdoc}
     */
    public function getFromTag()
    {
        return $this->fromTag;
    }

    /**
     * {@inheritdoc}
     */
    public function setLastAppliedDate(\DateTime $lastAppliedDate)
    {
        $this->lastAppliedDate = $lastAppliedDate;

        return $this;
    }

    /**
     * {@inheritdoc}
     */
    public function getLastAppliedDate()
    {
        return $this->lastAppliedDate;
    }

    /**
     * {@inheritdoc}
     */
    public function setToTag($toTag)
    {
        $this->toTag = $toTag;

        return $this;
    }

    /**
     * {@inheritdoc}
     */
    public function getToTag()
    {
        return $this->toTag;
    }
}
