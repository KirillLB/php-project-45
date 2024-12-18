<?php

namespace BrainGames\Progression;

use BrainGames\GameEngine;

const PREAMBLE = "What number is missing in the progression?";

function playProgression(): void
{
    $questions = [];
    $correctAnswers = [];

    for ($i = 0; $i < GameEngine\QUESTIONS_AMOUNT; $i++) {
        $progressionLength = rand(5, 10);
        $progression = [];
        $progression[0] = rand(0, 100);
        $step = rand(1, 5);

        for ($j = 1; $j < $progressionLength; $j++) {
            $progression[$j] = $progression[$j - 1] + $step;
        }
        $hidedPosition = rand(1, $progressionLength);
        $correctAnswers[] = $progression[$hidedPosition - 1];
        $progression[$hidedPosition - 1] = '..';
        $stringProgression = implode(' ', $progression);
        $questions[] = $stringProgression;
        unset($progression);
    }
    GameEngine\runEngine(PREAMBLE, $questions, $correctAnswers);
}
