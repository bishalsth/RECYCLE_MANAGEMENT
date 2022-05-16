<?php
// This class will manage all the actions related to products
// Add product , Update product, delete product, list product, getProduct
class Product extends Module {
    public $productId;
    public $productName;
    public $productLocation;

    public function __construct() {
        parent::__construct();
        $this->productId = 0;
        $this->productName = '';
        $this->productLocation = '';
        $this->query = '';
        $this->moduleName = 'Product';
    }

    public function storeAll(){
        $this->productName = $_POST['productName'];
        $this->productLocation = $_POST['productLocation'];
        $this->query = "INSERT INTO product(productName, productLocation) VALUE ('".$this->productName."', '".$this->productLocation."') ";
        $this->storeData();
    }

    public function updateAll(){
        $this->productId = $_POST['productId'];
        $this->productName = $_POST['productName'];
        $this->productLocation = $_POST['productLocation'];
        $this->query = "UPDATE product SET productName='".$this->productName."', productLocation='".$this->productLocation."' WHERE productId=".$this->productId;
        $this->updateData();
    }

    public function deleteAll(){
        $this->productId = $_POST['productId'];
        $this->query = "DELETE FROM product WHERE productId=".$this->productId;
        $this->deleteData();
    }

    public function listAll(){
        $this->query = "SELECT * FROM product";
        $this->listData();
    }

    public function loadAll(){
        $this->productId = $_REQUEST['productId'];
        $this->query = "SELECT * FROM product WHERE productId = ".$this->productId;
        $this->loadData();
    }
}