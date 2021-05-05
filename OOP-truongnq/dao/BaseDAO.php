<?php
require_once "Database.php";
abstract class BaseDAO {
    //methods
    function __construct() {
    }

    function insert($row) {
        Database::getInstance()->insertTable($this->name, $row);
    }

    function update($row) {
        Database::getInstance()->updateTable($this->name, $row);
    }

    function delete($row) {
        Database::getInstance()->deleteTable($this->name, $row);
    }

    function findAll(){
        Database::getInstance()->selectTable($this->name);
    }

}
?>