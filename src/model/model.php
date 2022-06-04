<?php

namespace Denis\Chess\Model;

use Denis\Chess\Core\Db;

abstract class Model
{

    protected $tablename;

    public function __construct()
    {
        $this->tablename = strtolower((new \ReflectionClass($this))->getShortName());
    }

    public function findById(int $id)
    {
        $result = Db::query('SELECT * FROM `%s` WHERE `id` = "%d"', [$this->tablename, $id]);

        return Db::fetchArray($result);
    }

    public function findAll()
    {
        $result = Db::query('SELECT * FROM `%s`', [$this->tablename]);

        return Db::fetchArray($result);
    }
}
