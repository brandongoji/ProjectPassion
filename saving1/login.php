<?php
include_once("session.php");
include_once('connection.php');

if(isset($_POST['login'])){

		$email=$_POST['uemail']; 	
		$pass=$_POST['upassword']; 	

				$get_email="select *from users where user_email='$email' AND user_pass='$pass'";
		$run_email=mysqli_query($connection,$get_email) ;
		$check=mysqli_num_rows($run_email);

		if($check==1)
		{
			$_SESSION['user_email']=$email;
			echo "<script>window.open('home.php','_self')</script>";

		}
		else
		{
			echo "<script>alert('password or email incorrect') </script>";


}
}

?>