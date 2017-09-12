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

use BenatEspina\StackExchangeApiClient\Model\Model;

/**
 * @author Beñat Espiña <benatespina@gmail.com>
 */
final class ToModelSerializer implements Serializer
{
    private $className;

    public function __construct(string $className)
    {
        $this->setClassName($className);
    }

    public function serialize(array $data)
    {
        if (false === array_key_exists('items', $data)) {
            throw new SerializedDataIsNotValid();
        }

        if (count($data['items']) > 1) {
            $objects = [];
            foreach ($data['items'] as $item) {
                $objects[] = forward_static_call_array([$this->className, 'fromJson'], [$item]);
            }

            return $objects;
        }

        return forward_static_call_array([$this->className, 'fromJson'], [$data['items'][0]]);
    }

    private function setClassName(string $className) : void
    {
        $this->checkClassNameIsModel($className);
        $this->className = $className;
    }

    private function checkClassNameIsModel(string $className) : void
    {
        $reflectionClass = new \ReflectionClass($className);
        if (false === $reflectionClass->implementsInterface(Model::class)) {
            throw new ClassIsNotAModel();
        }
    }
}
