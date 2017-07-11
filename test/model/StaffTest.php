<?php
/**
 * Created by PhpStorm.
 * User: thang
 * Date: 11/07/2017
 * Time: 11:05
 */

namespace Test\Model;

use PHPUnit\Framework\TestCase;
use Src\Entity\Staff;
include 'src/entity/Staff.php';
class StaffTest extends TestCase
{
    private $staffModel;

    public function __construct($name = null, array $data = [], $dataName = '')
    {
        parent::__construct($name, $data, $dataName);

        $this->staffModel = new \Src\Model\Staff();
    }

    public function testCanBeCreatedByValidStaffEntity()
    {
        $staff_data = array(
            "name" => "Thang",
            "address" => "Hanoi",
            "email" => "thangnt@gmail.com"
        );

        $staff = new Staff($staff_data);
        $this->assertInternalType(
            "int",
            $this->staffModel->create($staff)->getId()
        );
    }

    public function testCannotBeCreated() {
        $staff_data = '';
        $this->expectException(\InvalidArgumentException::class);
        $staff = new Staff($staff_data);

    }
}