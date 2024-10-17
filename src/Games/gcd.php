<?php

namespace BrainGames\Gcd;

use function cli\line;
use function cli\prompt;

use BrainGames\Cli;
use BrainGames\GameEngine;

function gcd()
{
    $userName = Cli\helloUser();
    line("Find the greatest common divisor of given numbers.");

    $result = GameEngine\gameEngine('Gcd');
    line($result, $userName);
}
