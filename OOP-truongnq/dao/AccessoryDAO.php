<?php 
require_once "../entity/Accessory.php";
require_once "../dao/Database.php";
require_once "BaseDAO.php";
require_once "../interface/IDao.php";

class AccessoryDAO extends BaseDAO implements IDao {
    protected $name = "accessory";
    //methods

    function __construct() {
        parent::__construct();
    }

    function insert($row) {
        parent::insert($row);
    }

    function update($row) {
        parent::update($row);

    }

    function delete($row) {
        parent::delete($row);
    }

    function findAll(){
        parent::findAll();
    }

    function findById($id) {
        for($i = 0; $i < sizeof(Database::getInstance()->accessoryTable); $i++) {
            if(Database::getInstance()->accessoryTable[$i]->get_id() == $id) {
                return Database::getInstance()->accessoryTable[$i];
            }
        }        
    }

    function findByName($name) {
        for($i = 0; $i < sizeof(Database::getInstance()->accessoryTable); $i++) {
            if(Database::getInstance()->accessoryTable[$i]->get_name() == $name) {
                return Database::getInstance()->accessoryTable[$i];
            }
        }        
    }

    function search($where) {
        for($i = 0; $i < sizeof(Database::getInstance()->accessoryTable); $i++) {
            if($where == $i) {
                return Database::getInstance()->accessoryTable[$i];
            }
        }   
    }

}
?>