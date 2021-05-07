<?php
require_once "../entity/Accessory.php";
require_once "../dao/Database.php";
require_once "BaseDAO.php";
require_once "../interface/IDao.php";

class AccessoryDAO extends BaseDAO implements IDao
{

    //properties
    protected $entityName = "accessory";
}
