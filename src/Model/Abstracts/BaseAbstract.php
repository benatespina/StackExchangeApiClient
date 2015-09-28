<?php

/*
 * This file is part of the Stack Exchange Api Client library.
 *
 * Copyright (c) 2015 Beñat Espiña <benatespina@gmail.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace BenatEspina\StackExchangeApiClient\Model\Abstracts;

/**
 * Class BaseAbstract.
 *
 * @author Beñat Espiña <benatespina@gmail.com>
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

        return $this;
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
