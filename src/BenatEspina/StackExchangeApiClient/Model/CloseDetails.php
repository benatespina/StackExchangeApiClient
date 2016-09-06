<?php

/*
 * This file is part of the Stack Exchange Api Client library.
 *
 * Copyright (c) 2014-2016 Beñat Espiña <benatespina@gmail.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace BenatEspina\StackExchangeApiClient\Model;

/**
 * The close details model class.
 *
 * @author Beñat Espiña <benatespina@gmail.com>
 */
class CloseDetails implements Model
{
    protected $byUsers;
    protected $description;
    protected $onHold;
    protected $originalQuestions;
    protected $reason;

    public static function fromProperties(
        array $byUsers,
        $description,
        $onHold,
        array $originalQuestions,
        $reason
    ) {
        $instance = new self();
        $instance
            ->setByUsers($byUsers)
            ->setDescription($description)
            ->setOnHold($onHold)
            ->setOriginalQuestions($originalQuestions)
            ->setReason($reason);

        return $instance;
    }

    public static function fromJson(array $data)
    {
        $instance = new self();

        $byUsers = [];
        if (array_key_exists('by_users', $data) && is_array($data['by_users'])) {
            foreach ($data['by_users'] as $byUser) {
                $byUsers[] = ShallowUser::fromJson($byUser);
            }
        }
        $originalQuestions = [];
        if (array_key_exists('original_questions', $data) && is_array($data['original_questions'])) {
            foreach ($data['original_questions'] as $originalQuestion) {
                $originalQuestions[] = ShallowUser::fromJson($originalQuestion);
            }
        }

        $instance
            ->setByUsers($byUsers)
            ->setDescription(array_key_exists('description', $data) ? $data['description'] : null)
            ->setOnHold(array_key_exists('on_hold', $data) ? $data['on_hold'] : null)
            ->setOriginalQuestions($originalQuestions)
            ->setCanFlag(array_key_exists('reason', $data) ? $data['reason'] : null);

        return $instance;
    }

    public function setByUsers(array $byUsers = [])
    {
        $this->byUsers = $byUsers;

        return $this;
    }

    public function getByUsers()
    {
        return $this->byUsers;
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

    public function setOnHold($onHold)
    {
        $this->onHold = $onHold;

        return $this;
    }

    public function isOnHold()
    {
        return $this->onHold;
    }

    public function setOriginalQuestions(array $originalQuestions = [])
    {
        $this->originalQuestions = $originalQuestions;

        return $this;
    }

    public function getOriginalQuestions()
    {
        return $this->originalQuestions;
    }

    public function setReason($reason)
    {
        $this->reason = $reason;

        return $this;
    }

    public function getReason()
    {
        return $this->reason;
    }
}
