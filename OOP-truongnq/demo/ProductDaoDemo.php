<?php
require_once "../dao/Database.php";
require_once "../dao/ProductDAO.php";
require_once "../entity/Product.php";
class ProductDaoDemo
{
    public ProductDAO $cD;

    //constructor
    function __construct()
    {
        $this->cD = new ProductDAO();
    }

    //test insert element into table
    function insertTest()
    {
        $this->cD->insertElement(new Product(1, "Trang"));
        $this->cD->insertElement(new Product(1, "Trang"));
        $this->cD->insertElement(new Product(1, "Trang"));
    }

    //print a table
    function findAllTest()
    {
    }

    //update an element of a table
    function updateTest()
    {
        $this->cD->updateElement(new Product(1, "Trang"));
    }
}

$cDD = new ProductDaoDemo();
