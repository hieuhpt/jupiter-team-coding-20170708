<?php
/**
 * Created by PhpStorm.
 * User: hieuhpt
 * Date: 08/07/2017
 * Time: 16:32
 */

namespace Src\Entity;


class Staff
{
    private $__id;
    private $__name;
    private $__phone;
    private $__email;

    public function __construct($staffArray)
    {
        $this->ensureIsValidSt($staffArray);
        !empty($staffArray['id']) ? $this->__id = $staffArray['id'] : $this->__id = '';
        !empty($staffArray['name']) ? $this->__name = $staffArray['name'] : $this->__name = '';
        !empty($staffArray['phone']) ? $this->__phone = $staffArray['phone'] : $this->__phone = '';
        !empty($staffArray['email']) ? $this->__email = $staffArray['email'] : $this->__email = '';
    }

    public function getId()
    {
        return $this->__id;
    }

    public function getName(){
        return $this->__name;
    }

    public function getPhone(){
        return $this->__phone;
    }

    public function getEmail(){
        return $this->__email;
    }

    public function setId($id){
        $this->__id = $id;
    }

    public static function fromArray($staffArray){
        return new self($staffArray);
    }

    function ensureIsValidSt($staffArr){
        if(!is_array($staffArr)){
            throw new \InvalidArgumentException(
                sprintf('"%arr" is not Array',
                    $staffArr
                )
            );
        }
    }
}