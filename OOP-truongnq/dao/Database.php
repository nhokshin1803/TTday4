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
    private function __construct()
    {
    }

    public static function getInstance()
    {

        if (self::$instance == null) {
            self::$instance = new Database();
        }

        return self::$instance;
    }

    function insertTable($name, $row)
    {
        if (!($row instanceof Product || $row instanceof Accessory || $row instanceof Category)) {
            return false;
        }

        if ($name == self::PRODUCT) {
            $this->productTable[] = $row;
            return $this->productTable;
        }

        if ($name == self::ACCESSORY) {
            $this->accessoryTable[] = $row;
            return $this->accessoryTable;
        }

        if ($name == self::CATEGORY) {
            $this->categoryTable[] = $row;
            return $this->categoryTable;
        }

        return false;
    }

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

    function updateTable($name, $row)
    {
        if (!($row instanceof Product || $row instanceof Accessory || $row instanceof Category)) {
            return false;
        }

        if ($name == self::PRODUCT) {
            for ($i = 0; $i < sizeof(self::getInstance()->productTable); $i++) {
                self::getInstance()->productTable[$i]->setName($row);
            }
            return true;
        }

        if ($name == self::ACCESSORY) {
            for ($i = 0; $i < sizeof(self::getInstance()->accessoryTable); $i++) {
                self::getInstance()->accessoryTable[$i]->setName($row);
            }
            return true;
        }

        if ($name == self::CATEGORY) {
            for ($i = 0; $i < sizeof(self::getInstance()->categoryTable); $i++) {
                if ($row->id == self::getInstance()->categoryTable[$i]->getId()) {
                    self::getInstance()->categoryTable[$i]->setName($row->name);
                }
            }
            return true;
        }

        return false;
    }

    function deleteTable($name, $row)
    {
        if (!($row instanceof Product || $row instanceof Accessory || $row instanceof Category)) {
            return false;
        }

        if ($name == self::PRODUCT) {
            array_splice($this->productTable, $row->getId() - 1, 1);
            return true;
        } else if ($name == self::ACCESSORY) {
            array_splice($this->accessoryTable, $row->getId() - 1, 1);
            return true;
        } else if ($name == self::CATEGORY) {
            array_splice($this->categoryTable, $row->getId() - 1, 1);
            return true;
        }

        return false;
    }

    function truncateTable($name)
    {

        if ($name == self::PRODUCT) {
            $this->productTable = [];
            return true;
        } else if ($name == self::ACCESSORY) {
            $this->accessoryTable = [];
            return true;
        } else if ($name == self::CATEGORY) {
            $this->categoryTable = [];
            return true;
        }

        return false;
    }

    function updateTableById($id, $row)
    {

        if (!($row instanceof Product || $row instanceof Accessory || $row instanceof Category)) {
            return false;
        }

        if ($row instanceof Product) {
            for ($i = 0; $i < sizeof($this->productTable); $i++) {
                if ($id == $this->productTable[$i]->getId()) {
                    $this->productTable[$i] = $row;
                }
            }
            return true;
        } else if ($row instanceof Accessory) {
            for ($i = 0; $i < sizeof($this->accessoryTable); $i++) {
                if ($id == $this->accessoryTable[$i]->getId()) {
                    $this->accessoryTable[$i] = $row;
                }
            }
            return true;
        } else if ($row instanceof Category) {
            for ($i = 0; $i < sizeof($this->categoryTable); $i++) {
                if ($id == $this->categoryTable[$i]->getId()) {
                    $this->categoryTable[$i] = $row;
                }
            }
            return true;
        }

        return false;
    }
}
