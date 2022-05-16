<?php 

class User extends Module {

	public $userId;
	public $username;
	public $useraddress;
	public $userphn;
	public $useremail;
	public $userpassword;
	public $type;

	public function __construct(){
		  parent::__construct();
		$this->userId =0;
		$this->username ='';
		$this->useraddress ='';
		$this->userphn ='';
		$this->useremail ='';
		$this->userpassword ='';
		$this->type ='';
		$this->query ='';
		$this->moduleName = 'User';


	}
	public function storeAll(){
		// $this->$userId =$_POST['userId'];
		
		$this->username =$_POST['username'];
		$this->useraddress =$_POST['useraddress'];
		$this->userphn =$_POST['userphn'];
		$this->useremail = $_POST['useremail'];
		$this->userpassword = $_POST['userpassword'];
		$this->type = $_POST['type'];
		  $this->query = "INSERT INTO user(username,useraddress,userphn, useremail,userpassword,type) VALUE ('".$this->username."','".$this->useraddress."','".$this->userphn."', '".$this->useremail."','".$this->userpassword."', '".$this->type."') ";
		$this->storeData();



	}
	public function loginAll(){
		// $this->userId = $_POST['userId'];
        $this->useremail = $_POST['useremail'];
        $this->userpassword = $_POST['userpassword'];
        $this->query = "SELECT * FROM user where useremail='".$this->useremail."' && userpassword='".$this->userpassword."'";
        try{
            $this->dbConnection->prepare($this->query);
            $user = $this->dbConnection->loadObject();
            if(is_null($user)){
            	$response['status'] = 403;
	            $response['error'] = 'Invalid username or password';
	            $response['data'] = null;
	            echo json_encode($response);
	            return true;	
            }
            $response['status'] = 200;
            $response['message'] = 'User Login Successfully';
            $response['data'] = $user;
            echo json_encode($response);
        }catch( PDOException $ex ) {
            $response['status'] = 403;
            $response['error'] = 'Error retrieving '.$this->moduleName.'list :'. $ex->getMessage() ;
            echo json_encode($response);
        }
    }
}






 