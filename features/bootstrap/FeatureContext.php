<?php

use Behat\Behat\Context\Context;
use Behat\Gherkin\Node\PyStringNode;
use Behat\Gherkin\Node\TableNode;
use Behat\Behat\Tester\Exception\PendingException;
use PHPUnit\Framework\Assert; 

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
    public function iBowlAGame($round1, $round2, $round3, $round4, $round5, $round6, $round7, $round8, $round9, $round10)
    {
        $this->bowlingGame->addFrame($round1);
        $this->bowlingGame->addFrame($round2);
        $this->bowlingGame->addFrame($round3);
        $this->bowlingGame->addFrame($round4);
        $this->bowlingGame->addFrame($round5);
        $this->bowlingGame->addFrame($round6);
        $this->bowlingGame->addFrame($round7);
        $this->bowlingGame->addFrame($round8);
        $this->bowlingGame->addFrame($round9);
        $this->bowlingGame->addFrame($round10);
    }

    /**
     * @Then the game result will be :arg1
     */
    public function theGameResultWillBe($expectedResult)
    {
        $actualResult = $this->bowlingGame->getScore();
        Assert::assertEquals($expectedResult, $actualResult, "Expected the Game result to be correct"); 
  
    

    }
}
