<?php

namespace BrainGames\Gcd;

use BrainGames\Cli;
use BrainGames\GameEngine;

use function cli\line;
use function cli\prompt;

function playGcd()
{
    $userName = Cli\helloUser();
    line("Find the greatest common divisor of given numbers.");

    for ($i = 0; $i < QUESTIONS_AMOUNT; $i++) {
        $a = rand(1, 100);
        $b = rand(1, 100);
        $userAnswer = prompt("Question: {$a} {$b} \nYour answer");
        $rightAnswer = findRightGcd($a, $b);

        if (!GameEngine\runEngine($userName, [$userAnswer, $rightAnswer])) {
            return;
        }
    }
    GameEngine\runEngine($userName, [], true);
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
