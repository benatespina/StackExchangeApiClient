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
 * Interface ErrorInterface.
 *
 * @package BenatEspina\StackExchangeApiClient\Model\Interfaces
 */
interface ErrorInterface
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
     * Sets error id.
     *
     * @param int $errorId The error id.
     *
     * @return $this self Object
     */
    public function setErrorId($errorId);

    /**
     * Gets error id.
     *
     * @return int
     */
    public function getErrorId();

    /**
     * Sets error name.
     *
     * @param string $errorName The error name
     *
     * @return $this self Object
     */
    public function setErrorName($errorName);

    /**
     * Gets error name.
     *
     * @return string
     */
    public function getErrorName();
}
