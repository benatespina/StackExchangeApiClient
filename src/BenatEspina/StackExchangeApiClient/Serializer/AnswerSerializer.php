<?php

/*
 * This file is part of the Stack Exchange Api Client library.
 *
 * Copyright (c) 2014-2016 Beñat Espiña <benatespina@gmail.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace BenatEspina\StackExchangeApiClient\Serializer;

use BenatEspina\StackExchangeApiClient\Model\Answer;

final class AnswerSerializer implements Serializer
{
    /**
     * The instance itself.
     *
     * @var self|null
     */
    private static $instance;

    /**
     * Constructor in a singleton way.
     *
     * @return self
     */
    public static function instance()
    {
        if (null === self::$instance) {
            self::$instance = new self();
        }

        return self::$instance;
    }

    /**
     * {@inheritdoc}
     */
    public function serialize($data)
    {
        if (false === array_key_exists('items', $data)) {
            throw new \Exception('Given data is incorrect');
        }
        if (count($data['items']) > 1) {
            $answers = [];
            foreach ($data['items'] as $item) {
                $answers[] = Answer::fromJson($item);
            }

            return $answers;
        }

        return Answer::fromJson($data['items'][0]);
    }

    /**
     * Constructor. Avoids to use the "new"
     * statement to instantiate the class.
     */
    private function __construct()
    {
    }
}
