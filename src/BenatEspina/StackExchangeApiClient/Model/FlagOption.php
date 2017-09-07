<?php

/*
 * This file is part of the Stack Exchange Api Client library.
 *
 * (c) Beñat Espiña <benatespina@gmail.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

declare(strict_types=1);
/*
 * This file is part of the Stack Exchange Api Client library.
 *
 * (c) Beñat Espiña <benatespina@gmail.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace BenatEspina\StackExchangeApiClient\Model;

/**
 * Class filter model class.
 *
 * @author Beñat Espiña <benatespina@gmail.com>
 */
class FlagOption implements Model
{
    protected $count;
    protected $description;
    protected $dialogTitle;
    protected $hasFlagged;
    protected $optionId;
    protected $subOptions;
    protected $title;
    protected $requiresComment;
    protected $requiresQuestionId;
    protected $requiresSite;

    public static function fromJson(array $data)
    {
        $instance = new self();
        $instance
            ->setCount(array_key_exists('count', $data) ? $data['count'] : null)
            ->setDescription(array_key_exists('description', $data) ? $data['description'] : null)
            ->setDialogTitle(array_key_exists('dialog_title', $data) ? $data['dialog_title'] : null)
            ->setHasFlagged(array_key_exists('has_flagged', $data) ? $data['has_flagged'] : null)
            ->setOptionId(array_key_exists('option_id', $data) ? $data['option_id'] : null)
            ->setRequiresComment(array_key_exists('requires_comment', $data) ? $data['requires_comment'] : null)
            ->setRequiresQuestionId(
                array_key_exists('requires_question_id', $data)
                    ? $data['requires_question_id']
                    : null
            )
            ->setRequiresSite(array_key_exists('requires_site', $data) ? $data['requires_site'] : null)
            ->setSubOptions(array_key_exists('sub_options', $data) ? $data['sub_options'] : null)
            ->setTitle(array_key_exists('title', $data) ? $data['title'] : null);

        return $instance;
    }

    public static function fromProperties(
        $count,
        $description,
        $dialogTitle,
        $hasFlagged,
        $optionId,
        array $subOptions,
        $title,
        $requiresComment,
        $requiresQuestionId,
        $requiresSite
    ) {
        $instance = new self();
        $instance
            ->setCount($count)
            ->setDescription($description)
            ->setDialogTitle($dialogTitle)
            ->setHasFlagged($hasFlagged)
            ->setOptionId($optionId)
            ->setRequiresComment($requiresComment)
            ->setRequiresQuestionId($requiresQuestionId)
            ->setRequiresSite($requiresSite)
            ->setSubOptions($subOptions)
            ->setTitle($title);

        return $instance;
    }

    public function setCount($count)
    {
        $this->count = $count;

        return $this;
    }

    public function getCount()
    {
        return $this->count;
    }

    public function setDescription($description)
    {
        $this->description = $description;

        return $this;
    }

    public function getDescription()
    {
        return $this->description;
    }

    public function setDialogTitle($dialogTitle)
    {
        $this->dialogTitle = $dialogTitle;

        return $this;
    }

    public function getDialogTitle()
    {
        return $this->dialogTitle;
    }

    public function setHasFlagged($hasFlagged)
    {
        $this->hasFlagged = $hasFlagged;

        return $this;
    }

    public function hasFlagged()
    {
        return $this->hasFlagged;
    }

    public function setOptionId($optionId)
    {
        $this->optionId = $optionId;

        return $this;
    }

    public function getOptionId()
    {
        return $this->optionId;
    }

    public function setSubOptions(array $subOptions = [])
    {
        $this->subOptions = $subOptions;

        return $this;
    }

    public function getSubOptions()
    {
        return $this->subOptions;
    }

    public function setTitle($title)
    {
        $this->title = $title;

        return $this;
    }

    public function getTitle()
    {
        return $this->title;
    }

    public function setRequiresComment($requiresComment)
    {
        $this->requiresComment = $requiresComment;

        return $this;
    }

    public function isRequiresComment()
    {
        return $this->requiresComment;
    }

    public function setRequiresQuestionId($requiresQuestionId)
    {
        $this->requiresQuestionId = $requiresQuestionId;

        return $this;
    }

    public function isRequiresQuestionId()
    {
        return $this->requiresQuestionId;
    }

    public function setRequiresSite($requiresSite)
    {
        $this->requiresSite = $requiresSite;

        return $this;
    }

    public function isRequiresSite()
    {
        return $this->requiresSite;
    }
}
