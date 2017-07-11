<?php
/**
 * Created by PhpStorm.
 * User: thang
 * Date: 11/07/2017
 * Time: 11:02
 */

namespace Src\Model;

use Src\Entity\Staff as StaffEntity;
include 'src/model/Connection.php';
class Staff
{
    private $conn;

    /**
     * Staff constructor.
     * @param $conn
     */
    public function __construct()
    {
          $this->conn = (new Connection())
              ->get('192.168.1.34', 'default', 'default', 'secret');
    }


    public function create(StaffEntity $staff)
    {
        $name = $staff->getName();
        $address = $staff->getAddress();
        $email = $staff->getEmail();

        $sql = "INSERT INTO staff (name, adress, email) VALUES ('$name', '$address', '$email')";
        $this->conn->exec($sql);
        $staff->setId(intval($this->conn->lastInsertId()));

        return $staff;
    }
}