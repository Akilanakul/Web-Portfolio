<?php
require_once("connection.php");
require_once("includes/project.php");

class View{

	static public function renderProject($aProject)
	{
		$HTML='';
    
		for($iCount=0;$iCount<count($aProject);$iCount++)
			{	
				$HTML.=
					'<li class="list-item" style="background-image:url("../images/'.$aProject[$iCount]->projectphoto.'	");">  
				  		<a href="./projectPage.php?pageid='.$aProject[$iCount]->projectID.'">
					  		<div class="projectOverlay">
					  			<p>'.$aProject[$iCount]->projectname.'</p>
					  			<p>Know more about Website</p>
					  		</div>
					  	</a>
			    	</li>';


			}
					
				return $HTML;
			
	}
	static public function renderEachProject($aProject){

		$HTML='';

		$HTML.=
			'<div class="websiteLink">
				<a href="'.$aProject->projecturl.'">Visit website</a>
			</div>
			<div class="caption">
				<h2>'.$aProject->projectname.'</h2>
				<p>'.$aProject->projectdescription.'</p>
			</div>
			
	
			<div class="projectPageImage">
				<img src="images/'.$aProject->projectphoto.'"" alt="">
			</div>
			<div class="technologies "><h2>Technologies</h2>';

		   $aTechnology = explode(PHP_EOL,$aProject->projecttechnologies);
        
        foreach($aTechnology as $aTechnology){
        	$HTML .= '<p>'.$aTechnology.'</p>';

        }
		$HTML.=
			'<div class="feature">
				<h2>Feature</h2>';

		   $aFeature = explode(PHP_EOL,$aProject->projectfeature);
        
        foreach($aFeature as $aFeature){
        	$HTML .= '
                  	<p>'.$aFeature.'</p>';

        }	
			
		$HTML .= 
				'</div>
				<div class="contactDetails">
					<p>Hi you liked my work?
						wanna hire me ?
						talk to me at aj.akila90@gmail.com
						or drop me a line in the form at the contact page</p>
				</div>';
		return $HTML;
	}
}
?>