<?php

namespace Bowling;

Class Game {

    private $rounds;
    private $score = 0;
    private $spare = false;

    function __construct(int $rounds){
        $this->rounds = $rounds;
    }

    public function addFrame(string $round): void
    {
        $score1 = $round[0];
        $score2 = $round[1];
        $score3 = $round[2] ?? 0;

        $this->score += $score3 * 2;

        if ($score2 == '/') {
            $this->score += 10;
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

