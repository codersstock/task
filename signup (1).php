<?php

include_once "db.php";

if(isset($_POST['send'])){



$password = mysqli_real_escape_string($conn,md5($_POST['password']));
$password2 = mysqli_real_escape_string($conn,md5($_POST['password2']));
$email = mysqli_real_escape_string($conn,$_POST['email']);

if($password == $password2){
$query = "INSERT INTO user(email,password) 
            VALUES('$email','$password')";
  
if (mysqli_query($conn, $query)) {
		header("location:form.php");

} else {
    echo "Error occured plz check later: " . $sql . "<br>" . mysqli_error($conn);
}


}

else {
    header("location:form.php");
}










}

?>