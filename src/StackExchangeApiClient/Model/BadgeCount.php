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
 * Class BadgeCount.
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

    private function __construct($bronze, $gold, $silver)
    {
        $this->bronze = $bronze;
        $this->gold = $gold;
        $this->silver = $silver;
    }
}
