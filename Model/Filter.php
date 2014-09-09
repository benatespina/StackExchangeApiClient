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
use BenatEspina\StackExchangeApiClient\Util\Utilities;

/**
 * Class Filter.
 *
 * @package BenatEspina\StackExchangeApiClient\Model
 */
class Filter implements FilterInterface
{
    const FILTER_TYPE_SAFE = 'safe';
    const FILTER_TYPE_UNSAFE = 'unsafe';
    const FILTER_TYPE_INVALID = 'invalid';

    /**
     * The filter id.
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
     * @param null|array $json The json string being decoded
     */
    public function __construct($json = null)
    {
        $this->includedFields = array();

        if ($json !== null) {
            if ($json['filter_type'] === self::FILTER_TYPE_SAFE
                || $json['filter_type'] === self::FILTER_TYPE_UNSAFE
                || $json['filter_type'] === self::FILTER_TYPE_INVALID
            ) {
                $this->filter = $json['filter'];
                $this->filterType = $json['filter_type'];
                foreach ($json['included_fields'] as $includedFields) {
                    $this->includedFields[] = $includedFields;
                }
            }
        }
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
        $this->filterType = $filterType;

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
        $this->includedFields = Utilities::removeElement($includedField, $this->includedFields);

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
