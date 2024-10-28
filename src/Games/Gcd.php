<?php

namespace BrainGames\Gcd;

use BrainGames\GameEngine;

const PREAMBLE = "Find the greatest common divisor of given numbers.";

function playGcd(): void
{
    $questions = [];
    $correctAnswers = [];

    for ($i = 0; $i < GameEngine\QUESTIONS_AMOUNT; $i++) {
        $a = rand(1, 100);
        $b = rand(1, 100);
        $questions[] = "{$a} {$b}";
        $correctAnswers[] = findRightGcd($a, $b);
    }
    GameEngine\runEngine(PREAMBLE, $questions, $correctAnswers);
}

function findRightGcd(int $a, int $b)
{
    while ($b != 0) {
        $t = $b;
        $b = $a % $b;
        $a = $t;
    }
    return $a;
}
