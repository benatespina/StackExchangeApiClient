<?php

/**
 * This file is part of the StackExchangeApiClient library.
 *
 * @author  benatespina <benatespina@gmail.com>
 *
 * @license MIT
 */

namespace BenatEspina\StackExchangeApiClient\Model;

use BenatEspina\StackExchangeApiClient\Model\Abstracts\BaseAbstract as BaseOriginalQuestion;
use BenatEspina\StackExchangeApiClient\Model\Interfaces\OriginalQuestionInterface;
use BenatEspina\StackExchangeApiClient\Model\Traits\AnswerTrait;
use BenatEspina\StackExchangeApiClient\Util\Util;

/**
 * Class OriginalQuestion.
 *
 * @package BenatEspina\StackExchangeApiClient\Model
 */
class OriginalQuestion extends BaseOriginalQuestion implements OriginalQuestionInterface
{
    use AnswerTrait;

    /**
     * The title.
     *
     * @var string
     */
    protected $title;

    /**
     * Constructor.
     *
     * @param null|mixed[] $json The json string being decoded
     */
    public function __construct($json = null)
    {
        $this->id = Util::setIfIntegerExists($json, 'question_id');

        $this->loadAnswer($json);

        $this->title = Util::setIfStringExists($json, 'title');
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
