<?php

use Abc\controller\ContactController;
use Abc\model\ContactModel;

require __DIR__ . "/../vendor/autoload.php";
$controller = new ContactController();
$controller->edit();

