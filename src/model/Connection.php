<?php
/**
 * Created by PhpStorm.
 * User: thang
 * Date: 11/07/2017
 * Time: 13:37
 */

namespace Src\Model;


class Connection
{
    static function get($serverName, $database, $userName, $password)
    {
        return new \PDO("mysql:host=$serverName;dbname=$database", $userName, $password);
    }
}