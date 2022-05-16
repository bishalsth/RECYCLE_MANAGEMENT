<?php 

class Collector extends Module{
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
        $this->moduleName = 'collector';

    }
    public function listAll(){
        $this->query = "SELECT * FROM collect";
        $this->listData();
    }
    public function deleteAll(){
        $this->id = $_POST['id'];
        $this->query = "DELETE FROM collect WHERE id=".$this->id;
        $this->deleteData();
    }
}

?>