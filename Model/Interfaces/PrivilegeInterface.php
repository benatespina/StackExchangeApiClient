<?php

/**
 * This file is part of the StackExchangeApiClient library.
 *
 * @author  benatespina <benatespina@gmail.com>
 *
 * @license MIT
 */

namespace BenatEspina\StackExchangeApiClient\Model\Interfaces;

/**
 * Interface PrivilegeInterface.
 *
 * @package BenatEspina\StackExchangeApiClient\Model\Interfaces
 */
interface PrivilegeInterface
{
    /**
     * Sets description.
     *
     * @param string $description The description
     *
     * @return $this self Object
     */
    public function setDescription($description);

    /**
     * Gets description.
     *
     * @return string
     */
    public function getDescription();

    /**
     * Sets reputation.
     *
     * @param int $reputation The reputation
     *
     * @return $this self Object
     */
    public function setReputation($reputation);

    /**
     * Gets reputation.
     *
     * @return int
     */
    public function getReputation();

    /**
     * Sets short description.
     *
     * @param string $shortDescription The short description
     *
     * @return $this self Object
     */
    public function setShortDescription($shortDescription);

    /**
     * Gets short description.
     *
     * @return string
     */
    public function getShortDescription();
}
