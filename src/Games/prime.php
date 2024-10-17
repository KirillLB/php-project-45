<?php

namespace BrainGames\Prime;

use function cli\line;
use function cli\prompt;

use BrainGames\Cli;
use BrainGames\GameEngine;

function prime()
{
    $userName = Cli\helloUser();
    line("Answer 'yes' if given number is prime. Otherwise answer 'no'.");

    $result = GameEngine\gameEngine('Prime');
    line($result, $userName);
}
