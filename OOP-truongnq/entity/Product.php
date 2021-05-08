<?php
require_once "BaseRow.php";
require_once "../interface/IEntity.php";

class Product extends BaseRow implements IEntity
{
    //properties
    protected int $categoryId;

    //methods

    /**
     * get category id
     * @param null
     * @return mixed
     */
    function getCategoryId() {
        return $this->categoryId;
    }

    /**
     * set category id
     * @param $categoryId
     * @return null
     */
    public function setCategoryId($categoryId) {
        $this->categoryId = $categoryId;
    }
}
