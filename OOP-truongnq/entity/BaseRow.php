<?php
abstract class BaseRow
{
    //property
    public int $id;
    public string $name;

    //methods

    /**
     * constructor
     * @param $name, $id
     * @return null
     */
    function __construct($id, $name)
    {
        $this->id = $id;
        $this->name = $name;
    }
    /**
     * set id
     * @param $id
     * @return null
     */
    function setId($id)
    {
        $this->id = $id;
    }

    /**
     * get id
     * @param null
     * @return mixed
     */
    function getId()
    {
        return $this->id;
    }

    /**
     * set name
     * @param $name
     * @return null
     */
    function setName($name)
    {
        $this->name = $name;
    }

    /**
     * get name
     * @param null
     * @return mixed
     */
    function getName()
    {
        return $this->name;
    }
}
