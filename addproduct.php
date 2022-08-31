
<?php

include('db.php');
if(isset($_POST['save']))
{
	//get all the submitted data from the form
$title=$_POST['title'];
$price=$_POST['price'];
$quantity=$_POST['quantity'];
$description=$_POST['description'];
// path to store the upload image
$target="image/".basename($_FILES['file']['name']);
$image=$_FILES['file']['name'];
move_uploaded_file($target,"images/$image");


$sql="INSERT INTO product(title,price,quantity,description,image) values('$title','$price','$quantity','$description','$image')";

$result=mysqli_query($conn,$sql);
if($result){
	echo"product addedd sucessfully";

}
else{
	echo"Something went wrong";
}




}
?>
<!DOCTYPE html>
<html>
<head>
	<title>Add product</title>
</head>

	<style>
body {font-family: Arial, Helvetica, sans-serif;}
* {box-sizing: border-box;}
input[type=text], select, textarea {
  width: 100%;
  padding: 20px;
  border: 2px solid #ccc;
  border-radius: 4px;
  box-sizing: border-box;
  margin-top: 6px;
  margin-bottom: 16px;
  resize:vertical;
  color: black;
  
}

input[type=submit] {
  background-color: red;
  color:black;
  padding: 12px 20px;
  border: none;
  border-radius: 4px;
  cursor: pointer;
}

input[type=submit]:hover {
  background-color: #45a049;
}

.container {
  border-radius: 5px;
  background-color:cyan;
  padding: 20px;
  width:auto;
  font-size: 4;
}
</style>
<body>



<div class="container">
        
            <form action="addproduct.php" method="POST" enctype="multipart/form-data">
              
             <h1> Add Product </h1>
            <br>
            <level>Title</level>
            <br>
            <input type="text" name="title" placeholder="Enter the title name" required><br>
             <level>Price</level><br>
            <input type="text" name="price" placeholder="Enter the price" required><br>
             <level>Quantity</level><br>
            <input type="text" name="quantity" placeholder="Enter the quantity" required><br>
             <level>Description</level><br>
            <input type="text" name="description" placeholder="Enter the description" required>
            <br> <level>Image</level><br>
            <input type="file" name="file" required><br><br>
            <button type="submit" class="btn btn-danger" name="save">
              <h1>Submit</h1></button>
            </form>
        </div>
    </body>
</html>