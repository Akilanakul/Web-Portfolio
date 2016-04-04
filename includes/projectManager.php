<?php
require_once("connection.php");
require_once("project.php");

class projectManager
{
	static public function getAllProjects()
	{

		$aProject=[];
		$oConnection = new Connection();


		//create query
		$sSQL = "SELECT projectID
		from tb_project";


		//execute
		$oResultSet=$oConnection->query($sSQL);

		//fetch data
		while($aRow=$oConnection->fetchArray($oResultSet))
		{
			$oproject = new Project();
			$oproject->load($aRow['projectID']);
			$aProject[]=$oproject;

		}
	    

	    $oConnection->close();
	    return $aProject;
	}
}

// $aProject=projectManager::getAllProjects();
// echo "<pre>";
// print_r($aProject);
// echo "</pre>";
?>
