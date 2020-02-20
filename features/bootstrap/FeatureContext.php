<?php

use Behat\Behat\Context\Context;
use Behat\Gherkin\Node\PyStringNode;
use Behat\Gherkin\Node\TableNode;
use Behat\Behat\Tester\Exception\PendingException;


/**
 * you can have a __construct function
 * for more information also visit https://docs.behat.org/en/v2.5/guides/3.hooks.html
 */

/**
 * Defines application features from the specific context.
 */
class FeatureContext implements Context
{
    /**
     * @var \Bowling\Game
     */
    private $bowlingGame;



    /**
     * @Given I play a :rounds rounds Bowling game
     */
    public function iPlayARoundsBowlingGame($rounds)
    {
        $this->bowlingGame = new Bowling\Game($rounds);
    }

    /**
     * @When I bowl a game :arg1 :arg2 :arg3 :arg4 :arg5 :arg6 :arg7 :arg8 :arg9 :arg10
     */
    public function iBowlAGame($arg1, $arg2, $arg3, $arg4, $arg5, $arg6, $arg7, $arg8, $arg9, $arg10)
    {
        $this->bowlingGame->addFrame($arg1);
        $this->bowlingGame->addFrame($arg2);
        $this->bowlingGame->addFrame($arg3);
        $this->bowlingGame->addFrame($arg4);
        $this->bowlingGame->addFrame($arg5);
        $this->bowlingGame->addFrame($arg6);
        $this->bowlingGame->addFrame($arg7);
        $this->bowlingGame->addFrame($arg8);
        $this->bowlingGame->addFrame($arg9);
        $this->bowlingGame->addFrame($arg10);
    }

    /**
     * @Then the game result will be :arg1
     */
    public function theGameResultWillBe($expectedResult)
    {
        $score = $this->bowlingGame->getScore();
        if ($score !== (int) $expectedResult) {
            throw new \Exception('Expected score to be ' . $expectedResult . ' bot got ' . $score);
        }

    }
}
