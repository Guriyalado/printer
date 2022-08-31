


<!DOCTYPE html>
<html>
<head>
	<title>Electronic Gadget</title>
	<meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>

<script src="https://unpkg.com/@lottiefiles/lottie-player@latest/dist/lottie-player.js"></script>
  <style>
  	 .navbar {
      margin-bottom: -40px;
      border-radius: 0;
      margin-top: 0px;
      height:100px;
      color: white;
            background-color:white;
            font-weight: bold;
            font-size: 15px;
            text-align:center;
             }
       footer {
      background-color:white;
      padding: 20px;
           }
           .id{
        background-color:white;
        width:100%;
        height: auto;

    }
    .id2{
        width:auto;
        height:auto;
    }
    form{
            
            padding: 60px 70px;
       }
        input[type="text"],input[type="password"],input[type="submit"]
        {
            padding: 15px;
            border-radius: 20px;
            width: 100%;
            margin-top: 5px;
        }
        input[type="submit"]{
            margin-left: 20px;
            color: white;
            background:blue;
            font-weight: bold;
            font-size: 20px;
        }
  </style>

</head>
<body>
  <div>
	<div style="background-color:black;
	height:60px; width:100%">

		<br><h5 style="color: white;">Email:guri2000kumari@gmail.com</h5>
	</div>

<!-- navbar code -->


 <nav class="navbar navbar-inverse" style="background-color:white;">
  <div class="container-fluid">
    <div class="navbar-header">
      <img class="navbar-brand" src="images/LOGO.png" style="height:100px;">
    </div>
    
    <form class="navbar-form navbar-left" action="/action_page.php">
      <div class="input-group"style="margin-top:20px;">
        <input type="text" class="form-control" placeholder="Search" name="search">
        <div class="input-group-btn">
          <button class="btn btn-default" type="submit">
            <i class="glyphicon glyphicon-search"></i>
          </button>
        </div>
      </div>
    </form>
    <ul class="nav navbar-nav">
      <li style="margin-top:15px;"><a href="home.php">Home</a></li>
      <li style="margin-top:15px;"><a href="about.php">About us</a></li>
      <li style="margin-top:15px;"><a href="#">Printers</a></li>
      <li style="margin-top:15px;" ><a href="#">Computers</a></li>
      
      <li style="margin-top:15px;"><a href="#">Accessories</a></li>
      <li style="margin-top:15px;"><a href="contact.php">Contact us</a></li>
    </ul>
  </div>
</nav>
<br><br><br>

  
        <div class="row">
                          
<!-- <lottie-player src="https://assets4.lottiefiles.com/packages/lf20_7wwm6az7.json"  background="transparent"  speed="1"  style="width: 500px; height: 700px;"    ></lottie-player> -->

<br><br><br><br>
<div class="col-sm-6" style="margin-top:65px; margin-left:50px; float:left;">
 
 <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3561.438915529818!2d80.910307614096!3d26.794149671636564!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x399bfc0edf6c1213%3A0x268c1dbc3be12289!2sAshiyana%20Chouraha%2C%20LDA%20Colony%2C%20Lucknow%2C%20Uttar%20Pradesh%20226012!5e0!3m2!1sen!2sin!4v1650001321397!5m2!1sen!2sin" width="500" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
  </div>
            
            <div class="col-sm-6" style="float:right; margin-top:-600px;">
                 
               <form action="contactus.php" method="POST">
               <h1><b>Contact Us</b></h1>
               <h3>We have love to hear from you,please drop us a line if you have any query.</h3>
               <hr>
               <div class="form-group">
                <label for="email"><h3><b> Your Name:</b></h3></label>
                <input type="text" placeholder="Name" class="form-control"  name="Stud_name" id="email">
              </div>
              <div class="form-group">
              <label for="email"><h3><b>Email Address:</b></h3></label>
                <input type="text" placeholder="Email Address" class="form-control" name="email" id="email">
              </div>
              <div class="form-group">
              <label for="email"><h3><b>Your Subject:</b></h3></label>
                <input type="text" placeholder="Your Subject" class="form-control" name="subject" id="email">
              </div>
              <div class="form-group">
                <label for="email"><h3><b>Message:</b></h3></label>
                <textarea type="text" placeholder="Write something..." style="height:100px;"class="form-control" name="Message"  id="email">
                </textarea>
              </div>
              <button type="submit" class="btn btn-danger" name="btn">
              <h1>Submit</h1></button>

            </form>
        </div>
       </div>
      

  
  
</div>
<br>
<br>


<?php
include('footer.php');
?>

</div>




</body>
</html>