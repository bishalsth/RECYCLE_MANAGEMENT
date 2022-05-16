<?php
// This class will manage all the actions related to events
// Add event , Update event, delete event, list event, getEvent
class Event extends Module {
    public $eventId;
    public $eventName;
    public $eventLocation;
    public $eventDes;
    public $eventDate;
    public $eventPrice;
    public $nTicket;

    public function __construct() {
        parent::__construct();
        $this->eventId = 0;
        $this->eventName = '';
        $this->eventLocation = '';
        $this->eventDes = '';
        $this->eventDate = '';
        $this->eventPrice = '';
        $this->nTicket = '';
        $this->query = '';
        $this->moduleName = 'Event';
    }

    public function storeAll(){
        $this->eventName = $_POST['eventName'];
        $this->eventLocation = $_POST['eventLocation'];
        $this->eventDes = $_POST['eventDes'];
        $this->eventDate = $_POST['eventDate'];
        $this->eventPrice = $_POST['eventPrice'];
        $this->query = "INSERT INTO event(eventName, eventLocation,eventDes,eventDate,eventPrice) VALUE ('".$this->eventName."', '".$this->eventLocation."','".$this->eventDes."','".$this->eventDate."','".$this->eventPrice."') ";
        $this->storeData();
    }

    // ---------------------------booking---------------------
     public function bookAll(){
        $this->eventId = $_POST['eventId'];
        $this->eventName = $_POST['eventName'];
        $this->eventLocation = $_POST['eventLocation'];
        $this->nTicket = $_POST['nTicket'];
        
        $this->query = "INSERT INTO book(eventId,eventName, eventLocation,nTicket) VALUE ('".$this->eventId."','".$this->eventName."', '".$this->eventLocation."','".$this->nTicket."') ";
        $this->storeData();
    }

    public function updateAll(){
        $this->eventId = $_POST['eventId'];
        $this->eventName = $_POST['eventName'];
        $this->eventLocation = $_POST['eventLocation'];
        $this->eventDes = $_POST['eventDes'];
        $this->eventDate = $_POST['eventDate'];
        $this->eventPrice = $_POST['eventPrice'];
        $this->query = "UPDATE event SET eventName='".$this->eventName."', eventLocation='".$this->eventLocation."',eventDes='".$this->eventDes."',eventDate='".$this->eventDate."',eventPrice='".$this->eventPrice."' WHERE eventId=".$this->eventId;
        $this->updateData();
    }

    public function deleteAll(){
        $this->eventId = $_POST['eventId'];
        $this->query = "DELETE FROM event WHERE eventId=".$this->eventId;
        $this->deleteData();
    }

    public function listall(){
        $this->query = "SELECT * FROM event";
        $this->listData();
    }

    public function loadAll(){
        $this->eventId = $_REQUEST['eventId'];
        $this->query = "SELECT * FROM event WHERE eventId = ".$this->eventId;
        $this->loadData();
    }
    
}