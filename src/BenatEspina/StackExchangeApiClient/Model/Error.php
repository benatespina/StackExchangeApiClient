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
 * Class error model class.
 *
 * @author Beñat Espiña <benatespina@gmail.com>
 */
class Error implements Model
{
    protected $id;
    protected $name;
    protected $description;

    public static function fromJson(array $data)
    {
        $instance = new self();
        $instance
            ->setId(array_key_exists('error_id', $data) ? $data['error_id'] : null)
            ->setName(array_key_exists('error_name', $data) ? $data['error_name'] : null)
            ->setDescription(array_key_exists('description', $data) ? $data['description'] : null);

        return $instance;
    }

    public static function fromProperties($id, $name, $description)
    {
        $instance = new self();
        $instance
            ->setId($id)
            ->setName($name)
            ->setDescription($description);

        return $instance;
    }

    public function getId()
    {
        return $this->id;
    }

    public function setId($id)
    {
        $this->id = $id;

        return $this;
    }

    public function getName()
    {
        return $this->name;
    }

    public function setName($name)
    {
        $this->name = $name;

        return $this;
    }

    public function getDescription()
    {
        return $this->description;
    }

    public function setDescription($description)
    {
        $this->description = $description;

        return $this;
    }
}
