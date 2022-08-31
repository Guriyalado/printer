<?php
include('db.php');

 if(isset($_POST['btn']))

  {

	$name=$_POST['Stud_name'];
	$email=$_POST['email'];
	$subject=$_POST['subject'];
	$message=$_POST['Message'];

	$sql= "INSERT INTO contact(name,email,subject,message) values('$name','$email','$subject','$message')";
	$result=mysqli_query($conn,$sql);

	 if($result){
	 	echo"Thanku for Your message";
	 	header("Refresh:5;url=contact.php");
	 }
	 else{
	 	echo "something went wrong";
	 }


}



?>