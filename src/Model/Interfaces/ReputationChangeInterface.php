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
 * Interface ReputationChangeInterface.
 *
 * @author Beñat Espiña <benatespina@gmail.com>
 */
interface ReputationChangeInterface
{
    /**
     * Sets reputation that changes in a day.
     *
     * @param int $day The reputation that changes in a day.
     *
     * @return $this self Object
     */
    public function setReputationChangeDay($day);

    /**
     * Gets reputation that changes in day.
     *
     * @return int
     */
    public function getReputationChangeDay();

    /**
     * Sets reputation that changes in a month.
     *
     * @param int $month The reputation that changes in a month.
     *
     * @return $this self Object
     */
    public function setReputationChangeMonth($month);

    /**
     * Gets reputation that changes in day.
     *
     * @return int
     */
    public function getReputationChangeMonth();

    /**
     * Sets reputation that changes in a quarter.
     *
     * @param int $quarter The reputation that changes in a quarter.
     *
     * @return $this self Object
     */
    public function setReputationChangeQuarter($quarter);

    /**
     * Gets reputation that changes in day.
     *
     * @return int
     */
    public function getReputationChangeQuarter();

    /**
     * Sets reputation that changes in a week.
     *
     * @param int $week The reputation that changes in a week.
     *
     * @return $this self Object
     */
    public function setReputationChangeWeek($week);

    /**
     * Gets reputation that changes in day.
     *
     * @return int
     */
    public function getReputationChangeWeek();

    /**
     * Sets reputation that changes in a year.
     *
     * @param int $year The reputation that changes in a year.
     *
     * @return $this self Object
     */
    public function setReputationChangeYear($year);

    /**
     * Gets reputation that changes in day.
     *
     * @return int
     */
    public function getReputationChangeYear();
}
