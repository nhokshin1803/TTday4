<?php
require_once "Database.php";
abstract class BaseDAO
{

    //methods
    function __construct()
    {
    }

    function insertElement($row)
    {
        return Database::getInstance()->insertTable($this->name, $row);
    }

    function updateElement($row)
    {
        return Database::getInstance()->updateTable($this->name, $row);
    }

    function deleteElement($row)
    {
        return Database::getInstance()->deleteTable($this->name, $row);
    }

    function findAll()
    {
        return Database::getInstance()->selectTable($this->name);
    }
}
