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

use BenatEspina\StackExchangeApiClient\Model\Interfaces\ErrorInterface;
use BenatEspina\StackExchangeApiClient\Util\Util;

/**
 * Class Error.
 *
 * @author Beñat Espiña <benatespina@gmail.com>
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
        if (isset($json['description']) === true) {
            $this->description = Util::setIfStringExists($json, 'description');
        } else {
            $this->description = Util::setIfStringExists($json, 'error_message');
        }
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
