Feature: descriptive name for the feature
Here could be a free text or user story
#you can add comments or outline code by the hash 

Scenario: scenario name will be seen in logs and test output
Given i write some feature file
When i have a step definition with text selector
Then the beloging code will be executed

#Tables for multi scenario execution
Scenario Outline: scenario with example execution tables
Given scenario with with multiple values
When excecute the test case
Then it will be executed each times with <iteration> <value>
| iteration | value |
| 1         |   a   |
| 2         |   b   |
| 3         |   c   |




