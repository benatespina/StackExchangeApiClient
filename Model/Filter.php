<?php

/**
 * This file is part of the StackExchangeApiClient library.
 *
 * @author  benatespina <benatespina@gmail.com>
 *
 * @license MIT
 */

namespace BenatEspina\StackExchangeApiClient\Model;

use BenatEspina\StackExchangeApiClient\Model\Interfaces\FilterInterface;
use BenatEspina\StackExchangeApiClient\Util\Util;

/**
 * Class Filter.
 *
 * @package BenatEspina\StackExchangeApiClient\Model
 */
class Filter implements FilterInterface
{
    const FILTER_TYPE_INVALID = 'invalid';
    const FILTER_TYPE_SAFE = 'safe';
    const FILTER_TYPE_UNSAFE = 'unsafe';

    /**
     * The filter.
     *
     * @var string
     */
    protected $filter;

    /**
     * Filter type that can be 'safe', 'unsafe' or 'invalid'.
     *
     * @var string
     */
    protected $filterType;

    /**
     * Array that contains the included fields.
     *
     * @var string[]
     */
    protected $includedFields;

    /**
     * Constructor.
     *
     * @param null|mixed[] $json The json string being decoded
     */
    public function __construct($json = null)
    {
        $this->filter = Util::setIfStringExists($json, 'filter');
        $this->filterType = Util::isEqual(
            $json, 'filter_type', array(self::FILTER_TYPE_INVALID, self::FILTER_TYPE_SAFE, self::FILTER_TYPE_UNSAFE)
        );
        $this->includedFields = Util::setIfArrayExists($json, 'included_fields');
    }

    /**
     * {@inheritdoc}
     */
    public function setFilter($filter)
    {
        $this->filter = $filter;

        return $this;
    }

    /**
     * {@inheritdoc}
     */
    public function getFilter()
    {
        return $this->filter;
    }

    /**
     * {@inheritdoc}
     */
    public function setFilterType($filterType)
    {
        if (Util::coincidesElement(
            $filterType,
            array(
                self::FILTER_TYPE_INVALID,
                self::FILTER_TYPE_SAFE,
                self::FILTER_TYPE_UNSAFE
            )
        ) === true
        ) {
            $this->filterType = $filterType;
        }

        return $this;
    }

    /**
     * {@inheritdoc}
     */
    public function getFilterType()
    {
        return $this->filterType;
    }

    /**
     * {@inheritdoc}
     */
    public function addIncludedField($includedField)
    {
        $this->includedFields[] = $includedField;

        return $this;
    }

    /**
     * {@inheritdoc}
     */
    public function removeIncludedField($includedField)
    {
        $this->includedFields = Util::removeElement($includedField, $this->includedFields);

        return $this;
    }

    /**
     * {@inheritdoc}
     */
    public function getIncludedFields()
    {
        return $this->includedFields;
    }
}
