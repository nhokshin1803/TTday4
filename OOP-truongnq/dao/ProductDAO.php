<?php
require_once "../entity/Product.php";
require_once "../dao/Database.php";
require_once "BaseDAO.php";
require_once "../interface/IDao.php";

class ProductDAO extends BaseDAO implements IDao
{
    protected $name = "product";
}
