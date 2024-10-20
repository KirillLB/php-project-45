<?php

namespace BrainGames\Gcd;

use BrainGames\Cli;
use BrainGames\GameEngine;

use function cli\line;
use function cli\prompt;

function gcd()
{
    $userName = Cli\helloUser();
    line("Find the greatest common divisor of given numbers.");

    for ($i = 0; $i < 3; $i++) {
        $a = rand(1, 100);
        $b = rand(1, 100);
        $userAnswer = prompt("Question: {$a} {$b} \nYour answer");
        $rightAnswer = rightGcd($a, $b);

        if (!GameEngine\gameEngine($userName, [$userAnswer, $rightAnswer])) {
            return;
        }
    }
    GameEngine\gameEngine($userName, [], true);
}

function rightGcd(int $a, int $b)
{
    while ($b != 0) {
        $t = $b;
        $b = $a % $b;
        $a = $t;
    }
    return $a;
}
