<?php

session_start();
include_once "db.php";


if(isset($_POST['login'])){



$email = $_POST['email'];
$password = md5($_POST['password']);


$query = "SELECT * FROM `user` WHERE `email`='$email' AND `password`='$password' "; 
$result = mysqli_query($conn,$query);


if(mysqli_num_rows($result) > 0 ){

	$_SESSION['user_id'] = md5($email);
	header("location:http://ffdbros.com/V2/certificate");
}


else
{
     header("location:form.php");

}


}


?>

