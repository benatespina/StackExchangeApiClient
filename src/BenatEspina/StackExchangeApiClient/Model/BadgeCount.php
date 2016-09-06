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
 * Class badge count model class.
 *
 * @author Beñat Espiña <benatespina@gmail.com>
 */
class BadgeCount implements Model
{
    protected $bronze;
    protected $gold;
    protected $silver;

    public static function fromJson(array $data)
    {
        $instance = new self();
        $instance
            ->setBronze(array_key_exists('bronze', $data) ? $data['bronze'] : null)
            ->setGold(array_key_exists('gold', $data) ? $data['gold'] : null)
            ->setSilver(array_key_exists('silver', $data) ? $data['silver'] : null);

        return $instance;
    }

    public static function fromProperties($bronze, $gold, $silver)
    {
        $instance = new self();
        $instance
            ->setBronze($bronze)
            ->setGold($gold)
            ->setSilver($silver);

        return $instance;
    }

    public function getBronze()
    {
        return $this->bronze;
    }

    public function setBronze($bronze)
    {
        $this->bronze = $bronze;

        return $this;
    }

    public function getGold()
    {
        return $this->gold;
    }

    public function setGold($gold)
    {
        $this->gold = $gold;

        return $this;
    }

    public function getSilver()
    {
        return $this->silver;
    }

    public function setSilver($silver)
    {
        $this->silver = $silver;

        return $this;
    }
}
