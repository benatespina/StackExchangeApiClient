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
class Error extends \Exception implements ErrorInterface
{
    /**
     * The description of error; sometimes comes as 'description' and sometimes as 'error_message'.
     *
     * @var string
     */
    protected $description;

    /**
     * Constructor.
     *
     * @param null|mixed[] $json The json string being decoded
     */
    public function __construct($json = null)
    {
        
        $this->description = Util::setIfExists($json, 'description')
            ? Util::setIfStringExists($json, 'description')
            : Util::setIfStringExists($json, 'error_message');
        $this->code = Util::setIfIntegerExists($json, 'error_id');
        $this->message = Util::setIfStringExists($json, 'error_name');
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
}
