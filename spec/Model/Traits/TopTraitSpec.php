<?php

/*
 * This file is part of the Stack Exchange Api Client library.
 *
 * Copyright (c) 2015 Beñat Espiña <benatespina@gmail.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace spec\BenatEspina\StackExchangeApiClient\Model\Traits;

use BenatEspina\StackExchangeApiClient\Model\Interfaces\NetworkPostInterface;
use PhpSpec\ObjectBehavior;

/**
 * Class TopTraitSpec.
 *
 * @author Beñat Espiña <benatespina@gmail.com>
 */
class TopTraitSpec extends ObjectBehavior
{
    function let()
    {
        $this->beAnInstanceOf('BenatEspina\StackExchangeApiClient\Stubs\Traits\TopTraitStub');
    }

    function its_top_answers_is_mutable(NetworkPostInterface $networkPost)
    {
        $this->getTopAnswers()->shouldHaveCount(0);

        $this->addTopAnswer($networkPost);

        $this->getTopAnswers()->shouldHaveCount(1);

        $this->removeTopAnswer($networkPost);

        $this->getTopAnswers()->shouldHaveCount(0);
    }

    function its_top_questions_is_mutable(NetworkPostInterface $networkPost)
    {
        $this->getTopQuestions()->shouldHaveCount(0);

        $this->addTopQuestion($networkPost);

        $this->getTopQuestions()->shouldHaveCount(1);

        $this->removeTopQuestion($networkPost);

        $this->getTopQuestions()->shouldHaveCount(0);
    }
}
