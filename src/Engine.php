<?php

namespace BrainGames\GameEngine;

use function cli\line;
use function cli\prompt;

function gameEngine(string $userName, array $answers = [], bool $final = false)
{
    if ($final) {
        line("Congratulations, {$userName}!");
    } else {
        if ($answers[0] == $answers[1]) {
            line('Correct!');
            return true;
        } else {
            line("'%s' is wrong answer ;(. Correct answer was '%s'. \nLet's try again, %s!", $answers[0], $answers[1], $userName);
            return false;
        }
    }
}
