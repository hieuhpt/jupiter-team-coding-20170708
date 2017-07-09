<?php
/**
 * Created by PhpStorm.
 * User: hieuhpt
 * Date: 08/07/2017
 * Time: 16:26
 */

namespace Src\Model;

use Src\Connection;
use Src\Entity\Staff as StaffEntity;

class Staff
{
    private $__pdo;

    public function __construct()
    {
        $this->__pdo = (new Connection())->get("mysql","jupiter","jupiter","jupiter");
    }

    public function create($staff)
    {
        $sql = "INSERT INTO staff ('name', 'phone', 'email') VALUE ($staff->getName(),$staff->getPhone(),$staff->getEmail())";
        $statement = $this->__pdo->prepare($sql);
        $insert = $statement->execute();
        if(!$insert){
            throw new \PDOException("Can't insert");
        }
        $staff->setId((int)($this->__pdo->lastInsertId()));
        return new StaffEntity($staff);
    }
}