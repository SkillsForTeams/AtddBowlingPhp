Feature: Bowling games with simple rules
ScoreBoard showing the results of our bowling game


Scenario: Never hit anything
Given i play a 10 rounds Bowling game
When i bowl a game 00 00 00 00 00 00 00 00 00 00
Then the game result will be 0


Scenario: Just hit one each time
Given i play a 10 rounds Bowling game
When i bowl a game 01 10 01 10 01 10 01 01 01 10
Then the game result will be 10
