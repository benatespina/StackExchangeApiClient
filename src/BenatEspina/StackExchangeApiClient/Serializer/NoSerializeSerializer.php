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

namespace BenatEspina\StackExchangeApiClient\Serializer;

/**
 * @author Beñat Espiña <benatespina@gmail.com>
 */
final class NoSerializeSerializer implements Serializer
{
    public function serialize(array $data) : array
    {
        return $data;
    }
}
