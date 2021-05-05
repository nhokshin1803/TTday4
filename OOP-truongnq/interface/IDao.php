<?php
interface IDao {
    function findById($id);
    
    function findByName($name);

    function search($where);
}
?>
