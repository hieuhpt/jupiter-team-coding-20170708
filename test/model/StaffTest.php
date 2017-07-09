<?php
/**
 * Created by PhpStorm.
 * User: hieuhpt
 * Date: 08/07/2017
 * Time: 15:54
 */

namespace Test\Model;

use PHPUnit\Framework\TestCase;
use Src\Model\Staff;
use Src\Entity\Staff as StaffEntity;

class StaffTest extends TestCase
{
    private $staffModel;

    public function __construct($name = null, array $data = [], $dataName = '')
    {
        parent::__construct($name, $data, $dataName);

        $this->staffModel = new Staff();
    }

    public function testCanCreateByValidStaffEntity()
    {
        $staffArray = array(
            'name' => 'Minh',
            'phone' => '0902223080',
            'email' => 'minhtv@google.com'
        );
        $staff = new StaffEntity($staffArray);
        $this->assertInternalType(
            "int",
            $this->staffModel->create($staff)->getId()
        );
    }

    public function testCannotCreateByValidStaffEntity(){
        $this->expectException(\PDOException::class);
        $staffArray = array(
            'name' => 'Minh',
            'phone' => '0902223080'
        );
        $staff = new StaffEntity($staffArray);
        $this->assertInternalType(
            "int",
            $this->staffModel->create($staff)->getId()
        );
    }

}