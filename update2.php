<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <title>IBE Global Sdn Bhd</title>
  <meta content="width=device-width, initial-scale=1.0" name="viewport">
  <meta content="" name="keywords">
  <meta content="" name="description">

  <!-- Favicons -->
  <link href="img/favicon.png" rel="icon">
  <link href="img/apple-touch-icon.png" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,700,700i|Raleway:300,400,500,700,800" rel="stylesheet">

  <!-- Bootstrap CSS File -->
  <link href="lib/bootstrap/css/bootstrap.min.css" rel="stylesheet">

  <!-- Libraries CSS Files -->
  <link href="lib/font-awesome/css/font-awesome.min.css" rel="stylesheet">
  <link href="lib/animate/animate.min.css" rel="stylesheet">
  <link href="lib/venobox/venobox.css" rel="stylesheet">
  <link href="lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">

  <!-- Main Stylesheet File -->
  <link href="css/style.css" rel="stylesheet">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<style>
.card {
  box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2);
  max-width: 1200px;
  margin: auto;
  text-align: center;
  font-family: arial;
}

.title {
  color: grey;
  font-size: 18px;
}

button {
  border: none;
  outline: 0;
  display: inline-block;
  padding: 8px;
  color: white;
  background-color: #00501A;
  text-align: center;
  cursor: pointer;
  width: 100%;
  font-size: 18px;
}

a {
  text-decoration: none;
  font-size: 22px;
  color: black;
}

button:hover, a:hover {
  opacity: 0.7;
}
</style>

<style>
body {
  font-family: Arial;
}

* {
  box-sizing: border-box;
}

form.example input[type=text] {
	padding: 4.5px;
	font-size: 16px;
	border: 1px solid grey;
	float: left;
	width: 100%;
	background: #f1f1f1;
	border-radius: 9px;
}

form.example button {
  border-radius: 9px;
  width: 20%;
  padding: 4.5px;
  background: #8da029;
  color: white;
  font-size: 17px;
  border: 1px solid black;
  border-left: none;
  cursor: pointer;
}

form.example button:hover {
  background: #8da029;
}

form.example::after {
  content: "";
  clear: both;
  display: table;
}
	
	
</style>
	
	
</head>
<style>
  table {
	border-collapse: collapse;
	width: 80%;
	color: #000;
	font-size: 17px;
	text-align: center;
	font-family: Arial;
     } 
  th {
   background-color: #000;
   color: white;
    }
  tr:nth-child(even) {background-color: #f2f2f2}
 </style>
<body>

  <!--==========================
    Header
  ============================-->
  <header id="header" class="header-fixed">
    <div class="container">

      <div id="logo" class="pull-left">
        <!-- Uncomment below if you prefer to use a text logo -->
        <!-- <h1><a href="#main">C<span>o</span>nf</a></h1>-->
        <img src="img/logo.png" alt="" title="">
      </div>

      <nav id="nav-menu-container">
        <ul class="nav-menu">
			
		 <li><a href="javascript:history.back()">⇽ Back</a></li>
  		<li><a href="mainPage.php">Staff Menu  </a></li>
		
			
        </ul>
      </nav><!-- #nav-menu-container -->
    </div>
  </header><!-- #header -->

  <main id="main" class="main-page">

    <!--==========================
      Speaker Details Section
    ============================-->
   
	  <section id="speakers-details" class="wow fadeIn">
		  

	 <?php
	  
     $cssm = $_GET['cssm'];
	 
     $dbc = mysqli_connect ("localhost","root","","ibewebsite");
     if (mysqli_connect_errno())
      {
      echo "Failed to connect to MySQL: ".mysqli_connect_error();
      }

  	 // $sql = "select * from `group` where `grpno` = 3";
     $sql = "select * from customer where cssm = $cssm ";
     $result = mysqli_query($dbc,$sql);

// to display the details error
  	  
      if (false === $result) 
      {
         echo mysql_error();
	    }
	  
      $row = mysqli_fetch_assoc($result)
?>
          
<div class="card">
  <img src="img/5-01.png" style="width:100%">
  
<br>
<form  action="UpdProcess.php?cssm=<?php echo $cssm;?>" method="post" >
<fieldset > 	
    <div class="form-row">
        
        <div class="form-group col-md-1"></div>
        
          <div class="form-group col-md-5" style=text-align:left>
              <strong>SSM Registered :</strong> <input disabled type="text" style=text-align:left class="form-control" name="cssm" value='<?=$row['cssm'];?>'></div>
        
         <div class="form-group col-md-5" style=text-align:left>
              <strong>Company Name :</strong>  <input  type="text" style=text-align:left name="cname" class="form-control"  value='<?=$row['cname'];?>'></div>
        
        <div class="form-group col-md-1"></div>
    </div>
              


    
    <div class="form-row">
        
        <div class="form-group col-md-1"></div>
            
          <div class="form-group col-md-5" style=text-align:left>
              <strong>Person In Charge Contact : </strong> <input  type="text" name="ccontact" style=text-align:left class="form-control"  value='<?=$row['ccontact'];?>'></div>
        
         <div class="form-group col-md-5" style=text-align:left>
              <strong>Official Email :</strong>  <input  type="text" name="cemail" style=text-align:left class="form-control"  value='<?=$row['cemail'];?>'></div>
        
        <div class="form-group col-md-1"></div>
    </div>  
          
     <div class="form-row">
        
        <div class="form-group col-md-1"></div>
            
          <div class="form-group col-md-10" style=text-align:left>
              <strong>Company Address : </strong> <input  type="text" name="cadd"  style=text-align:left class="form-control"  value='<?=$row['cadd'];?>'></div>
        
        <div class="form-group col-md-1"></div>
    </div>  
    
     <div class="form-row">
        
        <div class="form-group col-md-1"></div>
            
          <div class="form-group col-md-6" style=text-align:left>
              <strong>Event Name : </strong> <input  type="text" name="cevent" style=text-align:left class="form-control"  value='<?=$row['cevent'];?>'></div>
        
         <div class="form-group col-md-3" style=text-align:left>
              <strong>Submission Date :</strong>  <input  type="text" name="cdate" style=text-align:left class="form-control"  value='<?=$row['cdate'];?>'></div>
        
         <div class="form-group col-md-1" style=text-align:left>
              <strong>Category :</strong>  <input  type="text" name="ccategory" style=text-align:left class="form-control"  value='<?=$row['ccategory'];?>'>a</div>
         
        <div class="form-group col-md-1"></div>
    </div>  
    
    <div class="form-row">
        
        <div class="form-group col-md-1"></div>
            
          <div class="form-group col-md-10" style=text-align:left>
              <strong>Design Description : </strong> 
              
              <textarea  id="txt_descripcion"  name="cdescription" style=text-align:left class="form-control"  ><?php echo $row['cdescription']; ?></textarea>
             </div>
        
        <div class="form-group col-md-1"></div>
    </div>   
  </fieldset>  
  <br>  
	
 <button type="submit" class="button" value="UPDATE" onclick="return confirm('Are you sure?')"><strong>Update</strong></button>  
    
	</form>        
</div>
   
    </section>

  </main>
	




  <!--==========================
    Footer
  ============================-->
   <footer id="footer">
    <div class="footer-top">
      <div class="container">
        <div class="row">

      
			  <div class="col-lg-3 col-md-6 footer-info">
            <img src="img/loggo.png" style="width:160px;height:90px;" align="middle" alt="Ibe">
            <p> Take Your Vision <p>to A Whole New Level </p>
          </div>



          <div class="col-lg-3 col-md-6 footer-contact">
            <h4>Contact Us</h4>
            <p>
              IBE Global Sdn. Bhd. <br>
              14-G, Jalan 15/1F
			  Seksyen 15,<br>
			  43650 Bandar Baru Bangi<br>
              Selangor Darul Ehsan <br>
              <strong>Phone:</strong> +603 8927 3895<br>
              <strong>Email:</strong> info@ibeglobal.biz<br>
            </p>

            <div class="social-links">
              <a href="#" class="twitter"><i class="fa fa-twitter"></i></a>
              <a href="#" class="facebook"><i class="fa fa-facebook"></i></a>
              <a href="#" class="instagram"><i class="fa fa-instagram"></i></a>
              <a href="#" class="google-plus"><i class="fa fa-google-plus"></i></a>
              <a href="#" class="linkedin"><i class="fa fa-linkedin"></i></a>
            </div>
			  

          </div>

        </div>
      </div>
    </div>

    <div class="container">
      <div class="copyright">
       <strong> &copy; Copyright 2019</strong>. All Rights Reserved by IBE Global Sdn. Bhd.
      </div>
  </footer><!-- #footer -->

  <a href="#" class="back-to-top"><i class="fa fa-angle-up"></i></a>

  <!-- JavaScript Libraries -->
  <script src="lib/jquery/jquery.min.js"></script>
  <script src="lib/jquery/jquery-migrate.min.js"></script>
  <script src="lib/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="lib/easing/easing.min.js"></script>
  <script src="lib/superfish/hoverIntent.js"></script>
  <script src="lib/superfish/superfish.min.js"></script>
  <script src="lib/wow/wow.min.js"></script>
  <script src="lib/venobox/venobox.min.js"></script>
  <script src="lib/owlcarousel/owl.carousel.min.js"></script>

  <!-- Contact Form JavaScript File -->
  <script src="contactform/contactform.js"></script>

  <!-- Template Main Javascript File -->
  <script src="js/main.js"></script>
</body>

</html>
