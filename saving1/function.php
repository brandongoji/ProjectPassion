<?php
	define("DB_SERVER", "localhost");
	define("DB_USER", "root");
	define("DB_PASS", "");
	define("DB_NAME", "project");

    $connection = mysqli_connect(DB_SERVER, DB_USER, DB_PASS, DB_NAME);
  
  if(mysqli_connect_errno()) {
    die("Database connection failed: " . 
         mysqli_connect_error() . 
         " (" . mysqli_connect_errno() . ")"
    );
  }
  function InsertUser(){
	global $connection;
	if(isset($_POST['submit'])){

		$name=$_POST['username']; 	
		$pass=$_POST['password']; 	
		$email=$_POST['email']; 	
		
		

		$get_email="select *from users where user_email='$email'";
		$run_email=mysqli_query($connection,$get_email);
		$check=mysqli_num_rows($run_email);
		if($check==1){
			echo "<script> alert('Email Already registered')</script>";
		
		exit();
		}
		$insert= "insert into users(user_name,user_pass,user_email) values('$name','$pass','$email')";
		$run_insert=mysqli_query($connection,$insert);
		if ($run_insert)
		{
			$_SESSION['user_name']=$name;
			echo "<script> alert ('Registration Succesful')</script>";
			echo "<script>window.open('home.php','_self')</script>";
			//header('home.php');
		}




	}
}
?>