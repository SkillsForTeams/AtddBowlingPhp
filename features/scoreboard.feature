Feature:
ScoreBoard showing the results of our bowling game



Scenario Outline: Calculate Game Score for Bowling Game
  Given I play a 10 rounds Bowling game
  When I bowl a game <game>
  Then the game result will be <result>
  Examples:
  | game                         | result |
  | 11 11 11 11 11 11 11 11 11 11| 20     |


@pending
Scenario: 
Given when i mark a scenario as @pending
When i run behat with  --tags '~@pending'
Then it will not be executed