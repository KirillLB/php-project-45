<?php

namespace BrainGames\Prime;

use BrainGames\Cli;
use BrainGames\GameEngine;

use function cli\line;
use function cli\prompt;

function prime()
{
    $userName = Cli\helloUser();
    line("Answer \"yes\" if given number is prime. Otherwise answer \"no\".");

    for ($i = 0; $i < 3; $i++) {
        $num = rand(1, 150);
        $rightAnswer = isPrime($num) ? 'yes' : 'no';
        $userAnswer = prompt("Question: {$num} \nYour answer");

        if (!GameEngine\gameEngine($userName, [$userAnswer, $rightAnswer])) {
            return;
        }
    }
    GameEngine\gameEngine($userName, [], true);
}

function isPrime(int $num)
{
    if ($num <= 1) {
        return false;
    }
    for ($i = 2; $i <= sqrt($num); $i++) {
        if ($num % $i == 0) {
            return false;
        }
    }
    return true;
}
