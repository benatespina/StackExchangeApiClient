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
 * The notice model class.
 *
 * @author Beñat Espiña <benatespina@gmail.com>
 */
class Notice implements Model
{
    protected $body;
    protected $creationDate;
    protected $ownerUserId;

    public static function fromJson(array $data)
    {
        $instance = new self();
        $instance
            ->setBody(array_key_exists('body', $data) ? $data['body'] : null)
            ->setCreationDate(array_key_exists('creation_date', $data)
                ? new \DateTimeImmutable('@' . $data['creation_date'])
                : null
            )
            ->setOwnerUserId(array_key_exists('owner_user_id', $data) ? $data['owner_user_id'] : null);

        return $instance;
    }

    public static function fromProperties($body, \DateTimeInterface $creationDate, $ownerUserId)
    {
        $instance = new self();

        $instance
            ->setBody($body)
            ->setCreationDate($creationDate)
            ->setOwnerUserId($ownerUserId);

        return $instance;
    }

    public function setBody($body)
    {
        $this->body = $body;

        return $this;
    }

    public function getBody()
    {
        return $this->body;
    }

    public function setCreationDate(\DateTimeInterface $creationDate = null)
    {
        $this->creationDate = $creationDate;

        return $this;
    }

    public function getCreationDate()
    {
        return $this->creationDate;
    }

    public function setOwnerUserId($ownerUserId)
    {
        $this->ownerUserId = $ownerUserId;

        return $this;
    }

    public function getOwnerUserId()
    {
        return $this->ownerUserId;
    }
}
