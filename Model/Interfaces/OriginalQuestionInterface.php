<?php

/**
 * This file is part of the StackExchangeApiClient library.
 *
 * @author  benatespina <benatespina@gmail.com>
 *
 * @license MIT
 */

namespace BenatEspina\StackExchangeApiClient\Model\Interfaces;

use BenatEspina\StackExchangeApiClient\Model\Interfaces\Traits\AnswerInterface as AnswerTraitInterface;

/**
 * Interface OriginalQuestionInterface.
 *
 * @package BenatEspina\StackExchangeApiClient\Model\Interfaces
 */
interface OriginalQuestionInterface extends AnswerTraitInterface
{
    /**
     * Sets title.
     *
     * @param string $title The title
     *
     * @return $this self Object
     */
    public function setTitle($title);

    /**
     * Gets title.
     *
     * @return string
     */
    public function getTitle();
}
