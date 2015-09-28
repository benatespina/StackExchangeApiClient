<?php

/*
 * This file is part of the Stack Exchange Api Client library.
 *
 * Copyright (c) 2015 Beñat Espiña <benatespina@gmail.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace BenatEspina\StackExchangeApiClient\Model\Interfaces;

/**
 * Interface PrivilegeInterface.
 *
 * @author Beñat Espiña <benatespina@gmail.com>
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
