<?php
require_once "../dao/Database.php";
require_once "../dao/CategoryDAO.php";
require_once "../entity/Category.php";
class CategoryDaoDemo
{
    public CategoryDAO $cD;

    function __construct()
    {
        $this->cD = new CategoryDAO();
    }

    function insertElementTest()
    {
        $this->cD->insertElement(new Category(1, "Truong"));
        $this->cD->insertElement(new Category(2, "Trung"));
        $this->cD->insertElement(new Category(3, "Trang"));
    }

    function findAllTest()
    {
        $testDB = $this->cD->findAll();
        print_r($testDB);
    }

    function updateElementTest()
    {
        $this->cD->updateElement(new Category(1, "Trang"));
    }
}

$cDD = new CategoryDaoDemo();
$cDD->insertElementTest();
$cDD->findAllTest();
$cDD->updateElementTest();
$cDD->findAllTest();
