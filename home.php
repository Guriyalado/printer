<!DOCTYPE html>
<html>
<head>
  <title>Electronic Gadget</title>
  <?php
  include('link.php');
  ?>

  
</head>
<body>
	<div style="background-color:black;
	height:60px; width:100%">

		<br><h5 style="color: white;">Email:guri2000kumari@gmail.com</h5>
	</div>

<!-- navbar code -->

<?php
include('nav.php');
?>
<div style="margin-bottom:30px;">
	<img src="images/printerimage.jpg" style="height:400px; width:1255px;">

</div>
<!-- addto cart code -->

          <div class="features_items"><!--features_items-->
            <h2 class="title text-center">Features Items</h2>
             <div class="container">
              <?php
              include('db.php');
              $query=mysqli_query($conn,"SELECT * FROM product");
              while($row=mysqli_fetch_array($query))
              {
                 $title=$row['title'];

                $price=$row['price'];
                $description=$row['description'];
                $image=$row['image'];
                ?>
             

          <div class="col-md-4">

            <div class="product-item">
              <a href="#"> <img src="images/<?php echo $image;?>"  width="200" height="200"></a>
              <div class="down-content">
                <a href="#"><h4>  <?php echo $title; ?></h4></a>
                <h6>Rs.<?php echo $price; ?></h6>
                <p><?php echo $description; ?></p>
                
                <i class="fa fa-star-o"></i>
                <i class="fa fa-star-o"></i>
                <i class="fa fa-star-o"></i>
                <i class="fa fa-star-o"></i>
                <i class="fa fa-star-o"></i>
                
                <form action="" method="post">
                 


                  <input type="number" min="1" class="form-control" style="width:100px" name="quantity">

                  <br>
                  


                 <input class="btn btn-primary" type="submit" value="Add Cart">
                 

               </form>
               <br>
                

                  </div>
            </div>
          </div>
          <?php 

                   }

                 ?>
        </div>
      </div>
    
         
   <div class="container-fluid">    
<!-- footer -->
<?php
include('footer.php');
?>
</div>






</body>
</html>