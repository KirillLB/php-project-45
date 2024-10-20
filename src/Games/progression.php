<?php

namespace BrainGames\Progression;

use BrainGames\Cli;
use BrainGames\GameEngine;

use function cli\line;
use function cli\prompt;

function progression()
{
    $userName = Cli\helloUser();
    line("What number is missing in the progression?");

    for ($i = 0; $i < 3; $i++) {
        $progressionLength = rand(5, 10);
        $progression = [];
        $progression[0] = rand(0, 100);
        $step = rand(1, 5);

        for ($j = 1; $j < $progressionLength; $j++) {
            $progression[$j] = $progression[$j - 1] + $step;
        }
        $hidedPosition = rand(1, $progressionLength);
        $rightAnswer = $progression[$hidedPosition - 1];
        $progression[$hidedPosition - 1] = '..';
        $stringProgression = implode(' ', $progression);
        $userAnswer = prompt("Question: {$stringProgression} \nYour answer");
        unset($progression);

        if (!GameEngine\gameEngine($userName, [$userAnswer, $rightAnswer])) {
            return;
        }
    }
    GameEngine\gameEngine($userName, [], true);
}
