<?php

include('db.php');
if(isset($_post['save']))
{
	echo "sucess";
$title=$_post['title'];
$price=$_post['price'];
$quantity=$_post['quantity'];
$description=$_post['description'];
$image=$_post['image'];


$sql="insert into product(title,price,quantity,description,image) values('$title','$name','$quantity','$description','$image')";
$result=mysqli_query($sql,$conn);
if($result){
	echo"sucess";

}
else{
	echo"wrong";
}




}
?>