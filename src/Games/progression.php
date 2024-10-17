<?php

namespace BrainGames\Progression;

use function cli\line;
use function cli\prompt;

use BrainGames\Cli;
use BrainGames\GameEngine;

function progression()
{
    $userName = Cli\helloUser();
    line("What number is missing in the progression?");

    $result = GameEngine\gameEngine('Progression');
    line($result, $userName);
}
