<?php

namespace nut302\ColdHot\Controller;

use nut302\ColdHot\View\View;
use function cli\line;

class Controller
{
    public function startGame()
    {
        line("Start the game!");

        $view = new View();
        $view->showGame();
    }
}