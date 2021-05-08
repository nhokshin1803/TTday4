<?php
require_once "../entity/Product.php";
require_once "../entity/Accessory.php";
require_once "../entity/Category.php";
class Database
{

    //properties
    const PRODUCT = "product";
    const CATEGORY = "category";
    const ACCESSORY = "accessory";

    private static $instance = NULL;
    private $productTable = [];
    private $categoryTable = [];
    private $accessoryTable = [];

    //methods

    /**
     * constructor
     * @param null
     * @return null
     */
    private function __construct()
    {
    }

    /**
     * Singleton get instance
     * @param null
     * @return mixed
     */
    public static function getInstance()
    {

        if (self::$instance == null) {
            self::$instance = new Database();
        }

        return self::$instance;
    }

    /**
     * insert an element into table
     * @param $name, $element
     * @return mixed
     */
    function insertTable($name, $element)
    {
        if (!($element instanceof Product || $element instanceof Accessory || $element instanceof Category)) {
            return false;
        }

        if ($name == self::PRODUCT) {
            $this->productTable[] = $element;
            return $this->productTable;
        }

        if ($name == self::ACCESSORY) {
            $this->accessoryTable[] = $element;
            return $this->accessoryTable;
        }

        if ($name == self::CATEGORY) {
            $this->categoryTable[] = $element;
            return $this->categoryTable;
        }

        return false;
    }

    /**
     * select a table
     * @param $name
     * @return mixed
     */
    function selectTable($name)
    {

        if ($name == self::PRODUCT) {
            return $this->productTable;
        }

        if ($name == self::ACCESSORY) {
            return $this->accessoryTable;
        }

        if ($name == self::CATEGORY) {
            return $this->categoryTable;
        }
    }

    /**
     * update a table
     * @param $name
     * @return mixed
     */
    function updateTable($name, $element)
    {
        if (!($element instanceof Product || $element instanceof Accessory || $element instanceof Category)) {
            return false;
        }

        if ($name == self::PRODUCT) {
            $productTableSize = sizeof(self::getInstance()->productTable);
            for ($i = 0; $i < $productTableSize; $i++) {
                self::getInstance()->productTable[$i]->setName($element);
            }
            return true;
        }

        if ($name == self::ACCESSORY) {
            $accessoryTableSize = sizeof(self::getInstance()->accessoryTable);
            for ($i = 0; $i < sizeof(self::getInstance()->accessoryTable); $i++) {
                self::getInstance()->accessoryTable[$i]->setName($element);
            }
            return true;
        }

        if ($name == self::CATEGORY) {
            $categoryTableSize = sizeof(self::getInstance()->categoryTable);
            for ($i = 0; $i < sizeof(self::getInstance()->categoryTable); $i++) {
                if ($element->id == self::getInstance()->categoryTable[$i]->getId()) {
                    self::getInstance()->categoryTable[$i]->setName($element->name);
                }
            }
            return true;
        }

        return false;
    }

    /**
     * delete a table
     * @param $name
     * @return mixed
     */
    function deleteElement($name, $element)
    {
        if (!($element instanceof Product || $element instanceof Accessory || $element instanceof Category)) {
            return false;
        }

        if ($name == self::PRODUCT) {
            array_splice($this->productTable, $element->getId() - 1, 1);
            return true;
        } else if ($name == self::ACCESSORY) {
            array_splice($this->accessoryTable, $element->getId() - 1, 1);
            return true;
        } else if ($name == self::CATEGORY) {
            array_splice($this->categoryTable, $element->getId() - 1, 1);
            return true;
        }

        return false;
    }

    /**
     * truncate a table
     * @param $name
     * @return mixed
     */
    function truncateTable($name)
    {

        if ($name == self::PRODUCT) {
            unset($this->productTable);
            $this->productTable = [];
            return true;
        } else if ($name == self::ACCESSORY) {
            unset($this->accessoryTable);
            $this->accessoryTable = [];
            return true;
        } else if ($name == self::CATEGORY) {
            unset($this->categoryTable);
            $this->categoryTable = [];
            return true;
        }

        return false;
    }

    /**
     * update an element by its id
     * @param $name
     * @return mixed
     */
    function updateTableById($id, $element)
    {

        if (!($element instanceof Product || $element instanceof Accessory || $element instanceof Category)) {
            return false;
        }

        if ($element instanceof Product) {
            for ($i = 0; $i < sizeof($this->productTable); $i++) {
                if ($id == $this->productTable[$i]->getId()) {
                    $this->productTable[$i] = $element;
                }
            }
            return true;
        } else if ($element instanceof Accessory) {
            for ($i = 0; $i < sizeof($this->accessoryTable); $i++) {
                if ($id == $this->accessoryTable[$i]->getId()) {
                    $this->accessoryTable[$i] = $element;
                }
            }
            return true;
        } else if ($element instanceof Category) {
            for ($i = 0; $i < sizeof($this->categoryTable); $i++) {
                if ($id == $this->categoryTable[$i]->getId()) {
                    $this->categoryTable[$i] = $element;
                }
            }
            return true;
        }

        return false;
    }
}
