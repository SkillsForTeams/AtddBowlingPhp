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
     * @Given i play a :arg1 rounds Bowling game
     */
    public function iPlayARoundsBowlingGame($arg1)
    {
        throw new PendingException();
    }

    /**
     * @When i bowl a game :arg1 :arg2 :arg3 :arg4 :arg5 :arg6 :arg7 :arg8 :arg9 :arg10
     */
    public function iBowlAGame($arg1, $arg2, $arg3, $arg4, $arg5, $arg6, $arg7, $arg8, $arg9, $arg10)
    {
        throw new PendingException();
    }

    /**
     * @Then the game result will be :arg1
     */
    public function theGameResultWillBe($arg1)
    {
        throw new PendingException();
    }

    
}
