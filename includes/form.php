<?php
require_once("connection.php");
require_once("includes/project.php");


class Form{
	private $sHTML;
	private $aData;
	private $aErrors;
	private $aFiles;


	public function __construct(){
		$this->sHTML='<form id="contact" class="cf" method="post">'."\n";
		$this->aData=[];
		$this->aErrors=[];

	}

	public function makeInput($sControlName,$sControlLabel,$sControlData,$sControlPlaceholder){
		
		if(isset($this->aData[$sControlName])==true)
		{
			$sControlData=$this->aData[$sControlName];
		}
		$sErrors="";
			if(isset($this->aErrors[$sControlName])==true)
		{
			$sErrors="<p>".$this->aErrors[$sControlName]."</p>";

		}
		$this->sHTML.='   	<div class="inputContainer" id="inputContainer">
								  		<label class="lable" for="input-name">'.$sControlLabel.'</label>
								    	<input type="text" id="'.$sControlName.'" name="'.$sControlName.'" value="'.$sControlData.'" id="input-name" placeholder="'.$sControlPlaceholder.'">
							</div>  ';
         
		}
	
	public function makeTextArea($sControlName,$sControlLabel,$sControlPlaceholder,$sControlData){
		
		
		if(isset($this->aData[$sControlName])==true)
		{
			$sControlData=$this->aData[$sControlName];
		}
		$sErrors="";
		if(isset($this->aErrors[$sControlName])==true)
		{
			$sErrors="<p>".$this->aErrors[$sControlName]."</p>";

		}
		
            $this->sHTML.='	  <div class="halfTopCC">
								<label class ="label-title" for="input-message">'.$sControlLabel.'</label>
							    <textarea name="'.$sControlName.'" type="text" id="input-message" placeholder="'.$sControlPlaceholder.'"  value="'.$sControlData.'"></textarea>
							  </div>
							  <div class="halfBottomCC">
							  	<label class ="label-title" for="inputContainer">Name & Email</label></div>';

				
	}
	
	public function makeSubmit($sControlLabel)
	{
		$this->sHTML.='<div id="submit" class="form-group ">
            				<div class="col-xs-offset-3 col-xs-9 ">
               					 <input type="submit" name="'.$sControlLabel.'" id="submit" class="btn btn-primary" value="'.$sControlLabel.'">
              				</div>
        				</div></div>';

        // $this->sHTML .='<div class="item"><input class="pull-right" type="submit" name="submit" value="'.$sControlLabel.'"/></div>';

    }
   

   
    public function checkRequired($sControlName){


    	$sControlData='';
		if(isset($this->aData[$sControlName])==true)
		{
		$sControlData=trim($this->aData[$sControlName]);
		}
		if(strlen($sControlData)==0)
		{
			$this->aErrors[$sControlName]="Must not be empty";
		}


    }

	 public function raiseCustomError($sControlName,$sMessage)
    {
		$this->aErrors[$sControlName] = $sMessage;
	}
    public function __get($var){
		switch ($var) {
			case 'html':
			return $this->sHTML;
				break;

			case 'valid':
			if(count($this->aErrors) == 0)
				return true;
			else
				return false;
			break;
			
			default:
			die($var."is not allowed");
				break;
		}
	}

	public function __set($var,$value){
		switch ($var) {
			case 'data':
			 $this->aData=$value;
			 break;
			case 'files':
				$this->aFiles = $value;
				break;
			default:
			die($var."is not allowed");
				break;
		}
	}
}

?>