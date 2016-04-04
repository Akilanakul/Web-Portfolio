<?php require_once( "form.php"); require_once( "user.php"); ?>
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

<body>
	<div class="landingPage">
		<section>
			<div class="overlay"></div>
			<div class="contactScroll">
				<div class="contactScrollContainer">

					<?php
					$oForm  = new Form();
					$isOpen = true;
					if (isset($_POST['submit']) == true) {
					    
					    
					    $oForm->data = $_POST;
					    
					    // $oForm->checkRequired("visitormessage");
					    // $oForm->checkRequired("visitorname");
					    // $oForm->checkRequired("visitoremail");
					    
					    
					    $oUser = new User();
					    
					    // if($oForm->valid==true)
					    // {
					    $oUser->visitorname    = $_POST["visitorname"];
					    $oUser->visitoremail   = $_POST["visitoremail"];
					    $oUser->visitormessage = $_POST["visitormessage"];
					    
					    
					    $oUser->save();
					    
					    // header("Location:index.php");
					    // exit; 
					    // }
					    // else
					    // {
					    //  $isOpen == false;
					    // }
					}
					$oForm->makeTextArea("visitormessage", "Message", "Drop me message", "");
					$oForm->makeInput("visitorname", "Hi Akhila,my name is", "", "your name");
					$oForm->makeInput("visitoremail", "You can contact me at", "", "this mail adress");

					$oForm->makeSubmit("submit");
					echo $oForm->html;
					?>


					</form>
				</div>
			</div>

			<div class="resumeScroll">

			</div>
			<div class="menuScroll">
				<a href="#about">
					<div class="menuScrollTitle">
						About
					</div>
				</a>
				<a href="#skills">
					<div class="menuScrollTitle">
						Skills
					</div>
				</a>
				<a href="#work">
					<div class="menuScrollTitle">
						Work
					</div>
				</a>



			</div>
			<header>
				<div class="menu homeLink">
					<div class="menuTab">Menu</div>
					<div class="nameTab">Akhila A.J</div>
				</div>



				<div>
					<a href="#about">
						<div class="menuTitle">
							About
						</div>
					</a>

				</div>
				<div>
					<a href="#skills">
						<div class="menuTitle">
							Skills
						</div>
					</a>

				</div>
				<div>
					<a href="#work">
						<div class="menuTitle">
							Work
						</div>
					</a>

				</div>

				<div class="contact">
					<div class="menuTitle">
						Contact
					</div>
					<i class="fa fa-phone"></i>
				</div>

			</header>
