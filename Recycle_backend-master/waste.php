<?php 

class Waste extends Module{
    public $wasteId;
    public $wasteType;
    public $wasteQuantity;
    public $wasteLocation;

    public function __construct(){
        parent::__construct();
        $this->wasteId = 0;
        $this->wasteType ='';
        $this->wasteQuantity ='';
        $this->wasteLocation ='';
        $this->query = '';
        $this->moduleName = 'Waste';

    }

    public function storeAll(){
        $this->wasteType = $_POST['wasteType'];
        $this->wasteQuantity = $_POST['wasteQuantity'];
        $this->wasteLocation = $_POST['wasteLocation'];
        $this->query ="INSERT INTO waste(wasteType,wasteQuantity,wasteLocation)VALUE ('".$this->wasteType."','".$this->wasteQuantity."','".$this->wasteLocation."') ";
        $this->storeData();
    }
    public function listAll(){
        $this->query = "SELECT * FROM waste";
        $this->listData();
    }
    public function deleteAll(){
        $this->wasteId = $_POST['wasteId'];
        $this->query = "DELETE FROM waste WHERE id=".$this->wasteId;
        $this->deleteData();
    }
}

?>