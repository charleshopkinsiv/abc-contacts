<?php


namespace Abc\var;


class Registry
{

    public static function getConfig()
    {

        return json_decode(file_get_contents(__DIR__ . "/../../data/config.json"), 1);
    }

    public static function getDb()
    {

        $config = self::getConfig();
        return new Db(
            $config['db']['host'],
            $config['db']['name'],
            $config['db']['user'],
            $config['db']['pass']
        );
    }
}
