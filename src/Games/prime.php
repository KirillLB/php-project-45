<?php

namespace BrainGames\Prime;

use BrainGames\Cli;
use BrainGames\GameEngine;

use function cli\line;
use function cli\prompt;

function prime()
{
    $userName = Cli\helloUser();
    line("Answer \"yes\" if given number is prime. Otherwise answer \"no\".");

    $result = GameEngine\gameEngine('Prime');
    line($result, $userName);
}
