<?php

namespace Bowling;

Class Game {

    private $rounds;
    private $score = 0;
    private $spare = false;
    

    function __construct(int $rounds){
        $this->rounds = $rounds;
    }

    function isLastRound():boolean
    {
       return false; 
    }

    public function addFrame(string $throw): void
    {
        $score1 = $throw[0];
        $score2 = $throw[1];
        $score3 = $throw[2] ?? 0;

        $this->score += $score3 * 2;

        if ($score2 == '/') {
            $this->score = 10+$score3 ;                   
            $this->spare = true;
            return;
        }

        if ($this->spare) {            
            $this->score += $score1 * 2;
            $this->spare = false;

        } else {
            $this->score += $score1;
        }
        

        $this->score += $score2;
    }

    public function getScore(): int {
        return $this->score;
    }
}

