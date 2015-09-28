<?php

/*
 * This file is part of the Stack Exchange Api Client library.
 *
 * Copyright (c) 2015 Beñat Espiña <benatespina@gmail.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace BenatEspina\StackExchangeApiClient\Model\Interfaces;

/**
 * Interface FilterInterface.
 *
 * @author Beñat Espiña <benatespina@gmail.com>
 */
interface FilterInterface
{
    /**
     * Sets filter.
     *
     * @param string $filter The filter
     *
     * @return \BenatEspina\StackExchangeApiClient\Model\Interfaces\FilterInterface
     */
    public function setFilter($filter);

    /**
     * Gets filter.
     *
     * @return string
     */
    public function getFilter();

    /**
     * Sets filter type.
     *
     * @param string $filterType The filter type that can be 'safe', 'unsafe' or 'invalid'.
     *
     * @return \BenatEspina\StackExchangeApiClient\Model\Interfaces\FilterInterface
     */
    public function setFilterType($filterType);

    /**
     * Gets filter type.
     *
     * @return string
     */
    public function getFilterType();

    /**
     * Adds included fields.
     *
     * @param string $includedField The included fields.
     *
     * @return \BenatEspina\StackExchangeApiClient\Model\Interfaces\FilterInterface
     */
    public function addIncludedField($includedField);

    /**
     * Removes included fields.
     *
     * @param string $includedField The included fields.
     *
     * @return \BenatEspina\StackExchangeApiClient\Model\Interfaces\FilterInterface
     */
    public function removeIncludedField($includedField);

    /**
     * Gets included fields.
     *
     * @return string[]
     */
    public function getIncludedFields();
}
