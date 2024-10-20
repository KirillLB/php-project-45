<?php

namespace BrainGames\EvenOdd;

use BrainGames\Cli;
use BrainGames\GameEngine;

use function cli\line;
use function cli\prompt;

function evenOdd()
{
    $userName = Cli\helloUser();
    line("Answer \"yes\" if the number is even, otherwise answer \"no\".");

    for ($i = 0; $i < 3; $i++) {
        $randNum = rand(1, 100);
        $userAnswer = strtolower(prompt("Question: {$randNum} \nYour answer"));
        $rightAnswer = $randNum % 2 == 0 ? 'yes' : 'no';

        if (!GameEngine\gameEngine($userName, [$userAnswer, $rightAnswer])) {
            return;
        }
    }
    GameEngine\gameEngine($userName, [], true);
}
