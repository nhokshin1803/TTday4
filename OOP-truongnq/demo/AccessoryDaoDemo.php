<?php
require_once "../dao/Database.php";
require_once "../dao/AccessoryDAO.php";
require_once "../entity/Accessory.php";
class AccessoryDaoDemo
{
    public AccessoryDAO $cD;

    function __construct()
    {
        $this->cD = new AccessoryDAO();
    }

    function insertElementTest()
    {
        $this->cD->insertElement(new Accessory(1, "Trang"));
    }

    function findAllTest()
    {
        $testDatabase = $this->cD->findAll();
        print_r($testDatabase);
    }

    function updateElementTest()
    {
        $this->cD->updateElement(new Accessory(1, "Trang"));
    }
}

$aDD = new AccessoryDaoDemo();
echo ("Test");
$aDD->insertElementTest();
// $cDD->updateTest();
$aDD->findAllTest();
