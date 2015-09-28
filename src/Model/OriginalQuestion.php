<?php

/*
 * This file is part of the Stack Exchange Api Client library.
 *
 * Copyright (c) 2015 Beñat Espiña <benatespina@gmail.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace BenatEspina\StackExchangeApiClient\Model;

use BenatEspina\StackExchangeApiClient\Model\Abstracts\BaseAbstract as BaseOriginalQuestion;
use BenatEspina\StackExchangeApiClient\Model\Interfaces\OriginalQuestionInterface;
use BenatEspina\StackExchangeApiClient\Model\Traits\AnswerTrait;
use BenatEspina\StackExchangeApiClient\Util\Util;

/**
 * Class OriginalQuestion.
 *
 * @author Beñat Espiña <benatespina@gmail.com>
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
