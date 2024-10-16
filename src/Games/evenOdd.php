<?php

namespace BrainGames\EvenOdd;

use function cli\line;
use function cli\prompt;

use BrainGames\Cli;
use BrainGames\GameEngine;

function evenOdd()
{
    $userName = Cli\helloUser();
    line("Answer 'yes' if the number is even, otherwise answer 'no'.");

    $result = GameEngine\gameEngine('EvenOdd');
    line($result, $userName);
}
