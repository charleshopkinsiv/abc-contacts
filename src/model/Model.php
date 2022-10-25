<?php

namespace Abc\model;

use Abc\var\Db;
use Abc\var\Registry;

abstract class Model
{

    protected Db $db;

    public function __construct()
    {

        $this->db = Registry::getDb();
    }
}