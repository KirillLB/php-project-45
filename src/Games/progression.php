<?php

namespace BrainGames\Progression;

use BrainGames\Cli;
use BrainGames\GameEngine;

use function cli\line;
use function cli\prompt;

function progression()
{
    $userName = Cli\helloUser();
    line("What number is missing in the progression?");

    $result = GameEngine\gameEngine('Progression', $userName);
}
