<?php

namespace BrainGames\Prime;

use BrainGames\GameEngine;

const PREAMBLE = "Answer \"yes\" if given number is prime. Otherwise answer \"no\".";

function playPrime(): void
{
    $questions = [];
    $correctAnswers = [];

    for ($i = 0; $i < GameEngine\QUESTIONS_AMOUNT; $i++) {
        $num = rand(1, 150);
        $questions[] = $num;
        $correctAnswers[] = isPrime($num) ? 'yes' : 'no';
    }
    GameEngine\runEngine(PREAMBLE, $questions, $correctAnswers);
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
