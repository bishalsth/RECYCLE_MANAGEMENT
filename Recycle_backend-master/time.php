<?php 

class Time extends Module{
    public $timeId;
    public $timeDate;
    public $timeLocation;
    public $timeTime;

    public function __construct(){
        parent::__construct();
        $this->timeId = 0;
        $this->timeDate ='';
        $this->timeLocation ='';
        $this->timeTime ='';
        $this->query = '';
        $this->moduleName = 'Time';

    }

    public function storeAll(){
        $this->timeDate = $_POST['timeDate'];
        $this->timeLocation = $_POST['timeLocation'];
        $this->timeTime = $_POST['timeTime'];
        $this->query ="INSERT INTO time(date,location,time)VALUE ('".$this->timeDate."','".$this->timeLocation."','".$this->timeTime."') ";
        $this->storeData();
    }
    public function listAll(){
        $this->query = "SELECT * FROM time";
        $this->listData();
    }
    public function deleteAll(){
        $this->timeId = $_POST['timeId'];
        $this->query = "DELETE FROM time WHERE id=".$this->timeId;
        $this->deleteData();
    }
}

?>