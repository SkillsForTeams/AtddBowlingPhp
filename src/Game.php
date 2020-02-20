<?php

namespace Bowling;

Class Game {

    private int $rounds;
    private int $score = 0;

    function __construct(int $rounds){
        $this->rounds = $rounds;
    }

    public function addFrame(string $round): void
    {
        $this->score += $round[0];
        $this->score += $round[1];
    }

    public function getScore(): int {
        return $this->score;
    }
}

