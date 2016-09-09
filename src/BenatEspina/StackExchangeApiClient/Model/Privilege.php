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
 * The privilege model class.
 *
 * @author Beñat Espiña <benatespina@gmail.com>
 */
class Privilege implements Model
{
    protected $description;
    protected $reputation;
    protected $shortDescription;

    public static function fromJson(array $data)
    {
        $instance = new self();
        $instance
            ->setDescription(array_key_exists('description', $data) ? $data['description'] : null)
            ->setReputation(array_key_exists('reputation', $data) ? $data['reputation'] : null)
            ->setShortDescription(array_key_exists('short_description', $data) ? $data['short_description'] : null);

        return $instance;
    }

    public static function fromProperties($description, $reputation, $shortDescription)
    {
        $instance = new self();
        $instance
            ->setDescription($description)
            ->setReputation($reputation)
            ->setShortDescription($shortDescription);

        return $instance;
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

    public function setReputation($reputation)
    {
        $this->reputation = $reputation;

        return $this;
    }

    public function getReputation()
    {
        return $this->reputation;
    }

    public function setShortDescription($shortDescription)
    {
        $this->shortDescription = $shortDescription;

        return $this;
    }

    public function getShortDescription()
    {
        return $this->shortDescription;
    }
}
