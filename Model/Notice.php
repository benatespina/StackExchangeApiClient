<?php

/**
 * This file is part of the StackExchangeApiClient library.
 *
 * @author  benatespina <benatespina@gmail.com>
 *
 * @license MIT
 */

namespace BenatEspina\StackExchangeApiClient\Model;

use BenatEspina\StackExchangeApiClient\Model\Interfaces\NoticeInterface;
use BenatEspina\StackExchangeApiClient\Util\Util;

/**
 * Class Notice.
 *
 * @package BenatEspina\StackExchangeApiClient\Model
 */
class Notice implements NoticeInterface
{
    /**
     * The body.
     *
     * @var string
     */
    protected $body;

    /**
     * Creation date.
     *
     * @var \DateTime
     */
    protected $creationDate;

    /**
     * Owner user id.
     *
     * @var int
     */
    protected $ownerUserId;

    /**
     * Constructor.
     *
     * @param null|(int|string)[] $json The json string being decoded
     */
    public function __construct($json = null)
    {
        $this->body = Util::setIfExists($json, 'body');
        $this->creationDate = Util::setIfDateTimeExists($json, 'creation_date');
        $this->ownerUserId = Util::setIfExists($json, 'owner_user_id');
    }

    /**
     * {@inheritdoc}
     */
    public function setBody($body)
    {
        $this->body = $body;

        return $this;
    }

    /**
     * {@inheritdoc}
     */
    public function getBody()
    {
        return $this->body;
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
    public function setOwnerUserId($ownerUserId)
    {
        $this->ownerUserId = $ownerUserId;

        return $this;
    }

    /**
     * {@inheritdoc}
     */
    public function getOwnerUserId()
    {
        return $this->ownerUserId;
    }
}
