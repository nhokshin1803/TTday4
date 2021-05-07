<?php
require_once "../entity/Accessory.php";
require_once "../dao/Database.php";
require_once "BaseDAO.php";
require_once "../interface/IDao.php";

class AccessoryDAO extends BaseDAO implements IDao
{

    //properties
    protected $entityName = "accessory";

    //methods
    function findElementById($entityId)
    {
        for ($i = 0; $i < sizeof(Database::getInstance()->accessoryTable); $i++) {
            if (Database::getInstance()->accessoryTable[$i]->getId() == $entityId) {
                return Database::getInstance()->accessoryTable[$i];
            }
        }
    }

    function findElementByName($entityName)
    {
        for ($i = 0; $i < sizeof(Database::getInstance()->accessoryTable); $i++) {
            if (Database::getInstance()->accessoryTable[$i]->getName() == $entityName) {
                return Database::getInstance()->accessoryTable[$i];
            }
        }
    }

    function searchElementByIndex($where)
    {
        for ($i = 0; $i < sizeof(Database::getInstance()->accessoryTable); $i++) {
            if ($where == $i) {
                return Database::getInstance()->accessoryTable[$i];
            }
        }
    }
}
