<?php

namespace BrainGames\EvenOdd;

use BrainGames\GameEngine;

use function BrainGames\Cli\helloUser;

function playEvenOdd()
{
    $userName = helloUser();
    $text = "Answer \"yes\" if the number is even, otherwise answer \"no\".";

    GameEngine\runEngine("", $text, "");

    for ($i = 0; $i < GameEngine\QUESTIONS_AMOUNT; $i++) {
        $randNum = rand(1, 100);
        $question = "Question: {$randNum} \nYour answer";
        $userAnswer = GameEngine\runEngine("", "", $question);
        $rightAnswer = $randNum % 2 == 0 ? 'yes' : 'no';

        if (!GameEngine\runEngine($userName, "", "", [$userAnswer, $rightAnswer])) {
            return;
        }
    }
    $text = "Congratulations, {$userName}!";
    GameEngine\runEngine($userName, $text, "");
}

// function playEvenOdd()
// {
//     $userName = helloUser();
//     line("Answer \"yes\" if the number is even, otherwise answer \"no\".");

//     for ($i = 0; $i < QUESTIONS_AMOUNT; $i++) {
//         $randNum = rand(1, 100);
//         $userAnswer = strtolower(prompt("Question: {$randNum} \nYour answer"));
//         $rightAnswer = $randNum % 2 == 0 ? 'yes' : 'no';

//         if (!GameEngine\runEngine($userName, [$userAnswer, $rightAnswer])) {
//             return;
//         }
//     }
//     GameEngine\runEngine($userName, [], true);
// }
