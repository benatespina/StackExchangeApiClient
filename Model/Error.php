<?php

/**
 * This file is part of the StackExchangeApiClient library.
 *
 * @author  benatespina <benatespina@gmail.com>
 *
 * @license MIT
 */

namespace BenatEspina\StackExchangeApiClient\Model;

use BenatEspina\StackExchangeApiClient\Model\Interfaces\ErrorInterface;
use BenatEspina\StackExchangeApiClient\Util\Util;

/**
 * Class Error.
 *
 * @package BenatEspina\StackExchangeApiClient\Model
 */
class Error implements ErrorInterface
{
    /**
     * Description.
     *
     * @var string
     */
    protected $description;

    /**
     * HTTP status code.
     *
     * @var int
     */
    protected $errorId;

    /**
     * HTTP message associated with status code.
     *
     * @var string
     */
    protected $errorName;

    /**
     * Constructor.
     *
     * @param null|(int|string)[] $json The json string being decoded
     */
    public function __construct($json = null)
    {
        $this->description = Util::setIfExists($json, 'description');
        $this->errorId = Util::setIfExists($json, 'error_id');
        $this->errorName = Util::setIfExists($json, 'error_name');
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
    public function setErrorId($errorId)
    {
        $this->errorId = $errorId;

        return $this;
    }

    /**
     * {@inheritdoc}
     */
    public function getErrorId()
    {
        return $this->errorId;
    }

    /**
     * {@inheritdoc}
     */
    public function setErrorName($errorName)
    {
        $this->errorName = $errorName;

        return $this;
    }

    /**
     * {@inheritdoc}
     */
    public function getErrorName()
    {
        return $this->errorName;
    }
}
