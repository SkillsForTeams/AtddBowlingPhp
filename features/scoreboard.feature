Feature:
ScoreBoard showing the results of our bowling game


 
Scenario Outline: Calculate Game Score for Bowling Game
  Given I play a 10 rounds Bowling game
  When I bowl a game <game>
  Then the game result will be <result>
  Examples:
  | game                         | result |
  | 23 23 23 44 22 80 70 50 20 10|   50   |
  | 11 11 11 11 11 11 11 11 11 11|   20   |



