<?php

/**
 * This file is part of the StackExchangeApiClient library.
 *
 * @author  benatespina <benatespina@gmail.com>
 *
 * @license MIT
 */

namespace BenatEspina\StackExchangeApiClient\Model\Traits;

use BenatEspina\StackExchangeApiClient\Model\Interfaces\NetworkPostInterface;
use BenatEspina\StackExchangeApiClient\Model\NetworkPost;
use BenatEspina\StackExchangeApiClient\Util\Util;

/**
 * Trait TopTrait.
 *
 * @package BenatEspina\StackExchangeApiClient\Model\Traits
 */
trait TopTrait
{
    /**
     * Top answers.
     *
     * @var array<\BenatEspina\StackExchangeApiClient\Model\Interfaces\NetworkPostInterface>
     */
    protected $topAnswers = array();

    /**
     * Top questions.
     *
     * @var array<\BenatEspina\StackExchangeApiClient\Model\Interfaces\NetworkPostInterface>
     */
    protected $topQuestions = array();

    /**
     * Adds top answer.
     *
     * @param \BenatEspina\StackExchangeApiClient\Model\Interfaces\NetworkPostInterface $topAnswer The answer
     *
     * @return $this self Object
     */
    public function addTopAnswer(NetworkPostInterface $topAnswer)
    {
        $this->topAnswers[] = $topAnswer;

        return $this;
    }

    /**
     * Removes top answer.
     *
     * @param \BenatEspina\StackExchangeApiClient\Model\Interfaces\NetworkPostInterface $topAnswer The top answer
     *
     * @return $this self Object
     */
    public function removeTopAnswer(NetworkPostInterface $topAnswer)
    {
        $this->topAnswers = Util::removeElement($topAnswer, $this->topAnswers);

        return $this;
    }

    /**
     * Gets top answer.
     *
     * @return array<\BenatEspina\StackExchangeApiClient\Model\Interfaces\NetworkPostInterface>
     */
    public function getTopAnswers()
    {
        return $this->topAnswers;
    }

    /**
     * Adds top question.
     *
     * @param \BenatEspina\StackExchangeApiClient\Model\Interfaces\NetworkPostInterface $topQuestion The top question
     *
     * @return $this self Object
     */
    public function addTopQuestion(NetworkPostInterface $topQuestion)
    {
        $this->topQuestions[] = $topQuestion;

        return $this;
    }

    /**
     * Removes top question.
     *
     * @param \BenatEspina\StackExchangeApiClient\Model\Interfaces\NetworkPostInterface $topQuestion The top question
     *
     * @return $this self Object
     */
    public function removeTopQuestion(NetworkPostInterface $topQuestion)
    {
        $this->topQuestions = Util::removeElement($topQuestion, $this->topQuestions);

        return $this;
    }

    /**
     * Gets top question.
     *
     * @return array<\BenatEspina\StackExchangeApiClient\Model\Interfaces\NetworkPostInterface>
     */
    public function getTopQuestions()
    {
        return $this->topQuestions;
    }

    /**
     * Loads the variables if the data exist into resource. It works like a constructor.
     *
     * @param null|(int|string)[] $resource The resource
     *
     * @return void
     */
    protected function loadTop($resource)
    {
        $topAnswers = Util::setIfArrayExists($resource, 'top_answers');
        foreach ($topAnswers as $topAnswer) {
            $this->topAnswers[] = new NetworkPost($topAnswer);
        }

        $topQuestions = Util::setIfArrayExists($resource, 'top_questions');
        foreach ($topQuestions as $topQuestion) {
            $this->topQuestions[] = new NetworkPost($topQuestion);
        }
    }
}
