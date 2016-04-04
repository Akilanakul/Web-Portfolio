<?php
require_once("connection.php");


class Project

{
	private $projectID;
	private $projectName;
	private $projectDescription;
	private $projectTechnologies;
	private $projectUrl;
	private $projectPhoto;
	private $projectFeature;

	public function __construct()
	{
		$this->projectName="";
		$this->projectDescription="";
		$this->projectTechnologies="";
		$this->projectFeature="";
		$this->projectUrl="";
		$this->projectPhoto="";
	}

	public function load($projectID)
	{

		$oConnection = new Connection();


		//create query
		$sSQL = "SELECT projecttechnologies,projectphoto,projectname,projecturl,projectdescription,projectfeature
		from tb_project WHERE projectID = ".$projectID;


		//execute
		$oResultSet=$oConnection->query($sSQL);

		//fetch data
		$aRow=$oConnection->fetchArray($oResultSet);

		$this->projectID=$projectID;
	    $this->projectName=$aRow["projectname"];
	    $this->projectDescription=$aRow["projectdescription"];
	    $this->projectTechnologies=$aRow["projecttechnologies"];
	    $this->projectFeature=$aRow["projectfeature"];
	    $this->projectUrl=$aRow["projecturl"];
	    $this->projectPhoto=$aRow["projectphoto"];
	  	$oConnection->close();
	}
	public function __get($var)
	{
		switch ($var) {
			case 'projectID':
				return $this->projectID;
				break;
			case 'projectname':
				return $this->projectName;
				break;
			case 'projectdescription':
			return $this->projectDescription;
				break;
			case 'projecttechnologies':
				return $this->projectTechnologies;
				break;
			case 'projecturl':
			return $this->projectUrl;
				break;
			case 'projectphoto':
				return $this->projectPhoto;
				break;
			case 'projectfeature':
				return $this->projectFeature;
				break;
			default:
				die($var."not allowed");
				break;
		}
	}


}

// $om=new Project();
// $om->load(2);
// echo "<pre>";
// print_r($om);
// echo "</pre>";
?>