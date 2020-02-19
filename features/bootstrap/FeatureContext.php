<?php

use Behat\Behat\Context\Context;
use Behat\Gherkin\Node\PyStringNode;
use Behat\Gherkin\Node\TableNode;


/**
 * you can have a __construct function
 * for more information also visit https://docs.behat.org/en/v2.5/guides/3.hooks.html
 */

/**
 * Defines application features from the specific context.
 */
class FeatureContext implements Context
{
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
       
 
    }

    /**
     * @Then the game result will be :arg1
     */
    public function theGameResultWillBe($expectedResult)
    {
       
    }
}
