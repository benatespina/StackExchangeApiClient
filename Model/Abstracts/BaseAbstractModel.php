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
 * Class BaseAbstractModel.
 *
 * @package BenatEspina\StackExchangeApiClient\Model\Abstracts
 */
abstract class BaseAbstractModel
{
    /**
     * URL of resource.
     *
     * @var string
     */
    protected $link;

    /**
     * Constructor.
     *
     * @param null|array $json The json string being decoded
     */
    public function __construct($json = null)
    {
        if (isset($json['link']) === true) {
            $this->link = $json['link'];
        }
    }

    /**
     * Sets link.
     *
     * @param string $link The link
     *
     * @return $this self Object
     */
    public function setLink($link)
    {
        $this->link = $link;

        return $this;
    }

    /**
     * Gets link.
     *
     * @return string
     */
    public function getLink()
    {
        return $this->link;
    }
}
