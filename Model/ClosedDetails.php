<?php

/**
 * This file is part of the StackExchangeApiClient library.
 *
 * @author  benatespina <benatespina@gmail.com>
 *
 * @license MIT
 */

namespace BenatEspina\StackExchangeApiClient\Model;

use BenatEspina\StackExchangeApiClient\Model\Interfaces\ClosedDetailsInterface;
use BenatEspina\StackExchangeApiClient\Model\Interfaces\OriginalQuestionInterface;
use BenatEspina\StackExchangeApiClient\Model\Interfaces\ShallowUserInterface;
use BenatEspina\StackExchangeApiClient\Util\Util;

/**
 * Class ClosedDetails.
 *
 * @package BenatEspina\StackExchangeApiClient\Model
 */
class ClosedDetails implements ClosedDetailsInterface
{
    /**
     * An array of shallow users.
     * 
     * @var array<\BenatEspina\StackExchangeApiClient\Model\Interfaces\ShallowUserInterface>
     */
    protected $byUsers = array();
    
    /**
     * Description.
     * 
     * @var string
     */
    protected $description;

    /**
     * Boolean that shows it is on hold or not.
     *
     * @var boolean
     */
    protected $onHold;

    /**
     * An array of original questions.
     *
     * @var array<\BenatEspina\StackExchangeApiClient\Model\Interfaces\OriginalQuestionInterface>|null
     */
    protected $originalQuestions = array();
    
    /**
     * The reason.
     * 
     * @var string
     */
    protected $reason;

    /**
     * Constructor.
     *
     * @param null|(int|string)[] $json The json string being decoded
     */
    public function __construct($json = null)
    {
        $users = Util::setIfArrayExists($json, 'by_users');
        foreach ($users as $user) {
            $this->byUsers[] = new ShallowUser($user);
        }
        $this->description = Util::setIfExists($json, 'description');
        $this->onHold = Util::setIfExists($json, 'on_hold');        
        $originalQuestions = Util::setIfArrayExists($json, 'original_questions');
        foreach ($originalQuestions as $originalQuestion) {
            $this->originalQuestions[] = new OriginalQuestion($originalQuestion);
        }
        $this->reason = Util::setIfExists($json, $this->reason, 'reason');
    }

    /**
     * {@inheritdoc}
     */
    public function addByUser(ShallowUserInterface $user)
    {
        $this->byUsers[] = $user;

        return $this;
    }

    /**
     * {@inheritdoc}
     */
    public function removeByUser(ShallowUserInterface $user)
    {
        $this->byUsers = Util::removeElement($user, $this->byUsers);

        return $this;
    }

    /**
     * {@inheritdoc}
     */
    public function getByUsers()
    {
        return $this->byUsers;
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
    public function setOnHold($onHold)
    {
        $this->onHold = $onHold;

        return $this;
    }

    /**
     * {@inheritdoc}
     */
    public function isOnHold()
    {
        return $this->onHold;
    }

    /**
     * {@inheritdoc}
     */
    public function addOriginalQuestion(OriginalQuestionInterface $originalQuestion)
    {
        $this->originalQuestions[] = $originalQuestion;

        return $this;
    }

    /**
     * {@inheritdoc}
     */
    public function removeOriginalQuestion(OriginalQuestionInterface $originalQuestion)
    {
        $this->originalQuestions = Util::removeElement($originalQuestion, $this->originalQuestions);

        return $this;
    }

    /**
     * {@inheritdoc}
     */
    public function getOriginalQuestions()
    {
        return $this->originalQuestions;
    }

    /**
     * {@inheritdoc}
     */
    public function setReason($reason)
    {
        $this->reason = $reason;
        
        return $this;
    }

    /**
     * {@inheritdoc}
     */
    public function getReason()
    {
        return $this->reason;
    }
}
