<?php

/**
 * This file is part of the StackExchangeApiClient library.
 *
 * @author  benatespina <benatespina@gmail.com>
 *
 * @license MIT
 */

namespace spec\BenatEspina\StackExchangeApiClient\Model\Traits;

use BenatEspina\StackExchangeApiClient\Model\Interfaces\NetworkPostInterface;
use PhpSpec\ObjectBehavior;

/**
 * Class TopTraitSpec.
 *
 * @package spec\Benatespina\StackExchangeApiClient\Model\Traits
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
