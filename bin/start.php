#!/usr/bin/env php

<?php

require_once __DIR__ . '/../vendor/autoload.php';

use nut302\ColdHot\Controller\Controller;

$controller = new Controller;
$controller->startGame();