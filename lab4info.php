<!-- TITLE: Confirmation
AUTHOR: Harmanjot Singh
PURPOSE: User Information Confirmation Page
ORIGINALLY CREATED ON: 17 Oct 2019
LAST MODIFIED ON: 17 Oct 2019
LAST MODIFIED BY: Harmanjot Singh
MODIFICATION HISTORY: Original Build -->

<?php
session_start();
?> 

<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Confirmation</title>
	<!-- Bootstrap 3 -->
    <link
      rel="stylesheet"
      href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css"
      integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u"
      crossorigin="anonymous"
    />
    <!-- Minified version of jQuery CDN -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <!-- Bootstrap validator-->
    <script
      type="text/javascript"
      src="http://cdnjs.cloudflare.com/ajax/libs/jquery.bootstrapvalidator/0.5.3/js/bootstrapValidator.min.js"
    ></script>
    <!-- External Stylesheet -->
	<!-- <link rel="stylesheet" href="style.css" type="text/css" /> -->
	<link rel="stylesheet" type="text/css" href="css/style.css">
	<link rel="stylesheet" type="text/css" href="css/mobile.css" media="screen and (max-width : 568px)">
</head>
<body>
<div id="header">
	<a href="index.php" class="logo">
		<img src="images/logo.jpg" alt="">
	</a>
	<ul id="navigation">
		<li>
			<a href="index.php">home</a>
		</li>
		<li>
			<a href="about.php">about</a>
		</li>
		<li>
			<a href="gallery.php">gallery</a>
		</li>
		<li>
			<a href="blog.php">blog</a>
		</li>
		<li class="selected">
			<a href="lab4info.php">contact</a>
		</li>
		</ul>
		</div>
    <?php
		$fn = $_SESSION['first_name'];
		$ln = $_SESSION['last_name'];

      	$em = $_SESSION['email'];
      	$confirm_em = $_SESSION['confirm_email'];
      	$pass = $_SESSION['password'];
      	$confirm_pass = $_SESSION['confirm_password'];

		$gender = $_SESSION['gender'];
      	$department = $_SESSION['department'];
      	$status = $_SESSION['status'];

		//define the Data class
		class UserData {
  		//constructor of the object instance. All the contructors are formed by two underscores followed by the word "construct". Providing some default values if no function arguments are provided.
		function __construct($fn="", $ln="", $em="", $confirm_em="", $pass="", $confirm_pass="", $gender="", $department="", $status=""){
			$this->setName($fn);
			$this->setLastName($ln); 
			$this->setEmail($em);
			$this->setConfirmEmail($confirm_em); 
			$this->setPass($pass);
			$this->setConfirmPass($confirm_pass); 
			$this->setGender($gender);
			$this->setDepartment($department);
			$this->setStatus($status);	
		} // end constructor

		// Setters
  		function setName($newFn){
    		$this->fn = $newFn;
  		} // end setName

  		function setLastName($newLn){
    		$this->ln = $newLn;
  		} // end setLastName
		
		function setEmail($newEm){
    		$this->em = $newEm;
		} // end setEmail

		function setConfirmEmail($newConfirmEmail){
    	$this->confirm_em = $newConfirmEmail;
		} // end setConfirmEmail

		function setPass($newPass){
    		$this->pass = $newPass;
		} // end setPass

		function setConfirmPass($newConfirmPass){
    	$this->confirm_pass = $newConfirmPass;
		} // end setConfirmPass
		  
		function setGender($newGender){
    		$this->gender = $newGender;
  		} // end setGender
		
		function setDepartment($newDepartment){
    		$this->department = $newDepartment;
		} // end setDepartment

		function setStatus($newStatus){
    	$this->status = $newStatus;
		} // end setStatus
		  
		// Getters
  		function getName(){
    		return $this->fn;
		} // end getName
		  
		function getLastName(){
    		return $this->ln;
		} // end getLastName
		  
		function getEmail(){
    	return $this->em;
		} // end getEmail
		  
		function getConfirmEmail(){
    		return $this->confirm_em;
		} // end getConfirmEmail
		  
		function getPass(){
    		return $this->pass;
		} // end getPass
		  
		function getConfirmPass(){
    		return $this->confirm_pass;
		} // end getConfirmPass
		  
		function getGender(){
    	return $this->gender;
		} // end getGender
		  
		function getDepartment(){
    		return $this->department;
		} // end getDepartment
		  
		function getStatus(){
    	return $this->status;
  		} // end getStatus

	} // end Data class

	$formData = new UserData($_SESSION['first_name'], $_SESSION['last_name'], $_SESSION['email'], $_SESSION['confirm_email'], $_SESSION['password'], $_SESSION['confirm_password'], $_SESSION['gender'], $_SESSION['department'], $_SESSION['status']);
	?>

  <h2 style="color:green;text-align:center;"><strong>Congratulations! You have successfully activated your account</strong></h2>   
	<div class="container">
      <form class="well form-horizontal" action="" method="" id="reach_form">	
	  	<h2>User Registration Confirmation</h2>
      <div class="form-group">
      <label class="col-md-4 control-label">
	  <h4>
	  	First Name: <strong><?php print $formData ->getName(); ?></strong> <br />
		Last Name: <strong><?php print $formData ->getLastName(); ?></strong> <br />
		Email:	<strong><?php print $formData ->getEmail(); ?></strong> <br />
      	Confirm Email: <strong><?php print $formData ->getConfirmEmail(); ?></strong> <br />
     	Password: <strong><?php print $formData ->getPass(); ?></strong> <br />
      	Confirm Password: <strong><?php print $formData ->getConfirmPass(); ?></strong> <br />
      	Gender: <strong><?php print $gender; ?></strong> <br />
      	Status: <strong><?php print $status; ?></strong> <br />
		Department: <strong><?php print $department; ?></strong> <br />
		</h4>
		</label>
      </div>
      </form>
  </div>

  </body>
</html>








