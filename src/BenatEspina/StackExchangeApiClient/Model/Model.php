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
/*
 * This file is part of the Stack Exchange Api Client library.
 *
 * (c) Beñat Espiña <benatespina@gmail.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace BenatEspina\StackExchangeApiClient\Model;

/**
 * The base mode class.
 *
 * @author Beñat Espiña <benatespina@gmail.com>
 */
interface Model
{
    /**
     * Builds model object with the given array data.
     *
     * @param array $data Array which contains StackExchangeApi request data
     *
     * @return Model
     */
    public static function fromJson(array $data);
}
