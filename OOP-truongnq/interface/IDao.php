<?php
interface IDao
{

    function insertElement($row);
    function updateElement($row);
    function deleteElement($row);
    function findAll();
    function findElementById($id);
    function findElementByName($name);
    function searchElementByIndex($index);
}
