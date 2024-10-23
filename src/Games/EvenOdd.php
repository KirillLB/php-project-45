<?php

namespace BrainGames\EvenOdd;

use BrainGames\GameEngine;

function playEvenOdd()
{
    $preamble = "Answer \"yes\" if the number is even, otherwise answer \"no\".";

    $questions = [];
    $correctAnswers = [];

    for ($i = 0; $i < GameEngine\QUESTIONS_AMOUNT; $i++) {
        $randNum = rand(1, 100);
        $questions[] = $randNum;
        $correctAnswers[] = $randNum % 2 == 0 ? 'yes' : 'no';
    }

    GameEngine\runEngine($preamble, $questions, $correctAnswers);
}
