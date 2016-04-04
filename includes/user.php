<?php
include_once("connection.php");

class User{
	private $sName;
    private $iID;
	private $sEmail;
	private $sMessage;
	

	public function __construct(){
		$this->sName='';
		$this->sEmail='';
		$this->sMessage='';
		
        $this->iID=0;

	}
	
	public function save(){
		$oConnection = new Connection();


		//create query
       
		$sSQL = "INSERT INTO tb_visitor(visitorname,visitoremail,visitormessage) 
			values('".$oConnection->escape($this->sName)."',
                   '".$oConnection->escape($this->sEmail)."',
                    '".$oConnection->escape($this->sMessage)."'
                   )";


		//execute
		$oResultSet=$oConnection->query($sSQL);

		

		if($oResultSet==true){
                    // echo "successful";

                }else{
                    die($sSQL."jdhbf");

                }

	}
   
	public function __get($var){
		switch($var){
        	case "visitorname":
            return $this->sName;
            break;
            case "visitoremail":
            return $this->sEmail;
            break;
            case "visitormessage":
            return $this->sMessage;
            break;
           

            default:
            die($var."is not allowed");
            break;
     	}
    
	}
	public function __set($var,$value){
		switch($var){
        	case "visitorname":
            $this->sName=$value;
            break;
            case "visitoremail":
            $this->sEmail=$value;
            break;
            case "visitormessage":
            $this->sMessage=$value;
            break;
            

          	default:
            die($var."is not allowed");
            break;
        
       
        }
	}
}
// $or=new User();
// // $or->getUserByEmail("aj.akila90@gmail.com");

// // // $or->getRecipe(2);
// $or->visitorname="asdf";
// $or->visitoremail="sdf";
// $or->visitormessage="sdf";
// // $or->usertelephone="fdv";

// $or->save();




?>