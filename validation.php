<?php

session_start();

$con = mysqli_connect('localhost','root');



mysqli_select_db($con,'loginD');

$name=$_POST['name'];
$password=$_POST['password'];

$q=" select * from signinn where name='$name' && password ='$password' ";

$result=mysqli_query($con,$q);

$num=mysqli_num_rows($result);	


if ($num ==1){
	$_SESSION['userc']=$name;
	header('location:home.php');
	 
}
else{
	header('location:loginpage.php');
	
}
?>
