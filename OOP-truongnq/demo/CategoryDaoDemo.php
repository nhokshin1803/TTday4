<?php
require_once "../dao/Database.php";
require_once "../dao/CategoryDAO.php";
require_once "../entity/Category.php";
class CategoryDaoDemo {
    public CategoryDAO $cD;

    function __construct() {
        $this->cD = new CategoryDAO(); 
    }

    function insertTest() {
        $this->cD->insert(new Category(1,"Truong"));
        $this->cD->insert(new Category(2,"Trung"));
        $this->cD->insert(new Category(3,"Trang"));
    }

    function findAllTest() {
        $this->cD->findAll();
    }

    function updateTest() {
        $this->cD->update(new Category(1, "Trang"));
    }
}

$cDD = new CategoryDaoDemo();
$cDD->insertTest();
$cDD->findAllTest();
$cDD->updateTest();
$cDD->findAllTest();
?>