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
 * The migration info model class.
 *
 * @author Beñat Espiña <benatespina@gmail.com>
 */
class MigrationInfo implements Model
{
    protected $onDate;
    protected $otherSite;
    protected $questionId;

    public static function fromProperties(\DateTimeInterface $onDate, $otherSite, $questionId)
    {
        $instance = new self();
        $instance
            ->setOnDate($onDate)
            ->setOtherSite($otherSite)
            ->setQuestionId($questionId);

        return $instance;
    }

    public static function fromJson(array $data)
    {
        $instance = new self();
        $instance
            ->setOnDate(
                array_key_exists('on_date', $data)
                    ? new \DateTimeImmutable('@' . $data['on_date'])
                    : null
            )
            ->setOtherSite(array_key_exists('other_site', $data) ? $data['other_site'] : null)
            ->setQuestionId(array_key_exists('question_id', $data) ? $data['question_id'] : null);

        return $instance;
    }

    public function setOnDate(\DateTimeInterface $onDate = null)
    {
        $this->onDate = $onDate;

        return $this;
    }

    public function getOnDate()
    {
        return $this->onDate;
    }

    public function setQuestionId($questionId)
    {
        $this->questionId = $questionId;

        return $this;
    }

    public function getQuestionId()
    {
        return $this->questionId;
    }

    public function setOtherSite(Site $site = null)
    {
        $this->otherSite = $site;

        return $this;
    }

    public function getOtherSite()
    {
        return $this->otherSite;
    }
}
