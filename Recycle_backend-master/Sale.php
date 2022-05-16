<?php 

class Sale extends Module{
    public $id;
    public $wastename;
    public $quantity;
    public $location;

    public function __construct(){
        parent::__construct();
        $this->id = 0;
        $this->wastename ='';
        $this->quantity ='';
        $this->location ='';
        $this->query = '';
        $this->moduleName = 'Sale';

    }
    public function listAll(){
        $this->query = "SELECT * FROM onsale";
        $this->listData();
    }
    public function deleteAll(){
        $this->id = $_POST['id'];
        $this->query = "DELETE FROM onsale WHERE id=".$this->id;
        $this->deleteData();
    }
}

?>