<?php

use Abc\controller\ContactController;

ini_set('memory_limit','16000000M');
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

require __DIR__ . "/../vendor/autoload.php";

$controller = new ContactController();
$controller->index();
