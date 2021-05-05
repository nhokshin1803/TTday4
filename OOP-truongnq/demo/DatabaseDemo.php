<?php
require_once "../dao/Database.php";
class DatabaseDemo {
    //methods 
    function __construct() {
    }

    function insertTableTest() {
        Database::getInstance()->insertTable("product", "Truong");
        Database::getInstance()->insertTable("product", "An");
        Database::getInstance()->insertTable("product", "Nghia");
    }
    
    function selectTableTest() {
        Database::getInstance()->selectTable("product");
    }

    function updateTableTest() {
        Database::getInstance()->updateTableById(2, new Product(1,"Anh"));
    }

    function deleteTableTest() {
        Database::getInstance()->deleteTable("product", 1);
    }

    function truncateTableTest() {
        Database::getInstance()->truncateTable("product");
    }

    function initDatabase() {
        Database::getInstance()->insertTable("product", new Product(1,"A"));
        Database::getInstance()->insertTable("product", new Product(1,"A"));
        Database::getInstance()->insertTable("product", new Product(1,"A"));
        Database::getInstance()->insertTable("product", new Product(1,"A"));
        Database::getInstance()->insertTable("product", new Product(1,"A"));
        Database::getInstance()->insertTable("product", new Product(1,"A"));
        Database::getInstance()->insertTable("product", new Product(1,"A"));
        Database::getInstance()->insertTable("product", new Product(1,"A"));
        Database::getInstance()->insertTable("product", new Product(1,"A"));
        Database::getInstance()->insertTable("product", new Product(1,"A"));        
        Database::getInstance()->insertTable("accessory", new Accessory(1,"B"));        
        Database::getInstance()->insertTable("accessory", new Accessory(1,"B"));        
        Database::getInstance()->insertTable("accessory", new Accessory(1,"B"));        
        Database::getInstance()->insertTable("accessory", new Accessory(1,"B"));        
        Database::getInstance()->insertTable("accessory", new Accessory(1,"B"));        
        Database::getInstance()->insertTable("accessory", new Accessory(1,"B"));        
        Database::getInstance()->insertTable("accessory", new Accessory(1,"B"));        
        Database::getInstance()->insertTable("accessory", new Accessory(1,"B"));        
        Database::getInstance()->insertTable("accessory", new Accessory(1,"B"));        
        Database::getInstance()->insertTable("accessory", new Accessory(1,"B"));        
        Database::getInstance()->insertTable("category", new Accessory(1,"C"));        
        Database::getInstance()->insertTable("category", new Accessory(1,"C"));        
        Database::getInstance()->insertTable("category", new Accessory(1,"C"));        
        Database::getInstance()->insertTable("category", new Accessory(1,"C"));        
        Database::getInstance()->insertTable("category", new Accessory(1,"C"));        
        Database::getInstance()->insertTable("category", new Accessory(1,"C"));        
        Database::getInstance()->insertTable("category", new Accessory(1,"C"));        
        Database::getInstance()->insertTable("category", new Accessory(1,"C"));        
        Database::getInstance()->insertTable("category", new Accessory(1,"C"));        
        Database::getInstance()->insertTable("category", new Accessory(1,"C"));        
    }
}
$dbD = new DatabaseDemo();
$dbD->insertTableTest();
$dbD->selectTableTest();
$dbD->updateTableTest();
$dbD->selectTableTest();
?>