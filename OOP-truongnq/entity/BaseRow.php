<?php
abstract class BaseRow
{
    //property
    public int $id;
    public string $name;

    //methods
    function __construct($id, $name)
    {
        $this->id = $id;
        $this->name = $name;
    }

    function setId($id)
    {
        $this->id = $id;
    }

    function getId()
    {
        return $this->id;
    }

    function setName($name)
    {
        $this->name = $name;
    }

    function getName()
    {
        return $this->name;
    }
}
