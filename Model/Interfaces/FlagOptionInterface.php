<?php

/**
 * This file is part of the StackExchangeApiClient library.
 *
 * @author  benatespina <benatespina@gmail.com>
 *
 * @license MIT
 */

namespace BenatEspina\StackExchangeApiClient\Model\Interfaces;

use BenatEspina\StackExchangeApiClient\Model\Interfaces\Traits\RequiresInterface;

/**
 * Interface FlagOptionInterface.
 *
 * @package BenatEspina\StackExchangeApiClient\Model\Interfaces
 */
interface FlagOptionInterface extends RequiresInterface
{
    /**
     * Sets count.
     *
     * @param int|null $count The count
     *
     * @return $this self Object
     */
    public function setCount($count);

    /**
     * Gets count.
     *
     * @return int|null
     */
    public function getCount();

    /**
     * Sets description.
     *
     * @param string|null $description The description
     *
     * @return $this self Object
     */
    public function setDescription($description);

    /**
     * Gets description.
     *
     * @return string|null
     */
    public function getDescription();

    /**
     * Sets dialog title.
     *
     * @param string|null $dialogTitle The dialog title
     *
     * @return $this self Object
     */
    public function setDialogTitle($dialogTitle);

    /**
     * Gets dialog title.
     *
     * @return string|null
     */
    public function getDialogTitle();

    /**
     * Sets has flagged.
     *
     * @param boolean|null $hasFlagged The has flagged boolean
     *
     * @return $this self Object
     */
    public function setHasFlagged($hasFlagged);

    /**
     * Gets has flagged.
     *
     * @return boolean|null
     */
    public function hasFlagged();

    /**
     * Sets option id.
     *
     * @param int|null $optionId The option id
     *
     * @return $this self Object
     */
    public function setOptionId($optionId);

    /**
     * Gets option id.
     *
     * @return int|null
     */
    public function getOptionId();

    /**
     * Adds sub-option.
     *
     * @param \BenatEspina\StackExchangeApiClient\Model\Interfaces\FlagOptionInterface|null $subOption The sub-option
     *
     * @return $this self The Object
     */
    public function addSubOption(FlagOptionInterface $subOption);

    /**
     * Removes sub-option.
     *
     * @param \BenatEspina\StackExchangeApiClient\Model\Interfaces\FlagOptionInterface|null $subOption The sub-option
     *
     * @return $this self The Object
     */
    public function removeSubOption(FlagOptionInterface $subOption);

    /**
     * Gets array of sub-options.
     *
     * @return array<\BenatEspina\StackExchangeApiClient\Model\Interfaces\FlagOptionInterface>|null
     */
    public function getSubOptions();

    /**
     * Sets title.
     *
     * @param string|null $title The title
     *
     * @return $this self Object
     */
    public function setTitle($title);

    /**
     * Gets title.
     *
     * @return string|null
     */
    public function getTitle();
}
