<?php 
	require_once( "includes/project.php"); 
	require_once( "includes/view.php"); 
?>

<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<title>Index</title>

	<link rel="stylesheet" href="css/normalize.css">
	<link href='https://fonts.googleapis.com/css?family=Architects+Daughter' rel='stylesheet' type='text/css'>
	<link href='https://fonts.googleapis.com/css?family=Josefin+Slab:300' rel='stylesheet' type='text/css'>
	<link href='https://fonts.googleapis.com/css?family=Josefin+Slab:300italic' rel='stylesheet' type='text/css'>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css">
	<link rel="stylesheet" href="css/normalize.css">
	<link rel="stylesheet" href="css/animate.css">
	<link rel="stylesheet" href="css/styles.css">
	<link rel="stylesheet" href="css/responsive.css">

</head>

<body id="projectPage">
	<a href="index.php"><i class="fa fa-long-arrow-left fa-3x"></i></a>
	<div class="projectPageContainer">
		<?php
		$ID = 1;
		if (isset($_GET["pageid"])) {
		    $ID = $_GET["pageid"];
		}
		$oProject = new Project();
		$oProject->load($ID);
		echo view::renderEachProject($oProject);
		?>

	</div>

	<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
	<script src="./js/jquery.easypiechart.js"></script>
	<script src="./js/script.js"></script>
	<script src="./js/jqueryvalidation.js"></script>
	<script src="./js/autogrow.js"></script>
	<script>
		// $("#contact").validate();

	</script>
</body>

</html>
