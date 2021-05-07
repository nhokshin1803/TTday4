<?php
require_once "../entity/Product.php";
require_once "../dao/Database.php";
require_once "BaseDAO.php";
require_once "../interface/IDao.php";

class ProductDAO extends BaseDAO implements IDao
{
    protected $name = "product";

    //methods
    function findElementById($id)
    {
        for ($i = 0; $i < sizeof(Database::getInstance()->productTable); $i++) {
            if (Database::getInstance()->productTable[$i]->getId() == $id) {
                return Database::getInstance()->productTable[$i];
            }
        }
    }

    function findElementByName($name)
    {
        for ($i = 0; $i < sizeof(Database::getInstance()->productTable); $i++) {
            if (Database::getInstance()->productTable[$i]->getName() == $name) {
                return Database::getInstance()->productTable[$i];
            }
        }
    }

    function searchElementByIndex($where)
    {
        for ($i = 0; $i < sizeof(Database::getInstance()->productTable); $i++) {
            if ($where == $i) {
                return Database::getInstance()->productTable[$i];
            }
        }
    }
}
