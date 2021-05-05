<?php
require_once "../dao/Database.php";
require_once "../dao/AccessoryDAO.php";
require_once "../entity/Accessory.php";
class AccessoryDaoDemo {
    public AccessoryDAO $cD;

    function __construct() {
        $this->cD = new AccessoryDAO(); 
    }

    function insertTest() {
        $this->cD->insert(new Accessory(1, "Trang"));
    }

    function findAllTest() {
        $this->cD->findAll();
    }

    function updateTest() {
        $this->cD->update(new Accessory(1, "Trang"));
    }
}

$aDD = new AccessoryDaoDemo();
$aDD->insertTest();
// $cDD->updateTest();
$aDD->findAllTest();
?>