<?php
require_once "Database.php";
abstract class BaseDAO
{

    //methods

    /**
     * constructor
     * @param null
     * @return null
     */
    function __construct()
    {
    }

    /**
     * insert an element into table
     * @param $element
     * @return mixed
     */
    function insertElement($element)
    {
        return Database::getInstance()->insertTable($this->name, $element);
    }

    /**
     * update an element
     * @param $element
     * @return mixed
     */
    function updateElement($element)
    {
        return Database::getInstance()->updateTable($this->name, $element);
    }

    /**
     * delete an element in table by element id
     * @param $element
     * @return mixed
     */
    function deleteElement($element)
    {
        return Database::getInstance()->deleteTable($this->name, $element);
    }

    /**
     * determine a table
     * @param $tableName
     * @return mixed
     */
    function determineTable($tableName)
    {
        $tempTable = [];
        if ($tableName = "accessory") {
            $tempTable = Database::getInstance()->accessoryTable;
        } elseif ($tableName = "category") {
            $tempTable = Database::getInstance()->categoryTable;
        } elseif ($tableName = "product") {
            $tempTable = Database::getInstance()->productTable;
        }
        return $tempTable;
    }

    /**
     * find all element
     * @param $entityId
     * @return mixed
     */
    function findAll()
    {
        return Database::getInstance()->selectTable($this->name);
    }

    function findElementById($entityId, string $tableName)
    {
        $tempTable = $this->determineTable($tableName);

        for ($i = 0; $i < sizeof($tempTable); $i++) {
            if ($tempTable[$i]->getId() == $entityId) {
                return $tempTable[$i];
            }
        }
    }

    /**
     * find an element by its name
     * @param $entityId
     * @return mixed
     */
    function findElementByName($entityName, string $tableName)
    {
        $tempTable = $this->determineTable($tableName);
        for ($i = 0; $i < sizeof($tempTable); $i++) {
            if ($tempTable[$i]->getName() == $entityName) {
                return $tempTable[$i];
            }
        }
    }

    /**
     * find an element by its index
     * @param $entityId
     * @return mixed
     */
    function searchElementByIndex($index, string $tableName)
    {
        $tempTable = $this->determineTable($tableName);
        for ($i = 0; $i < sizeof($tempTable); $i++) {
            if ($index == $i) {
                return $tempTable[$i];
            }
        }
    }
}
