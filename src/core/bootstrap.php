<?php

namespace Denis\Chess\Core;

use Denis\Chess\Core\Db;

class Bootstrap
{


    public static function init(array $config)
    {

        Db::init($config['db']);
    }
}
