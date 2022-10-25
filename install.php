<?php

use \Abc\var\Registry;

require __DIR__ . "/vendor/autoload.php"; 

$config     = Registry::getConfig();
$db         = Registry::getDb();

array_walk($config['db'], function ($value, $key) {

    if(empty($value)) {

        throw new \Exception($key . "in /data/config.json must not be empty");
    }
});


$sql = "CREATE TABLE contacts (
            id INT AUTO_INCREMENT PRIMARY KEY,
            first_name VARCHAR(50) NOT NULL DEFAULT '',
            last_name VARCHAR(50) NOT NULL DEFAULT '',
            middle_name VARCHAR(50) NOT NULL DEFAULT '',
            email VARCHAR(255) NOT NULL UNIQUE,
            prefix ENUM('Mr.','Mrs.','Ms.','Miss'),
            suffix ENUM('Jr.','Sr.','I','II','III'),
            title VARCHAR(50) NOT NULL DEFAULT ''
        )";
$db->query($sql)->execute();
printf("contacts table created\n\n");

$sql = "CREATE TABLE phone_numbers (
            number VARCHAR(12) UNIQUE,
            contact INT NOT NULL DEFAULT 0,
            type ENUM('Home','Office','Mobile','Fax'),
            default_number ENUM('Y','N')
        )";
$db->query($sql)->execute();
printf("phone_numbers table created\n\n");


printf("Install Complete\n\n");