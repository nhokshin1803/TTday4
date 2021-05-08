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
        return Database::getInstance()->updateTable($this->entityName, $element);
    }

    /**
     * delete an element in table by element id
     * @param $element
     * @return mixed
     */
    function deleteElement($element)
    {
        return Database::getInstance()->deleteTable($this->entityName, $element);
    }

    /**
     * determine a table
     * @param $tableName
     * @return mixed
     */
    function determineTable($tableName)
    {
        if ($tableName = "accessory") {
            return Database::getInstance()->accessoryTable;
        } elseif ($tableName = "category") {
            return Database::getInstance()->categoryTable;
        } elseif ($tableName = "product") {
            return Database::getInstance()->productTable;
        } else return null;
    }

    /**
     * find all element
     * @param null
     * @return mixed
     */
    function findAll()
    {
        return Database::getInstance()->selectTable($this->entityName);
    }

    /**
     * find an element by its id
     * @param $entityId, $tableName
     * @return mixed
     */
    function findElementById($entityId, string $tableName)
    {
        $tempTable = $this->determineTable($tableName);

        for ($i = 0; $i < sizeof($tempTable); $i++) {
            if ($tempTable[$i]->getId() == $entityId) {
                return $tempTable[$i];
            }
        }

        return null;
    }

    /**
     * find an element by its name
     * @param $entityId, $tableName
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

        return null;
    }

    /**
     * find an element by its index
     * @param $index, $tableName
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
