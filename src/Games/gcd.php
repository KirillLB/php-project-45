<?php

namespace BrainGames\Gcd;

use BrainGames\Cli;
use BrainGames\GameEngine;

use function cli\line;
use function cli\prompt;

function gcd()
{
    $userName = Cli\helloUser();
    line("Find the greatest common divisor of given numbers.");

    $result = GameEngine\gameEngine('Gcd', $userName);
}
