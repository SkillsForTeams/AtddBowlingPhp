Feature:
ScoreBoard showing the results of our bowling game with spares


Scenario Outline: Calculate Game Score for Bowling Game with spares
  Given I play a 10 rounds Bowling game
  When I bowl a game <game>
  Then the game result will be <result>
  Examples:
  | game                         | result |
  | "5/" 00 00 00 00 00 00 00 00 00| 10     |
  | "5/" 50 00 00 00 00 00 00 00 00| 20     |
  | "5/" 05 00 00 00 00 00 00 00 00| 15     |
  | 00 00 00 00 00 00 00 00 00 "5/5" | 20     |

