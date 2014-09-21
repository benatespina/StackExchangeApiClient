<?php

/**
 * This file is part of the StackExchangeApiClient library.
 *
 * @author  benatespina <benatespina@gmail.com>
 *
 * @license MIT
 */

namespace BenatEspina\StackExchangeApiClient\Model;

use BenatEspina\StackExchangeApiClient\Model\Interfaces\PrivilegeInterface;
use BenatEspina\StackExchangeApiClient\Util\Util;

/**
 * Class Privilege.
 *
 * @package BenatEspina\StackExchangeApiClient\Model
 */
class Privilege implements PrivilegeInterface
{
    /**
     * Description.
     *
     * @var string
     */
    protected $description;

    /**
     * Reputation.
     *
     * @var int
     */
    protected $reputation;

    /**
     * Short description.
     *
     * @var string
     */
    protected $shortDescription;

    /**
     * Constructor.
     *
     * @param null|(int|string)[] $json The json string being decoded
     */
    public function __construct($json = null)
    {
        $this->description = Util::setIfExists($json, 'description');
        $this->reputation = Util::setIfExists($json, 'reputation');
        $this->shortDescription = Util::setIfExists($json, 'short_description');
    }

    /**
     * {@inheritdoc}
     */
    public function setDescription($description)
    {
        $this->description = $description;
        
        return $this;
    }

    /**
     * {@inheritdoc}
     */
    public function getDescription()
    {
        return $this->description;
    }

    /**
     * {@inheritdoc}
     */
    public function setReputation($reputation)
    {
        $this->reputation = $reputation;

        return $this;
    }

    /**
     * {@inheritdoc}
     */
    public function getReputation()
    {
        return $this->reputation;
    }

    /**
     * {@inheritdoc}
     */
    public function setShortDescription($shortDescription)
    {
        $this->shortDescription = $shortDescription;

        return $this;
    }

    /**
     * {@inheritdoc}
     */
    public function getShortDescription()
    {
        return $this->shortDescription;
    }
}
