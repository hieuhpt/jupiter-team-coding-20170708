<?php
/**
 * Created by PhpStorm.
 * User: minh
 * Date: 09/07/2017
 * Time: 18:12
 */

namespace Test\Entity;


use PHPUnit\Framework\TestCase;
use Src\Entity\Staff;

class StaffTest extends TestCase
{
    private $__staffArray;
    public function __construct($name = null, array $data = [], $dataName = '')
    {
        parent::__construct($name, $data, $dataName);
        $this->__staffArray = array(
            'name' => 'Minh',
            'phone' => '0902223080',
            'email' => 'minhtv@minh.com'
        );
    }

    public function testCanBeCreateFromValidStaff(){
        $this->assertInstanceOf(Staff::class,
            Staff::fromArray($this->__staffArray)
            );
    }

    public function testCanNotBeCreateFromInvalidStaff(){
        $this->expectException(\InvalidArgumentException::class);
        Staff::fromArray('Not staff array');
    }
}