<?php
/**
 * Created by PhpStorm.
 * User: thang
 * Date: 11/07/2017
 * Time: 11:48
 */

namespace Src\Entity;

class Staff
{
    private $id;
    private $name;
    private $address;
    private $email;

    public function __construct($staff_data)
    {
        if (is_array($staff_data)) {
            if ($this->validateData($staff_data['name'], $staff_data['address'], $staff_data['email'])) {
                $this->name = $staff_data['name'];
                $this->address = $staff_data['address'];
                $this->email = $staff_data['email'];
            } else throw new \InvalidArgumentException("Invalid staff data");
        } else throw new \InvalidArgumentException("Please input an array");
    }

    public function getName()
    {
        return $this->name;
    }

    public function getAddress()
    {
        return $this->address;
    }

    public function getEmail()
    {
        return $this->email;
    }

    public function getId()
    {
        return $this->id;
    }

    public function setId($id)
    {
        $this->id = $id;
    }

    public function validateName($name) {
        return (is_string($name));
    }

    public function validateAddress($address) {
        return (is_string($address));
    }

    public function validateEmail($email) {
        return (filter_var($email, FILTER_VALIDATE_EMAIL));
    }

    public function validateData($name, $address, $email) {
        return ($this->validateName($name) && $this->validateAddress($address) && $this->validateEmail($email));
    }


}