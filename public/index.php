<?php

use Abc\controller\ContactController;

require __DIR__ . "/../vendor/autoload.php";
$controller = new ContactController();
$controller->index();
