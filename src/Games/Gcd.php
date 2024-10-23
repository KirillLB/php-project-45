<?php

namespace BrainGames\Gcd;

use BrainGames\GameEngine;

function playGcd()
{
    $preamble = "Find the greatest common divisor of given numbers.";

    $questions = [];
    $correctAnswers = [];

    for ($i = 0; $i < GameEngine\QUESTIONS_AMOUNT; $i++) {
        $a = rand(1, 100);
        $b = rand(1, 100);
        $questions[] = "{$a} {$b}";
        $correctAnswers[] = findRightGcd($a, $b);
    }
    GameEngine\runEngine($preamble, $questions, $correctAnswers);
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
