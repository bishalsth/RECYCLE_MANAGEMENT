<?php 

class ShowBid extends Module{
    public $id;
    public $wastename;
    public $username;
    public $bid_amount;

    public function __construct(){
        parent::__construct();
        $this->id = 0;
        $this->wastename ='';
        $this->username ='';
        $this->bid_amount ='';
        $this->query = '';
        $this->moduleName = 'ShowBid';
    }
    public function listAll(){
        $this->query = "SELECT * FROM bid";
        $this->listData();
    }
    public function deleteAll(){
        $this->id = $_POST['id'];
        $this->query = "DELETE FROM bid WHERE id=".$this->id;
        $this->deleteData();
    }
}

?>