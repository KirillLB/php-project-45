<?php

namespace BrainGames\Calc;

use BrainGames\Cli;
use BrainGames\GameEngine;

use function cli\line;
use function cli\prompt;

function calc()
{
    $userName = Cli\helloUser();
    line("What is the result of the expression?");

    GameEngine\gameEngine('Calc', $userName);
}
