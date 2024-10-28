<?php

namespace BrainGames\EvenOdd;

use BrainGames\GameEngine;

const PREAMBLE = "Answer \"yes\" if the number is even, otherwise answer \"no\".";

function playEvenOdd(): void
{
    $questions = [];
    $correctAnswers = [];

    for ($i = 0; $i < GameEngine\QUESTIONS_AMOUNT; $i++) {
        $randNum = rand(1, 100);
        $questions[] = $randNum;
        $correctAnswers[] = $randNum % 2 == 0 ? 'yes' : 'no';
    }
    GameEngine\runEngine(PREAMBLE, $questions, $correctAnswers);
}
