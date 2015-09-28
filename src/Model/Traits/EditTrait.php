<?php

/*
 * This file is part of the Stack Exchange Api Client library.
 *
 * Copyright (c) 2015 Beñat Espiña <benatespina@gmail.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace BenatEspina\StackExchangeApiClient\Model\Traits;

use BenatEspina\StackExchangeApiClient\Model\Interfaces\ShallowUserInterface;
use BenatEspina\StackExchangeApiClient\Model\ShallowUser;
use BenatEspina\StackExchangeApiClient\Util\Util;

/**
 * Trait EditTrait.
 *
 * @author Beñat Espiña <benatespina@gmail.com>
 */
trait EditTrait
{
    /**
     * Last edit date.
     *
     * @var \DateTime|null
     */
    protected $lastEditDate;

    /**
     * Last editor.
     *
     * @var \BenatEspina\StackExchangeApiClient\Model\Interfaces\ShallowUserInterface
     */
    protected $lastEditor;

    /**
     * Sets last edit date.
     *
     * @param \DateTime|null $lastEditDate The last edit date
     *
     * @return $this self Object
     */
    public function setLastEditDate(\DateTime $lastEditDate)
    {
        $this->lastEditDate = $lastEditDate;

        return $this;
    }

    /**
     * Gets last edit date.
     *
     * @return \DateTime|null
     */
    public function getLastEditDate()
    {
        return $this->lastEditDate;
    }

    /**
     * Sets last editor.
     *
     * @param \BenatEspina\StackExchangeApiClient\Model\Interfaces\ShallowUserInterface $lastEditor The last editor.
     *
     * @return $this self Object
     */
    public function setLastEditor(ShallowUserInterface $lastEditor)
    {
        $this->lastEditor = $lastEditor;

        return $this;
    }

    /**
     * Gets last editor.
     *
     * @return \BenatEspina\StackExchangeApiClient\Model\Interfaces\ShallowUserInterface
     */
    public function getLastEditor()
    {
        return $this->lastEditor;
    }

    /**
     * Loads the variables if the data exist into resource. It works like a constructor.
     *
     * @param null|mixed[] $resource The resource
     */
    protected function loadEdit($resource)
    {
        $this->lastEditDate = Util::setIfDateTimeExists($resource, 'last_edit_date');
        $this->lastEditor = new ShallowUser(Util::setIfArrayExists($resource, 'last_editor'));
    }
}
