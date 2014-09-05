<?php

/**
 * This file is part of the StackExchangeApiClient library.
 *
 * @author  benatespina <benatespina@gmail.com>
 *
 * @license MIT
 */

namespace BenatEspina\StackExchangeApiClient\Exception;

/**
 * Class RequestException.
 *
 * @package BenatEspina\StackExchangeApiClient\Exception
 */
class RequestException extends \Exception
{
    /**
     * HTTP status code.
     *
     * @var integer
     */
    protected $errorId;

    /**
     * Custom error message from the site.
     *
     * @var string
     */
    protected $errorMessage;

    /**
     * HTTP message associated with status code.
     *
     * @var string
     */
    protected $errorName;

    /**
     * Constructor.
     *
     * @param array $json The json string being decoded
     */
    public function __construct($json)
    {
        $this->errorId = $json['error_id'];
        $this->errorMessage = $json['error_message'];
        $this->errorName = $json['error_name'];
    }
}
