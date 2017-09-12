<?php

/*
 * This file is part of the Stack Exchange Api Client library.
 *
 * (c) Beñat Espiña <benatespina@gmail.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

declare(strict_types=1);

namespace BenatEspina\StackExchangeApiClient\Model;

/**
 * @author Beñat Espiña <benatespina@gmail.com>
 */
interface Model extends \JsonSerializable
{
    public static function fromJson(array $data);
}
