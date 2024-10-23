<?php

namespace BrainGames\Prime;

use BrainGames\Cli;
use BrainGames\GameEngine;

use function cli\line;
use function cli\prompt;

function playPrime()
{
    $preamble = "Answer \"yes\" if given number is prime. Otherwise answer \"no\".";

    $questions = [];
    $correctAnswers = [];

    for ($i = 0; $i < GameEngine\QUESTIONS_AMOUNT; $i++) {
        $num = rand(1, 150);
        $questions[] = $num;
        $correctAnswers[] = isPrime($num) ? 'yes' : 'no';
    }
    GameEngine\runEngine($preamble, $questions, $correctAnswers);
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
