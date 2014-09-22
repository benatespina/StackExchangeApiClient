<?php

/**
 * This file is part of the StackExchangeApiClient library.
 *
 * @author  benatespina <benatespina@gmail.com>
 *
 * @license MIT
 */

namespace BenatEspina\StackExchangeApiClient\Model\Traits;

use BenatEspina\StackExchangeApiClient\Util\Util;

/**
 * Class ReputationChangeTrait.
 *
 * @package BenatEspina\StackExchangeApiClient\Model\Traits
 */
trait ReputationChangeTrait
{
    /**
     * Reputation that changes in a day.
     *
     * @var int
     */
    protected $day;

    /**
     * Reputation that changes in a month.
     *
     * @var int
     */
    protected $month;

    /**
     * Reputation that changes in a quarter.
     *
     * @var int
     */
    protected $quarter;

    /**
     * Reputation that changes in a week.
     *
     * @var int
     */
    protected $week;

    /**
     * Reputation that changes in a year.
     *
     * @var int
     */
    protected $year;

    /**
     * Sets reputation that changes in a day.
     *
     * @param int $day The reputation that changes in a day.
     *
     * @return $this self Object
     */
    public function setReputationChangeDay($day)
    {
        $this->day = $day;

        return $this;
    }

    /**
     * Gets reputation that changes in day.
     *
     * @return int
     */
    public function getReputationChangeDay()
    {
        return $this->day;
    }

    /**
     * Sets reputation that changes in a month.
     *
     * @param int $month The reputation that changes in a month.
     *
     * @return $this self Object
     */
    public function setReputationChangeMonth($month)
    {
        $this->month = $month;

        return $this;
    }

    /**
     * Gets reputation that changes in day.
     *
     * @return int
     */
    public function getReputationChangeMonth()
    {
        return $this->month;
    }

    /**
     * Sets reputation that changes in a quarter.
     *
     * @param int $quarter The reputation that changes in a quarter.
     *
     * @return $this self Object
     */
    public function setReputationChangeQuarter($quarter)
    {
        $this->quarter = $quarter;

        return $this;
    }

    /**
     * Gets reputation that changes in day.
     *
     * @return int
     */
    public function getReputationChangeQuarter()
    {
        return $this->quarter;
    }

    /**
     * Sets reputation that changes in a week.
     *
     * @param int $week The reputation that changes in a week.
     *
     * @return $this self Object
     */
    public function setReputationChangeWeek($week)
    {
        $this->week = $week;

        return $this;
    }

    /**
     * Gets reputation that changes in day.
     *
     * @return int
     */
    public function getReputationChangeWeek()
    {
        return $this->week;
    }

    /**
     * Sets reputation that changes in a year.
     *
     * @param int $year The reputation that changes in a year.
     *
     * @return $this self Object
     */
    public function setReputationChangeYear($year)
    {
        $this->year = $year;

        return $this;
    }

    /**
     * Gets reputation that changes in day.
     *
     * @return int
     */
    public function getReputationChangeYear()
    {
        return $this->year;
    }

    /**
     * Loads the variables if the data exist into resource. It works like a constructor.
     *
     * @param null|mixed[] $resource The resource
     *
     * @return void
     */
    protected function loadReputationChange($resource)
    {
        $this->day = Util::setIfIntegerExists($resource, 'reputation_change_day');
        $this->month = Util::setIfIntegerExists($resource, 'reputation_change_month');
        $this->quarter = Util::setIfIntegerExists($resource, 'reputation_change_quarter');
        $this->week = Util::setIfIntegerExists($resource, 'reputation_change_week');
        $this->year = Util::setIfIntegerExists($resource, 'reputation_change_year');
    }
}
