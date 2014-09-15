<?php

/**
 * This file is part of the StackExchangeApiClient library.
 *
 * @author  benatespina <benatespina@gmail.com>
 *
 * @license MIT
 */

namespace BenatEspina\StackExchangeApiClient\Model\Interfaces\Traits;

use BenatEspina\StackExchangeApiClient\Model\Interfaces\ShallowUserInterface;

/**
 * Interface EditInterface.
 *
 * @package BenatEspina\StackExchangeApiClient\Model\Interfaces\Traits
 */
interface EditInterface
{
    /**
     * Sets last edit date.
     *
     * @param \DateTime|null $lastEditDate The last edit date
     *
     * @return $this self Object
     */
    public function setLastEditDate(\DateTime $lastEditDate);

    /**
     * Gets last edit date.
     *
     * @return \DateTime|null
     */
    public function getLastEditDate();

    /**
     * Sets last editor.
     *
     * @param \BenatEspina\StackExchangeApiClient\Model\Interfaces\ShallowUserInterface $lastEditor The last editor.
     *
     * @return $this self Object
     */
    public function setLastEditor(ShallowUserInterface $lastEditor);

    /**
     * Gets last editor.
     *
     * @return \BenatEspina\StackExchangeApiClient\Model\Interfaces\ShallowUserInterface
     */
    public function getLastEditor();
}
