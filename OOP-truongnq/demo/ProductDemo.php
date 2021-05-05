<?php
require_once "../entity/Product.php";
class ProductDemo {
    public Product $product;
    function __construct(){
        $this->product = new Product(1, "Truong");
    }

    function print_product_test() {
        echo($this->product->name);
    }
}

$pd = new ProductDemo();
$pd->print_product_test($pd);
?>