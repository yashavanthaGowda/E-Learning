<!--#5FCF80 is color-->
<!DOCTYPE html>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">

<!-- jQuery library -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>

<!-- Latest compiled JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

<style>
    .mouse
    {
        transform: rotate(90deg);
        background-color: black;
    }
    .price-table:hover
    {
       box-shadow: 5px 5px 5px lightgrey, -5px 0px 5px lightgrey;
    }
   .modal-header
    {
        background-color:#5FCF80;
        
    }
    .mybutton {
  border-radius: 0px 40px 40px 0px;
  background-color: #5FCF80;
  border: none;
  color: #FFFFFF;
  text-align: center;
  font-size: 28px;
  padding: 10px;
  width: 200px;
  transition: all 0.5s;
  cursor: pointer;
  margin: 5px;
}

.mybutton span {
  cursor: pointer;
  display: inline-block;
  position: relative;
  transition: 0.5s;
}

.mybutton span:after {
  content: '\00bb';
  position: absolute;
  opacity: 0;
  top: 0;
  right: -20px;
  transition: 0.5s;
}

.mybutton:hover span {
  padding-right: 25px;
}

.mybutton:hover span:after {
  opacity: 1;
  right: 0;
}
    .parallax {
    /* The image used */
    

    /* Set a specific height */
    min-height: 500px; 

    /* Create the parallax scrolling effect */
    background-attachment: fixed;
    background-position: center;
    background-repeat: no-repeat;
    background-size: cover;
}
</style>
 <style>

        /*  Page styles  */

        *{
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        body{
            font: normal 14px/1.4 Arial, Helvetica, sans-serif;
        }

        .skrollr-desktop body {
            height:100% !important;
        }

        #skrollr-body {
            height:100%;
            overflow:visible;
            position:relative;
        }


        /*  Styles for this example */

       /* .dummy-content{
            padding: 150px 0;
            background: radial-gradient(white, #EEF6F9);
            color: #3FA564;
            font-size: 24px;
            height: 100vh;
            text-align: center;
        } */

        .dummy-content h2{
            font-weight: normal;
        }


        */.gallery{
            background-color: #fff;
            color: #221f51;
            font: normal 24px sans-serif;
            min-height: 300vh;
            text-align: center;
            overflow: hidden;
        } */

        .scroll-pause{
            position: fixed;
            top: 0;
            left: 0;
            width: 100vw;
            height: 100vh;
            padding-top: 20vh;
        }


        .scroll-pause .row{
            width: 200vw;
            height: 30vh;
            overflow: hidden;
        }

        .scroll-pause .row div{
            width: 11.5%;
            height: 90%;
            float: left;
            background-repeat: no-repeat;
            background-position: center;
            background-size: cover;
            margin: 0.5%;
            border-radius: 10px;
        }

        .scroll-pause .row div:first-child{
            margin-left: 0.4%;
        }

        .scroll-pause .row div:last-child{
            margin-right: 0.4%;
        }



    </style>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>learntocode.com</title>
  <meta name="description" content="Free Bootstrap Theme by BootstrapMade.com">
  <meta name="keywords" content="free website templates, free bootstrap themes, free template, free bootstrap, free website template">

  <link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/css?family=Open+Sans|Candal|Alegreya+Sans">
  <link rel="stylesheet" type="text/css" href="css/font-awesome.min.css">
  <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
  <link rel="stylesheet" type="text/css" href="css/imagehover.min.css">
  <link rel="stylesheet" type="text/css" href="css/style.css">
  <!-- =======================================================
    Theme Name: Mentor
    Theme URL: https://bootstrapmade.com/mentor-free-education-bootstrap-theme/
    Author: BootstrapMade.com
    Author URL: https://bootstrapmade.com
  ======================================================= -->
</head>

<body>
  <!--Navigation bar-->
  <nav class="navbar navbar-default navbar-fixed-top">
    <div class="container">
      <div class="navbar-header">
        <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
        </button>
        <a class="navbar-brand" href="home.php"><span> Learn to Code</span></a>
      </div>
      <div class="collapse navbar-collapse" id="myNavbar">
        <ul class="nav navbar-nav navbar-right">
          <li><a href="#contactus">Contact Us</a></li>
            <li><a href="#courses">Courses</a></li>
          <li><a href="#feature">Features</a></li>
          <li><a href="aboutus.php">Low-fidelity</a></li>
		  <li><a href="aboutus.php">High-fidelity</a></li>
		  <li><a href="aboutus.php">Concept video</a></li>
          <li><a href="#" data-target="#login" data-toggle="modal">Log in</a></li>
          <li class="btn-trial"><a href="#" data-target="#signin" data-toggle="modal">Sign in</a></li>
        </ul>
      </div>
    </div>
  </nav>
  <!--/ Navigation bar-->
  <!--Modal box-->
    
    
    <style>
        .heading
        {
            text-align: center;
            
        }
        .content
        {
            text-align: center;
            font-size: 15px;
            color: gray;
            margin-right: 400px;
            margin-left:400px;
            min-width: 200px;
            
        }
        @media only screen and (max-width: 800px) {
    .content {
                margin:0px;
    }
}
    </style>
    
    
    <div class="parallax"></div>

    <center><div class="heading"><h1></h1></div></center><hr>
    <div class="content">
     <hr>
      <img src="1.jpeg" class="img-responsive">
	 
	     
		  
    <center><div class="heading"><h1></h1></div></center><hr>

    
    
<div id="skrollr-body">



  
  <ul class="social-links">
        <li><a href="#link"><i class="fa fa-twitter fa-fw"></i></a></li>
        <li><a href="#link"><i class="fa fa-facebook fa-fw"></i></a></li>
        <li><a href="#link"><i class="fa fa-google-plus fa-fw"></i></a></li>
        <li><a href="#link"><i class="fa fa-dribbble fa-fw"></i></a></li>
        <li><a href="#link"><i class="fa fa-linkedin fa-fw"></i></a></li>
      </ul>
      ©2016 Learn To Code  All rights reserved
      <div class="credits">
        <!--
          All the links in the footer should remain intact.
          You can delete the links only if you purchased the pro version.
          Licensing information: https://bootstrapmade.com/license/
          Purchase the pro version with working PHP/AJAX contact form: https://bootstrapmade.com/buy/?theme=Mentor
        -->
        Designed by <a href="https://amoldalwai.com/">Amol Dalwai</a>
      </div>
    </div>
  </footer>
  <!--/ Footer-->

  <script src="js/jquery.min.js"></script>
  <script src="js/jquery.easing.min.js"></script>
  <script src="js/bootstrap.min.js"></script>
  <script src="js/custom.js"></script>
  <script src="contactform/contactform.js"></script>

</body>

    
<?php

     
     if($_SERVER['REQUEST_METHOD']=="GET"){
       $localhost = "localhost";
       $usernamew = "root";
       $passwordw = "";
          $db = "expdb";
      $conn = mysqli_connect($localhost,$usernamew,$passwordw,$db);
      if(!$conn){
       echo "Connection error";
       }
         else{
     
     $sql = "UPDATE counter SET visit=visit+1 WHERE id = 2";
    $result = mysqli_query($conn,$sql);
 }

}

?>
</html>
