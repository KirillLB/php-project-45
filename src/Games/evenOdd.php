<?php

namespace BrainGames\EvenOdd;

use BrainGames\Cli;
use BrainGames\GameEngine;

use function cli\line;
use function cli\prompt;

function evenOdd()
{
    $userName = Cli\helloUser();
    line("Answer 'yes' if the number is even, otherwise answer 'no'.");

    $result = GameEngine\gameEngine('EvenOdd');
    line($result, $userName);
}
