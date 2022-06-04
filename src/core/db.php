<?php

namespace Denis\Chess\Core;

use \mysqli;

class Db
{

    static private $conn;


    public static function init(array $config)
    {
        self::$conn = new mysqli($config['hostname'], $config['username'], $config['password'], $config['database']);
    }

    public static function query(string $query, array $params)
    {
        $params = array_map([self::$conn, 'real_escape_string'], $params);

        $query = vsprintf($query, $params);

        return self::$conn->query($query);
    }

    public static function fetchArray($result)
    {

        $arr = [];
        if ($result) {
            while ($row = $result->fetch_assoc()) {
                $arr[] = $row;
            }
        }
        return $arr;
    }
}
