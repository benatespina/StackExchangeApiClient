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

use BenatEspina\StackExchangeApiClient\Model\Interfaces\PrivilegeInterface;
use BenatEspina\StackExchangeApiClient\Util\Util;

/**
 * Class Privilege.
 *
 * @author Beñat Espiña <benatespina@gmail.com>
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
     * @param null|mixed[] $json The json string being decoded
     */
    public function __construct($json = null)
    {
        $this->description = Util::setIfStringExists($json, 'description');
        $this->reputation = Util::setIfIntegerExists($json, 'reputation');
        $this->shortDescription = Util::setIfStringExists($json, 'short_description');
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
