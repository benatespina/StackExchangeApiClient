<?php

/*
 * This file is part of the Stack Exchange Api Client library.
 *
 * Copyright (c) 2014-2015 Beñat Espiña <benatespina@gmail.com>
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
class BadgeCount
{
    private $bronze;
    private $gold;
    private $silver;

    public static function fromJson(array $data)
    {
        return new self(
            array_key_exists('bronze', $data) ? $data['bronze'] : null,
            array_key_exists('gold', $data) ? $data['gold'] : null,
            array_key_exists('silver', $data) ? $data['silver'] : null
        );
    }

    public static function fromProperties($bronze, $gold, $silver)
    {
        return new self($bronze, $gold, $silver);
    }

    private function __construct($bronze = null, $gold = null, $silver = null)
    {
        $this->bronze = $bronze;
        $this->gold = $gold;
        $this->silver = $silver;
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
