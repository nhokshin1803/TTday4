<?php
require_once "../entity/Category.php";
require_once "../dao/Database.php";
require_once "BaseDAO.php";
require_once "../interface/IDao.php";

class CategoryDAO extends BaseDAO implements IDao
{

    public $entityName = "category";

    //methods
    function findElementById($entityId)
    {
        for ($i = 0; $i < sizeof(Database::getInstance()->categoryTable); $i++) {
            if (Database::getInstance()->categoryTable[$i]->getId() == $entityId) {
                return Database::getInstance()->categoryTable[$i];
            }
        }
    }

    function findElementByName($entityName)
    {
        for ($i = 0; $i < sizeof(Database::getInstance()->categoryTable); $i++) {
            if (Database::getInstance()->categoryTable[$i]->getName() == $entityName) {
                return Database::getInstance()->categoryTable[$i];
            }
        }
    }

    function searchElementByIndex($index)
    {
        for ($i = 0; $i < sizeof(Database::getInstance()->categoryTable); $i++) {
            if ($index == $i) {
                return Database::getInstance()->categoryTable[$i];
            }
        }
    }
}
