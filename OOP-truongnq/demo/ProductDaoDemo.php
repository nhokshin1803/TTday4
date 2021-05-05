<?php
require_once "../dao/Database.php";
require_once "../dao/ProductDAO.php";
require_once "../entity/Product.php";
class ProductDaoDemo {
    public ProductDAO $cD;

    function __construct() {
        $this->cD = new ProductDAO(); 
    }

    function insertTest() {
        $this->cD->insert(new Product(1, "Trang"));
        $this->cD->insert(new Product(1, "Trang"));
        $this->cD->insert(new Product(1, "Trang"));
    }

    function findAllTest() {
        $this->cD->findAll();
    }

    function updateTest() {
        $this->cD->update(new Product(1, "Trang"));
    }
}

$cDD = new ProductDaoDemo();
?>