<?php

/**
 * This file is part of the StackExchangeApiClient library.
 *
 * @author  benatespina <benatespina@gmail.com>
 *
 * @license MIT
 */

namespace BenatEspina\StackExchangeApiClient\Model\Traits;

use BenatEspina\StackExchangeApiClient\Model\Interfaces\ShallowUserInterface;
use BenatEspina\StackExchangeApiClient\Model\ShallowUser;
use BenatEspina\StackExchangeApiClient\Util\Util;

/**
 * Trait EditTrait.
 *
 * @package BenatEspina\StackExchangeApiClient\Model\Traits
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
     * @param null|(int|string)[] $resource The resource
     *
     * @return void
     */
    protected function loadEdit($resource)
    {
        $this->lastEditDate = Util::setIfDateTimeExists($resource, 'last_edit_date');
        $this->lastEditor = new ShallowUser(Util::setIfExists($resource, 'last_editor'));
    }
}
