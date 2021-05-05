<?php
require_once "BaseRow.php";
require_once "../interface/IEntity.php";

class Accessory extends BaseRow implements IEntity{
    //properties
    public int $id;
    public string $name;
    
    //methods
    function __construct($id, $name) {
        parent::__construct($id, $name);
    }
    
    function set_id($id) {
        parent::set_id($id);
    }

    function get_id() {
        parent::get_id();
    }

    function set_name($name) {
        parent::set_name($name);
    }

    function get_name() {
        parent::get_name();
    }

}
?>