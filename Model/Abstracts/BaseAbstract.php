<?php

/**
 * This file is part of the StackExchangeApiClient library.
 *
 * @author  benatespina <benatespina@gmail.com>
 *
 * @license MIT
 */

namespace BenatEspina\StackExchangeApiClient\Model\Abstracts;

/**
 * Class BaseAbstract.
 *
 * @package BenatEspina\StackExchangeApiClient\Model\Abstracts
 */
abstract class BaseAbstract
{
    /**
     * The id of resource.
     *
     * @var int
     */
    protected $id;

    /**
     * Sets the id.
     *
     * @param int $id The id of resource
     *
     * @return $this self Object
     */
    public function setId($id)
    {
        $this->id = $id;
    }

    /**
     * Gets the id.
     *
     * @return int
     */
    public function getId()
    {
        return $this->id;
    }
}
