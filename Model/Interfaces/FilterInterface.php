<?php

/**
 * This file is part of the StackExchangeApiClient library.
 *
 * @author  benatespina <benatespina@gmail.com>
 *
 * @license MIT
 */

namespace BenatEspina\StackExchangeApiClient\Model\Interfaces;

/**
 * Interface FilterInterface
 *
 * @package BenatEspina\StackExchangeApiClient\Model\Interfaces
 */
interface FilterInterface
{
    /**
     * Sets filter id.
     *
     * @param string $filter The filter id
     *
     * @return \BenatEspina\StackExchangeApiClient\Model\Interfaces\FilterInterface
     */
    public function setFilter($filter);

    /**
     * Gets filter id.
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
