<?php

namespace BrainGames\Calc;

use function cli\line;
use function cli\prompt;

use BrainGames\Cli;
use BrainGames\GameEngine;

function calc()
{
    $userName = Cli\helloUser();
    line("What is the result of the expression?");

    $result = GameEngine\gameEngine('Calc');
    line($result, $userName);
}
