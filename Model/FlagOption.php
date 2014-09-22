<?php

/**
 * This file is part of the StackExchangeApiClient library.
 *
 * @author  benatespina <benatespina@gmail.com>
 *
 * @license MIT
 */

namespace BenatEspina\StackExchangeApiClient\Model;

use BenatEspina\StackExchangeApiClient\Model\Interfaces\FlagOptionInterface;
use BenatEspina\StackExchangeApiClient\Model\Traits\RequiresTrait;
use BenatEspina\StackExchangeApiClient\Util\Util;

/**
 * Class FlagOption.
 *
 * @package BenatEspina\StackExchangeApiClient\Model
 */
class FlagOption implements FlagOptionInterface
{
    use RequiresTrait;

    /**
     * Count.
     *
     * @var int|null
     */
    protected $count;

    /**
     * Description.
     *
     * @var string|null
     */
    protected $description;
    /**
     * Dialog title.
     *
     * @var string|null
     */
    protected $dialogTitle;

    /**
     * Boolean that shows if has flagged or not.
     *
     * @var boolean|null
     */
    protected $hasFlagged;

    /**
     * Option id.
     *
     * @var int|null
     */
    protected $optionId;

    /**
     * An array of flag options.
     *
     * @var array<\BenatEspina\StackExchangeApiClient\Model\Interfaces\FlagOptionInterface>|null
     */
    protected $subOptions = array();

    /**
     * Title.
     *
     * @var string|null
     */
    protected $title;

    /**
     * Constructor.
     *
     * @param null|mixed[] $json The json string being decoded
     */
    public function __construct($json = null)
    {
        $this->count = Util::setIfIntegerExists($json, 'count');
        $this->description = Util::setIfStringExists($json, 'description');
        $this->dialogTitle = Util::setIfStringExists($json, 'dialog_title');
        $this->hasFlagged = Util::setIfBoolExists($json, 'has_flagged');
        $this->optionId = Util::setIfStringExists($json, 'option_id');
        $subOptions = Util::setIfArrayExists($json, 'sub_options');
        foreach ($subOptions as $subOption) {
            $this->subOptions[] = new FlagOption($subOption);
        }
        $this->title = Util::setIfStringExists($json, 'title');
    }

    /**
     * {@inheritdoc}
     */
    public function setCount($count)
    {
        $this->count = $count;

        return $this;
    }

    /**
     * {@inheritdoc}
     */
    public function getCount()
    {
        return $this->count;
    }

    /**
     * {@inheritdoc}
     */
    public function setDescription($description)
    {
        $this->description = $description;

        return $this;
    }

    /**
     * {@inheritdoc}
     */
    public function getDescription()
    {
        return $this->description;
    }

    /**
     * {@inheritdoc}
     */
    public function setDialogTitle($dialogTitle)
    {
        $this->dialogTitle = $dialogTitle;

        return $this;
    }

    /**
     * {@inheritdoc}
     */
    public function getDialogTitle()
    {
        return $this->dialogTitle;
    }

    /**
     * {@inheritdoc}
     */
    public function setHasFlagged($hasFlagged)
    {
        $this->hasFlagged = $hasFlagged;

        return $this;
    }

    /**
     * {@inheritdoc}
     */
    public function hasFlagged()
    {
        return $this->hasFlagged;
    }

    /**
     * {@inheritdoc}
     */
    public function setOptionId($optionId)
    {
        $this->optionId = $optionId;

        return $this;
    }

    /**
     * {@inheritdoc}
     */
    public function getOptionId()
    {
        return $this->optionId;
    }

    /**
     * {@inheritdoc}
     */
    public function addSubOption(FlagOptionInterface $subOption)
    {
        $this->subOptions[] = $subOption;

        return $this;
    }

    /**
     * {@inheritdoc}
     */
    public function removeSubOption(FlagOptionInterface $subOption)
    {
        $this->subOptions = Util::removeElement($subOption, $this->subOptions);

        return $this;
    }

    /**
     * {@inheritdoc}
     */
    public function getSubOptions()
    {
        return $this->subOptions;
    }

    /**
     * {@inheritdoc}
     */
    public function setTitle($title)
    {
        $this->title = $title;

        return $this;
    }

    /**
     * {@inheritdoc}
     */
    public function getTitle()
    {
        return $this->title;
    }
}
