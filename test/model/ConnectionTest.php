<?php
/**
 * Created by PhpStorm.
 * User: thang
 * Date: 11/07/2017
 * Time: 13:35
 */

namespace Test\Model;

use PHPUnit\Framework\TestCase;
use Src\Model\Connection;

class ConnectionTest extends TestCase
{
    private $serverName = "192.168.1.34";
    private $wrongServerName = "192.168.1.197";
    private $database = "default";
    private $userName = "default";
    private $password = "secret";
    public function testCanBeCreated()
    {
        $this->assertInstanceOf(
            \PDO::class,
            Connection::get($this->serverName, $this->database, $this->userName, $this->password)
        );
    }
    public function testCannotBeCreated()
    {
        $this->expectException(\PDOException::class);
        Connection::get($this->wrongServerName, $this->database, $this->userName, $this->password);
    }
}