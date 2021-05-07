<?php
require_once "../entity/Category.php";
require_once "../dao/Database.php";
require_once "BaseDAO.php";
require_once "../interface/IDao.php";

class CategoryDAO extends BaseDAO implements IDao
{

    public $entityName = "category";
}
