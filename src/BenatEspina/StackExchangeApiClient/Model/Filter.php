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
 * Class filter model class.
 *
 * @author Beñat Espiña <benatespina@gmail.com>
 */
class Filter implements Model
{
    const FILTER_TYPES = ['invalid', 'safe', 'unsafe'];

    protected $filter;
    protected $filterType;
    protected $includedFields;

    public static function fromJson(array $data)
    {
        $instance = new self();
        $instance
            ->setFilter(array_key_exists('filter', $data) ? $data['filter'] : null)
            ->setFilterType(array_key_exists('filter_type', $data) ? $data['filter_type'] : null)
            ->setIncludedFields(array_key_exists('included_fields', $data) ? $data['included_fields'] : null);

        return $instance;
    }

    public static function fromProperties($filter, $filterType, array $includedFields)
    {
        $instance = new self();
        $instance
            ->setFilter($filter)
            ->setFilterType($filterType)
            ->setIncludedFields($includedFields);

        return $instance;
    }

    public function setFilter($filter)
    {
        $this->filter = $filter;

        return $this;
    }

    public function getFilter()
    {
        return $this->filter;
    }

    public function setFilterType($filterType)
    {
        if (in_array($filterType, self::FILTER_TYPES, true)) {
            $this->filterType = $filterType;
        }

        return $this;
    }

    public function getFilterType()
    {
        return $this->filterType;
    }

    public function setIncludedFields(array $includedFields = [])
    {
        $this->includedFields = $includedFields;

        return $this;
    }

    public function getIncludedFields()
    {
        return $this->includedFields;
    }
}
